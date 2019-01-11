$(document).ready(function(){


var app = {
  init: function() {
    console.log('App : init');

    $('.item_edit').on('click',app.showEditForm);
    $('.item-form-cancel').on('click', app.hideEditForm);


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

},

//Masque le formulaire de MAJ et affiche le texte de la tache correspondante
hideEditForm: function(){

  var form = $(this).parent();
  //On masque le formulaire
  form.hide();
  //on cible le span
  var span = form.prev();
  // On affiche le texte
  span.show();
}



};
$(app.init);

// Fin chargement DOM
});
