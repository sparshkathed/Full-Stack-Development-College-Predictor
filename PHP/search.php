<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>display</title>
    <link rel="stylesheet" href="collegeinfo.css">
</head>
<body>
    <div id="college">
        <?php
         echo"<div class='bmk'>";
        if(isset($_POST['college'])){
            include_once('config.php');
            $name=$_POST['search'];
           
            
                echo'<div id="newimg">';
                $sm="img/".$name.'.png';
                echo'<img src='."$sm".'>';
                echo'</div>';
                echo'</div>';
                

                

                $sql="select * from collegeinfo where name = '$name'";
                $result = mysqli_query($mysqli, $sql);
                if(mysqli_num_rows($result)>0){
                
                    $row = mysqli_fetch_assoc($result);
                    setcookie('college',$name);
                    echo'<table class="record" border=1px>';
                    echo'<tr>'.'<td>'.'Name'.'</td>'.'<td>'.$row['name'].'</td>'.'</tr>';
                    echo'<tr>'.'<td>'.'cutoff'.'</td>'.'<td>'.$row['cutoff'].'</td>'.'</tr>';
                    echo'<tr>'.'<td>'.'fees'.'</td>'.'<td>'.$row['fees'].'</td>'.'</tr>';
                    echo'<tr>'.'<td>'.'place'.'</td>'.'<td>'.$row['place'].'</td>'.'</tr>';
                   echo '</table>';
                   
                }
                $sql="select * from feest where Name = '$name'";
                $result = mysqli_query($mysqli, $sql);
                if(mysqli_num_rows($result)>0){
                    $row = mysqli_fetch_assoc($result);
                    
                    echo'<table class="record" border=1px>';
                    // echo'<tr>'.'<td>'.'Name'.'</td>'.'<td>'.$row['Name'].'</td>'.'</tr>';
                    echo'<tr>'.'<td>'.'CautionMoney'.'</td>'.'<td>'.$row['CautionMoney'].'</td>'.'</tr>';
                    echo'<tr>'.'<td>'.'OneTimeFees'.'</td>'.'<td>'.$row['OneTimeFees'].'</td>'.'</tr>';
                    echo'<tr>'.'<td>'.'TuitionFees'.'</td>'.'<td>'.$row['TuitionFees'].'</td>'.'</tr>';
                    echo'<tr>'.'<td>'.'AnnualFees'.'</td>'.'<td>'.$row['AnnualFees'].'</td>'.'</tr>';
                   echo '</table>';
                   
                }


                echo '</div>';
        }

        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            // collect value of input field
            include_once('config.php');
            $name = $_REQUEST['name'];
            echo'<div id="newimg">';
            $sm="img/".$name.'.png';
            echo'<img src='."$sm".'>';
            $name=strtoupper($name);
            echo "<p class='clr'> $name INSTITUTE OF TECHNOLOGY </p>";
           
            echo'</div>';
            echo'</div>';

            $sql="select * from collegeinfo where name = '$name'";
            $result = mysqli_query($mysqli, $sql);
            if(mysqli_num_rows($result)>0){
            // echo $result['isbn']." ".$result['name']." ".$result["author"]." ".$result['cost'];
                $row = mysqli_fetch_assoc($result);
                setcookie('college',$name);
                echo'<table class="record" border=1px>';
                echo'<tr>'.'<td>'.'Name'.'</td>'.'<td>'.$row['name'].'</td>'.'</tr>';
                echo'<tr>'.'<td>'.'cutoff'.'</td>'.'<td>'.$row['cutoff'].'</td>'.'</tr>';
                echo'<tr>'.'<td>'.'fees'.'</td>'.'<td>'.$row['fees'].'</td>'.'</tr>';
                echo'<tr>'.'<td>'.'place'.'</td>'.'<td>'.$row['place'].'</td>'.'</tr>';
               echo '</table>';
            }
            $sql="select * from feest where Name = '$name'";
            $result = mysqli_query($mysqli, $sql);
            if(mysqli_num_rows($result)>0){
            // echo $result['isbn']." ".$result['name']." ".$result["author"]." ".$result['cost'];
                $row = mysqli_fetch_assoc($result);
                
                echo "<p><b>FEES STRUCTURE</b>  </p>";
                echo'<table class="record" border=1px>';
                // echo'<tr>'.'<td>'.'Name'.'</td>'.'<td>'.$row['Name'].'</td>'.'</tr>';
                echo'<tr>'.'<td>'.'CautionMoney'.'</td>'.'<td>'.$row['CautionMoney'].'</td>'.'</tr>';
                echo'<tr>'.'<td>'.'OneTimeFees'.'</td>'.'<td>'.$row['OneTimeFees'].'</td>'.'</tr>';
                echo'<tr>'.'<td>'.'TuitionFees'.'</td>'.'<td>'.$row['TuitionFees'].'</td>'.'</tr>';
                echo'<tr>'.'<td>'.'AnnualFees'.'</td>'.'<td>'.$row['AnnualFees'].'</td>'.'</tr>';
               echo '</table>';
            }


            echo '</div>';
          }
        ?>
      <div class='links'>
        <div id="cuttoff19" class='linkitems'>
            <a href="#">Cuttoff-19</a>
        </div>
        <div id="cuttoff20" class='linkitems'>
            <a href="#">Cuttoff-20</a>
        </div>
        <div id="cutoff21" class='linkitems'><a href="#">Cuttoff-21</a></div>
         </div>
         
    </div>
    <form action="reviews.php" method="post" id='rev'>
        <input type="submit" value="Show Reviews" name='rev' class='btn'>
    </form>
  
</body>

</html>