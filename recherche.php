<?php
require_once("class/Database.php");
$database = new Database();
$search = htmlspecialchars($_GET['search']);
$searchResults = $database->selectTitles($search);
$searchResults = $database->getSearchResult();
$matchedKey = $database->getMatchedKeys();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>le rat de bibliothèque, passionné de livres depuis 1850 | | home </title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
</head>
<body>
<?php require_once("content/header.php"); ?>
<main class="center-align">

    <!--Si aucun résultat-->
    <?php if (empty($searchResults)) : ?>
    <article class="row">
            <h1>Résultat de recherche :</h1>
            <h2>Il n'y a rien ici.</h2>
            <a href="index.php">Revenir à l'accueil</a>
    </article>

    <!--Sinon, affichage des résultats-->
    <?php else : ?>
        <article class="row">
            <h1><em>Résultats de recherche : </em><?= count($searchResults) ?></h1>
            <h2> expression recherchée : <em><?= $search ?></em> </h2>
        </article>
        <article class="row">
            <table class="highlight centered">
                <tbody>
                <?php foreach ($searchResults as $key => $value) : ?>
                    <tr>
                        <td><a href="element.php?id=<?= $value['id'] ?>"> <?= $key ?> </a></td>
                        <td><?= $value['Auteur'] ?></td>
                        <?php if (!empty($matchedKey)) : ?>
                            <td>Correspondance trouvée : <?= $matchedKey[0] ?> - <?= $matchedKey[1] ?></td>
                        <?php endif;?>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </article>
    <?php endif; ?>
</main>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="script.js"></script>
</body>
</html>