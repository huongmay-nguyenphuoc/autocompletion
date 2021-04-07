<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>le rat de bibliothèque, passionné de livres depuis 1850 | home </title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru&display=swap" rel="stylesheet">
</head>
<body>
<?php require_once("header.php"); ?>
<main class="brown lighten-4 center-align valign-wrapper">
    <article class="row">
        <div class="col s12 section">
            <h1 class="siteTitleLogo">Le rat de bibliothèque</h1>
            <h2><em>passionné de livres depuis 1850</em></h2>
        </div>
        <div></div>
        <div class="col s12 section">
            <div class="row">
                <form name="formSearch" method="get" action="script.js">
                    <div class="input-field col s12">
                        <i class="material-icons prefix">search</i>
                        <input type="text" id="searchRequest">
                        <label for="searchRequest">Soumettre une requête au bibliothécaire</label>
                    </div>
                </form>
            </div>
        </div>
    </article>
</main>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="script.js"></script>
</body>
</html>