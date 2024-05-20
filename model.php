<?php

class Model
{
    public function getData(): array
    {

        $dsn = "mysql:host=localhost;dbname=app_mvc;charset=utf8;port=8889";

        $pdo = new PDO($dsn, "root","root",[
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]);

        $stmt = $pdo->query("SELECT * FROM product");

        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }
}