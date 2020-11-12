<html>
<head>
</head>
<body>
<p>
<a href="form_artikel.php">Buat artikel baru </a>
</p>
<br>
<?php


//buat dulu koneksi kedatabase

$dbhost = 'localhost';
$dbuser = 'root';
$dbpassword = 'root';
$dbname = 'postingan';
$koneksi = mysql_connect($dbhost,$dbuser,$dbpassword);
mysql_select_db($dbname,$koneksi);


//buat query terlebih dahulu

$query = mysql_query("SELECT * FROM tabelartikel");


//cek apakah kita sudah memposting artikel atau belum

if (mysql_num_rows($query) == 0) {


//tampilkan pesan kalau artikel belum ada

echo 'maaf, belum ada artikel';
} 
else 
{


//buat pengulangan untuk menampilkan data artikel dengan 
//menggunakan while dan definisikan kedalam variabel data

while ($data = mysql_fetch_array($query)) 
{


//kita akan menampilkan judul artikel

echo '<p><strong>'.$data['judul_artikel'].'</strong></p>';



//tampilkan tanggal pembuatan artikel
//gunakan fungsi strtotime untuk merubah bentuk date 
//kedalam bentuk string

echo '<p><em>'.date('j, F Y',strtotime($data['tgl_artikel'])).'</em></p>';



//menampilkan isi artikel yang sudah kita buat

echo '<p>'.$data['isi_artikel'].'</p>';
}
}


//tutup koneksi database

mysql_close();
?>
</body>
</html>