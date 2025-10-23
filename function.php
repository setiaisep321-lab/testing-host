<?php
$conn = mysqli_connect("localhost", "root", "kapalapi", "tk_sasfa");
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
