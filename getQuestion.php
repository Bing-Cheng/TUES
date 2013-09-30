<?php
//echo 'Hello \n';
//echo $_POST . '\n';
//echo $_POST['content2'] . '\n';
$question = file_get_contents("./myfile.txt",true);
echo $question;
?>
