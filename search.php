<?php
// Koneksi ke database (pastikan Anda telah mengatur koneksi ke database sebelumnya)
include "koneksi.php";

// Inisialisasi variabel untuk menyimpan kata kunci pencarian
$keyword = "";

// Periksa apakah ada parameter pencarian yang dikirimkan melalui URL
if(isset($_GET['keyword'])) {
    // Jika ada, simpan nilai parameter pencarian ke variabel $keyword
    $keyword = $_GET['keyword'];

    // Lakukan query pencarian data berdasarkan kata kunci
    $sql = "SELECT * FROM foto,user WHERE foto.userid=user.userid AND (judulfoto LIKE '%$keyword%' OR deskripsifoto LIKE '%$keyword%' OR namalengkap LIKE '%$keyword%')";
    $result = mysqli_query($conn, $sql);
} else {
    // Jika tidak ada parameter pencarian, tampilkan semua data
    $sql = "SELECT * FROM foto,user WHERE foto.userid=user.userid";
    $result = mysqli_query($conn, $sql);
}

// Tampilkan hasil pencarian atau semua data
if(mysqli_num_rows($result) > 0) {
    echo "<table>";
    echo "<tr><th>Judul Foto</th><th>Deskripsi</th><th>Foto</th><th>Nama Uploader</th><th>Jumlah Like</th><th>Lihat Komentar</th><th>Aksi</th></tr>";
    while($data=mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>".$data['judulfoto']."</td>";
        echo "<td>".$data['deskripsifoto']."</td>";
        echo "<td><img src='gambar/".$data['lokasifile']."' width='200px'></td>";
        echo "<td>".$data['namalengkap']."</td>";
        echo "<td>";
        $fotoid=$data['fotoid'];
        $sql2=mysqli_query($conn,"select * from likefoto where fotoid='$fotoid'");
        echo mysqli_num_rows($sql2);
        echo "</td>";
        echo "<td><a href='lihatkomentar.php?fotoid=".$data['fotoid']."'>Lihat Komentar</a></td>";
        echo "<td><a href='like.php?fotoid=".$data['fotoid']."'>Like</a> <a href='komentar.php?fotoid=".$data['fotoid']."'>Komentar</a></td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Tidak ada data yang ditemukan.";
}

// Tutup koneksi database
mysqli_close($conn);
?>
