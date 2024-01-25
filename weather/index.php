<!doctype html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adatbázishoz csatlakozás</title>
    <style>
        table, td, th{
            border-style: solid;
            padding: 5px;
        }
    </style>
</head>
<body>
<table>

    <th>id</th>
    <th>name</th>
    <th>genre</th>
    <th>platform</th>
    <th>price</th>
    <th>release date</th>
    <th>rating</th>
    <th>description</th>
    <th>publisher</th>
<?php
require_once "microservices/dbh.inc.php";

$stmt = "SELECT * FROM games";
$res = mysqli_query($conn, $stmt);

if(mysqli_num_rows($res) > 0){
    while ($row = mysqli_fetch_assoc($res)){
       echo "
       <tr>
       <td>".$row["id"]."</td>
       <td>".$row["game_title"]."</td>
       <td>".$row["game_genre"]."</td>
       <td>".$row["game_platform"]."</td>
       <td>".$row["game_price"]."</td>
       <td>".$row["game_release_date"]."</td>
       <td>".$row["game_rating"]."</td>
       <td>".$row["game_description"]."</td>
       <td>".$row["game_publisher"]."</td>
</tr>
       
       ";
    }
}
?>

</table>
</body>
</html>