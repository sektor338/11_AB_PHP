<!doctype html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
<?php
/*
echo $_GET['name'];
echo "<br>";
echo $_GET['pwd'];
echo "<br>";
echo var_dump($_POST);
echo var_dump($_SERVER['DOCUMENT_ROOT']);
echo "<br>";
echo var_dump($_SERVER['PHP_SELF']);
echo "<br>";
echo $_SERVER['DOCUMENT_ROOT'] . $_SERVER['PHP_SELF'];
echo "<br>";
echo var_dump($_SERVER['SERVER_NAME']);
echo "<br>";
echo var_dump($_SERVER['REQUEST_METHOD']);
*/
/*
echo var_dump(isset($_POST['kiskutya']));
echo var_dump(isset($_POST['email']));

echo "<h3>$_POST[email]</h3>";
echo "<h3>$_POST[password]</h3>";
*/
?>
<form action="formhandler.php" method="POST">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input required name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input required name="password" type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>
</html>

