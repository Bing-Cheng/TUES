var gCorrectAnswer;

$(document).ready(function() {
    var xmlHttpReq = false;
	var self = this;
	// Mozilla/Safari/chrome
	if (window.XMLHttpRequest) {
		self.xmlHttpReq = new XMLHttpRequest();
	}
	// IE
	else if (window.ActiveXObject) {
		self.xmlHttpReq = new ActiveXObject("Microsoft.XMLHTTP");
	}

	self.xmlHttpReq.open("Get", "getQuestion.php", true);
	self.xmlHttpReq.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');

	//self.xmlHttpReq.setRequestHeader("Content-length", QueryString.length);
	self.xmlHttpReq.onreadystatechange = function() 
	{           
		if(self.xmlHttpReq.readyState === 4 && (self.xmlHttpReq.status === 200)){
			var questionJSON = self.xmlHttpReq.responseText; 
			var question = JSON.parse(questionJSON);
			$("div#question").html(question.question);
			$("span#answer1").html(question.answer1);
			$("span#answer2").html(question.answer2);
			$("span#answer3").html(question.answer3);
			$("span#answer4").html(question.answer4);
			gCorrectAnswer = question.correctAnswer;
		 } 
	}

	self.xmlHttpReq.send("questionID=1");
});//document ready

function validateInput(){
	var validate = false;
	var chosenAnswer = $( "input[name*='correctAnswer']" ).val();
	if (chosenAnswer.length === 1){
		if (chosenAnswer.toUpperCase() < "A" || chosenAnswer.toUpperCase() > "D") {
			alert('Please choose from "A" to "D".');
		}else{
			validate = true;
		}
	}else{
		alert('Please choose and only choose one letter.');
	}
	return validate;
}

function checkAnswer(){
	if(validateInput()){
		var chosenAnswer = $( "input[name*='correctAnswer']" ).val();
		if(gCorrectAnswer === chosenAnswer.toUpperCase()){
			alert("Correct answer");
		}else{
			alert("Incorrect answer");
		}
	}
}  


