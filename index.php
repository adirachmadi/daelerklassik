<?php
include("konek.php");
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
body {margin: 0;}

ul.topnav {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

ul.topnav li {float: left;}

ul.topnav li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

ul.topnav li a:hover:not(.active) {background-color: #3cb371;}

ul.topnav li a.active {background-color: gainsboro;text-decoration-color: green;}
ul.topnav li.right {float: right;}

@media screen and (max-width: 600px) {
  ul.topnav li.right, 
  ul.topnav li {float: none;}
}
</style>
</head>
<body>

<ul class="topnav">
  <li class="right"><a href="logout.php">Logout</a></li>
  <li class="right"><p style=color:#ffffff>Selamat Datang<?php// $_POST["username"] ?></p></li>
  <li><a href="tambah.php">[+] Tambah.</a><li>
</ul>

<br>
<div align="center" >
<table width="70%" border="2" >
<tr>
<td>Produk</td>
<td>Gambar</td>
<td>Deskripsi</td>
<td>Harga</td>

</tr>
<?php
$result = $db->query('SELECT * FROM workshop');

while($row = $result->fetch()) {
  echo"<tr>";
  echo "<td>".$row['produk']."</td>";
  echo "<td>".$row['gambar']."</td>";
  echo "<td>".$row['diskripsi']."</td>";
  echo "<td>".$row['harga']."</td>";
  echo"</tr>";
}

?>
</table>
</div>
</body>
</html>
