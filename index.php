<?php 
    session_start();    

    include './functions/functionMahasiswa.php';        

    if(!isset($_SESSION['npm'])){
        header("Location:login.php");
        exit;
    }
    $row = dashboardMahasiswa($_SESSION['npm']);    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="./Style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="header">
        Dashboard
    </div>
    <div class="container">
        <div class="sidebar" id="sidebar">
            <a href="./Views/dataTranskrip.php">Data Transkrip</a>
            <a href="./Views/historyNilai.php">History Nilai</a>
            <a href="./Views/jadwalPribadi.php">Jadwal Pribadi</a>
            <a href="./Views/mengisiKRS.php">Mengisi KRS</a>
            <a href="./Views/jadwalPA.php">Jadwal PA</a>
            <a href="./Views/beritaAcaraPA.php">Berita Acara PA</a>                
            <a href="./Views/cetakKRS_KPU.php">Cetak KRS / KPU</a>                
            <a href="./Views/dataPribadi.php">Data Pribadi</a>                
            <a href="./Views/kuesionerDosen.php">Kuesioner Dosen</a>                
            <a href="./Views/kuesionerKepuasan.php">Kuesioner Kepuasan</a>                
            <a href="./Views/kehadiranKuliah.php">Kehadiran Kuliah</a>                
            <a href="./Views/rencanaPembelajaran.php">Rencana Pembelajaran (RPS)</a>                
            <a href="./Views/nilaiSemesterAktif.php">Nilai Semester Aktif</a>                
            <a href="./Views/dataKeuangan.php">Data Keuangan</a>                                            
            
            <form action="./functions/cekLogin.php" method="post">
                <a>
                    <button name="logout">Keluar</button>
                </a>   
            </form>            
        </div>
        <div class="content" id="content">
            <button class="toggle-btnn" onclick="toggleSidebar()">☰</button>
            <div class="profile-info">
                <img src="../Kerja_Praktek/Media/Universitas_Nasional_Logo.png" alt="Profile Picture" width="80" height="80">
                <div>                    
                    <span><strong>Nama:</strong> <?= $row['nama']; ?></span>
                    <span><strong>NPM:</strong> <?= $row['npm']; ?></span>
                    <span><strong>Prodi:</strong> Informatika</span>
                    <span><strong>Status:</strong> Aktif</span>
                    <span><strong>IPK:</strong> 3.56</span>
                    <span><strong>Saldo:</strong> 0</span>                                    
                </div>
            </div>
            <div class="actions">
                <button>Cetak KRS / KPU</button>
                <button>Data Pribadi</button>
            </div>
            <div class="info-box">
                <h3>Rencana Pembelajaran (RPS)</h3>
                <p>Informasi tentang rencana pembelajaran akan ditampilkan di sini.</p>
            </div>
            <div class="info-box">
                <h3>Nilai Semester Aktif</h3>
                <p>Informasi tentang nilai semester aktif akan ditampilkan di sini.</p>
            </div>
            <div class="info-box">
                <h3>Data Keuangan</h3>
                <p>Informasi tentang data keuangan akan ditampilkan di sini.</p>
            </div>
        </div>
    </div>
    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const content = document.getElementById('content');
            sidebar.classList.toggle('hidden');
            content.classList.toggle('expanded');
        }
    </script>
</body>
</html>