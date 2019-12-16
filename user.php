<?php
session_start();
include 'databaseconn.php';

if(!isset($_SESSION['login'])){
    header("location:index.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>profile</title>
    </head>
    <body>
        <header>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="url">Forums</a></li>
                    <li><a href="#IdoNothingYet">Kontakt</a></li>
                    <li ><a href="#IdoNothingYet">Omkring</a></li>
                    <li><a href="url"> <?php
                     $sql_tabel = "SELECT `ID`, `brugernavn`, `adgangskode`, `adgangskode2` FROM `loginform`"; 
                     $data = mysqli_query($connect,$sql_tabel);
                     $datacheck = mysqli_num_rows($data);
                     
                     if($data){
                         while ($row = mysqli_fetch_assoc($data)){
                             echo "u/".$row['brugernavn'];
                         }  
                     }  
                     
                     ?></a></li>
                </ul>
            </nav>
        </header>
        </main>
    </body>
</html>
