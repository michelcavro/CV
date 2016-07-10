// Test du script
console.log("le jQuery est chargé !");
//FONCTION qui attend que le dom soit chargé
$(document).ready(function (){
	//Charger "FancyBox"
		$(".fancybox").fancybox();


	// STICKY TITRE
	var stickyTitle = $('.titre').offset().top;
	var stickyTT = function(){
		var scrollTop = $(window).scrollTop();

		if (scrollTop > stickyTitle) { 
			    $('.titre').addClass('stickyTitre');
			} else {
			    $('.titre').removeClass('stickyTitre'); 
			}
	};
	 // APPELE LA FONCTION
	stickyTT();
	$(window).scroll(function() {
		// LANCE LA FONCTION
		stickyTT();
	});

	// STICKY FOND
	var stickyFond = $('.fondTitre').offset().top;
	var stickyFd = function(){
		var scrollTop = $(window).scrollTop();

		if (scrollTop > stickyFond) { 
		    $('.fondTitre').addClass('fondTitreBleu');
		} else {
		    $('.fondTitre').removeClass('fondTitreBleu'); 
		}
	};
	 // APPELE LA FONCTION
	stickyFd();
	$(window).scroll(function() {
		// LANCE LA FONCTION
		stickyFd();
	});

	// STICKY MENU
	var stickyNavTop = $('.boutons').offset().top;
	 
	var stickyN = function(){
		var scrollTop = $(window).scrollTop();

		if (scrollTop > stickyNavTop) { 
		    $('.boutons').addClass('stickyNav');
		} else {
		    $('.boutons').removeClass('stickyNav'); 
		}
	};
	// APPELE LA FONCTION
	stickyN();
	$(window).scroll(function() {
		// LANCE LA FONCTION
		stickyN();
	});

	// STICKY FLAG
	var stickyFlagTop = $('.flag').offset().top;

	var stickyF = function(){
		var scrollTop = $(window).scrollTop();

		if (scrollTop > stickyNavTop) { 
		    $('.flag').addClass('stickyFlag');
		} else {
		    $('.flag').removeClass('stickyFlag'); 
		}
	};
	// APPELE LA FONCTION
	stickyF();
	$(window).scroll(function() {
		// LANCE LA FONCTION
		stickyF();
	});

	//SMOOTH SCROLL
	//1. Je séléctionne tous les <a> qui commence par # dans leur href
	//2. Je séléctionne tous ceux qui ont la classe smooth
	//POUR cette séléction on ajoute un listener sur le click
	$( "a[href^='#']" ).click(function(){// qui va exécuter cela
		//Je stock dans monID la valeur de l'attribut href
		var monID = $(this).attr('href');
		//Je crée un animation sur le body/html
		$('html, body').animate({
			//scroller depuis l'endroit ou je suis vers 
			scrollTop:$(monID).offset().top-60// Le bord supérieur de mon élément
		},1000); // vitesse de déplacement
		return false; // ou event.preventDefault() pour supprimer le comportement pas defaut
	});// fermeture de ma fonction

	//Affichage texte "EXPERTISE" et "MAITRISE"
	$("#html") // select your element
    .hover(function(){ // trigger the mouseover event
        $("#expertise") // select the element to show
            .show(); // show the element
    }, function(){ // trigger the mouseout event
        $("#expertise") // select the same element
            .hide(); // hide it
    });
    	$("#java") // select your element
    .hover(function(){ // trigger the mouseover event
        $("#maitrise") // select the element to show
            .show(); // show the element
    }, function(){ // trigger the mouseout event
        $("#maitrise") // select the same element
            .hide(); // hide it
    });
    	$("#php") // select your element
    .hover(function(){ // trigger the mouseover event
        $("#maitrise") // select the element to show
            .show(); // show the element
    }, function(){ // trigger the mouseout event
        $("#maitrise") // select the same element
            .hide(); // hide it
    });
    	$("#wp") // select your element
    .hover(function(){ // trigger the mouseover event
        $("#expertise") // select the element to show
            .show(); // show the element
    }, function(){ // trigger the mouseout event
        $("#expertise") // select the same element
            .hide(); // hide it
    });
    	$("#adobe") // select your element
    .hover(function(){ // trigger the mouseover event
        $("#expertise") // select the element to show
            .show(); // show the element
    }, function(){ // trigger the mouseout event
        $("#expertise") // select the same element
            .hide(); // hide it
    });
    	$("#soft") // select your element
    .hover(function(){ // trigger the mouseover event
        $("#expertise") // select the element to show
            .show(); // show the element
    }, function(){ // trigger the mouseout event
        $("#expertise") // select the same element
            .hide(); // hide it
    });
    	$("#office") // select your element
    .hover(function(){ // trigger the mouseover event
        $("#maitrise") // select the element to show
            .show(); // show the element
    }, function(){ // trigger the mouseout event
        $("#maitrise") // select the same element
            .hide(); // hide it
    });

	//MANIPULATION DU FORMULAIRE
	//quand nom a le focus, helpform doit avoir le text 
	//"Entrez votre nom"
	$("#name").focus(function(){
		$("#helpForm").text("Entrez votre nom");
	});

	//quand email a le focus, helpform doit avoir le text 
	//"Entrez votre Email"
	$("#email").focus(function(){
		$("#helpForm").text("Entrez votre Email");
	});

	//quand message a le focus, helpform doit avoir le text 
	//"Rédigez votre message"
	$("#message").focus(function(){
		$("#helpForm").text("Rédigez votre message");
	});

	//quand blur sur nom , helpform doit avoir un text vide.	
	$("#name").blur(function(){
		$("#helpForm").text("");
	});

	//quand blur sur email , helpform doit avoir un text vide.	
	$("#email").blur(function(){
		$("#helpForm").text("");
	});

	//quand blur sur message , helpform doit avoir un text vide.	
	$("#message").blur(function(){
		$("#helpForm").text("");
	});


});//FIN JQUERY 