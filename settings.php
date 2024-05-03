<?php require "./includes/header.php"; ?>
<?php require "./config/config.php";?>
<?php require "./assets/logics/logic.php";?>


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
                <?php require "./components/settingsForm.php";?>
            </div>
        </div>
    </div>

</div>
<?php require "./includes/footer.php"; ?>