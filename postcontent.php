<?php
echo 'Hello \n';
//echo $_POST . '\n';
//echo $_POST['content2'] . '\n';
file_put_contents("myfile.txt", $_POST);
?>
