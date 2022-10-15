<html>
<head>
<meta charset=UTF-8" />
<title>QuizzRules</title>
</head>
<style>
body{
	background-repeat: repeat;
	background-attachment: fixed;
	background-size:100%;
}
#grad1 {
  height: 100%;
  background-color: red; /* For browsers that do not support gradients */
  background-image: linear-gradient(#CCF1FF,#F8C8DC);
}
p{
	font-size:30px;
}
li{
	font-size:25px;
}
button {
  background-color:FEC8D8;
  font-size:5px
  color: Black;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
}
</style>
<body id="grad1">
   <form action="quizz.php">
   <h1 style="text-align:center;"> <b>QUIZZY GAME</b></h1>
   <?php
   $name=$_POST['username1'];
   $name2=$_POST['username2'];
   echo "<p>Hi <strong>$name</strong>, Quizzy game welcomes you</p>";
   ?>
   <h2>Information about the game.</h2>
   <ul>
   <li>The quizz is based on basic html, css, php,mysql.</li>
   <li>Here you need to answer 10 questions.</li>
   <li>Type of the question is multiple choice.you need to select the correct option.</li>
   <li>For every correct answer 1 point is added to your score.</li>
   <li>No Negative marks incase of wrong option is selected.</li>
   <li>If score is greaterthan 2, you will win the game.</li>
   </ul>
	<h3>Click on Let's Go, to start the game</h3>
	<button>Let's Go</button>
	</form>
</body>
</html>