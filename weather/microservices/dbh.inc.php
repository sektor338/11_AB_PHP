<?php

$conn = mysqli_connect('localhost', 'root', '', 'steam');


if (!$conn)
{
    die('Hiba merült fel! Baszódj meg!' . mysqli_connect_error());
}