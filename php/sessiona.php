<?php 
    session_start();
    if(isset($_SESSION["sida"])){}
    else {
        header("Location: ../index.php", TRUE, 301);
        die();
    }
    
    $now = time();
    if($now > $_SESSION['expirea']) {
        session_unset();
        session_destroy();
        echo "<script LANGUAGE='JavaScript'>
                window.alert('Sesi habis, mohon login ulang!');
                window.location.href='../index.php';
            </script>";
        die();
    }
?>  