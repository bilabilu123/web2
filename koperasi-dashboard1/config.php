

<?php
$host = "localhost";     // server database
$user = "root";          // default user XAMPP
$pass = "";              // password kosong untuk root di XAMPP
$db = "dbkoperasi";      // ini harus sama dengan nama database hasil import

$conn = mysqli_connect($host, $user, $pass, $db);

// Cek koneksi
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
