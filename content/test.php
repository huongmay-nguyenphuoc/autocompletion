<?php
require_once("Database.php");
$database = new Database();
$res = $database->getAllBooks();

$json = json_encode($res, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
$editjson = fopen("livres.json", "w");
fwrite($editjson, $json);
fclose($editjson);