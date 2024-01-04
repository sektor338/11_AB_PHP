<!DOCTYPE html>
<html lang="hu-HU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feldolgozás</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-red-100">
    <div class="container mx-auto p-4 flex justify-center items-center flex-col">
    <img src="MV2.png" alt="MV" class="w-96 h-auto shadow-md rounded mb-4">
        <h1 class="text-3xl text-red-600 mb-4">Köszönjük jelentkezését!</h1>
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 w-96 flex justify-center flex-col">
                <h1 class="block text-gray-700 font-bold">Megadott adatai:</h1>
                    <p class="block text-gray-700 text-sm mb-2"></p>
                        <?php
                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        $vezeteknev = $_POST['vezeteknev'];
                        $keresztnev = $_POST['keresztnev'];
                        $email = $_POST['email'];
                        $telefonszam = $_POST['telefonszam'];
                        $lakcim = $_POST['lakcim'];
                        $szuletesidatum = $_POST['szuletesidatum'];
                        $vercsoport = $_POST['vercsoport'];
                        $alkoholfogyasztas = $_POST['alkoholfogyasztas'];
                        $dohanyzas = $_POST['dohanyzas'];
                        $hirlevel = isset($_POST['hirlevel']) ? $_POST['hirlevel'] : '';

                        echo "Vezetéknév: " . htmlspecialchars($vezeteknev) . "<br>";
                        echo "Keresztnév: " . htmlspecialchars($keresztnev) . "<br>";
                        echo "Email: " . htmlspecialchars($email) . "<br>";
                        echo "Telefonszám: " . htmlspecialchars($telefonszam) . "<br>";
                        echo "Lakcím: " . htmlspecialchars($lakcim) . "<br>";
                        echo "Születési dátum: " . htmlspecialchars($szuletesidatum) . "<br>";
                        echo "Vércsoport: " . htmlspecialchars($vercsoport) . "<br>";
                        echo "Fogyaszt-e alkoholt? " . htmlspecialchars($alkoholfogyasztas) . "<br>";
                        echo "Dohányzik-e? " . htmlspecialchars($dohanyzas) . "<br>";
                        echo "Feliratkozik-e hírlevelünkre? " . htmlspecialchars($hirlevel) . "<br>";
                    } else {
                        header('Location: veradas.html');
                        exit;
                    }
                    ?> 
            </div>
        </div>
    </div>
</body>
</html>