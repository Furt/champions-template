<?php
session_start();
if(!file_exists('users/' . $_SESSION['username'] . '.xml')){
	header('Location: login.php');
	die;
}
$error = false;
if(isset($_POST['change'])){
	$old = md5($_POST['o_password']);
	$new = md5($_POST['n_password']);
	$c_new = md5($_POST['c_n_password']);
	$xml = new SimpleXMLElement('users/' . $_SESSION['username'] . '.xml', 0, true);
	if($old == $xml->password){
		if($new == $c_new){
			$xml->password = $new;
			$xml->asXML('users/' . $_SESSION['username'] . '.xml');
			header('Location: logout.php');
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
	<script type="text/javascript">
animatedcollapse.addDiv('nav_home', 'fade=0,speed=100')
animatedcollapse.addDiv('nav_com', 'fade=0,speed=100')
animatedcollapse.addDiv('nav_login', 'fade=0,speed=100')
animatedcollapse.addDiv('nav_help', 'fade=0,speed=100')
animatedcollapse.ontoggle=function($, divobj, state){ //fires each time a DIV is expanded/contracted
	//$: Access to jQuery
	//divobj: DOM reference to DIV being expanded/ collapsed. Use "divobj.id" to get its ID
	//state: "block" or "none", depending on state
}

animatedcollapse.init()

	</script>
</head>
<body class="champions">
<div class="menu">
	<div class="menu" id="form">

	<form name="" action="" method="">
	User
	<input type="text" name="username" size="20" />
	Pass
	<input type="password" name="password" size="20" />
	<input type="submit" value="Submit" />
	</form>

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
<h1>Change Password</h1>
	<form method="post" action="">
		<?php 
		if($error){
			echo '<p>Some of the passwords do not match</p>';
		}
		?>
		<p>Old password <input type="password" name="o_password" /></p>
		<p>New password <input type="password" name="n_password" /></p>
		<p>Confirm new password <input type="password" name="c_n_password" /></p>
		<p><input type="submit" name="change" value="Change Password" /></p>
	</form>
	<hr />
	<a href="index.php">User home</a>
	<!-- end of Maincontent --></div>
	  <div class='footer'>
This site is in no way affiliated with Cryptic Studios and Champions Online.
<br/>© 2009 MMO-Source.net, Inc. All Rights Reserved.<br/>Template by: Furt
</div>
	
<!-- end of container --></div>
  

</body>
</html>