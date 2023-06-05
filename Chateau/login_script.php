<?php
if (isset($_POST['login-submit'])){
    require 'dbh.php';

    $username=$_POST['userlogin'];
    $password=$_POST['passlogin'];
    $sql="SELECT * FROM login WHERE username=?";
    $stmt=mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt,$sql))
    {
        header("Location: login_page.php?error=sqlerror");
        exit();
    }
    else{
        mysqli_stmt_bind_param($stmt,"s",$username);
        mysqli_stmt_execute($stmt);
        $result=mysqli_stmt_get_result($stmt);
        if($row=mysqli_fetch_assoc($result))
        {
            $pwdcheck=password_verify($password,$row['pass']);
            if($pwdcheck==false){
                header("Location: login_page.php?error=wrongpassword");
                exit();
            }
            else if($pwdcheck==true){
                session_start();
                $_SESSION['userID']=$row['id'];
                $_SESSION['userUid']=$row['username'];
                header("Location: index.php?login=success");
                exit();
            }
            else{
                header("Location: login_page.php?error=wrongpassword");
                exit();
            }
        }
        else{
            header("Location: login_page.php?error=nouser");
            exit();
        }
    }
}
else{
    header("Location: login_page.php");
    exit();
}