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
            <a href="#">Histori Nilai</a>
            <a href="#">Jadwal Pribadi</a>
            <a href="#">Mengisi KRS</a>
            <a href="#">Jadwal PA</a>
            <a href="#">Berita Acara PA</a>
            <a href="#">Cetak KRS / KPU</a>
            <a href="#">Data Pribadi</a>
            <a href="#">Kuesioner Dosen</a>
            <a href="#">Kuesioner Kepuasan</a>
            <a href="#">Kehadiran Kuliah</a>
            <a href="#">Rencana Pembelajaran (RPS)</a>
            <a href="#">Nilai Semester Aktif</a>
            <a href="#">Data Keuangan</a>
            <a href="#">Keluar</a>
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