<?php
    session_start();
    $message="";
    if(count($_POST)>0) {
        $con = mysqli_connect('localhost','root','','admission-cell') or die('Unable To connect');
        $result = mysqli_query($con,"SELECT * FROM user WHERE username='" . $_POST["username"] . "' and password = '". $_POST["password"]."'");
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
            $_SESSION["username"] = $row['username'];
            $_SESSION["password"] = $row['password'];
        } else {
            $message = "Username or Password incorrect.\\nTry again.";
            echo "<script type='text/javascript'>alert('$message'); window.location = 'login.php';</script>";
        }
    }
    if(isset($_SESSION["username"])) {
        header("Location:dashboard.php");
    }
?>