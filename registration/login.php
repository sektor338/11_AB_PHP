<!doctype html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>

<div class="login-box">
    <h2>Regisztráció</h2>
    <form method="post" action="includes/login.inc.php">
        <div class="user-box">
            <input type="text" name="username" required="">
            <label>Username</label>
        </div>
        <div class="user-box">
            <input type="password" name="password" required="">
            <label>Password</label>
        </div>
        <button style="background: none; border-style: none">
            <a href="#">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                Regisztráció
            </a></button>
    </form>
</div>


</body>
</html>