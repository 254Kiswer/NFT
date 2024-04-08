<?php require "../panel-includes/header.php"; ?>
<?php require "../../config/config.php";?>
<?php 

  if(!isset($_SESSION['adminname'])){

    echo "<script> window.location.href='".ADMINURL."/admins/login-admins.php'; </script>";
    }

  $users = $conn->query("SELECT * FROM users" );
  $users->execute();

  $allUsers = $users->fetchAll(PDO::FETCH_OBJ);

?>
    
      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-4 d-inline">registered</h5>
              <a href="create-category.html" class="btn btn-primary mb-4 text-center float-right">Create Categories</a>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Employee name</th>
                    <th scope="col">Employee id</th>
                    <th scope="col">Department</th>
                    <th scope="col">delete</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($allUsers as $user) :?>
                  <tr>
                    <th scope="row"><?php echo $user->id;?></th>
                    <td><?php echo $user->fullname;?></td>
                    <td><?php echo $user->employee_no;?></td>
                    <td><?php echo $user->department;?></td>
                    <td><a href="<?php echo ADMINURL; ?>/registered-employees/delete-users.php?id=<?php echo $user->id;?>" class="btn btn-danger  text-center ">Delete </a></td>
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