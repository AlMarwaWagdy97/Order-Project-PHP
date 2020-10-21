<?php 
    if(!isset($_SESSION['admin_name'])){
        header("location:".BURLA."login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="./medical_serve/assets/css/bootstrap.min.css" > -->
    <link rel="stylesheet" href="<?php echo ASSETS ?>css/bootstrap.min.css" >
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo ASSETS ?>css/style.css"> 

    
    <title>Dashboard | Home Page</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Logo</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

        <!---------------------------------------- Home  ---------------------------------------------------------->

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
        </li>
       
        <!---------------------------------------- Cities  ---------------------------------------------------------->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Cities
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?php echo BURLA?>cities/AddCity.php">Add</a>
                <a class="dropdown-item" href="<?php echo BURLA?>cities/ViewCities.php">View All</a>
            </div>
        </li>

        <!---------------------------------------- Service------------------------------------------------------------>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Services
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?php echo BURLA?>service/Addservice.php">Add</a>
                <a class="dropdown-item" href="<?php echo BURLA?>service/Viewservice.php">View All</a>
            </div>
        </li>


        <!---------------------------------------- Orders ---------------------------------------------------------->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Orders
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="<?php echo BURLA?>Orders/ViewOrders.php">View All</a>
            </div>
        </li>

        <!---------------------------------------- Admin ---------------------------------------------------------->
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Admins
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="<?php echo BURLA?>admins/add.php">Add</a>
                <a class="dropdown-item" href="#">View All</a>
            </div>
        </li>
    </ul>

        <!-------------------------------------- Log Out  ------------------------------------------------------>
        <li class="form-inline my-2 my-lg-0 active" >
            <a class="nav-link" href="<?php echo BURLA.'logout.php';?>" style="color: white;">Log Out <span class="sr-only">(current)</span></a>
        </li>
        <!--------------------------------------------------------------------------------------------------------------->

        <!-- <form class="form-inline my-2 my-lg-0"> -->
        <!-- <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search"> -->
        <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
        </form>
    </div>
    </nav>