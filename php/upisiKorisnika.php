<?php

$conn = new mysqli("localhost", "root", "", "evidencija");
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
   $ime = $_REQUEST["ime"];
   $prezime = $_REQUEST["prezime"];
   $pol = $_REQUEST["pol"];
   $visina = $_REQUEST["visina"];
   $tezina = $_REQUEST["tezina"];
   $datumRodj = $_REQUEST["datumRodj"];
    
    $sql = "INSERT INTO korisnik(`ime`, `prezime`, `tezina`, `visina`, `datumRodj`, `pol`) VALUES ('$ime','$prezime',$tezina,$visina,'$datumRodj','$pol') ";
    $result = $conn->query($sql);
    $conn->close();
    echo json_encode(true);

