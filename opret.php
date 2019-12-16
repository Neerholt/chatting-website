<?php 
//Starten på min opdater kontakt oplysninger senderform code ting :)
if(isset($_POST['opret'])){

include 'databaseconn.php';
 
$brugernavn = $_POST['opretbrugernavn'];
$adgangskode = $_POST['opretadgangskode'];
$adgangskode2 = $_POST['opretadgangskode2'];


$connect = mysqli_connect($servername, $username, $password, $databasename);

if(!$connect){
    die("Connectiuon failed because" .mysqli_connect_error());
} 

$sql_tabel = "INSERT INTO `loginform`(`ID`, `brugernavn`, `adgangskode`, `adgangskode2`) VALUES (NULL,'$brugernavn','$adgangskode','$adgangskode2')";

$data = mysqli_query($connect,$sql_tabel);


header("location:user.php");

mysqli_close($connect);
}
