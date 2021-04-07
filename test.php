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
<div class="container">

    <div class="row">

        <div class="col s12">

            <div class="row">

                <div class="input-field col s12">

                    <i class="material-icons prefix">textsms</i>

                    <input type="text" id="demo-auto" class="autocomplete">

                    <label for="demo-auto">Enter a Letter</label>

                </div>

            </div>

        </div>

    </div>

</div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="script.js"></script>


<script>

    $(document).ready(function(){

        $('input.autocomplete').autocomplete({

            data: {

                "jQuery": null,

                "JavaScript": null,

                "CSS": null,

                "Angular JS": null,

                "Node": null,

                "Git": null,

                "HTML": null,

                "Bootstrap": null,

                "Java": null,

                "Python": null,

                "PHP": null,

                ".Net": null,



            },

            limit: 3

        });

    });

</script>
</body>
</html>