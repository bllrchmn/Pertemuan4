<?php
if(!empty($_POST["username"])&& empty(!$_POST["password"])) {
    
    $username = "billal";
    $password = "123";

    if($_POST['username'] == $username and $_POST['password'] == $password) {
        
        echo "<h1>PANASSSSS!!!!!</h1>";
    }else {
        header('location:login.php');
        
}

}
else {
    header('location:login.php');
}

?>