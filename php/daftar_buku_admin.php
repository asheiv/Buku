<?php
error_reporting(E_ALL);

$db = mysqli_connect("localhost","root","","maker");
$sql = "SELECT * FROM info_buku";
$result = mysqli_query($db, $sql);
while ($row = mysqli_fetch_array($result))
{ 
echo "<table align='center'>";
echo "<tr><th colspan='7'>Daftar Buku</th></tr>";
echo "<tr><td colspan='7'><hr></td></tr>";
echo "<tr><td>ISBN</td><td>Nama Buku</td><td>Penulis</td><td>Penerbit</td><td>Tanggal Terbit</td><td>Harga</td><td>Cover</td></tr>";
echo "<tr>";
echo "<td>".$row['no_isbn']."</td>";
echo "<td>".$row['nama_buku']."</td>";
echo "<td>".$row['penulis']."</td>";
echo "<td>".$row['penerbit']."</td>";
echo "<td>".$row['tanggal_terbit']."</td>";
echo "<td>".$row['harga_jual']."</td>";
echo "<td><img src='images/".$row['image']."'></td>";
echo "</tr>";
echo "</table>";

} ?>
 
