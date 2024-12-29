<!DOCTYPE html>
<html lang="en">
<head>    
    <title>Document</title>
</head>
<body>
    <center>
        <form method="POST" action="ss3.php">
            <table border="2">
            <tr><td>username:</td><td><input type="text" name="uname" placeholder="enter username" required></td></tr>
            <tr><td>password:</td><td><input type="password" name="password" placeholder="enter password" required></td></tr>
            <tr><td></td><td><input type="submit" name="submit" value="login"></td></tr>
</table>
</form>
</center>
</body>
</html>


//database
<?php
$servername="localhost";
$username="root";
$password="";
$database="shivam";
$con=mysqli_connect($servername,$username,$password,$database);
if(!$con){
    die("error detected".mysqli_error($con));
}
?>


// login php


<?php 
 include 'ss2.php';
if(isset($_POST['submit'])){
    $uname=$_POST['uname'];
    $password=$_POST['password'];
    $sql="select * from herry where name='$uname' and password='$password'";
    $que=mysqli_query($con,$sql);
    if(mysqli_num_rows($que)>0){
        echo "<script>alert('login ok')</script>";
    }else{
        echo "<script>alert('wrong username and password')</script>";
    }
}
?>



