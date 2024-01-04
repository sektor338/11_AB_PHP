<!DOCTYPE html>
<html>
<head>
    <title>Magyar Vöröskereszt Véradás Jelentkezés</title>
    <link rel="stylesheet" type="text/css" href="mv.css">
</head>
<body>
    <img src="mvlogo.png" alt="Magyar Vöröskereszt Logo">
    <h1>Magyar Vöröskereszt Véradás Jelentkezés</h1>
    <form action="submit.php" method="post">
        <label for="name">Vezetéknév és Keresztnév:</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br>
        <label for="phone">Telefonszám:</label><br>
        <input type="tel" id="phone" name="phone"><br>
        <label for="address">Lakcím:</label><br>
        <input type="text" id="address" name="address"><br>
        <label for="dob">Születési dátum:</label><br>
        <input type="date" id="dob" name="dob"><br>
        <label for="blood_type">Vércsoport:</label><br>
        <select id="blood_type" name="blood_type">
            <option value="unknown">Nem tudom</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="AB">AB</option>
            <option value="O">O</option>
        </select><br>
        <label for="alcohol">Fogyaszt-e alkoholt:</label><br>
        <input type="checkbox" id="alcohol" name="alcohol"><br>
        <label for="smoke">Dohányzik-e:</label><br>
        <input type="checkbox" id="smoke" name="smoke"><br>
        <label for="newsletter">Feliratkozik-e a Magyar Vöröskereszt hírlevelére:</label><br>
        <input type="checkbox" id="newsletter" name="newsletter"><br>
        <input type="submit" value="Jelentkezés">
    </form>
</body>
</html>
