<!DOCTYPE html>
<html>
    <head>
    <link rel="stylesheet" type="text/css" href="mystyle.css">
    <style>
        div {
            text-align: center;
            background-color:white;
            padding-left:20px;
            padding-top:16px;
            padding-right:20px;
            padding-bottom:16px;
            opacity:0.7;
            font-family:Arial, Helvetica, sans-serif;
            width: 680px;
            position:relative;
            left:270px;
            top:150px;
        }
        /* body {color: white;} */
    </style>
    </head>
<body>
<div>
<b>
<?php
$server = "localhost";
$username = "root";
$password = "" ;
// $dbname = "emp" ;
            if(isset($_POST['submit'])){

                if($_SERVER["REQUEST_METHOD"] == "POST"){

                    $board = $_POST['board'];
                    $main_1 = $_POST['main_1'] ;
					$main_2 = $_POST['main_2'];
					$adv = $_POST['adv'];
					$vit = $_POST['vit'];
                    $bits = $_POST['bits'];
                    $srm = $_POST['srm'];

                    if($board<60)
						echo "Colleges won't accept your application";
                    else if($board>100)
                        echo "Refill the form with correct board percentage";
					else{
                        if ($main_1 > $main_2)
                            $jee = $main_1;
                        else
                            $jee = $main_2;

                        $avg = (($board*60) + ((($jee*100)/360)*40))/100;

						if($adv<15000)
							echo "You are eligible to apply for Indian Institute of Technology<br><br>";
						if($avg>60)
							echo "You are eligible to apply for National Institute of Technology<br><br>";
						if($bits<28000)
							echo "You are eligible to apply for Birla Institute of Technology and Science<br><br>";
						if($srm<14000)
							echo "You are eligible to apply for Sri Ramaswamy Memorial<br><br>";
						if($vit<80000)
							echo "You are eligible to apply for Vellore Institute of Technology<br><br>";
                    }
                }
            }
            
        ?>
</b>
</div>
</body>
</html>