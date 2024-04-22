<?php require "../includes/header.php";?> 
<?php require "../config/config.php";?>
<?php 
    if(isset($_SESSION['username'])) {

        echo "<script> window.location.href ='".APPURL."';</script>";
    }

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


            $insert = $conn->prepare("INSERT INTO users(employee_no, fullname, username, email, mypassword, image) 
            VALUES(:employee_no, :fullname, :username, :email, :mypassword, :image)");

            $insert->execute([
                ":employee_no" => $employee_no,
                ":fullname" => $fullname,
                ":username" => $username,
                ":email" => $email,
                ":mypassword" => password_hash($password, PASSWORD_DEFAULT),
                ":image" => $image
            ]);
            echo "<script> window.location.href='".APPURL."/auth/login.php';</script>";
        }else {
            echo "<script>alert('password does not match, write correct password');</script>";
        }
     }
    
     }
?>
<body>
    <div class="container">
        <section class="vh-100" style="background-color: #eee; ">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-lg-12 col-xl-11">
                        <div class="card text-black" style="border-radius: 25px;">
                            <div class="card-body p-md-5">
                                <div class="row justify-content-center">
                                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                        <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                                        <form class="mx-1 mx-md-4" method="POST" action="register.php">

                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                                <div class="form-outline flex-fill mb-0">
                                                    <input type="varchar" name="employee_no" id="form3Example1c" class="form-control" required="" placeholder="Employee No." />
                                                    
                                                </div>
                                            </div>

                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                                                <div class="form-outline flex-fill mb-0">
                                                    <input type="text" name="fullname" id="form3Example1c" required="" class="form-control" placeholder="Full Name"/>
                                                    
                                                </div>
                                            </div>

                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                                <div class="form-outline flex-fill mb-0">
                                                    <input type="text" name="username" id="form3Example3c" class="form-control" required="" placeholder="Username" />
                                                    
                                                </div>
                                            </div>

                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                                <div class="form-outline flex-fill mb-0">
                                                    <input type="email" name="email" id="form3Example3c" class="form-control" required="" placeholder="Email"/>
                                                    
                                                </div>
                                            </div>

                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                                                <div class="form-outline flex-fill mb-0">
                                                    <input type="password" name="password" id="form3Example4c" class="form-control" required="" placeholder="Password"/>
                                                    
                                                </div>
                                            </div>

                                            <div class="d-flex flex-row align-items-center mb-4">
                                                <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                                                <div class="form-outline flex-fill mb-0">
                                                    <input type="password" name="confirm_password" id="form3Example4cd" class="form-control" placeholder="Confirm Password" />
                                                   
                                                </div>
                                            </div>

                                            <div class="form-check d-flex justify-content-center mb-5">
                                                <input class="form-check-input me-2" type="checkbox" value=""
                                                    id="form2Example3c" />
                                                <label class="form-check-label" for="form2Example3">
                                                    I agree all statements in <a href="#!">Terms of service</a>
                                                </label>
                                            </div>

                                            <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                                <button type="submit" name="submit"class="btn btn-primary btn-lg">Register</button>
                                            </div>

                                        </form>

                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
<?php require "../includes/footer.php"; ?>