    tinymce.init({
    selector: "div#question",
    theme: "modern",
    plugins: ["charmap preview"],
    add_unload_trigger: false,
    schema: "html5",
    inline: true,
    toolbar: "undo redo | bold italic | charmap superscript subscript | preview",
    statusbar: false
});

    tinymce.init({
    selector: "span#answer1",
    theme: "modern",
    plugins: ["charmap preview"],
    add_unload_trigger: false,
    schema: "html5",
    inline: true,
    toolbar: "undo redo | bold italic | charmap superscript subscript | preview",
    statusbar: false
});

    tinymce.init({
    selector: "span#answer2",
    theme: "modern",
    plugins: ["charmap preview"],
    add_unload_trigger: false,
    schema: "html5",
    inline: true,
    toolbar: "undo redo | bold italic | charmap superscript subscript | preview",
    statusbar: false
});

    tinymce.init({
    selector: "span#answer3",
    theme: "modern",
    plugins: ["charmap preview"],
    add_unload_trigger: false,
    schema: "html5",
    inline: true,
    toolbar: "undo redo | bold italic | charmap superscript subscript | preview",
    statusbar: false
});
    tinymce.init({
    selector: "span#answer4",
    theme: "modern",
    plugins: ["charmap preview"],
    add_unload_trigger: false,
    schema: "html5",
    inline: true,
    toolbar: "undo redo | bold italic | charmap superscript subscript | preview",
    statusbar: false
});

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
function postQuestion()
{
	if(validateInput()){
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

		self.xmlHttpReq.open("POST", "postcontent.php", true);
		self.xmlHttpReq.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded; charset=UTF-8');

		//self.xmlHttpReq.setRequestHeader("Content-length", QueryString.length);
		self.xmlHttpReq.onreadystatechange = function() 
		{           
			  if(self.xmlHttpReq.readyState === 4 && (self.xmlHttpReq.status === 200)){
				  //alert(self.xmlHttpReq.responseText);
				  alert("Question posted to server");
			  } 
		}
		var newQuestion = {};
		newQuestion.question_id= 98745521;
		newQuestion.instructor_id= 54875;
		newQuestion.question= $("div#question").html();
		newQuestion.answer1= $("span#answer1").html();
		newQuestion.answer2= $("span#answer2").html();
		newQuestion.answer3= $("span#answer3").html();
		newQuestion.answer4= $("span#answer4").html();
		var chosenAnswer = $( "input[name*='correctAnswer']" ).val();
		newQuestion.correctAnswer= chosenAnswer.toUpperCase();
		var jsonStr = JSON.stringify(newQuestion);
		var obj = JSON.parse(jsonStr);
		var jsonString = "jsonString=" + jsonStr;

		self.xmlHttpReq.send(jsonString);
	}
}//postQuestion