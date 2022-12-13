<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>display</title>
    <link rel="stylesheet" href="collegerev.css">
</head>
 
<body></body>
<div id="reviews">
    <?php
    if(isset($_POST['rev'])){
        include_once('config.php');
        $name=$_COOKIE['college'];
       
        $sql="select * from review where name = '$name'";
        $result=mysqli_query($mysqli,$sql);
        if(mysqli_num_rows($result)>0){
        while($data = mysqli_fetch_array($result)){
            echo "<div class='items'>";
                echo 'User ' . ' : '. $data['message'];
            echo "</div>";
        }
    }
    else{ 
        echo "not found";
    }
    }
    ?>
      <?php
    if(isset($_POST['postr'])){
        include_once('config.php');
        $name=$_COOKIE['college'];
        $mssg=$_POST['postrev'];
        $sql="insert into review values ('$name','$mssg')";
        $result=mysqli_query($mysqli,$sql);
        $sql="select * from review where name = '$name'";
        $result=mysqli_query($mysqli,$sql);
        if(mysqli_num_rows($result)>0){
        while($data = mysqli_fetch_array($result)){
            echo "<div class='items'>";
                echo 'User'.':'. $data['message'];
            echo "</div>";
        }
    }
    }
    ?>
    <?php
    if(isset($_POST['back'])){
        header('location:index.php');
    }
    ?>
    </div>
<div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Feedback Form</h3>
                        <p>Fill in the data below.</p>
                            <div class="form-button mt-3">
                            <form action="reviews.php" method="post" id='frm'>
                                <textarea name="postrev" id="" cols="30" rows="10"></textarea>
                                <button id="submit" type="submit" class="btn btn-primary" value="Post Review" name='postr'>Post Review</button>
                            </form>
                            <form action="reviews.php" method='post'>
                                <button id="submit" type="submit" class="btn btn-primary" value="back" name='back'>Back</button>
                            </form>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>