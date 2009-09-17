<?php
$error = false;
if(isset($_POST['login'])){
	$username = preg_replace('/[^A-Za-z]/', '', $_POST['username']);
	$password = md5($_POST['password']);
	if(file_exists('users/' . $username . '.xml')){
		$xml = new SimpleXMLElement('users/' . $username . '.xml', 0, true);
		if($password == $xml->password){
			session_start();
			$_SESSION['username'] = $username;
			header('Location: index.php');
			die;
		}
	}
	$error = true;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Champions Online template by: Furt</title>
	<link rel="shortcut icon" href="./images/favicon.ico" type="image/x-icon" />
	<link href="champions.css" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="./js/jquery.min.js"></script>
	<script type="text/javascript" src="./js/animatedcollapse.js"></script>
	<script type="text/javascript" src="./js/nav-config.js"></script>
</head>
<body class="champions">
<div class="menu">
<?php
$error = false;
if(isset($_POST['login'])){
	$username = preg_replace('/[^A-Za-z]/', '', $_POST['username']);
	$password = md5($_POST['password']);
	if(file_exists('users/' . $username . '.xml')){
		$xml = new SimpleXMLElement('users/' . $username . '.xml', 0, true);
		if($password == $xml->password){
			$_SESSION['username'] = $username;
		}
	}
	$error = true;
}
?>
	<div class="menu" id="form">
	<?php
	if(!file_exists('users/' . $_SESSION['username'] . '.xml')){
	echo '<form method="post" action="">';
	echo 'User<input type="text" name="username" size="20" />';
	echo 'Pass<input type="password" name="password" size="20" />';
	echo '<input type="submit" value="Login" name="login" /></form>';
	}else{
	?>
	Welcome, <?php echo $_SESSION['username']; ?> - <a href="logout.php">Logout</a>
	<?php } ?>
</div></div>
<div id="container">
  <div id="header">
  <!-- end of header --></div>
  <div id="hero"></div>
  
  <div class="navigation">
	<div class="nav_title">
	<div class="img_txt">
		<a href="#" rel="toggle[nav_home]" data-openimage='./images/arrow-down_black.png' data-closedimage='./images/arrow-right_black.png'><img src="./images/arrow-down_black.png" border="0" alt="Home1" /></a>
		<img src="./images/text/home.png" border="0" alt="Home"  />
	</div></div>
		<div class="nav_bg">
			<div id='nav_home'>
        	<div class="nav_items">
				<a href="index.php">Main</a><br />
<a href="login.php">Login</a><br />
<a href="register.php">Register</a><br /></div></div></div>

	<div class="nav_title">
		<div class="img_txt">
		<a href="#" rel="toggle[nav_com]" data-openimage='./images/arrow-down_black.png' data-closedimage='./images/arrow-right_black.png'><img src="./images/arrow-down_black.png" border="0" alt="Community1"  /></a>
		<img src="./images/text/community.png" border="0" alt="Community"  />
	</div></div>
		<div class="nav_bg">
			<div id='nav_com'>
			<div class="nav_items">
				<a href="#">TEST 1</a><br />
<a href="#">TEST 2</a><br />
<a href="#">TEST 3</a><br />
<a href="#">TEST 4</a><br /></div></div></div>

	<div class="nav_title">
		<div class="img_txt">
		<a href="#" rel="toggle[nav_help]" data-openimage="./images/arrow-down_black.png" data-closedimage="./images/arrow-right_black.png"><img src="./images/arrow-down_black.png" border="0" alt="Help1" /></a>
		<img src="./images/text/help.png" border="0" alt="Help"  />
		</div></div>
		<div class="nav_bg">
		<div id='nav_help'>
			<div class="nav_items">
				<a href="#">TEST 1</a><br />
<a href="#">TEST 2</a><br />
<a href="#">TEST 3</a><br />
<a href="#">TEST 4</a><br /></div></div></div>
  <div class="nav_footer"></div></div>
  <!-- End of Navigation -->
  
  <!-- Start of Sidebar -->
  <div class="sidebar">
	<div class="screenshots">
		<div class="screenshot" id="image">
			<img src="./images/text/screenshots.png" border="0" alt="screenshots"  /></div>
		<div class="screenshot" id="register">
			<img src="./images/text/register.png" border="0" alt="login"  /></div>
	</div></div>
  <!-- End of Sidebar -->
  
  <!-- Main Content -->
  <div id="mainContent">
  <?php
   if(!file_exists('users/' . $_SESSION['username'] . '.xml')){
   ?>
	<h1>Login</h1>
	<form method="post" action="">
		<p>Username <input type="text" name="username" size="20" /></p>
		<p>Password <input type="password" name="password" size="20" /></p>
		<?php
		if($error){
			echo '<p>Invalid username and/or password</p>';
		}
		?>
		<p><input type="submit" value="Login" name="login" /></p>
	</form>
	<a href="register.php">Register</a>
	<?php
	}else{ ?>
	You are already loged in.<br />
	<a href="logout.php">Logout</a>
	<?php } ?>
	<!-- end of Maincontent --></div>
	  <div class='footer'>
This site is in no way affiliated with Cryptic Studios and Champions Online.
<br/>© 2009 MMO-Source.net, Inc. All Rights Reserved. Template by: Furt
</div>
	
<!-- end of container --></div>
  

</body>
</html>