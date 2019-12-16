<?php 
session_start();
/*
$hostname="localhost"; 
$username="mvi01.skp-dp.sde"; 
$password="23q3z5y5"; 
$database_name="mvi01_skp_dp_sde_dk"; 
$tabel_name="mvi01_skp_dp_sde_dk";
 * 
 */



$hostname="localhost"; 
$username="root"; 
$password=""; 
$database_name="mvi01_skp_dp_sde_dk"; 
$tabel_name="loginform"; 
 


/*
include 'databaseconn.php';
 */

$connect = mysqli_connect($hostname, $username, $password, $database_name);


if (!$connect){
    die("Connection failed: " . mysqli_connect_error ());
}


$user = $_POST ['brugernavn'];

$pass = $_POST ['adgangskode'];

 
$sqldatabase = "SELECT `ID`, `brugernavn`, `adgangskode` FROM `loginform` WHERE brugernavn = '$user' && adgangskode = '$pass'";

$outputresult = mysqli_query($connect, $sqldatabase);


$count = mysqli_num_rows($outputresult);


if($count == 1){

    $_SESSION ['login'] = 1;

    header("location:user.php");

} else {

    header("location:index.php");

}

mysqli_close($connect);