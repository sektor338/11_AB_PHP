<?php 
$vnev = $_POST['first_name'];
$knev = $_POST['last_name'];
$email = $_POST['email'];
$lakcim = $_POST['lakcim'];
$phone = $_POST['phone'];
$datepicker = $_POST['datepicker'];
$vercsoport = $_POST['vercsoport'];
$alkohol = "";
if (isset($_POST['alkohol'])){
    $alkohol="Igen";
}
else{
    

    $alkohol ="Nem";
    
}
$hirlevel = "";
if (isset($_POST['hirlevel'])){
    $hirlevel="Igen";
}
else{

    $hirlevel ="Nem";
}
$dohanyzas = "";
if (isset($_POST['dohanyzas'])){
    $dohanyzas="Igen";
}
else{
    $dohanyzas ="Nem";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vöröskereszt köszöntő</title>
  
  <script src="https://cdn.tailwindcss.com"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/datepicker.min.js"></script>
      <link rel="icon" type="image/x-icon" href="voroskereszt.png">
      <link rel="stylesheet" href="style.css">
    </head>
<body class="bg-gradient-to-r from-neutral-50 to-emerald-400">
    <h1 align="center" class="text-6xl font-bold text-green-950">Köszönjük, hogy jelentkezett!</h1>
    <br>
    <div class="box-border h-auto  border-4 p-8 w-1/2 mx-auto w-96 border-slate-700	  border rounded-lg ">
        <strong>Vezetéknév:</strong>
        <?php
        echo $vnev;
        ?>
        <br>
         <strong>Keresztnév:</strong>
        <?php
        echo $knev;
        ?>
         <br>
         <strong>Email-cím:</strong>
        <?php
        echo $email;
        ?>
         <br>
         <strong>Lakcím:</strong>
        <?php
        echo $lakcim;
        ?>
         <br>
         <strong>Telefonszám:</strong>
        <?php
        echo $phone;
        ?>
         <br>
         <strong>Születési dátum:</strong>
        <?php
        echo $datepicker;
        ?>
         <br>
         <strong>Vércsoport:</strong>
        <?php
        echo $vercsoport;
        ?>
   <br>
         <strong>Fogyaszt-e alkoholt?</strong>
        <?php
        echo $alkohol;
        ?>
        
   <br>
         <strong>Dohányzik-e?</strong>
        <?php
        echo $dohanyzas;
        ?>
        
   <br>
         <strong>Feliratkozik-e a Magyar Vöröskereszt hírlevelére?</strong>
        <?php
        echo $hirlevel;
        ?>
    </div>
</body>
</html>