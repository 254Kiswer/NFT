<?php require "../includes/header.php";?>
<?php require "../config/config.php";?>
<?php 

   
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

            //password validation
            if(password_verify($password, $fetch['mypassword'])){

                $_SESSION['username'] = $fetch['username'];
                $_SESSION['email'] = $fetch['email'];
                $_SESSION['user_id'] = $fetch['id'];
                $_SESSION['image'] = $fetch['image'];
                
                echo "<script> window.location.href='".APPURL."/index.php';</script>";
            }else{

                echo "<script> alert('email or password wrong');</script>";
            }
        } else{
            echo "<script>alert('email or password wrong');</script>";
        }
    }
}
?>
<body>
    <div class="container">
        <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Log in</p>
        <form method="POST" action="login.php">
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Enter email">
                
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
<?php require "../includes/footer.php"; ?>