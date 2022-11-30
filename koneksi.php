<?php

$koneksi = mysqli_connect("localhost", "root", "", "praktikum");

if (mysqli_connect_errno()) {
    echo "koneksi gagal : " . mysqli_connect_error();
}
