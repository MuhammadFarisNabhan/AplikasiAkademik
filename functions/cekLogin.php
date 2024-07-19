<?php
session_start();

require './connection.php';

if (isset($_POST["login"]) ) {
    
    $npm = mysqli_real_escape_string($conn, $_POST["npm"]);
    $password = $_POST["password"];

    $query = "SELECT * FROM mahasiswa WHERE npm='$npm'";
    $result = mysqli_query($conn, $query);

    //cek npm
    if (mysqli_num_rows($result) == 1){
        //cek password
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row["password"])){
            $_SESSION['npm'] = $npm;
            header("Location: ../index.php");
            exit;
        } else {                        
            echo "<script>alert('Password salah!'); window.location.href='login.php';</script>";
        }

    } else {
        header("Location:login.php?message=gagal login");
    }
}

if(isset($_POST['logout'])){
    session_destroy();
    header("Location:../login.php");
    exit;
}

?>