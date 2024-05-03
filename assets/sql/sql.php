<?php
//Course offered

$courses = $conn->query("SELECT * FROM courses");

$courses->execute();

$allCourses = $courses->fetchAll(PDO::FETCH_OBJ);

//Courses available

$courses = $conn->query("SELECT * FROM courses ");

$courses->execute();

$allCourses = $courses->fetchAll(PDO::FETCH_OBJ);


if(isset($_GET['courses_id'])){
  $id = $_GET['courses_id'];

  $select = $conn->query("SELECT * From courses WHERE id = '$category_id' AND status = 1");
  $select->execute();

  $courses = $select->fetch(PDO::FETCH_OBJ);

} 

$courses = $conn->query("SELECT * FROM courses ");

     $courses->execute();

     $allCourses = $courses->fetchAll(PDO::FETCH_OBJ);


