<?php
include("konek.php");
?>
<!DOCTYPE html>
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
.b{
  text-align: center;
  text-decoration: underline;
}
</style>
</head>
<body>

<ul class="topnav">
  <li><a href="about.php">About</a></li>
  <li><a href="beranda.php">HOME</a></li>
  <li class="right"><a href="login.php">Masuk</a></li>
</ul>

<h1 class="b"> Daeler Klassik </h1>

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
<p>Email :<br>1. Adirachmadi387@gmail.com<br>2. Febryriiani440@gmail.com</p>
<p style=text-align:center>© COPYRIGHT Pengweb 2019.</p>


</body>
</html>
