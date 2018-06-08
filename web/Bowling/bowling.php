<!DOCTYPE html>
<html>
<head>

	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bowling Scores Website</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="bowling.css">
    <script src="week02/homepage.js"></script>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="bowling.css">
	
</head>
<body>
	<h1>Welcome to the Bowling Scores Website!</h1>

<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <a href="#" class="navbar-brand">Bowling Scores</a>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarMenu">
            <ul class="navbar-nav">
                </li>
                <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Scores
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="personal.php">Personal Scores</a>
          <a class="dropdown-item" href="team.php">Team Scores</a>
      </div>
  </li>
</ul>
</div>
</nav><br><br>

<form  action="results.php" method="get">

 <div style="color:white; border:1px solid black;">Enter Personal Name to check your Bowling Score:<br>
<input name="person" type="text">
<button type="submit"> Submit </button><br><br><br>


<div style="color:white; border:1px solid black;" >Enter Team name to check team score:<br>
<input id="textcolor" name="team" type="text">
<button type="submit"> Submit</button><br><br>

</form>
<br>
<div style="color:white, border:1px solid black;">New User<br>
<form action="createUser.php" method="post">
    <div style="color:white border:1px solid black;">Enter name:<br>
    <input name="personal_name" type="text"><br>
    <div style="color:white border:1px solid black;">Enter score:<br>
    <input name="personal_score" type="text"><br>
    <button type="submit" > Submit</button>
</form>


</body>