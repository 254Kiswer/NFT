<?php require "../panel-includes/header.php"; ?>
<?php require "../../config/config.php";?>
<?php 

  if(!isset($_SESSION['adminname'])){

    echo "<script> window.location.href'".ADMINURL."/admins/login-admins.php';</script>";

  }

  if(isset($_POST['submit'])) {
    if(empty($_POST['title']) OR empty($_POST['description'])){

      echo "<script>alert('one or more inputs are empty');</script>";

    } else {
      $title = $_POST['title'];
      $description = $_POST['description'];

      $insert = $conn->prepare("INSERT INTO categories (title, description)
      VALUES(:title, :description)");
      
      $insert->execute([
        ":title" => $title,
        ":description" => $description
      ]);
    }
  }
?>


      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-5 d-inline">Create Categories</h5>
              <form method="POST" action="create-category" enctype="multipart/form-data">
                <!-- Email input -->
                <div class="form-outline mb-4 mt-4">
                  <input type="text" name="courseName" id="form2Example1" class="form-control"
                    placeholder="Course_name" />
                </div>
                <div class="form-outline mb-4 mt-4">
                  <input type="text" name="instructorName" id="form2Example1" class="form-control"
                    placeholder="Instructor_Name" />
                </div>
                <div class="form-outline mb-4 mt-4">
                  <input type="text" name="icon" id="form2Example1" class="form-control" placeholder="icon" />
                </div>
                <div class="form-group">
                  <label for="exampleFormControlTextarea1">Description</label>
                  <textarea name="description" placeholder="description" class="form-control"
                    id="exampleFormControlTextarea1" rows="3"></textarea>
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