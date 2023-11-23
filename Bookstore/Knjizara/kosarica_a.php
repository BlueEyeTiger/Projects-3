
<?php

session_start();

$connect = mysqli_connect("localhost","root","","knjiga");

if (isset($_POST['dodaj_u_kosaricu'])) {
    if (isset($_SESSION['kosarica'])) {
            $session_array_id = array_column($_SESSION['kosarica'], "id");

            if(!in_array($_GET['id'], $session_array_id)){
                $session_array = array(
                    'id' => $_GET['id'],
                    'naziv' => $_POST['naziv'],
                    'cijena' => $_POST['cijena'],
                    'kolicina' => $_POST['kolicina'],
                );
                $_SESSION['kosarica'][] = $session_array;
            }
    }else{    
        $session_array = array(
            'id' => $_GET['id'],
            'naziv' => $_POST['naziv'],
            'cijena' => $_POST['cijena'],
            'kolicina' => $_POST['kolicina'],
        );
        $_SESSION['kosarica'][] = $session_array;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 
    <link rel="stylesheet" href="style.css">

<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> 

    <title>Kosarica</title>


<style>
body {
  background:beige;
  font-family: 'Poppins', sans-serif;
}

</style>

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


<div class="container-fluid">
    <div class="col-md-12">
        <div class="row">
            <div class="col-md-6">
                <h2 class="text-center"> Košarica: </h2>
                    <div class="col-md-12">
                    <div class="row">

    <?php
            $query = "SELECT * FROM knjiga";
            $result = mysqli_query($connect, $query);
            while($row = mysqli_fetch_array($result)) {?>

            <div class="col-md-4">
                <form method="post" action="kosarica_a.php?id=<?=$row['id']?>">
                    <img src="images2/<?= $row['fotografija'] ?>" style ='height: 150px;'>             
                    <h5 class="text-center"><?= $row ['naziv'];?></h5>
                    <h5 class="text-center" > € <?= number_format($row['cijena'],2);?></h5>     
                    <input type="hidden" name="naziv" value="<?= $row ['naziv']?>">
                    <input type="hidden" name="cijena" value="<?= $row ['cijena']?>">
                    <input type="number" name="kolicina" value="1" class="form-control">             
                    <input type="submit" name="dodaj_u_kosaricu" class="btn btn-primary btn-block my-2" value="Dodaj u košaricu">
                </form>
            </div>                 

    <?php } 
        ?>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
            <h2 class="text-center"> Artikli u vašoj košarici: </h2>
               
               <?php                
                $total = 0;
                $output = "";
                $output .= "                
                <table class = 'table table-bordered table-striped'>
                <tr>
                <th>Šifra</th>
                <th>Naziv</th>
                <th>Cijena</th>
                <th>Količina</th>
                <th>Ukupna cijena</th>
                <th></th>
                </tr>            
                ";                            
                if(!empty($_SESSION['kosarica'])){                    
                    foreach ($_SESSION['kosarica']as $key => $value){                            
                    $output .= "                    
                    <tr>
                    <td>".$value['id']."</td>
                    <td>".$value['naziv']."</td>
                    <td>".$value['cijena']."</td>
                    <td>".$value['kolicina']."</td>
                    <td> € ".number_format($value['cijena'] * $value['kolicina'],2)."</td>  
                    <td>                    
                        <a href ='kosarica_a.php?action=remove&id=".$value['id']."'>
                        <button class ='btn btn-danger btn-block'> Ukloni </button>
                        </a>                    
                    </td>                    
                    ";                
                        $total = $total + $value['kolicina'] * $value['cijena'];
                }            
                $output .="
                  <tr>
                  <td colspan='3'></td>
                  <td><b>Ukupna cijena</b></td>
                  <td>€ ".number_format($total,2)."</td>              
                  <td>
                  <a href ='kosarica_a.php?action=clearall'>
                        <button class = 'btn btn-warning btn-block'> Ukloni sve </button>
                        </a>                    
                    </td>                    
                  </tr>
                ";
                }
                echo $output;
                ?>               
            </div>
        </div>
    </div>
</div>

<?php
if (isset($_GET['action'])) {    
    if ($_GET['action'] == "clearall") {
    unset($_SESSION['kosarica']);   
    }        

 if ($_GET['action'] == "remove") {
    foreach ($_SESSION['kosarica']as $key => $value){  
    if($value['id'] == $_GET['id']){
        unset($_SESSION['kosarica'][$key]);
    }
    }
 }
}
?>
</body>
</html>