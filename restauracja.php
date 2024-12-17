<?php
    echo "Dodano rezerwację do bazy";
    
    $db = mysqli_connect("localhost", "root", "", "baza");
    $query = mysqli_query($db, "INSERT INTO rezerwacje (data_rez, liczba_osob, telefon) VALUES ($_POST['data'], $_POST['ludzie'], $_POST['telefon']);");
    mysqli_close($db);
?>
