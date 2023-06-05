<?php
if (isset($_POST['signup-submit'])){
    require 'dbh.php';
    session_start();
    $username=$_POST['uid'];
    $password=$_POST['pwd'];
    $passwordrepeat=$_POST['pwd-repeat'];

    if($password!==$passwordrepeat)
    {
        header("Location: signup_page.php?error=passwordcheck&uid=".$username);
        exit();
    }
    else{

        $sql="SELECT username FROM login WHERE username=?";
        $stmt=mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt,$sql))
        {
            header("Location: signup_page.php?error=sqlerror");
            exit();

        }
        else{
            mysqli_stmt_bind_param($stmt,"s",$username);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            $resultCheck=mysqli_stmt_num_rows($stmt);
            if($resultCheck>0)
            {
                header("Location: signup_page.php?error=usertaken");
                exit();
            }
            else{
                $sql="INSERT INTO login (username , pass) VALUES (?,?)";
                $stmt=mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt,$sql))
                {
                    header("Location: signup_page.php?error=sqlerror");
                    exit();

                }else{
                    $hashedPwd=password_hash($password,PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt,"ss",$username,$hashedPwd);
                    mysqli_stmt_execute($stmt);
                    header("Location: signup_page.php?signup=success");
                    $_SESSION['errorMessage'] = true;
                    exit();
                }

            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn);

 }
else{
    header("Location: signup_page.php");
    exit();
}