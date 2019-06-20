<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>A & W Hotel</title>
  <link rel="shortcut icon" type="image/x-icon" href="img/brand_logo/logo.png" />

<!-- Bootstrap, jQuery, Javascript input-->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>
    

<!-- Main Case Style Sheet(CSS) -->
  <link rel="stylesheet" type="text/css" href="main.css">

</head>
    <nav style="" id="mainNavbar" class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php"><img id="logo" alt="brand_logo" src="img/brand_logo/logo.png"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right ">
        <li><a href="/hotel_website/index.php?#myPage">HOME</a></li>
        <li><a href="/hotel_website/index.php?#location">LOCATION</a></li>
        <li><a href="/hotel_website/index.php?#aboutUs">ABOUT US</a></li>
        <li><a href="/hotel_website/index.php?#contactUs">CONTACT US</a></li>
        <li><button type="button" class="btn btn-secondary" onClick="document.getElementById('search').scrollIntoView();">Search</button></li>
        
        <a id="loginDropdown" href="#" class="dropdown-toggle" data-toggle="dropdown">
            <span class="glyphicon glyphicon-user">
                <?php 
                if(isset($_SESSION['userID']))
                {
                    echo $_SESSION['firstName'];    
                }
                else
                {
                    echo 'ACCOUNT';
                }
                            
                ?>
            </span>
        </a>
        <ul id="loginDropdown" class="dropdown-menu">
            <?php
                if(isset($_SESSION['userID']))
                {
                echo '
                <li><a data-toggle="modal" href="../hotel_website/index.php" name="account">Account Setting <span class="glyphicon glyphicon-new-window"></span></a></li>
                
                <li><a href="favoriteList.php">&#9829 FAVORITE LIST</a></li>
                
                <li><form action="includes/logout.php" id="logoutform" method="post">
                        <button style="ative:hover:black; margin-top:1px; background:transparent; color:black; border-color:black; border-style:soild 8px; padding-right:90px; font-size:15px;" type="submit" name="logoutBtn">LOGOUT</button>
                    </form>
                </li>';
                }
                else
                {
                echo '
                <li><a data-toggle="modal" href="#myLoginModal">LOGIN<span class="glyphicon glyphicon-new-window"></span></a></li>

                <li><a data-toggle="modal" href="#myRegisterModal" name="register_modal">REGISTER <span class="glyphicon glyphicon-new-window"></span></a></li>';
                }

            ?>   
        
        </ul>
      </ul>
    </div>
  </div>
</nav>