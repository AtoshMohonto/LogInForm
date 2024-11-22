Registration Confirm Page
<br>
<?php
if (isset($_POST['un']) && isset($_POST['p']) ){
    $un=$_POST['un'];
    $p=$_POST['p'];
    
    $server ="localhost";
    $username="root";
    $password="";
    $database="test";

    //$conn = mysqli_connect("localhost","root","",$test);
    $conn = mysqli_connect($server,$username,$password,$database);
        if($conn){
        // echo "Connection Successfull";
        $sql="INSERT INTO user(UN,PASS) VALUES('$un','$p')";
        $r=mysqli_query($conn,$sql);
        if($r){
            echo "Registration Successfull";
        }
    }
}

else{
    header("Location : reg.php");
}
?>

<!-- <h1>Username= <?php echo $username ?> </h1>
<h1>Password= <?php echo $password ?> </h1> -->
