<?php
    echo "Dodano rezerwację do bazy";
    $db = mysqli_connect("localhost", "root", "", "baza");

    $stmt = $db->prepare("INSERT INTO rezerwacje (data_rez, liczba_osob, telefon) VALUES (?, ?, ?)");

    $data = isset($_POST['data']) ? $_POST['data'] : '';
    $ludzie = isset($_POST['ludzie']) ? $_POST['ludzie'] : 0;
    $telefon = isset($_POST['telefon']) ? $_POST['telefon'] : '';

    $stmt->bind_param("sis", $data, $ludzie, $telefon);

    $stmt->close();
    $db->close();
?>
