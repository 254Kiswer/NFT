<?php require "./panel-includes/header.php"; ?>
<?php require "../config/config.php";?>
<?php require "../../assets/logics/logicAdmin.php"; ?>


      <div class="row">
        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Courses</h5>
              <!-- <h6 class="card-subtitle mb-2 text-muted">Bootstrap 4.0.0 Snippet by pradeep330</h6> -->
              <p class="card-text">number of courses: <?php echo $num_courses->courses_num;?></p>

            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Employee registered</h5>
              <!-- <h6 class="card-subtitle mb-2 text-muted">Bootstrap 4.0.0 Snippet by pradeep330</h6> -->
              <p class="card-text">registered employees: <?php echo $num_users->users_num;?></p>

            </div>
          </div>
        </div>

        <div class="col-md-3">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Admins</h5>

              <p class="card-text">number of admins: <?php echo $num_admins->admins_num;?></p>

            </div>
          </div>
        </div>
      </div>
      </div>
  </div>
  <script type="text/javascript">

  </script>
</body>

</html>

   