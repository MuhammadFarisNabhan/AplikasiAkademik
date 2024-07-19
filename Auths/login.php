<?php 
    session_start();
    include '../functions/functionMahasiswa.php';

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $npm = $_POST['npm'];
        $password = $_POST['password'];
        
        $r = login($npm,$password);

        if(login($npm,$password)){
            header("Location: ../views/dashboard.php");
        }else{
            header("Location: ../index.php?pesan=login_gagal");
        };
    }
?>