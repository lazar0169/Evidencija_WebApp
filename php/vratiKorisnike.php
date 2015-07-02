<?php

$conn = new mysqli("localhost", "root", "", "evidencija");
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
   
    
    $sql = "SELECT * FROM korisnik ";
    $result = $conn->query($sql);
    $res;
     $i=0;
    if($result->num_rows>0)
{
    while($row = $result->fetch_assoc())
    {
        $res[$i]["id"]=$row["id"];
        $res[$i]["ime"]=$row["ime"];
        $res[$i]["prezime"]=$row["prezime"];
        $i++;
    }
}
$conn->close();
    echo json_encode($res);
?>
