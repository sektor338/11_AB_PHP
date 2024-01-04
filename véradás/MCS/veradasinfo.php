<?php
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if (empty($_POST['nev']) || empty($_POST['email']) || empty($_POST['telefon']) || empty($_POST['szuletesidatum']) || empty($_POST['vercsop']) || empty($_POST['gridRadios']) || empty($_POST['b']) || empty($_POST['a'])){
        echo"Írj be valamit man";
        exit();
    }
    else{
    $nev = htmlspecialchars($_POST['nev']);
    $email = htmlspecialchars($_POST['email']);
    $tel = htmlspecialchars($_POST['telefon']);
    $szuldat = htmlspecialchars($_POST['szuletesidatum']);
    $ver = htmlspecialchars($_POST['vercsop']);
    $alkohol = htmlspecialchars($_POST['gridRadios']);
    $cig = htmlspecialchars($_POST['b']);
    $hir = htmlspecialchars($_POST['a']);
    
    echo"Név: ";
    echo $nev;
    echo"<br>";

    echo"Email cím: ";
    echo $email;
    echo"<br>";

    echo"Telefonszám: ";
    echo $tel;
    echo"<br>";

    echo"Születési dátum: ";
    echo $szuldat;
    echo"<br>";

    echo"Vércsoport: ";
    echo $ver;
    echo"<br>";

    echo"Alkoholfogyasztás: ";
    echo $alkohol;
    echo"<br>";

    echo"Dohányzás: ";
    echo $cig;
    echo"<br>";

    echo"Hírek: ";
    echo $hir;
    echo"<br>";

    echo"Köszönjük a jelentkezést";
    }
}
else{
    header(header:"Location: veradas.php");
}

