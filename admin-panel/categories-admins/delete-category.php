<?php require "../panel-includes/header.php"; ?>
<?php require "../../config/config.php";?>
<?php
    if(!isset($_SESSION['adminname'])){

        echo "<script>window.location.href='".ADMINURL."/admins/login-admins.php';</script>";
    }
    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $delete = $conn->query("DELETE FROM course_category WHERE id='$id'");
        $delete->execute();

        echo "<script>window.location.href='".ADMINURL."/registered-employees/show-registered.php';</script>";
    }

    


?>