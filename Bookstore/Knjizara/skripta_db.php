<?php
function connection(){   
    $server = "127.0.0.1";
    $username = "root";
    $password = "";
    $database = "registracija";
    
    $conn = mysqli_connect($server, $username, $password, 
    $database) or die("Nije spojeno na bazu!");
    return $conn;
}

function spremiUpit($ime,$prezime,$ulica,$grad,$datum,$email,$username,$password1,$password2) {  
    $conn = connection();
    $query = "INSERT INTO registracija (id,ime,prezime,ulica,grad,datum,email,username,password1,password2) 
    VALUES"."(NULL, '$ime', '$prezime', '$ulica', '$grad', '$datum', '$email', '$username', '$password1', '$password2');";
    mysqli_set_charset($conn,"utf8");
    $res = mysqli_query($conn, $query);  
    mysqli_close($conn);
}
?>