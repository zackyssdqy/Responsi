<?php
echo "<center>";
echo "<h1>Table Pesanan</h1>";
echo "<a href=bangunan.html>HOME</a><br/><br/>";
$fp = fopen("pesanan.txt", "r");
echo "<table border=1 >";

echo "<tr>
    <th>Tanggal</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Pesanan</th>
    <th>Jumlah</th>
    <th>Catatan</th>
</tr>";

while ($isi = fgets($fp, 200)) {
    $pisah = explode("|", $isi);
    echo "<tr>
    <td>$pisah[0]</td>
    <td>$pisah[1]</td>
    <td>$pisah[2]</td>
    <td>$pisah[3]</td>
    <td>$pisah[4]</td>
    <td>$pisah[5]</td>
  </tr>";
}

echo "</table>";
echo "</center>";
?>