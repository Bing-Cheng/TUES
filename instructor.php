<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Instructor Page</title>

<style type="text/css">
#txtarea{
	width:800px;
	min-height:400px;
}
#but{
	display:block;
	clear:both;
	margin-top:20px;
}
</style>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="./tiny_mce/tinymce.min.js"></script>
<script src="./javascript/instructor.js"></script>
</head>

<body>

<h1>TUES Question Authoring Tool</h1>
<br><br>
<h2>Edit your question and answers here:</h2>

<div id="questionContainer">
    <label>Question:  </label><div id="question">Which statement is true?</div><br>
	<label>Answers:  </label><br><br>
	    <label>A:  </label><span id="answer1">statement1</span><br>
		<label>B:  </label><span id="answer2">statement2</span><br>
		<label>C:  </label><span id="answer3">statement3</span><br>
		<label>D:  </label><span id="answer4">statement4</span><br><br>
	<label>Correct answer:  </label><input type="text" name="correctAnswer"><br>
</div>

<br><br>
<button onclick="postQuestion()">Post</button>
</body>
</html>
