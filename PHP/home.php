<!DOCTYPE html>
<html>
    <head>
        <title>Calculator</title>
        <link rel="stylesheet" type="text/css" href="mystyle.css">
    </head>
    <body>

        <marquee behavior="scroll" direction="left" scrollamount="14"><i>College Rank Calculator</i></marquee>
        
        <br><br>
        <div class="div-1">
            <p>Research shows that there is only half as much as variation in student achievement between schools as there is among classrooms in the same school. If you want your child to get the best education possible, it is actually more important to get him assigned to a great teacher than to a great school.</p>
        </div>

        <div class="div-2">
            <h1>College Predictor</h1>
            <br>

            <form method="post" action="home.php">
                <input type="text" id="board" name="board" placeholder="Board Percentage"><br><br>
                <input type="text" id="main_1" name="main_1" placeholder="JEE Main-1 Score"><br><br>
                <input type="text" id="main_2" name="main_2" placeholder="JEE Main-2 Score"><br><br>
                <input type="text" id="adv" name="adv" placeholder="JEE Advanced Rank"><br><br>
                <input type="text" id="vit" name="vit" placeholder="VITEEE Rank"><br><br>
                <input type="text" id="bits" name="bits" placeholder="BITSAT Rank"><br><br>
                <input type="text" id="srm" name="srm" placeholder="SRMJEEE Rank"><br><br><br>
                <input type="submit" value="Calculate">
            </form>
        </div>

        <footer>
                <p>Author: Devshree J Maniar<br>
                <a href="devshree@example.com">devshree@example.com</a></p>
        </footer>

        <!-- php -->
        <?php
            if(isset($_POST['submit'])){

                if($_SERVER["REQUEST_METHOD"] == "POST"){

                    $board = test_input($_POST['board']);
					$main_1 = test_input($_POST['main_1']);
					$main_2 = test_input($_POST['main_2']);
					$adv = test_input($_POST['adv']);
					$vit = test_input($_POST['vit']);
                    $bits = test_input($_POST['bits']);
                    $srm = test_input($_POST['srm']);

                    if($board<60)
						echo "Colleges won't accept your application";
					else{
                        echo "Welcome";
                    }
                }
            }
        ?>
    </body>
</html>