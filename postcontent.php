<?php
echo 'Hello \n';
//echo $_POST['content1'] . '\n';
//echo $_POST['content2'] . '\n';
file_put_contents("myfile.txt", $_POST);
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Post added</title>
</head>
<body>

<a href="userpage.php">Userpage</a>
<a href="adminpage.php">Adminpage</a>


<h2>Your post has been added/edited.</h2>

</body>
</html>