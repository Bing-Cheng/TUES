<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>My User Page</title>
<style type="text/css">
#content{
	width:800px;
	min-height:400px;
}
</style>
</head>

<body>

<a href="userpage.php">Userpage</a>
<a href="adminpage.php">Adminpage</a>


<h2>Welcome User</h2>
<div id="content">
<?php include ('myfile.txt'); ?>
</div>
</body>
</html>
