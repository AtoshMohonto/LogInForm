Registration Confirm Page

<?php
if (isset($_POST['un']) && isset($_POST['p']) ){
    $username=$_POST['un'];
    $password=$_POST['p'];
}

else{
    header("Location : reg.php");
}
?>

<h1>Username= <?php echo $username ?> </h1>
<h1>Password= <?php echo $password ?> </h1>
