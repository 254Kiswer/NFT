<?php require "../includes/header.php";?> 
<?php require "../config/config.php";?>
<?php require "../assets/logics/logic.php";?>


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
                                            
                                        <?php require "../components/registerForm.php";?>

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