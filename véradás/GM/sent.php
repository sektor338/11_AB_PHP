<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Véradás | MV</title>
  <link rel="shortcut icon" href="mv.png" type="image/x-icon">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            mv: 'rgb(227,7,19)',
          }
        }
      }
    }
  </script>
  <style type="text/tailwindcss">
    .title{
      @apply font-bold
    }
  </style>
  <?php
    $vnev = htmlspecialchars($_POST["vnev"]);
    $knev = htmlspecialchars($_POST["knev"]);
    $email = htmlspecialchars($_POST["email"]);
    $phone = htmlspecialchars($_POST["telefon"]);
    $lakhey = htmlspecialchars($_POST["varos"]) . ", ". htmlspecialchars($_POST["cim"]). ", ". htmlspecialchars($_POST["areacode"]);
    $szul = htmlspecialchars($_POST["szul"]);
    $blood = htmlspecialchars($_POST["blood"]);
    $alc = htmlspecialchars(($_POST["alc"] == "igen") ? "igen" : "nem");
    $cig = htmlspecialchars(($_POST["cig"]  == "cigen") ? "igen" : "nem");


    if (!isset($knev, $vnev, $email, $phone, $lakhey, $szul, $blood, $alc, $cig) || $_SERVER['REQUEST_METHOD'] != 'POST'){
      header("location: index");
    };
  ?>
</head>
<body class=" bg-slate-100">
  <div class="w-5/6 max-w-[800px] m-auto bg-white mt-5 mb-5 px-10 pb-7 border-mv border-2 rounded-xl">
    <div class="py-6">
      <img src="mv.png" alt="" class="m-auto pointer-events-none">
    </div>
   <div class="text-center text-4xl my-3">Köszönjük a jelentkezését!</div>
   <div class="">
    <div class="text-3xl">Az ön adatai:</div>
    <div class="pl-6 text-xl my-3">
      <div class=""><span class="title">Név:</span> <?= $vnev ." ". $knev ?></div>
      <div class=""><span class="title">Email:</span> <?= $email ?></div>
      <div class=""><span class="title">Telefon:</span>  <?= $phone ?></div>
      <div class=""><span class="title">Lakcím:</span>  <?= $lakhey ?></div>
      <div class=""><span class="title">Születési Dátum:</span> <?= $szul ?></div>
      <div class=""><span class="title">Vércsoport:</span> <?= $blood ?></div>
      <div class=""><span class="title">Alkohol fogyasztás:</span> <?= $alc ?></div>
      <div class=""><span class="title">Dohány termék fogyasztás:</span> <?= $cig ?></div>
    </div>
   </div>
  </div>
</body>
</html>