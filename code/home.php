<?php

session_start();
?>
<html>
<head>
    <title> Home Page </title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" 
    href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


</head>

<body>
<div class="container">
    <a href="logout.php" style="float:right">LOGOUT</a>
</div> 

 <h1> Welcome <?php echo $_SESSION['username']; ?> </h1>
<br>

  <a href="milosarthro.php">
<img src="milos.jpg" alt="Milos Greece" style="width:500px;height:600px;">
</a> <a href="naxos.php"> <img src="naxos.png" alt="Naxos Greece" style="width:500px;height:600px;"> </a>

  
</body>
</html>