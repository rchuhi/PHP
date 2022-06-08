<!DOCTYPE html>
<html>
<!--
Reg Chuhi
CIS215
Project 1
-->

<head>
    <title>Project 2</title>
    	<link rel="stylesheet" type="text/css" href="mystyles.css">
</head>

<body>
<!--Banner for the top-->
<header >

    <br><h1>Project 2</h1>
</header>
<!--Navigation to other pages-->

  <nav>
    <p class="navpanel">
      <a href="Project 2"> Project 1</a> |

      <a href="Project 1"> Project 2</a> |
      <a href="Project 3"> Project 3</a>
    </p>
  </nav>
<br>
<br>
<br>

<!-- Main part-->

<?php
echo "This is my project 2 page";
?>
<br>
<form action="welcome_get.php" method="get">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>


<?php include 'footer.php';?>
</body>
</html>
