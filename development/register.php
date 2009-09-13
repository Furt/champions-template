<?php
$errors = array();
if(isset($_POST['login'])){
	$username = preg_replace('/[^A-Za-z]/', '', $_POST['username']);
	$email = $_POST['email'];
	$password = $_POST['password'];
	$c_password = $_POST['c_password'];
	
	if(file_exists('users/' . $username . '.xml')){
		$errors[] = 'Username already exists';
	}
	if($username == ''){
		$errors[] = 'Username is blank';
	}
	if($email == ''){
		$errors[] = 'Email is blank';
	}
	if($password == '' || $c_password == ''){
		$errors[] = 'Passwords are blank';
	}
	if($password != $c_password){
		$errors[] = 'Passwords do not match';
	}
	if(count($errors) == 0){
		$xml = new SimpleXMLElement('<user></user>');
		$xml->addChild('password', md5($password));
		$xml->addChild('email', $email);
		$xml->asXML('users/' . $username . '.xml');
		header('Location: index.php');
		die;
	}
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

	<form name="login" action="" method="post">
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
				<a href="register.php">Register</a><br />
<a href="#">TEST 2</a><br />
<a href="#">TEST 3</a><br />
<a href="#">TEST 4</a><br /></div></div></div>

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
	<h1>Register</h1>
	<form method="post" action="">
		<?php
		if(count($errors) > 0){
			echo '<ul>';
			foreach($errors as $e){
				echo '<li>' . $e . '</li>';
			}
			echo '</ul>';
		}
		?>
		<p>Username <input type="text" name="username" size="20" /></p>
		<p>Email <input type="text" name="email" size="20" /></p>
		<p>Password <input type="password" name="password" size="20" /></p>
		<p>Confirm Password <input type="password" name="c_password" size="20" /></p>
		<p><input type="submit" name="login" value="Login" /></p>
	</form>
	<!-- end of Maincontent --></div>
	  <div class='footer'>
This site is in no way affiliated with Cryptic Studios and Champions Online.
<br/>© 2009 MMO-Source.net, Inc. All Rights Reserved.<br/>Template by: Furt
</div>
	
<!-- end of container --></div>
  

</body>
</html>