<?php
$conn = mysqli_connect("localhost", "root", "", "productsdb");

if (!$conn)
    {
        die("Connection Failed: " . mysqli_connect__error());
    }
?>