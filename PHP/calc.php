<!DOCTYPE html>
<html>
    <head>
        <title>Calculator</title>
        <link rel="stylesheet" type="text/css" href="mystyle.css">
        <script>
            function checksubmit(){
                if (document.info.board.value==""){
                    alert("Please enter your Boards percentage");
                    return false;
                }

                if (document.info.board.value > 100){
                    alert("Please enter correct Boards percentage");
                    return false;
                }

                if (document.info.main_1.value==""){
                    alert("Please enter your JEE Mains 1 score");
                    return false;
                }

                if (document.info.main_1.value > 300){
                    alert("Please enter correct JEE 1 score");
                    return false;
                }

                if (document.info.main_2.value==""){
                    alert("Please enter your JEE Mains 2 score");
                    return false;
                }

                if (document.info.main_2.value > 300){
                    alert("Please enter correct JEE 2 score");
                    return false;
                }

                if (document.info.adv.value==""){
                    alert("Please enter your JEE Advance rank");
                    return false;
                }

                if (document.info.vit.value==""){
                    alert("Please enter your VITEEE rank");
                    return false;
                }

                if (document.info.bits.value==""){
                    alert("Please enter your BITSAT rank");
                    return false;
                }

                if (document.info.srm.value==""){
                    alert("Please enter your SRMJEEE rank");
                    return false;
                }
            }
        </script>
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

            <form name="info" onsubmit="checksubmit()" action="avg.php" method="post" >
                <input type="text" id="board" name="board" placeholder="Board Percentage"><br><br>
                <input type="text" id="main_1" name="main_1" placeholder="JEE Main-1 Score"><br><br>
                <input type="text" id="main_2" name="main_2" placeholder="JEE Main-2 Score"><br><br>
                <input type="text" id="adv" name="adv" placeholder="JEE Advanced Rank"><br><br>
                <input type="text" id="vit" name="vit" placeholder="VITEEE Rank"><br><br>
                <input type="text" id="bits" name="bits" placeholder="BITSAT Rank"><br><br>
                <input type="text" id="srm" name="srm" placeholder="SRMJEEE Rank"><br><br><br>
                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                <button onsubmit="checksubmit()" type="submit" name="submit" formaction="avg.php">
                        Calculate
                </button>
                <!-- <input type="submit" value="Calculate"> -->
            </form>
        </div>

        <footer>
                <p>Author: Devshree J Maniar<br>
                <a href="devshree@example.com">devshree@example.com</a></p>
        </footer>

        <!-- php -->
    </body>
</html>