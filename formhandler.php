<?php
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if (empty($_POST['email']) || empty($_POST['password'])){
        echo "Írj be valamit te kutya";
        exit();
    }
    else {
        $email = htmlspecialchars($_POST['email']);
        $pwd = htmlspecialchars($_POST['password']);

        echo $email;
        echo "<br>";
        echo $pwd;
    }
}
else{
    header("Location: lesson12actual.php");
}