<!doctype html>
<html lang="hu">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Very Sus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <?php
    /*
    1. feladat (PHP, HTML, CSS, Bootstrap 5.2) (4 pont)
    Egy héten keresztül minden nap ötször megmértük a hőmérsékletet Szentesen (elég szeszélyes volt az idő lol).
    Mérések ideje: 6:00, 8:00, 12:00, 16:00, 20:00.
    A mért értékeket tömbben tároltuk el, ezeket a hét napjai szerint neveztük el.
    Készíts egy PHP programot HTML, CSS és Bootstrap 5.2 segítségével, amely megjeleníti a hét napjai szerinti hőmérsékleti adatokat napokra és a mérések időpontjaira lebontva (érdemes táblázatot készíteni (kacsint, kacsint)).
    Amennyiben a hőmérséklet 0 fok alá csökkent, akkor a hőmérsékletet kék színnel kell megjeleníteni, ha pedig 0 fok fölé emelkedett, akkor piros színnel. Ha az érték 0, akkor zöld színnel kell megjeleníteni.

----------------------------------------------------------

    2. feladat (PHP, HTML, CSS, Bootstrap 5.2) (3 pont)
    Számold ki a hét napjai szerinti hőmérsékleti adatok átlagát, majd írd ki a képernyőre.
    A legmelegebb napot jelöld pirossal, a leghidegebbet pedig kékkel.
    
    Mindkét feladat során A.I. használata tilos, a feladatokat önállóan kell megoldani.
    Segédlet, dokumentáció és internetes keresés használata megengedett.

----------------------------------------------------------
    3 pont jár a megoldott feladat kinézetéért!
    2 pont jár a "tiszta" kódért!
----------------------------------------------------------

    A feladat beadására 2 mód van:
    1. Az index.php fájlt fel kell tölteni Google Classroom feladathoz. (1 pont)
    VAGY
    2. Az elkészült feladatokat egy általad létrehozott nyilvános GitHub repository-ba kell feltölteni, majd a repository linkjét a feladat beadásához kell csatolni. (3 pont)

----------------------------------------------------------

    Max pontszám: 15

    */

    #Az alábbi tömböket kell felhasználni a feladat megoldásához.

    $hetfo = [12, 30, -5, -14, 3];
    $kedd = [-5, 3, 6, 8, 12];
    $szerda = [-11, -5, 14, 6, 8];
    $csutortok = [4, -6, 8, 12, -5];
    $pentek = [11, -5, 7, 12, 8];
    $szombat = [-30, -5, 4, 23, 8];
    $vasarnap = [11, -5, 15, -6, 8];
    ?>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>