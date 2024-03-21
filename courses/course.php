<?php require "../includes/header.php";?>
<?php require "../config/config.php";?>

<?php

      
      $courses = $conn->query("SELECT * FROM courses ");

      $courses->execute();

      $allCourses = $courses->fetchAll(PDO::FETCH_OBJ);


      if(isset($_GET['courses_id'])){
        $id = $_GET['courses_id'];

        $select = $conn->query("SELECT * From courses WHERE id = '$category_id' AND status = 1");
        $select->execute();

        $courses = $select->fetch(PDO::FETCH_OBJ);

      } 

?>
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
          <button class="btn btn-success">Start Quiz</button>
        </div>
      </div>
    </div>
  </div>
</body>
<?php require "../includes/footer.php"; ?>