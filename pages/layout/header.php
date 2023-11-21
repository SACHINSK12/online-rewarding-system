<!DOCTYPE html>
<html lang="en">
<?php
session_start();
$folderName = "/Online Rewarding System/";
$host = $_SERVER['HTTP_HOST'];
$baseurl = "http://" . $host . $folderName;

?>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="<?php echo $baseurl ?>css/style.css" />
    <link rel="stylesheet" href="<?php echo $baseurl ?>css/common.css" />
    <link rel="stylesheet" href="<?php echo $baseurl ?>css/utilities.css" />
    <link rel="icon" type="image/x-icon" href="../Assets/logo/logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
    <title>Online Rewarding System</title>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <link rel="stylesheet" href="https://shrawasticards.com/style/jquery.exzoom.css" />
</head>

<body>

    <!-- loader section  -->
    <div class=" all_center" id="loader">

        <lottie-player style="width: 200px; height:200px;" src="<?php echo $baseurl ?>Assets/lottie/loader.json"
            background="transparent" speed="1" loop autoplay></lottie-player>
    </div>
    <div class="all_center" id="AddCartAnim">
        <lottie-player style="width: 500px; height:500px;" src="<?php echo $baseurl ?>Assets/lottie/cart.json"
            background="transparent" speed="1" loop autoplay></lottie-player>
    </div>
    <div class="topHead">
        <span>Welcome to Rewarding Management System</span>
    </div>
    <!-- header section start -->
    <header>
        <nav id="sticky_header">
            <div class="logo p-half">
                <a href="<?php echo $baseurl ?>">
                    <figure> <img src="<?php echo $baseurl ?>Assets/logo/logo.png" alt=""></figure>
                    <h4>Rewarding System
                    </h4>
                </a>
            </div>
            <div class="nav-tab">
                <ul class="nav-item flex gap-1">
                    <li class="nav-link text-liner p-half"> <a href="<?php echo $baseurl ?>">Home</a></li>

                    <li class="nav-link text-liner p-half"><a href="<?php echo $baseurl ?>pages/about-us.php">About</a>
                    </li>
                    <li class="nav-link text-liner p-half"><a
                            href="<?php echo $baseurl ?>pages/contact-us.php">Contact</a></li>
                </ul>
            </div>
            <div class="search-filter">
                <form action="">
                    <input type="search" name="" id="" class="search-control"
                        placeholder="Complete your search here...">
                    <button type="submit" class="search-btn search-btn-primary"><i
                            class="fa-solid fa-magnifying-glass"></i></button>
                </form>
            </div>
            <div class="nav-icons flex gap-1 p-half">



                <li class="nav-link p-half dropParent">
                    <a href="#" class="flex items-center" ><i class="bi bi-person"></i>Login & Register</a>
                    <ul class="dropdown">
                            <li><a href="<?php echo $baseurl?>pages/login.php">Login</a></li>
                            <li><a href="<?php echo $baseurl?>pages/loginRegister.php">Resister</a></li>
                    </ul>
                </li>

                <!-- <a href="<?php echo $baseurl ?>pages/wish-list.php" class="relative"><i class="bi bi-heart"></i>
                    <span class="count" id="countWish">0</span>
                </a>
                <a href="<?php echo $baseurl ?>pages/cart.php" class="relative"><i class="bi bi-cart"></i>
                    <span class="count" id="countCart">0</span>
                </a> -->
            </div>
        </nav>
    </header>




    <!--header section end -->