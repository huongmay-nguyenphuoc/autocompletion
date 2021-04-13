<?php
require_once("class/Database.php");
$database = new Database();
$id = htmlspecialchars($_GET['id']);
$dataLivre = $database->selectTitle($id);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>le rat de bibliothèque, passionné de livres depuis 1850 | <?=$dataLivre['Titre'] ?> </title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
</head>
<body>
<?php require_once("content/header.php"); ?>
<main class="center-align valign-wrapper">
    <article class="container">
        <div>
            <h1><em>Titre recherché</em></h1>
            <h2><b><?= $dataLivre['Titre'] ?> </b></h2>
        </div>
        <table class="highlight centered">
            <tbody>
            <?php foreach ($dataLivre as $key => $value) : ?>
                <tr>
                    <td><?= $key ?></td>
                    <td><?= $value ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </article>
</main>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="script.js"></script>
</body>
</html>