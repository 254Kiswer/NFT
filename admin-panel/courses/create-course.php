<?php require "../panel-includes/header.php"; ?>
<?php require "../../config/config.php";?>
<?php
  if(!isset($_SESSION['adminname'])){

    echo "<script>window.location.href='".ADMINURL."/admins/login-admins.php';</script>";
  }

  //fetching categories
  $categories = $conn->query("SELECT * FROM course_category");
  $categories->execute();

  $allCategories = $categories->fetchAll(PDO::FETCH_OBJ);

  if(isset($_POST['submit'])){

    if(empty($_POST['category_id']) OR empty($_POST['title']) OR empty($_POST['instructor']) OR empty($_POST['description']) OR empty($_POST['units'])
     OR empty($_POST['due_date']) OR empty($_POST['status'])){

       echo "<script>alert('one or more inputs are empty');</script>";

    }else {

      $category_id = $_POST['category_id'];
      $title = $_POST['title'];
      $instructor = $_POST['instructor'];
      $description = $_POST['description'];
      $units = $_POST['units'];
      $due_date = $_POST['due_date'];
      $status = $_POST['status'];
      $file_type = $_FILES['file']['name'];

      //where the course file is stored
      $course_file_path = "../courses/course_file/".basename($_FILES['file']['name']);

       $insert = $conn->prepare("INSERT INTO courses (category_id, title, instructor, description, units, due_date, status, file_type)
       VALUES(:category_id, :title, :instructor, :description, :units, :due_date, :status, :file_type)");

        $insert->execute([
          ":category_id" => $category_id,
          ":title" => $title,
          ":instructor" => $instructor,
          ":description" => $description,
          ":units" => $units,
          ":due_date" => $due_date,
          ":status" => $status,
          ":file_type" => $file_type
        ]);
        if(move_uploaded_file($_FILES['file']['tmp_name'], $dire)){

          echo "<script>window.location.href='".ADMINURL."/courses/course.php';</script>";
        }
    }
  }


?>

      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-5 d-inline">Create Courses</h5>
              <form method="POST" action=",create-course.php" enctype="multipart/form-data">
                <!-- Email input -->
                <div class="form-outline mb-4 mt-4">
                  <label> Course Title</label>

                  <input type="text" name="title" id="form2Example1" class="form-control" placeholder="title" />
                </div>
                <div class="form-group">
                  <label for="exampleFormControlSelect1">Select Category</label>
                  <select name="category_id" class="form-control" id="exampleFormControlSelect1">
                    <option>--select category--</option>
                    <?php foreach($allCategories as $category):?>
                    <option value="<?php echo $category->id;?>"><?php echo $category->title?></option>
                      <?php endforeach;?>
                  </select>
                </div>
                <div class="form-outline mb-4 mt-4">
                  <label>Course Instructor</label>

                  <input type="text" name="instructor" id="form2Example1" class="form-control" placeholder="instructor" />
                </div>

                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Description</label>
                  <textarea name="description" placeholder="description" class="form-control"
                    id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="form-outline mb-4 mt-4">
                  <label>Units</label>
                  <input type="text" name="units" id="form2Example1" class="form-control" placeholder="units" />
                </div>

                
                <div class="form-outline mb-4 mt-4">
                  <label>Enter Due Date</label>
                  <input type="date" name="due_date" id="form2Example1" class="form-control" placeholder="Due date" />
                </div>

                <div class="form-outline mb-4 mt-4">
                  <label>Course File</label>

                  <input type="file" name="file_type" id="form2Example1" class="form-control" placeholder="File Type" />
                </div>



                <!-- Submit button -->
                <button type="submit" name="submit" class="btn btn-primary  mb-4 text-center">create</button>


              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
    <script type="text/javascript">

    </script>
</body>

</html>