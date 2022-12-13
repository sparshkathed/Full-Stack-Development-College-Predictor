<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up</title>
  </head>
  <style>
    body {
      background-image: url("clg4.jpg");
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      background-attachment: fixed;
      object-fit: cover;
    }
    .signup {
      border: none;
      border-style: outset;
      background-color: rgba(234, 225, 225, 0.893);
      height: 320px;
      width: 300px;
      border-radius: 10px;
      position: absolute;
      top: 16%;
      left: 37%;
      padding: 25px;
      box-shadow: 0px 0px 30px rgba(1, 0, 0, 0.989);
    }
    #username{
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
    input[type="email"] {
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
    #submit {
      background-color: gray;
      border: none;
      height: 35px;
      width: 99%;
      margin-top: 30px;
    }
    input[type="submit"]:hover {
      color: white;
      box-shadow: 0px 0px 5px black;
    }
    a:hover {
      color: rgba(255, 0, 0, 0.61);
    }
    /*.form {
        border: none;
        border-style: outset;
        background-color: rgba(234, 225, 225, 0.893);
        height: 100px;
        width: 300px;
        border-radius: 10px;
        position: absolute;
        top: 30%;
        left: 37%;
        padding: 25px;
        box-shadow: 0px 0px 30px rgba(1, 0, 0, 0.989);
      }*/
  </style>
  <body>
    <?php
    $con = mysqli_connect("localhost","root","Sparsh@17","sparsh");
    // Check connection
    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
       
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        // echo $username;
        $email    = stripslashes($_REQUEST['s_email']);
        $email    = mysqli_real_escape_string($con, $email);
        // echo $email;
        $password = stripslashes($_REQUEST['s_pass']);
        $password = mysqli_real_escape_string($con, $password);
        // echo $password;
        // $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username, password, email) VALUES ('$username', '" . md5($password) . "', '$email')";
        $result   = mysqli_query($con, $query);
        echo $result;
        if ($result) {
            echo "<div class='signup'>
                  <h3>You have registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='signup'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
    <div class="signup">
      <h2 style="color: black; font-family: 'Times New Roman', Times, serif">
        Sign Up
      </h2>
      <form class="form" onsubmit="return validate()" name="login">
      <input
          type="text"
          name="username"
          id="username"
          placeholder="USERNAME"
        />
        <input type="email" name="s_email" id="s_email" placeholder="EMAIL" />
        <input
          type="password"
          name="s_pass"
          id="s_pass"
          placeholder="PASSWORD"
        />
        <label
          id="lblpass"
          style="color: rgb(186, 43, 43); visibility: hidden; font-size: 12px"
          >Give a strong password</label
        >

        <input type="submit" id="submit" value="Sign Up" />
        <p id="login">
          Already have an acount? <a href="login.php">Login Here</a>
        </p>
      </form>
    </div>
    <?php
    }
?>
    <script>
      function validate() {
        var email = document.getElementById("s_email");
        var password = document.getElementById("s_pass");
        var username = document.getElementById("username");
        // var passw = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#\$%\^&\*])(?=.{8,})/;

        if (email.value.trim() == "") {
          alert("Please enter the mail Id");
          email.style.border = "solid 1px red";
          return false;
        } else if (password.value.trim() == "") {
          alert("Blank Password");
          password.style.border = "solid 1px red";
          return false;
        } 
        // else if (!password.value.match(passw)) {
        //   alert("Weak password");
        //   password.style.border = "solid 2px red";
        //   document.getElementById("lblpass").style.visibility = "visible";
        //   return false;
        // } 
        else if (username.value.trim() == "") {
          alert("Enter Username");
          return false;
        } 
        else {
          return true;
        }
    }
    </script>
  </body>
</html>
