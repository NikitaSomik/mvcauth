	

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo (isset($data['title']))?$data['title']:BRAND ?></title> <!-- константна BRAND -->
	<link rel="stylesheet" href="<?php echo URL ?>/assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo URL ?>/assets/css/bootstrap-theme.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="<?php echo URL ?>/assets/js/bootstrap.min.js"></script>
</head>
<body>
	
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#">Nikita Somusev</a>
    </div>	
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo URL ?>/home/index">Home</a></li>
        <li><a href="<?php echo URL ?>/user">User</a></li>
        <li><a href="<?php echo URL ?>/page">Page 1</a></li>
        <li><a href="<?php echo URL ?>/home/contact">Contact</a></li> 
        <li><a href="#">Page 3</a></li> 
      </ul>
      <ul class="nav navbar-nav navbar-right">
     <?php   if (!isset($_SESSION['name'])): ?>

        <li><a href="<?php echo URL ?>/user/registration"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="<?php echo URL ?>/user/login_in"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>

      <?php else:
       var_dump($_SESSION['id'])  ; ?>
     
        <!-- <li><img src="<?php //echo($_SESSION['avatars']);?>" style="height: 50px; width: 60px;" alt=""></li> -->
        <li><a href="#">Hello, <?= $_SESSION['name']; ?></a></li>
        <li><a href="<?php echo URL ?>/user/edit">Edit my profile</a></li>
        <li><a href="<?php echo URL ?>/user/sessionexit?page=logout"><span class="glyphicon glyphicon-log-out"></span> Exit</a></li>

        <?php endif ?>

      </ul>
    </div>
  </div>
</nav>