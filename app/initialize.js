$(document).ready(function(){


var app = {
  init: function() {
    console.log('App : init');

    $('.item_edit').on('click',app.showEditForm)


//DECLENCHEMENT DES FONCTIONS
},
// Affiche le formulaire de modification d'une tache précise.
showEditForm: function(){
  //on cible le formulaire associé
  var form = $(this).parent().prev();
  //On affiche le formulaire
  form.show();
  //on masque le texte
  var span = form.prev();
  span.hide();
  // On récupère le texte contenu dans le <span>
  var contentspan = span.text();
  console.log(contentspan);
  // On affiche le texte de la tâche dans le formulaire
  form.find('.item_form_text').val(contentspan);

}



};
$(app.init);

// Fin chargement DOM
});
