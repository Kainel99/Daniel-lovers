<?php

if(isset($_POST['first-name']) && ($_POST['last-name']) && ($_POST['email']) && ($_POST['password'])) {
// $query = $db->prepare('INSERT INTO users (id, first_name, last_name, email, password) ');
// $parameters = [

//     'first_name' => $_POST['first_name'],
//     'last-name' => $_POST['last_name'],
//     'email' => $_POST['email'],
//     'password' => $_POST['password']
//     ];
    echo ($_POST['first-name']);
    echo "<br>";
    echo ($_POST['last-name']);
    echo "<br>";
    echo ($_POST['email']);
    echo "<br>";
    echo ($_POST['password']);
}
?>