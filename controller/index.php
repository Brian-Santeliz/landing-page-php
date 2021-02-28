<?php 
    $host = 'localhost';
    $dbname = 'destinos_paraiso';
    $username = 'root';
    $password = '';

    $db =  mysqli_connect($host, $username, $password, $dbname);
    $email = $_POST["email"];
    $insert ="INSERT INTO contact (email) VALUES ('$email')";
    mysqli_query($db,$insert)
?>