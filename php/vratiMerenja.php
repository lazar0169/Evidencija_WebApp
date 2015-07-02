<?php

$conn = new mysqli("localhost", "root", "", "evidencija");
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
   $id = $_REQUEST["id"];
    
    $sql = "SELECT * FROM merenje WHERE idKorisnika = $id";
    $result = $conn->query($sql);
    $res;
     $i=0;
    if($result->num_rows>0)
{
    while($row = $result->fetch_assoc())
    {
        $res[$i]["idKorisnika"]=$row["idKorisnika"];
        $res[$i]["tezina"]=$row["tezina"];
        $res[$i]["visina"]=$row["visina"];
        $res[$i]["datum"]=$row["datum"];
        $i++;
    }
}
else
{
    $res="prazno";
}


$conn->close();
    echo json_encode($res);
?>