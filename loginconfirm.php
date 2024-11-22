Log In Confirm Page
<br>
<?php
if(isset($_POST['un']) && isset($_POST['p']) ){
    $un=$_POST['un'];
    $p=$_POST['p'];

    echo $un;
    echo $p;
    $p=md5($p);
 




}
else{
    echo "Not set";
}
//Connect
$server ="localhost";
$username="root";
$password="";
$database="test";

//$conn = mysqli_connect("localhost","root","",$test);
$conn = mysqli_connect($server,$username,$password,$database);
    if($conn){
     echo "Connection Successfull";
     $sql="SELECT * FROM user WHERE UN='$un'";
     $r=mysqli_query($conn,$sql);
     if($r){
        echo "Founded UN";
        $row=mysqli_fetch_array($r);
        if($row['PASS']==$p){
            echo"Login Successfull";
            header("location:home.php");
        }
        else{
            echo "Incorrect Password";
        }
     }
     else{
        echo "Not Founded UN";
     }
}
?>