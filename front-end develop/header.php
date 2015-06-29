<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="img/favicon2.png">
  <link rel="icon" href="img/favicon2.png">

  <title>Sora City Bike</title>
  <link href="css/swiper.min.css" rel="stylesheet" >
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/sora-default.css" rel="stylesheet">

</head>
<?php

  // Include Medoo
require_once '../components/medoo.min.php';

  // Initialize
$database = new medoo(array(
  'database_type' => 'mysql',
  'database_name' => 'sora_db',
  'server' => 'localhost',
  'username' => 'root',
  'password' => 'root',
  'charset' => 'utf8'
  ));
  ?>
  <?php 
  $datas = $database->select("category","*");
  ?>

  <body>  
    <div class="brand row">
        <div class="col-xs-4 brand-social ">
            <a href="https://www.facebook.com/"><img class="social_icon" onmouseover="logo_mousein('icon-fb')" onmouseout="logo_mouseout('icon-fb')" id="icon-fb" src="img/icon/icon-fb-type2.png"/></a>
            <a href="https://www.facebook.com/"><img class="social_icon" onmouseover="logo_mousein('icon-pt')" onmouseout="logo_mouseout('icon-pt')" id="icon-pt" src="img/icon/icon-pt-type2.png"/></a>
            <a href="https://www.facebook.com/"><img class="social_icon" onmouseover="logo_mousein('icon-tt')" onmouseout="logo_mouseout('icon-tt')" id="icon-tt" src="img/icon/icon-tt-type2.png"/></a>
            <a href="https://www.facebook.com/"><img class="social_icon" onmouseover="logo_mousein('icon-ig')" onmouseout="logo_mouseout('icon-ig')" id="icon-ig" src="img/icon/icon-ig-type2.png"/></a>
        </div>
        <div class="col-xs-4 brand-logo ">
            <img class="logo_img" src="img/LOGO-(with-cloud)2.png"/>
        </div>
        <div class="pero-font time-text col-xs-4 brand-time " align="center">
            <?php 
            echo date('D d M');
            ?>
        </div>


    </div>
    <nav class="bg-gray navbar navbar-default " role="navigation">
        <div class="bg-gray container top-menu ">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header" align="center">

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>

                </button>
                <a class="pero-font navbar-brand" href="index.html"><b>Sora City Bike</b></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" align="center">

                <ul class="nav navbar-nav">

                <?php for ($i=0; $i<9 ; $i++) {  ?>
                    <?php echo '<li id="menu_'.$i.'">'?>
                        <div class="bg-gray pero-font btn btn-default " type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true">
                            <?php echo $datas[0]['cat_name']; ?>
                            <span><img class="dropdown-span" src="img/down-btn.png"/></span>
                        </div>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                            <?php
                            foreach ($datas as $data ) {
                                echo '<li role="presentation"><a role="menuitem" tabindex="-1" href="#">'.$data['cat_name'].'</a></li>' ;}
                            ?>
                        </ul>
                    </li>
                <?php } ?>


                    
            </ul>
            
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>