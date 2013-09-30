<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>My Amin Page</title>

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

<!--Here comes the javascript that embeds TinyMCE and jbimages --- Important!!!! YOU MUST DOWNLOAD AND EXTRACT THE FILES EXACTLY AS SHOWN IN THE TUTORIAL TO MAKE THIS WORK!!!
See the video tutorial at: http://www.youtube.com/watch?v=tGnBvExNDtQ&feature=player_embedded -->


<script src="./tiny_mce/tinymce.min.js"></script>
<script>
    tinymce.init({
    selector: "div#txtarea1",
    theme: "modern",
    plugins: [
        ["advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker"],
        ["searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking"],
        ["save table contextmenu directionality emoticons template paste"]
    ],
    add_unload_trigger: false,
    schema: "html5",
    inline: true,
    toolbar: "undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image     | print preview media",
    statusbar: false
});

tinymce.init({
    selector: "div#txtarea2",
    theme: "modern",
    add_unload_trigger: false,
    schema: "html5",
    inline: true,
    toolbar: "undo redo",
    statusbar: false
});
</script> 
<script src='./json/json.js'></script>
<script>
function copyText()
{
document.getElementById("field2").value=document.getElementById("field1").value;
var xmlHttpReq = false;

var self = this;
// Mozilla/Safari
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

var newQuestion = {};
  
    newQuestion.question_id= 98745521;
    newQuestion.instructor_id= 54875;
	newQuestion.question= 'Which statement istrue?';
    newQuestion.answer1= 'statement1';
	newQuestion.answer2= 'statement2';
	newQuestion.answer3= 'statement3';
	newQuestion.answer4= 'statement4';
	newQuestion.correctAnswer= 3;

    var jsonString = "jsonString=" + JSON.stringify(newQuestion);
	var jsonString1 = "jsonString=" + "testString";
self.xmlHttpReq.send(jsonString);

}
</script>
</head>

<body>

<a href="userpage.php">Userpage</a>
<a href="adminpage.php">Adminpage</a>
<textarea id="elm1" name="area"></textarea>

<h2>Welcome Admin</h2>
<p>Edit your page here:</p>

<form id="contentform" method="post" action="postcontent.php">
          <div name="content1" id="txtarea1">t1</div><br>
		  <div name="content2" id="txtarea2">t2</div>
          <input id="but" type="submit" value="Save/update"/>
</form>
Field1: <input type="text" id="field1" value="Hello World!"><br>
Field2: <input type="text" id="field2">
<br><br>
<button onclick="copyText()">Copy Text</button>
</body>
</html>
