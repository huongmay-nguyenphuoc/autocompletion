$(document).ready(function () {
    var livresData;

    //Autocomplete
    $(function () {
        $.ajax({
            type: 'GET',
            url: 'livres.json',
            success: function (response) {
                var livresArray = response;
                livresData = livresArray;
                var dataLivre = {};
                for (let title in livresArray) {
                    dataLivre[title] = null;
                }
                $('input.autocomplete').autocomplete({
                    data: dataLivre,
                    limit: 5,
                });
            }
        });
    });


    //récupère information du form header (autocomplete) et redirige vers l'élément
    $('#autocompleteSearch').submit(function () {
        event.preventDefault();
        let titleSearched = $('#autocomplete-input').val();
        window.location.href = "element.php?id=" + livresData[titleSearched].id;
    });


});