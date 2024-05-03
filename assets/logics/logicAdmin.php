
<?php

//admin logics
     if(!isset($_SESSION['adminname'])){
        //echo "<script>window.location.href='".ADMINURL."/admins/login-admins.php';</script>";
      }
          $admins = $conn->query("SELECT * FROM admins");
          $admins->execute();
      
          $allAdmins = $admins->fetchAll(PDO::FETCH_OBJ);




    //create- admin logic

    if(!isset($_SESSION['adminname'])){

       // echo "<script> window.location.href='".ADMINURL."/admins/login-admins.php';</script>";
      }
      
      if(isset($_POST['submit'])){
        if(empty($_POST['email']) OR empty($_POST['password']) OR empty($_POST['adminname'])){
      
          echo "<script>alert('one or more inputs are empty');</script>";
      
        }else {
          $email = $_POST['email'];
          $password = $_POST['password'];
          $adminname = $_POST['adminname'];

          //Generate a ramdom salt
          $salt = bin2hex(random_bytes(16));

          //prepend the salt to the password
            $saltedPassword = $salt . $password;
            //Hash the salted password
            $hashedPassword = password_hash($saltedPassword, PASSWORD_DEFAULT);

          $insert = $conn->prepare("INSERT INTO admins (email, mypassword, adminname, salt) VALUES(:email, :mypassword, :adminname, :salt)");
      
          $insert->execute([
            ":email" => $email,
            ":mypassword" => $hashedPassword,
            ":adminname" => $adminname,
            ":salt" => $salt,
          ]);
          echo "<script>window.location.href='".ADMINURL."/admins/admins.php';</script>";
        }
      }


      //admin login logic
      if(isset($_SESSION['adminname'])){

        echo "<script> window.location.href='".ADMINURL."';</script>";
  
      }
  
      if(isset($_POST['submit'])){
  
        if(empty($_POST['email']) OR empty($_POST['password'])){
  
          echo "<script>alert('one or more inputs are empty');</script>";
  
        } else {
          $email = $_POST["email"];
          $password = $_POST["password"];
  
  
          //query
          $login = $conn->query("SELECT * FROM admins WHERE email = '$email'" );
          $login->execute();
  
          $fetch = $login->fetch(PDO::FETCH_ASSOC);
  
          //Validate email
          if($login -> rowCount() > 0){

            //Recreate the salted password using the retrived salt
            $saltedPassword = $fetch['salt'] . $password;
  
            //validate password
            if(password_verify($saltedPassword, $fetch['mypassword'])) {
  
              $_SESSION['email'] = $fetch['email'];
              $_SESSION['adminname'] = $fetch['adminname'];
              $_SESSION['admin_id'] = $fetch['id'];
              
              echo "<script>window.location.href='".ADMINURL."'; </script>";
            } else {
              echo "<script>alert('email or password wrong');</script>";
            }
          } else {
            echo "<script>alert('email or password wrong');</script>";
          }
        }
      }
      // create category logic
      if(!isset($_SESSION['adminname'])){

        //echo "<script> window.location.href'".ADMINURL."/admins/login-admins.php';</script>";
    
      }
    
      if(isset($_POST['submit'])) {
        if(empty($_POST['title']) OR empty($_POST['description'])){
    
          echo "<script>alert('one or more inputs are empty');</script>";
    
        } else {
          $title = $_POST['title'];
          $description = $_POST['description'];
    
          $insert = $conn->prepare("INSERT INTO categories (title, description)
          VALUES(:title, :description)");
          
          $insert->execute([
            ":title" => $title,
            ":description" => $description
          ]);
        }
      }

      //delete category logic
      if(!isset($_SESSION['adminname'])){

       // echo "<script>window.location.href='".ADMINURL."/admins/login-admins.php';</script>";
    }
    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $delete = $conn->query("DELETE FROM course_category WHERE id='$id'");
        $delete->execute();

       // echo "<script>window.location.href='".ADMINURL."/registered-employees/show-registered.php';</script>";
    }
    //show category logic
    if(!isset($_SESSION['adminname'])) {

       // echo "<script> window.location.href='".ADMINURL."/admins/login-admins.php';</script>";
     }
   
     $course_category = $conn->query("SELECT * FROM course_category");
     $course_category->execute();
   
     $allCourse_category = $course_category->fetchAll(PDO::FETCH_OBJ);

     //update category
     if(!isset($_SESSION['adminname'])){

       // echo "<script>window.location.href='".ADMINURL."/admins/login-admins.php';</script>";
    
      }
      if(isset($_GET['id'])) {
        $id = $_GET['id'];
    
        $select = $conn->query("SELECT * FROM course_category WHERE id='$id'");
        $select->execute();
    
        $category = $select->fetch(PDO::FETCH_OBJ);
    
        if(isset($_POST['submit'])) {
          if(empty($_POST['title']) OR empty($_POST['description'])){
    
            echo "<script>alert('one or more inputs are empty');</script>";
    
          }else{
    
            $title = $_POST['title'];
            $description = $_POST['description'];
    
            $insert = $conn->prepare("UPDATE course_category SET title = :title, description= :description WHERE id = '$id'");
    
            $insert->execute([
    
              ":title" => $title,
              ":description" => $description,
            ]);
            echo "<script>window.location.href='".ADMINURL."/course-categories/show-categories.php';</script>";
          }
        }
      }

      //create course
      if(!isset($_SESSION['adminname'])){

        echo "<script>window.location.href='".ADMINURL."/admins/login-admins.php';</script>";
      }
    
      //fetching categories
      $categories = $conn->query("SELECT * FROM course_category");
      $categories->execute();
    
      $allCategories = $categories->fetchAll(PDO::FETCH_OBJ);
    
      if(isset($_POST['submit'])){
    
        if(empty($_POST['category_id']) OR empty($_POST['title']) OR empty($_POST['instructor']) OR empty($_POST['description']) OR empty($_POST['units'])
         OR empty($_POST['due_date']) OR empty($_POST['status'])){
    
           echo "<script>alert('one or more inputs are empty');</script>";
    
        }else {
    
          $category_id = $_POST['category_id'];
          $title = $_POST['title'];
          $instructor = $_POST['instructor'];
          $description = $_POST['description'];
          $units = $_POST['units'];
          $due_date = $_POST['due_date'];
          $status = $_POST['status'];
          $file_type = $_FILES['file']['name'];
    
          //where the course file is stored
          $course_file_path = "../courses/course_file/".basename($_FILES['file']['name']);
    
           $insert = $conn->prepare("INSERT INTO courses (category_id, title, instructor, description, units, due_date, status, file_type)
           VALUES(:category_id, :title, :instructor, :description, :units, :due_date, :status, :file_type)");
    
            $insert->execute([
              ":category_id" => $category_id,
              ":title" => $title,
              ":instructor" => $instructor,
              ":description" => $description,
              ":units" => $units,
              ":due_date" => $due_date,
              ":status" => $status,
              ":file_type" => $file_type
            ]);
            if(move_uploaded_file($_FILES['file']['tmp_name'], $dire)){
    
              echo "<script>window.location.href='".ADMINURL."/courses/course.php';</script>";
            }
        }
      }

      //delete course
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
    
        $delete = $conn->query("DELETE * FROM courses WHERE id='$id'");
        $delete->execute();
    
        echo "<script> window.location.href='".ADMINURL."/courses/show-course.php'; </script>";
    }

    //show course
    if(!isset($_SESSION['adminname'])){

        echo "<script>window.location.href='".ADMINURL."/admins/login-admins.php';</script>";
      }
      $courses = $conn->query("SELECT * FROM courses");
      $courses->execute();
    
      $allCourses = $courses->fetchAll(PDO::FETCH_OBJ);


      //status
      if(isset($_GET['id']) AND  isset($_GET['status'])) {
    
        $id = $_GET['id'];
        $status = $_GET['status'];
    
        if($status == 0) {
            $update = $conn->prepare("UPDATE products SET status = 1 WHERE id='$id'");
            $update->execute();
        }else {
            $update = $conn->prepare("UPDATE products SET status = 0 WHERE id='$id'");
            $update->execute();
        }
    
        echo "<script> window.location.href='".ADMINURL."/courses/show-courses.php'; </script>";
    }

    //delete users
    if(!isset($_SESSION['adminname'])){

        echo "<script>window.location.href='".ADMINURL."/admins/login-admins.php';</script>";
    }
    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $delete = $conn->query("DELETE FROM users WHERE id='$id'");
        $delete->execute();

        echo "<script>window.location.href='".ADMINURL."/registered-employees/show-registered.php';</script>";
    }

    //show registered
    if(!isset($_SESSION['adminname'])){

        echo "<script> window.location.href='".ADMINURL."/admins/login-admins.php'; </script>";
        }
    
      $users = $conn->query("SELECT * FROM users" );
      $users->execute();
    
      $allUsers = $users->fetchAll(PDO::FETCH_OBJ);

      //index logic
      if(!isset($_SESSION['adminname'])){

        echo "<script> window.location.href='".ADMINURL."/admins/login-admins.php'; </script>";
        }
    
        //courses
      $courses = $conn->query("SELECT COUNT(*) as courses_num FROM courses");
      $courses->execute();
    
      $num_courses = $courses->fetch(PDO::FETCH_OBJ);
    
      //Employees registered
      $users = $conn->query("SELECT COUNT(*) as users_num FROM courses");
      $users->execute();
    
      $num_users = $users->fetch(PDO::FETCH_OBJ);
    
      //admin registered
      $admins = $conn->query("SELECT COUNT(*) as admins_num FROM courses");
      $admins->execute();
    
      $num_admins = $admins->fetch(PDO::FETCH_OBJ);