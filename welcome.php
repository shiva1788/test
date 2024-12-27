<?php
$uname = "admin";
$pwd = "admin";
session_start();
if(isset($_SESSION['uname'])){
    echo "<h1>Welcome ".$_SESSION['uname']."</h1>";
    echo" <a href='logout.php'><input type=button value=logout name=logout>";
} 
else{
    // if($_POST['uname']==$uname && $_POST['pwd'] == $pwd){
    //     $_SESSION['uname'] = $uname;
    //     echo "<script>location.href='welcome.php'</script>";
    
        echo "<script>alert('username or password incorrect!')</script>";
        echo "<script>location.href='login.php'</script>";
    
}
?>