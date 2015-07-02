<?php

$conn = new mysqli("localhost", "root", "", "evidencija");
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
   $id = $_REQUEST["id"];
   
    
    $sql = "DELETE FROM `korisnik` WHERE id = $id";
    $result = $conn->query($sql);
    $conn->close();
    echo json_encode(true);
