$(document).ready(function(){
   	// Ajout de notre méthode
    $.validator.addClassRules({
        nom:{
            required: true,
            digits: true,
	        minlength: 5,
	        maxlength: 5
        }
    });
    // Initialisation du plugin
    $("#monFormulaire").validate();
});