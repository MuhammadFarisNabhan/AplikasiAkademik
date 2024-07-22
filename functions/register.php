<?php 
    session_start();

    require './connection.php';

    
if (isset($_POST["signUp"]) ) {
    $npm = strtolower(stripslashes($_POST["npm"]));
    $nama = strtolower(stripslashes($_POST["nama"]));
    $email = strtolower(stripslashes($_POST["email"]));
    $alamat = strtolower(stripslashes($_POST["alamat"]));
    $telepon = strtolower(stripslashes($_POST["telepon"]));
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $prodi = "Informatika";        

    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // cek NPM
    // $checkNPM = mysqli_query($conn,"SELECT * FROM mahasiswa WHERE npm=$npm");

    // if($npm == $checkNPM){
    //     echo "<script>alert('NPM Sudah Terdaftar. Silahkan Login...')</script>";
    //     header("Location:login.php");
    //     exit;
    // } else {
        // Query ke database untuk menambah pengguna dengan username yang diberikan
    $result = mysqli_query($conn, "INSERT INTO mahasiswa VALUES ('$npm', '$nama', '$password','$alamat','$email','$telepon','$prodi')");
    
    if($result){
        mysqli_affected_rows($conn);
        $_SESSION['npm'] = $npm;
        header("Location: ../index.php");
        exit;
    } else {
        header("Location:login.php?message=gagal daftar");
    }
    



}
?>