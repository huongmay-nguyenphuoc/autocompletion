<?php
header('Content-Type: application/json; charset=utf-8');
try {
    $pdo = new PDO('mysql:host=localhost;charset=UTF8; dbname=autocompletion', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e->getMessage();
}

$statement = $pdo->prepare("select * from livre");
$statement->execute();
while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    $res[$row['Titre']] = $row;
}

$json = json_encode($res, JSON_UNESCAPED_UNICODE|JSON_UNESCAPED_SLASHES|JSON_PRETTY_PRINT);
echo $json;

$createjson = fopen("livres.json", "w");
fwrite($createjson, $json);
fclose($createjson);