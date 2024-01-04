<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vérszerződés</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-red-600 via-rose-700 to-red-600">
<img src="asd.png" alt="">
    <h1 class="text-center text-7xl text-white dsa">Véradás</h1><br>
    
    <form action="/action_page.php">
        <div class="text-center">
            <input type="text" id="lname" name="lname" placeholder="Vezetéknév" class="border-solid border-2 border-sky-500 m-3 rounded w-44">
            <input type="text" id="fname" name="fname" placeholder="Keresztnév" class="border-solid border-2 border-sky-500 m-3 rounded w-44"><br>
            <input type="email" id="email" name="email" placeholder="email" class="border-solid border-2 border-sky-500 m-3 rounded w-44">
            <input type="text" id="tel_szam" name="tel_szam" placeholder="Telefonszám" class="border-solid border-2 border-sky-500 m-3 rounded w-44"><br>
            <input type="date" id="start" name="trip-start" value="2023-01-01" min="1900-01-01" max="2023-01-01" class="border-solid border-2 border-sky-500 m-3 rounded w-44">
            <select name="cars" id="cars" class="border-solid border-2 border-sky-500 m-3 rounded w-44">
                <option value="none" selected disabled hidden>Vércsoportja?</option> 
                <option value="0-">0-</option>
                <option value="0+">0+</option>
                <option value="A-">A-</option>
                <option value="A+">A+</option>
                <option value="B-">B-</option>
                <option value="B+">B+</option>
                <option value="AB-">AB-</option>
                <option value="AB+">AB+</option>
                <option value="dumbfuck">Nem tudom</option>
            </select><br></div><div class="text-left text-white self-center aaa asd">
            <input type="checkbox" id="alkohol" name="alkohol" value="alkohol">
            <label for="alkohol" class="inline-block">Fogyaszt-e alkoholt?</label>
            <input type="checkbox" id="cigi" name="cigi" value="cigi">
            <label for="cigi" class="inline-block">Dohányzik-e?</label><br>
            <input type="checkbox" id="alkohol" name="alkohol" value="alkohol">
            <label for="alkohol">Feliratkozik-e a Magyar Vöröskereszt hírleveleire</label><br><br></div><div class="text-center">
            <input type="submit" value="Leadás" class="text-2xl shadow-2xl font-semibold rounded-full bg-blue-700 w-36 h-12 hover:bg-red-600">
        </div>
    </form>
</body>
</html>