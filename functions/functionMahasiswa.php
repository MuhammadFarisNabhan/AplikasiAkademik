<?php 
    include 'connection.php';

function tambah($data){
    global $conn;

    $npm = htmlspecialchars($data["npm"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $alamat = htmlspecialchars($data["alamat"]);
    
    $query = "INSERT INTO mahasiswa
                VALUES
                ('', '$npm', '$nama', '$email', '$alamat') 
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function ubah($data){
    global $conn;

    $id = $data["id"];
    $npm = htmlspecialchars($data["npm"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $alamat = htmlspecialchars($data["alamat"]);
    
    $query = "UPDATE mahasiswa SET
                npm = '$npm',
                nama = '$nama',
                email = '$email',
                alamat = '$alamat'
              WHERE id = '$id';  
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id){
    global $conn;

    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($conn); 
}

function cekDataTranskrip($npm){
    global $conn;
    $id_prodi = "SELECT mahasiswa.id_program_studi FROM mahasiswa WHERE npm=$npm";
    // $nama_prodi = "SELECT * FROM program_studi WHERE id_program_studi=$id_prodi";
    $nama_matakuliah = "SELECT * FROM matakuliah WHERE id_program_studi=$id_prodi";

    $no_krs = "SELECT * FROM krs WHERE npm=$npm";
    $khs = "SELECT * FROM khs WHERE no_krs=$no_krs";

    $result = mysqli_query($conn, $nama_matakuliah);
    $result2 = mysqli_query($conn, $khs);

    if(mysqli_num_rows($result) == 0 ){
        echo "<script>
        alert('Data Transkrip Mahasiswa Tidak Ditemukan');
        document.location.href = 'index.php';
        </script>";
    } else {
        return $result;
    }
}

function historyNilai($thakad, $smstr, $perkuliahan){
    global $conn;

    session_start();

    if(isset($_POST['browse'])){
        $query = "SELECT * FROM historyNilai WHERE tahun_akademik=$thakad AND semester=$smstr AND perkuliahan=$perkuliahan";
        $result = mysqli_query($conn, $query);
        header('Location: ../Views/historyNilai.php');
        if(mysqli_num_rows($result) == 0){
            echo "<script>
            alert('Data History Nilai Kosong')";
        } else {
            return $result;
        }
    } else {
        echo "<script>
            alert('Kesalahan Sistem! Coba Lagi Nanti...');
        </script>";
    }


}

function jadwalProdi($npm){
    global $conn;
    $query = "SELECT * FROM jadwalProdi WHERE npm=$npm";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) == 0){
        echo "<script>
        alert('Data Jadwal Prodi Mahasiswa Tidak Ditemukan');
        document.location.href = 'index.php';
        </script>";
    } else {
        return $result;
    }
}

function jadwalPribadi($npm, $kategori){
    global $conn;
    $query = "SELECT * FROM jadwalPribadi WHERE npm=$npm AND kategori=$kategori";
    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result) == 0){
        echo "<script>
        alert('Data Jadwal Pribadi Mahasiswa Tidak Ditemukan');
        document.location.href = 'index.php';
        </script>";
    } else {
        return $result;
    }
}

function mengisiKRS($npm, $kdMataKuliah){
    global $conn;

}

function jadwalPA($npm, $nid){
    global $conn;
}

function cetakKRS_KPU($npm){
    global $conn;
}

function dataPribadi($npm){
    global $conn;
}

function kuesionerDosen($npm, $nid){
    global $conn;
}

function kuesionerKepuasan($npm,){
    global $conn;
}

function kehadiranKuliah($thakad, $smstr, $perkuliahan){
    global $conn;
}

function rencanaPembelajaran($kdMataKuliah){
    global $conn;
}

function nilaiSemesterAktif($npm){
    global $conn;
}

function dataKeuangan($thakad, $smstr, $perkuliahan){
    global $conn;
}

?>