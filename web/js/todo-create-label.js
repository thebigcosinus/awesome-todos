$(document).ready(function(){
    var $container =$('div#todo_labels');

    //Compteur pour définir les champs que l on va nommer
    var index = $container.find(':input').lenght;

    $('#add_label').on('click', function(e) {
        addLabel($container);
        e.preventDefault();
        return false;
    });

    //On ajoute un champ automatiquement
    if (index == 0) {
        $addLabel($container);
    } else {
        //On ajouter un lien de suppression
        $container.children('div').each(function() {
            addDeleteLink($(this));
        });
    }

    function addLabel($container) {
        var template = $container.attr('data-prototype')
            .replace(/__name__label__/g,  'Label')
            .replace(/__name__/g, index);

        var $prototype = $(template);

         // On ajoute au prototype un lien pour pouvoir supprimer la catégorie
         addDeleteLink($prototype);

         // On ajoute le prototype modifié à la fin de la balise <div>
         $container.append($prototype);

            index++;
    }

    function addDeleteLink($prototype) {
        var $deleteLink = $('<a href="#" class="btn btn-danger">Supprimer</a>');
        $prototype.append($deleteLink);
        $deleteLink.click(function(e) {
                $prototype.remove();
                e.preventDefault(); // évite qu'un # apparaisse dans l'URL
                return false;
              });
    }

});
