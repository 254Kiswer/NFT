<?php require "../panel-includes/header.php"; ?>
<?php require "../../config/config.php"; ?>

<?php

if(!isset($_SESSION['adminname'])){

    echo "<script> window.location.href='".ADMINURL."/admins/login-admins.php'; </script>";
    }


if(isset($_GET['id'])){

    $id = $_GET['id'];
    //deleting the image associating with the deleted product
    $select = $conn->query("SELECT * FROM courses WHERE id='$id'");
    $select->execute();
    
    $data =$select->fetch(PDO::FETCH_OBJ);

    unlink("course_file/".$data->file_type);

    $delete = $conn->query("DELETE FROM courses WHERE id='$id'");
    $delete->execute();

    echo "<script> window.location.href='".ADMINURL."/courses/show-course.php'; </script>";
}
?>