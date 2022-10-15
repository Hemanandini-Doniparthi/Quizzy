<!DOCTYPE html>
<html>

<head>
	<meta charset=UTF-8" />
	
	<title>QUIZZY</title>
	
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
.div{
	font-size:50px;
}
	</style>
<body id="grad1">

	<div >

		<h1>Result </h1>
		
        <?php
            
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
        
            $totalCorrect = 0;
            
            if ($answer1 == "C") { $totalCorrect++; }
            if ($answer2 == "D") { $totalCorrect++; }
            if ($answer3 == "A") { $totalCorrect++; }
            if ($answer4 == "B") { $totalCorrect++; }
            if ($answer5 == "C") { $totalCorrect++; }
            
            echo "<h2><div id='results'>$totalCorrect/ 5 correct</div></h2>";
			if ($totalCorrect < 3) {echo"<h3>Better Luck Next time &#127773;</h3>";}
			if ($totalCorrect > 2) {echo"<h3>Congratulations!!,You won the Quizz &#10024;</h3>";}
            
        ?>
	
	</div>

</body>

</html>