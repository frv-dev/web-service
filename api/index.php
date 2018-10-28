<?php

header("Access-Control-Allow-Origin: *");

$pdo = new PDO('sqlite:db.db');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$statement = $pdo->query('SELECT * FROM produtos');
$produtos = $statement->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($produtos, JSON_UNESCAPED_UNICODE);
