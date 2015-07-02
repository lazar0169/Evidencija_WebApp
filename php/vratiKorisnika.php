
<?php

$conn = new mysqli("localhost", "root", "", "evidencija");//localhost je ime servere root username, evidencija je ime baze
    // Check connection
    if ($conn->connect_error) { // ovaj deo se postavlja za slucaj greske
        die("Connection failed: " . $conn->connect_error);
    } 
   $id = $_REQUEST['id']; //imas podatke koje si poslao php skripti iz javascripta putem ajaxa
    
    $sql = "SELECT * FROM korisnik WHERE id = $id "; 
    $result = $conn->query($sql);
    $res;
     
    if($result->num_rows>0) // da li ima rezultata
{
    $row = $result->fetch_assoc();  // zahvati jedan red rezultata
    
    //strpaj sve sto te interesuje iz rezultata u promenljivu
        $res["id"]=$row["id"];
        $res["ime"]=$row["ime"];
        $res["prezime"]=$row["prezime"];
        $res["tezina"]=$row["tezina"];
        $res["visina"]=$row["visina"];
        $res["datumRodj"]=$row["datumRodj"];
        $res["pol"]=$row["pol"];
        
        
    
}
$conn->close();//zatvori konekciju da ne bi preopteretio bazu
    echo json_encode($res); /// posalji rezultat
?>

