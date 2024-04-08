<?php require "../panel-includes/header.php"; ?>
<?php require "../../config/config.php";?>
<?php
  if(!isset($_SESSION['adminname'])){

    echo "<script>window.location.href='".ADMINURL."/admins/login-admins.php';</script>";

  }
  if(isset($_GET['id'])) {
    $id = $_GET['id'];

    $select = $conn->query("SELECT * FROM course_category WHERE id='$id'");
    $select->execute();

    $category = $select->fetch(PDO::FETCH_OBJ);

    if(isset($_POST['submit'])) {
      if(empty($_POST['title']) OR empty($_POST['description'])){

        echo "<script>alert('one or more inputs are empty');</script>";

      }else{

        $title = $_POST['title'];
        $description = $_POST['description'];

        $insert = $conn->prepare("UPDATE course_category SET title = :title, description= :description WHERE id = '$id'");

        $insert->execute([

          ":title" => $title,
          ":description" => $description,
        ]);
        echo "<script>window.location.href='".ADMINURL."/course-categories/show-categories.php';</script>";
      }
    }
  }

?>



       <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-5 d-inline">Update Categories</h5>
          <form method="POST" action="update-category.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
                <!-- Email input -->
                <div class="form-outline mb-4 mt-4">
                  <input type="text" name="name" value="<?php echo $category->title;?>" id="form2Example1" class="form-control" placeholder="name" />
                </div>
                <div class="form-group">
                  <label for="exampleFormControlTextareal">Description</label>
                  <textarea name="description" placeholder="description" class="form-control" id="xampleFormControlTextareal" rows="3">
                  <?php echo $category->description; ?>
                  </textarea>
                  </div>
      
                <!-- Submit button -->
                <button type="submit" name="submit" class="btn btn-primary  mb-4 text-center">update</button>

          
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