<!DOCTYPE html>
<html>
<head>
<meta charset=UTF-8" />
<title>Registration</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body{
	background-image: url("https://i.pinimg.com/736x/81/12/93/81129364fd7b2a5ee4b302d55f4736ce.jpg");
	background-repeat: repeat;
	background-attachment: fixed;
	background-size:100%;
}
form{
	border: 2px solid white;
}
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  color: Black;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}
button:hover {
  opacity: 1;
}

.container {
  padding: 16px;
}
</style>
</head>
<body>

<h1 style="text-align:center;">Quizzy Game</h1>
<h2 style="text-align:center;">Fill the below details to participate in the quizz</h2>

<form action="quizzrules.php" method="post" id="quiz">
  <div class="container">
    <label for="uname"><b>Firstname</b></label>
    <input type="text" placeholder="Enter Firstname" name="username1" required>

	<label for="uname"><b>Lastname</b></label>
    <input type="text" placeholder="Enter Lastname" name="username2" required>

    <button type="submit" value="Submit" class="submitbtn" />Submit</button>    
  </div>
</form>

</body>
</html>