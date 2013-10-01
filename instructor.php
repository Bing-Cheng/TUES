<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Instructor Page</title>

<link rel="stylesheet" type="text/css" href="./css/instructor.css"> 
</style>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="./tiny_mce/tinymce.min.js"></script>
<script src="./javascript/instructor.js"></script>

</head>

<body>

<h1>Circuit Tutor Authoring System</h1>
<br><hr>
<div id="workSpace">
<button type="button" onclick="addQuestion()">Add</button>
<button type="button" onclick="removeQuestion()">Remove</button>
<br>
<select size="25" id="questionList">
<option>Question1</option>
</select>

<div id="questionContainer">
<h2>Edit your question and answers here:</h2>
<label>Question type:  </label>
<select id="questionType">
	<option>Multipl choice</option>
	<option>Numerical input</option>
	<option>Text input</option>
	<option>Essay</option>
	<option>Numerical list input</option>
	<option>String list input</option>
	<option>Multiple string list input</option>
</select><br>
    <label>Question:  </label><div id="question" class="mceBox">Which statement is true?</div><br>
	<label>Answers:  </label><br><br>
	    <label>A.  </label><span id="answer1" class="mceBox">statement1</span><br><br>
		<label>B.  </label><span id="answer2" class="mceBox">statement2</span><br><br>
		<label>C.  </label><span id="answer3" class="mceBox">statement3</span><br><br>
		<label>D.  </label><span id="answer4" class="mceBox">statement4</span><br><br>
	<label>Correct answer:  </label><input type="text" name="correctAnswer"><br>
<br><br>
<button onclick="postQuestion()">Post</button>
</div>
</div>
</body>
</html>
