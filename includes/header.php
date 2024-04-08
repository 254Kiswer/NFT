<?php 
    session_start();
    define("APPURL", "http://localhost/NFT");
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>NFT</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?php echo APPURL; ?>/about.php">NFT-LMS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo APPURL; ?>/index.php">About</a>
                </li>
                <?php if(isset($_SESSION['username'])): ?>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo APPURL; ?>/dashboard.php">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo APPURL; ?>/courses/show-course.php">Courses</a>
                </li>
                <?php endif; ?>
            </ul>
            <?php if(isset($_SESSION['username'])): ?>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <ul>
        </ul>
        <ul>
            <li class="nav-item dropdown">
                <a class="nav-link" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                    Menu
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="<?php echo APPURL; ?>/settings.php">Settings</a></li>
                    <li><a class="dropdown-item" href="<?php echo APPURL; ?>/auth/logout.php">Logout</a></li>
                </ul>
            </li>
        </ul>
        <?php else: ?>
        <ul>
            <li class="nav-item dropdown">
                <a class="nav-link" role="button" data-bs-toggle="dropdown" aria-expanded="true">
                    Menu
                </a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="<?php echo APPURL; ?>/auth/login.php">Login</a></li>
                    <li><a class="dropdown-item" href="<?php echo APPURL; ?>/auth/register.php">Register</a></li>
                </ul>
            </li>
        </ul>
<?php endif; ?>

            
        </div>
    </div>
</nav>