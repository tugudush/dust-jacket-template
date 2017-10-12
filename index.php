<?php
require_once('config.inc.php');
require_once('functions.inc.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <?php require_once('meta.inc.php'); ?>
  <meta name="description" content="Dust Jacket">
  <title>Dust Jacket</title>    
  <?php require_once('styles.inc.php'); ?>
  <?php include_once('favicons.inc.php'); ?>
  <?php include_once('google-fonts.inc.php'); ?>
  <?php require_once('head-scripts.inc.php'); ?>
</head>
<body id="page-home">        
  <?php include_once('header.inc.php'); ?>
  <div id="container">
    <div id="banner">
      <div class="wrap">
        <div id="top-bar" class="clearfix">
          
          <div class="social-icons">
            <a href="#">f</a>
            <a href="#">t</a>
            <a href="#">g</a>
            <a href="#">i</a>
          </div><!--/.social-icons-->
          
          <div class="quick-links">
            <a href="#">Login</a>
            <a href="#">Sign Up</a>
            <a href="#">Cart</a>
          </div><!--/.quick-links-->
          
        </div><!--/top-bar-->
      </div><!--/.wrap-->
    </div><!--/banner-->
  </div><!--/container-->
  <?php include_once('footer.inc.php'); ?>
  <?php require_once('footer-scripts.inc.php'); ?>    
</body>
</html>