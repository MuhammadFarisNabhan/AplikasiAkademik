<?php 
    session_start();    

    if(!isset($_SESSION['npm'])){
        header("Location:login.php");
        exit;
    } 
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
            <form action="./functions/functionMahasiswa.php" method="post">
                <a href="#">
                    <button type="submit" name="cektranskrip">Data Transkrip</button>
                </a>
                <a href="#">
                    <button type="submit" name="historyNilai">Histori Nilai</button>
                </a>
                <a href="#">
                    <button type="submit" name="jadwalPribadi">Jadwal Pribadi</button>
                </a>
                <a href="#">
                    <button type="submit" name="mengikisKRS">Mengisi KRS</button>
                </a>
                <a href="#">
                    <button type="submit" name="jadwalPA">Jadwal PA</button>
                </a>
                <a href="#">
                    <button type="submit" name="beritaAcaraPA">Berita Acara PA</button>
                </a>                
                <a href="#">
                    <button type="submit" name="cetakKRS_KHS">Cetak KRS / KPU</button>
                </a>                
                <a href="#">
                    <button type="submit" name="dataPribadi">Data Pribadi</button>
                </a>                
                <a href="#">
                    <button type="submit" name="kuesionerDosen">Kuesioner Dosen</button>
                </a>                
                <a href="#">
                    <button type="submit" name="kuesionerKepuasan">Kuesioner Kepuasan</button>
                </a>                
                <a href="#">
                    <button type="submit" name="kehadiranKuliah">Kehadiran Kuliah</button>
                </a>                
                <a href="#">
                    <button type="submit" name="rencanaPembelajaran">Rencana Pembelajaran (RPS)</button>
                </a>                
                <a href="#">
                    <button type="submit" name="nilaiSemesterAktif">Nilai Semester Aktif</button>
                </a>                
                <a href="#">
                    <button type="submit" name="dataKeuangan">Data Keuangan</button>
                </a>                                
            </form>
            
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
                    <span><strong>Nama:</strong> Taufik Hidayat</span>
                    <span><strong>NPM:</strong> 217064516068</span>
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