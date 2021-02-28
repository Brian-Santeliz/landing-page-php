<?php 
    $host = 'localhost';
    $dbname = 'destinos_paraiso';
    $username = 'root';
    $password = '300900';

    $db =  mysqli_connect($host, $username, $password, $dbname);
    $email = $_POST["email"];
    $insert ="INSERT INTO contact (email) VALUES ('$email')";
    mysqli_query($db,$insert)
?>