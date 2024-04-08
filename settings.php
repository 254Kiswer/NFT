<?php require "./includes/header.php"; ?>
<?php require "./config/config.php";?>
<?php
if(isset($_SESSION['username'])) {

echo "<script> window.location.href'".APPURL."';</script>";
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

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-lg-10 col-xl-8 mx-auto">
            <h2 class="h3 mb-4 page-title">Settings</h2>
            <div class="my-4">
                <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                            aria-controls="home" aria-selected="false">Profile</a>
                    </li>
                </ul>
                <form>
                    <div class="row mt-5 align-items-center">
                        <div class="col-md-3 text-center mb-5">
                            <div class="avatar avatar-xl">
                                <img src="<?php echo APPURL; ?>/assets/img/NFT-background.jpg" alt="..."
                                    class="avatar-img rounded-circle" />
                            </div>
                        </div>
                        <div class="col">
                            <div class="row align-items-center">
                                <div class="col-md-7">
                                    <h4 class="mb-1">Brown, Asher</h4>
                                    <p class="small mb-3"><span class="badge badge-dark">New York, USA</span></p>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-md-7">
                                    <p class="text-muted align-item-right">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit nisl
                                        ullamcorper, rutrum metus in, congue lectus. In hac habitasse platea dictumst.
                                        Cras urna quam, malesuada vitae risus at,
                                        pretium blandit sapien.
                                    </p>
                                </div>
                                <div class="col">
                                    <p class="small mb-0 text-muted">Nec Urna Suscipit Ltd</p>
                                    <p class="small mb-0 text-muted">P.O. Box 464, 5975 Eget Avenue</p>
                                    <p class="small mb-0 text-muted">(537) 315-1481</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="my-4" />
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="fullname">Full Name</label>
                            <input type="text" id="fullname" class="form-control" placeholder="Brown" />
                        </div>
                        <div class="form-group col-md-6">
                            <label for="employee_no">Employee No.</label>
                            <input type="text" id="lastname" class="form-control" placeholder="Asher" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" id="inputEmail4" placeholder="brown@asher.me" />
                    </div>
                    <div class="form-group">
                        <label for="inputAddress5">Username</label>
                        <input type="text" class="form-control" id="username"
                            placeholder="Username" />
                    </div>
                    <!-- <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputCompany5">Company</label>
                            <input type="text" class="form-control" id="inputCompany5"
                                placeholder="Nec Urna Suscipit Ltd" />
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputState5">State</label>
                            <select id="inputState5" class="form-control">
                                <option selected="">Choose...</option>
                                <option>...</option>
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <label for="inputZip5">Zip</label>
                            <input type="text" class="form-control" id="inputZip5" placeholder="98232" />
                        </div>
                    </div> -->
                    <hr class="my-4" />
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="inputPassword4">Old Password</label>
                                <input type="password" class="form-control" id="inputPassword5" />
                            </div>
                            <div class="form-group">
                                <label for="inputPassword5">New Password</label>
                                <input type="password" class="form-control" id="inputPassword5" />
                            </div>
                            <div class="form-group">
                                <label for="inputPassword6">Confirm Password</label>
                                <input type="password" class="form-control" id="inputPassword6" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p class="mb-2">Password requirements</p>
                            <p class="small text-muted mb-2">To create a new password, you have to meet all of the
                                following requirements:</p>
                            <ul class="small text-muted pl-4 mb-0">
                                <li>Minimum 8 character</li>
                                <li>At least one special character</li>
                                <li>At least one number</li>
                                <li>Can’t be the same as a previous password</li>
                            </ul>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Save Change</button>
                </form>
            </div>
        </div>
    </div>

</div>
<?php require "./includes/footer.php"; ?>