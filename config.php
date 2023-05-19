<?php
$host = mysqli_connect("localhost", "root", "", "db_kampus_merdeka");
if (mysqli_connect_errno()) {
    echo "Connection Database Error : " . mysqli_connect_errno();
}