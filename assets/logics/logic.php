<?php 
   
    if(!isset($_SESSION['username'])) {

      echo "<script> window.location.href ='".APPURL."';</script>";
     } else{

        //login Logic
        if(isset($_POST['submit'])){
    
            if(empty($_POST['email']) OR empty($_POST['password'])){
        
                echo "<script>alert('one ore more imputs are empty');</script>";
        
            }else {
        
                $email = $_POST['email'];
                $password = $_POST['password'];
        
                //login query
                $login = $conn->query("SELECT * FROM users where email='$email'");
                $login->execute();
        
                $fetch = $login->fetch(PDO::FETCH_ASSOC);
        
                //Email validation
                if($login-> rowCount() > 0) {
                    //recreate the salted password using the retrieved salt
                    $saltedPassword = $fetch['salt'] . $password;
                    //password validation
                    if(password_verify($saltedPassword, $fetch['mypassword'])){
        
                        $_SESSION['username'] = $fetch['username'];
                        $_SESSION['email'] = $fetch['email'];
                        $_SESSION['user_id'] = $fetch['id'];
                        $_SESSION['image'] = $fetch['image'];
                        
                        echo "<script> window.location.href='".APPURL."/index.php';</script>";
                        exit;
                    }else{
        
                        echo "<script> alert('email or password wrong');</script>";
                    }
                } else{
                    echo "<script>alert('email or password wrong');</script>";
                }
            }
        }


         // quiz logics
    if(isset($_POST['submit'])) {
        if(isset($_POST['user_id']) && isset($_POST['totalScore'])) {
        
        $user_id = $_POST['user_id'];
        //   $course_id = $_POST['course_id'];
        //   $category_id = $_POST['category_id'];
        //   $employee_no = $_POST['employee_no'];
        $totalScore = $_POST['totalScore'];
        

        $insert = $conn->prepare("INSERT INTO results (user_id, totalScore)
        VALUES(:user_id, :totalScore)");
        
        $insert->execute([
            ":user_id" => $user_id,
            // ":course_id" => $course_id,
            // ":category_id" => $category_id,
            // ":employee_no" => $employee_no,
            ":totalScore" => $totalScore
        ]);
        }
        }

        if(isset($_GET['id'])){
    
            $id = $_GET['id'];
    
            $select = $conn->query("SELECT * FROM users WHERE id='$id'");
            $select->execute();
        
            $user = $select->fetch(PDO::FETCH_OBJ);
        
        } 
        // else {
        //     echo "<script> window.location.href='".APPURL."/404.php'; </script>";
        
        // }
    
        // $courses = $conn->prepare("SELECT * FROM courses WHERE id != '$id'");
    
        // $courses->execute();
    
        // $allCourses = $courses->fetchAll(PDO::FETCH_OBJ);
    
        //course validation
        // if(isset($_SESSION['user_id'])){
            
        //     $courses = $conn->query("SELECT * FROM courses WHERE id = '$id'");
    
        //     $courses->execute();
        
        //     $allCourses= $courses->fetchAll(PDO::FETCH_OBJ);
        
        // }
    
        // $category = $conn->query("SELECT * FROM course_category WHERE (id as category_id ='$id')");
        // $category->execute();
    
        // $course_category = $category->fetch(PDO::FETCH_OBJ);
    
        //settings logic
         
            if(isset($_POST['submit'])) {
            
             if(empty($_POST['employee_no']) OR empty($_POST['fullname']) OR empty($_POST['username'])
              OR empty($_POST['email']) OR empty($_POST['password'])){
            
            echo "<script>alert('one or more inputs are empty');</script>";
            
            }else{
            
            if($_POST['password'] == $_POST['confirm_password']){
            
                $employee_no = $_POST['employee_no'];
                $fullname = $_POST['fullname'];
                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $image = "user.png";
            
                //generate a random salt
                $salt = bin2hex(random_bytes(16));
                //prepend the salt to the password
                $saltedPassword = $salt . $password;
    
                //hashed the password
                $hashedPassword = password_hash($saltedPassword, PASSWORD_DEFAULT);
            
                $update = $conn->prepare("UPDATE INTO users(employee_no, fullname, username, email, mypassword, image, salt) 
                VALUES(:employee_no, :fullname, :username, :email, :mypassword, :image, :salt)");
            
                $update->execute([
                    ":employee_no" => $employee_no,
                    ":fullname" => $fullname,
                    ":username" => $username,
                    ":email" => $email,
                    ":mypassword" => $hashedPassword,
                    ":image" => $image,
                    ":salt" => $salt,
                ]);
                echo "<script> window.location.href='".APPURL."/auth/login.php';</script>";
            }else {
                echo "<script>alert('password does not match, write correct password');</script>";
            }
            }
            
            }
    
        //register logic
       
    
        if(isset($_POST['submit'])) {
    
             if(empty($_POST['employee_no']) OR empty($_POST['firstname']) OR empty($_POST['lastname']) OR empty($_POST['username'])
              OR empty($_POST['email']) OR empty($_POST['password'])){
            
            echo "<script>alert('one or more inputs are empty');</script>";
        
            }else{
    
           if($_POST['password'] == $_POST['confirm_password']){
    
                $employee_no = $_POST['employee_no'];
                $firstname = $_POST['firstname'];
                $lastname = $_POST['lastname'];
                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $image = "user.png";
    
                //Generate a random salt
                $salt = bin2hex(random_bytes(16));
    
                //prepend the salt to the password
                $saltedPassword = $salt . $password;
                //hash the salted password
                $hashedPassword = password_hash($saltedPassword, PASSWORD_DEFAULT);
    
                $insert = $conn->prepare("INSERT INTO users(employee_no, firstname, lastname, username, email, mypassword, image, salt) 
                VALUES(:employee_no, :firstname, :lastname, :username, :email, :mypassword, :image, :salt)");
    
                $insert->execute([
                    ":employee_no" => $employee_no,
                    ":firstname" => $firstname,
                    ":lastname" => $lastname,
                    ":username" => $username,
                    ":email" => $email,
                    ":mypassword" => $hashedPassword,
                    ":image" => $image,
                    ":salt" => $salt,
                ]);
                echo "<script> window.location.href='".APPURL."/auth/login.php';</script>";
            }else {
                echo "<script>alert('password does not match, write correct password');</script>";
            }
         }
        
         }
    
         
    }

   
     
    
