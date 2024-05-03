<?php require "../includes/header.php";?>
<?php require "../config/config.php";?>
<?php require "../assets/sql/sql.php"; ?>

<body>
<div class="container">
    
    <div class="row">
      <div class="col-md-8">
      
        <div class="learning-materials">
          <h2></h2>
          <?php foreach ($allCourses as $courses):?>
          <div class="card mb-3">
            <div class="card-body">
              <h3 class="card-title"><?php echo $courses->title; ?></h3>
              <p class="card-text">
              <embed src="<?php echo APPURL; ?>/assets/course-content/<?php echo $courses->file_type; ?>" type="application/pdf" width="100%" height="600px" />
              </p>
              <a href="#" class="btn btn-primary">Read More</a>
            </div>
          </div>
          <?php endforeach;?>
          <!-- Add more learning materials here -->
        </div>
      </div>
      
    
      <div class="col-md-4">
        <div class="quiz">
          <h2>Short Quiz</h2>
          <p>Test your knowledge with a quick quiz!</p>
          <a href="<?php echo APPURL; ?>/courses/quiz.php?id=<?php echo $courses->id; ?>" class="btn btn-success text-white text-center ">Start Quiz</a>
        </div>
      </div>
    </div>
  </div>
</body>
<?php require "../includes/footer.php"; ?>