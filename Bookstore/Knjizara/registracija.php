<?php
    $ime = $_POST["ime"];
    $prezime = $_POST["prezime"];   
    $ulica = $_POST["ulica"];
    $grad = $_POST["grad"];
    $datum = $_POST["datum"];
    $email = $_POST["email"];
    $username = $_POST["username"];
    $password1 = $_POST["password1"];
    $password2 = $_POST["password2"];  

    require("skripta_db.php");  
    spremiUpit($ime,$prezime,$ulica,$grad,$datum,$email,$username,$password1,$password2);
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
    <link rel="stylesheet" href="style.css">
    <title>Registracija</title>  

</head>

<body>
    <header>
        <div id="container">
            <div id="nav">
              <ul>
                <li><a href="index.html" >NASLOVNICA</a></li>
                <li><a href="knjige.html">KNJIGE</a></li>
                <li><a href="o_nama.html">O NAMA</a></li>
                <li><a href="registracija.html">REGISTRACIJA</a></li>
              </ul>
            </div>
          </div>
        <hr>
    </header>


    <h1 class="naslov1">BOOKSHOP B&K</h1>

    <div class="w3-container w3-blue">
        <h1>
            Uspješno ste se registrirali!
        </h1>
    </div>
  

</body>
</html>