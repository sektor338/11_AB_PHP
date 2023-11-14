<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Very Sus</title>
<link rel="stylesheet" href="asd.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
<?php
/*
Van egy tömbünk, abban 20 szám.
A tömb felhasználásával végezd el az alábbi feladatokat:
1. Írasd ki a tömb legkisebb értékét.
2. Írasd ki a tömb legnagyobb értékét.
3. Írasd ki a tömbben található számok összegét.
4. Írasd ki a tömbben található számok átlagát.
5. Írasd ki a tömb tartalmát,
amennyiben a szám páros, legyen piros színű,
amennyiben a szám páratlan, legyen kék színű.
Ha a szám 0 legyen zöld színű.

A kiíratások igényesen nézzenek ki.
*/

$tomb = [-62, -18, 41, 87, 95, 32, -14, 76, 53, 0, -67, 38, 59, -72, 9, 11, 81, 3, -45, 29];

echo "1. Feladat: ";
echo min($tomb);

echo " <br> 2. Feladat: ";
echo max($tomb);

echo " <br> 3. Feladat: ";
echo array_sum($tomb);

echo " <br> 4. Feladat: ";
echo array_sum($tomb)/count($tomb);

echo " <br> 5. Feladat: ";

echo "<table><tr>";
for ($x = 0; $x <= count($tomb); $x++) {
    if ($x == 0){
        echo "<td>$tomb[$x]</td>";
    }
    elseif ($x % 2 ){
        echo "<td>$tomb[$x]</td>";
    }
    else{
        echo "<td> $tomb[$x] </td>";
    }
}

echo"</table></tr>";
?>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>