<?php
$conn = new mysqli("localhost", "root", "", "evidencija");
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
   $id = $_REQUEST["id"];
   $visina = $_REQUEST["visina"];
   $tezina = $_REQUEST["tezina"];
   $datum = $_REQUEST["datum"];
    
    $sql = "INSERT INTO `merenje`(`tezina`, `visina`, `idKorisnika`, `datum`) VALUES ($tezina,$visina,$id,'$datum') ";
    $result = $conn->query($sql);
    $sql1 = "UPDATE korisnik SET tezina=$tezina,visina=$visina WHERE id=$id";
    $result1 = $conn->query($sql1);
    $conn->close();
    echo json_encode(true);


