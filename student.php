<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Student Page</title>
<style type="text/css">
#content{
	width:800px;
	min-height:400px;
}
</style>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="./javascript/student.js"></script>
</head>

<body>


<h1>TUES Tutorial</h1>
<br><br>
<h2>Answer your question here:</h2>

<div id="questionContainer">
    <label>Question:  </label><div id="question">default Which statement is true?</div><br>
	<label>Answers:  </label><br><br>
	    <label>A:  </label><span id="answer1">default statement1</span><br>
		<label>B:  </label><span id="answer2">default statement2</span><br>
		<label>C:  </label><span id="answer3">default statement3</span><br>
		<label>D:  </label><span id="answer4">default statement4</span><br><br>
	<label>Correct answer:  </label><input type="text" name="correctAnswer"><br>
</div>

<br><br>
<button onclick="checkAnswer()">Finish</button>
</body>
</html>
