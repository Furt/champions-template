<?php
session_start();

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
<a href="register.php">Register</a><br />
</div></div></div>

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
		header('Location: login.php');
	die;
}
?>
	<h1>User Page</h1>
	<h2>Welcome, <?php echo $_SESSION['username']; ?></h2>
	<table>
		<tr>
			<th>Username</th>
			<th>Email</th>
		</tr>
		<?php
		$files = glob('users/*.xml');
		foreach($files as $file){
			$xml = new SimpleXMLElement($file, 0, true);
			echo '
			<tr>
				<td>'. basename($file, '.xml') .'</td>
				<td>'. $xml->email .'</td>
			</tr>';
		}
		?>
	</table>
	<hr />
	<a href="changepass.php">Change Password</a>
	-
	<a href="logout.php">Logout</a>
	<!-- end of Maincontent --></div>
	  <div class='footer'>
This site is in no way affiliated with Cryptic Studios and Champions Online.
<br/>© 2009 MMO-Source.net, Inc. All Rights Reserved.<br/>Template by: Furt
</div>
	
<!-- end of container --></div>
  

</body>
</html>