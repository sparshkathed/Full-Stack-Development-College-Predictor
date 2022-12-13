<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Page</title>
    <style>
      body {
        background-image: url("clg4.jpg");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        object-fit: cover;
      }
      .login {
        border: none;
        border-style: outset;
        background-color: rgba(234, 225, 225, 0.893);
        height: 250px;
        width: 300px;
        border-radius: 10px;
        position: absolute;
        top: 18%;
        left: 37%;
        padding: 25px;
        box-shadow: 0px 0px 30px rgba(1, 0, 0, 0.989);
      }
      input[type="text"] {
        border-right: none;
        border-left: none;
        border-top: none;
        border-bottom: 1px solid rgba(0, 0, 0, 0.932);
        width: 98%;
        height: 25px;
        margin-top: 20px;
        font-size: 15px;
        letter-spacing: 0.5px;
      }
      input[type="password"] {
        margin-top: 20px;
        border-right: none;
        border-left: none;
        border-top: none;
        border-bottom: 1px solid rgba(0, 0, 0, 0.932);
        width: 98%;
        height: 25px;
        font-size: 15px;
        letter-spacing: 0.5px;
      }
      #forgot_pass {
        color: rgb(80, 79, 79);
        text-align: center;
        margin-top: 25px;
        text-decoration: none;
      }
      #forgot_pass:hover {
        color: blue;
      }
      #login {
        background-color: gray;
        border: none;
        height: 35px;
        width: 50%;
        margin-top: 30px;
      }
      #sign_up {
        background-color: gray;
        border: none;
        height: 35px;
        width: 48%;
        margin-top: 30px;
      }
      #login:hover {
        color: white;
        box-shadow: 0px 0px 5px black;
      }
      input[type="button"]:hover {
        color: white;
        box-shadow: 0px 0px 5px black;
      }
    </style>
  </head>
  <body>
    <?php
   $con = mysqli_connect("localhost","root","Sparsh@17","sparsh");
    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        echo $username;
        echo $password;
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE username='$username' AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        echo $rows;
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: dashboard.php");
        } else {
            echo "<div class='login'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
?>
    
    <div class="login">
      <h2 style="color: black; font-family: 'Times New Roman', Times, serif">
        Login
      </h2>
      <form class="form" onsubmit="return validate()" method="POST" action="login.php">
        <input type="text" name="username" id="username" placeholder="USERNAME" autofocus="true"/>
        <br />
        <input
          type="password"
          name="password"
          id="password"
          placeholder="PASSWORD"
        />

        <input type="submit" id="login" value="Login" name="submit">
        <a href="sign_up.php">
          <input type="button" id="sign_up" value="Sign Up"
        /></a>

        <script>
          function validate() {
            var username = document.getElementById("username");
            var password = document.getElementById("password");

            if (username.value.trim() == "") {
              alert("Please enter username");
              email.style.border = "solid 1px red";
              return false;
            } 
            else if (password.value.trim() == "") {
              alert("Blank Password");
              password.style.border = "solid 1px red";
              return false;
            } 
            else {
              return true;
            }
          }
        </script>
      </form>
    </div>
    <?php
    }
?>
  </body>
</html>
