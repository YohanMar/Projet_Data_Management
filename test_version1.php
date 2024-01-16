<?php

function opencon()
{
    try {
        $db = new PDO('mysql:host=localhost;dbname=data_management;charset=utf8', 'root', '');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die('Erreur : ' . $e->getMessage());
    }
    return $db;
}