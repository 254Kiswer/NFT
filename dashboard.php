<?php require "./includes/header.php"; ?>
<?php require "./config/config.php"; ?>
<?php

//Course offered

$courses = $conn->query("SELECT * FROM courses");

$courses->execute();

$allCourses = $courses->fetchAll(PDO::FETCH_OBJ);

?>
<body>
<?php foreach($allCourses as $courses) : ?>
<div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="card bg-primary  text-white mb-4">
          
          <div class="card-body" >
            <h2 class="card-title"><?php echo $courses->title; ?></h2>
            <h5 class="card-subtitle mb-2"><?php echo $courses->instructor; ?></h5>
            <div class="card-dots">
              <span class="material-symbols-outlined">more_horiz</span>
            </div>
            <div class="project-progress">
              <div class="process">
                <h2 class="mb-0"><?php echo $courses->status; ?></h2>
              </div>
            </div>
            <div class="task">
              <h2 class="mb-0">Chapters Done: <span class="chapters">35</span> / <span class="total-chapters"></<?php echo $courses->units; ?>span></h2>
              <div class="line"></div>
            </div>
            <div class="due">
              <h2 class="mb-0">Due Date: <?php echo $courses->due_date; ?></h2>
            </div>
            <p class="card-text"><?php echo $courses->description; ?></p>
            <a href="<?php echo APPURL; ?>/courses/course.php?id=<?php echo $courses->id; ?>" class="btn btn-light mr-2">Go To Course Page</a>
            <a href="#" class="btn btn-light">Another link</a>
          </div>
          
        </div>
      </div>
    </div>
  </div>
  <br/>
  <?php endforeach;?>
</body>

<?php require "./includes/footer.php";?>