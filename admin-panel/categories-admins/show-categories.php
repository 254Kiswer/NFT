<?php require "../panel-includes/header.php"; ?>
<?php require "../../config/config.php";?>
<?php 
  if(!isset($_SESSION['adminname'])) {

     echo "<script> window.location.href='".ADMINURL."/admins/login-admins.php';</script>";
  }

  $course_category = $conn->query("SELECT * FROM course_category");
  $course_category->execute();

  $allCourse_category = $course_category->fetchAll(PDO::FETCH_OBJ);



?>

      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-4 d-inline">Categories</h5>
              <a href="<?php echo ADMINURL; ?>/categories-admins/create-category.php" class="btn btn-primary mb-4 text-center float-right">Create Categories</a>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">category name</th>
                    <th scope="col">update</th>
                    <th scope="col">delete</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($allCourse_category as $category) : ?>
                  <tr>
                    <th scope="row"><?php echo $category->id;?></th>
                    <td><?php echo $category->title;?></td>
                    <td><a href="<?php echo ADMINURL; ?>/update-category.php?=<?php echo $category->id;?>" class="btn btn-warning text-white text-center ">Update </a></td>
                    <td><a href="<?php echo ADMINURL; ?>/delete-category.php?=<?php echo $category->id;?>" class="btn btn-danger  text-center ">Delete </a></td>
                  </tr>
                  <?php endforeach;?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>



    </div>
    <script type="text/javascript">

    </script>
</body>

</html>