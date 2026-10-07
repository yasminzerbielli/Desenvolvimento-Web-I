<?php

try{
    $pdo = new PDO(
        'mysql:host=db;dbname=loja;charset=utf8mb4',
        "root", "root"
    );
    echo"conectouu";
} catch (PDOException $e) {
    echo $e->getMessage();
}