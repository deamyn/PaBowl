<?php

$conn = mysqli_connect("localhost", "root", "", "pabowl");

if (!$conn) {
    die("Koneksi Gagal: " . $conn->connect_error);
}
