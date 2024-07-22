<?php 
    session_start();

    include '../functions/functionMahasiswa.php';

    if(!isset($_SESSION['npm'])){
        header("Location:login.php");
        exit;
    } 

    $row = cekDataTranskrip($_SESSION['npm']);
    var_dump($row);    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>    
    <H2>Data Transkrip Akademik</H2>
    <div class="keterangan">
        <p>Total MK: </p><span></span><br>
        <p>Total SKS: </p><span></span><br>
        <p>Total Mutu: </p><span></span><br>
        <p>Total IPK: </p><span></span><br>
    </div>  
    <table border="1">
        <thead>
            <tr>
                <td>No</td>
                <td>Kode MK</td>
                <td>Nama Matakuliah</td>
                <td>SKS</td>
                <td>Nilai</td>
                <td>Mutu</td>
            </tr>
        </thead>
        <?php $i=1; ?>        
        <tbody>
            <tr>
                <td><?= $i++; ?></td>
                <td><?= $row['kode_matakuliah']; ?></td>
                <td><?= $row['nama']; ?></td>
                <td><?= $row['sks']; ?></td>
                <td><?= $row['nilai']; ?></td>
                <td></td>
            </tr>
        </tbody>     
    </table>
</body>
</html>