<?php
echo "<head><title>Pesanan</head></title>";
$tanggal = date("Y-m-d");
$nama= $_POST['nama'];
$alamat= $_POST['alamat'];
$pesan= $_POST['pesan'];
$jumlah= $_POST['jumlah'];
$catatan= $_POST['catatan'];
$fp = fopen("pesanan.txt", "a+");
fputs($fp, "$tanggal|$nama|$alamat|$pesan|$jumlah|$catatan\n");
fclose($fp);

echo "Terimakasih Telah memesan. jika ingin memesan lagi, klik 'Home'<br>";
echo "<a href=bangunan.html>Home</a><br>";
echo "<a href=lihat.php> Lihat Pesanan</a><br>";
?>