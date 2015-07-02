<?php
$conn = new mysqli("localhost", "root", "", "evidencija");
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
   $id = $_REQUEST["id"];
   $cena = $_REQUEST["cena"];
   $datum = $_REQUEST["datum"];
    
    $sql = "INSERT INTO `clanarine`(`cena`, `idKorisnika`, `datum`) VALUES ($cena,$id,'$datum') ";
    $result = $conn->query($sql);
    $conn->close();
    echo json_encode(true);

