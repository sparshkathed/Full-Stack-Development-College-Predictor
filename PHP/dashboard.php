<?php

include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    <style>
        body {
        background-image: url("clg4.jpg");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        object-fit: cover;
      }
      .form {
        border: none;
        border-style: outset;
        background-color: rgba(234, 225, 225, 0.893);
        height: 280px;
        width: 300px;
        border-radius: 10px;
        position: absolute;
        top: 16%;
        left: 37%;
        padding: 25px;
        box-shadow: 0px 0px 30px rgba(1, 0, 0, 0.989);
      }

     </style>   
</head>
<body>
    <div class="form">
        <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
        <p>You are now user dashboard page.</p>
        <p><a href="logout.php">Logout</a></p>
    </div>
</body>
</html>