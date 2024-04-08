            
     <?php require "../includes/header.php"; ?>  
     <?php require "../config/config.php";?>  
     
     <?php
     
     $courses = $conn->query("SELECT * FROM courses ");

     $courses->execute();

     $allCourses = $courses->fetchAll(PDO::FETCH_OBJ);


     ?>
            
    <body>
            <div class="card-body">
              <h5 class="card-title mb-4 d-inline">list of Courses</h5>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Course name</th>
                    <th scope="col">learning Page</th>
                  </tr>
                </thead>
                <?php foreach ($allCourses as $courses) : ?>
                <tbody>
                  <tr>
                    <th scope="row"><?php echo $courses->id; ?></th>
                    <td><?php echo $courses->title; ?></td>
                    <td><a href="<?php echo APPURL; ?>/courses/course.php?id=<?php echo $courses->id; ?>" class="btn btn-warning text-white text-center ">Click</a></td>
                  </tr>
                </tbody>
                <?php endforeach;?>
              </table>
            </div>
    </body>

    <?php require "../includes/footer.php"; ?>