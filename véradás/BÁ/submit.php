<!DOCTYPE html>
<html>
<head>
    <title>Köszönjük a jelentkezését!</title>
    <link rel="stylesheet" type="text/css" href="mv.css">
</head>
<body>
    <img src="mvlogo.png" alt="Magyar Vöröskereszt Logo">
    <h1>Köszönjük a jelentkezését!</h1>
    <p>Az alábbiakban áttekintheti a beküldött adatait:</p>
    <ul>
        <li>Vezetéknév és Keresztnév: <?php echo $_POST['name']; ?></li>
        <li>Email: <?php echo $_POST['email']; ?></li>
        <li>Telefonszám: <?php echo $_POST['phone']; ?></li>
        <li>Lakcím: <?php echo $_POST['address']; ?></li>
        <li>Születési dátum: <?php echo $_POST['dob']; ?></li>
        <li>Vércsoport: <?php echo $_POST['blood_type']; ?></li>
        <li>Fogyaszt-e alkoholt: <?php echo $_POST['alcohol'] ? 'Igen' : 'Nem'; ?></li>
        <li>Dohányzik-e: <?php echo $_POST['smoke'] ? 'Igen' : 'Nem'; ?></li>
        <li>Feliratkozik-e a Magyar Vöröskereszt hírlevelére: <?php echo $_POST['newsletter'] ? 'Igen' : 'Nem'; ?></li>
    </ul>
    <p>A Magyar Vöröskereszt megköszöni a jelentkezését!</p>
</body>
</html>
