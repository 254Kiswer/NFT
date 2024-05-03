<?php require "../panel-includes/header.php"; ?>
<?php require "../../config/config.php"; ?>
<?php require "../../assets/logics/logicAdmin.php"; ?>

      <div class="row">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title mb-4 d-inline">Course</h5>
              <a href="<?php echo ADMINURL; ?>/courses/create-course.php" class="btn btn-primary mb-4 text-center float-right">Create Products</a>

              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Course</th>
                    <th scope="col">Course Instructor</th>
                    <th scope="col">Description</th>
                    <th scope="col">units</th>
                    <th scope="col">Due date</th>
                    <th scope="col">Course File</th>
                    <th scope="col">status</th>
                    <th scope="col">delete</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($allCourses as $course):?>
                  <tr>
                    <th scope="row"><?php echo $course->id;?></th>
                    <td><?php echo $course->title;?></td>
                    <td><?php echo $course->instructor;?></td>
                    <td><?php echo $course->description;?></td>
                    <td><?php echo $course->units;?></td>
                    <td><?php echo $course->due_date;?></td>
                    <td><?php echo $course->file_type;?></td>
                    <?php if($course->status):?>
                      <td><a href="<?php echo ADMINURL; ?>/courses/status.php?id=<?php echo $course->id;?>&status=<?php echo $course->status;?>" class="btn btn-danger  text-center ">unavailable</a></td>
                    <?php else:?>
                      <td><a href="<?php echo ADMINURL; ?>/courses/status.php?id=<?php echo $course->id;?>&status=<?php echo $course->status;?>" class="btn btn-success  text-center ">available</a></td>
                      <?php endif;?>
                    <td><a href="<?php echo ADMINURL; ?>/courses/delete-course.php?id=<?php echo $course->id;?>" class="btn btn-danger  text-center ">delete</a></td>
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