
var ancho_pantalla,alto_pantalla,alto_menu;   // se declara para poder trabajar con ellos 



new WOW().init();



var acciones = {
	listo : function(){
	
		jQuery(".cabecera .hamb").click(acciones.abrirmenu);
		// jQuery(".saltarina").click(acciones.irsaltarina);
		jQuery("#mostrar-nav-1").click(acciones.abrirmenu1);
	},

	abrirmenu:function(e)
	{
		e.preventDefault();
		
		jQuery(".cabecera .menu").toggleClass("abierto");      /*agregar y remover class abrir y cerrar menu*/ 
		jQuery("body").toggleClass("abierto");                 // para sacar la imagen de la pantalla  adicionar y remover
		jQuery(this).find("i").toggleClass("fa-times");        /* al dar click buscar la i (hamb)cambiar por X */

	
	jQuery(".cabecera .menu").click(function()
	{

		jQuery(".cabecera .menu").removeClass("abierto");
		jQuery(".hamb i").removeClass("fa-times");

		jQuery(this).find("href").toggleClass("fa-times");

		// var dev = jQuery(this).attr("href");

		// jQuery("html,body").animate({
		// 	"scrollTop": jQuery(dev).offset().top
		// });

	});	

		
	},

	scrollventana:function(){

		if(jQuery(window).scrollTop() > 60)                //al pasar toda la foto de banner mete un fondo en la cabecera menu
		{
			jQuery(".cabecera").addClass("fondo");
		}else

			jQuery(".cabecera").removeClass("fondo");


		
		ancho_pantalla = jQuery(window).width();

		     if(ancho_pantalla > 991)                    //solo si la pantalla es mayor a 991 hace lo de abajo 

		

			if(jQuery(window).scrollTop() > 380)                
		{
			jQuery("#lacarta-1").addClass("subir");			//al pasar por 380px mete la clase subir y lacarta-1 sube 100px
		}else

			jQuery("#lacarta-1").removeClass("subir");


		
	},


	abrirmenu1:function(e)
	{
		e.preventDefault();

		
	    jQuery("#mostrar-nav-1").toggleClass("mostrar");  /*abrir y cerrar menu1 vertical con click en hamburguesa1*/
	    jQuery("nav-1").toggleClass("mostrar");


	    jQuery(this).find("i").toggleClass("fa-times");        /*cambiar la hamb1 por la X*/

	    // jQuery(".hamb1 i").toggleClass("fa-angle-left");      /*cambiar la hamb1 por la X*/
    
	    
	},    


	precarga:function(){						
		acciones.redimensionar();
	},
	

	redimensionar:function(){
		ancho_pantalla = jQuery(window).width();
		alto_menu = jQuery(".cabecera").innerHeight();

		if((ancho_pantalla >= 640) && (ancho_pantalla<=768))
		    //=============si la pantalla esta entre 640 y 678  mete una nueva class y realiza los cambios especificados 
		{
			jQuery("#banner .container h1").addClass("titulo-inicio");   //mete una class en h1 y cambia m-bottom
			jQuery("#profesores .contenedor-cuadrado.cont-rect").addClass("margin-left-prof");  //mete una class en fotos prof cambia m-left
			jQuery("#banner .slides li img").addClass("titulo-inicio");     //mete una class en slides li img y cambia alto en img carrusel
			jQuery(".fondo-11").addClass("fondo1-2");  //en inicio la carta y profesores mete una nueva class y cambia el alto de fondo-1
			
		}else{
			jQuery("#banner .container h1").removeClass("titulo-inicio");
			jQuery("#profesores .contenedor-cuadrado.cont-rect").removeClass("margin-left-prof");	
			jQuery("#banner .slides li img").removeClass("titulo-inicio");	
			jQuery(".fondo-11").removeClass("fondo1-2");	

		}

	},                      

							
};



jQuery(document).ready(acciones.listo);

jQuery(window).on("load",acciones.precarga);

jQuery(window).resize("load",acciones.redimensionar);        //cambiar tamaño de un elemento al cambiar el ancho de la pantalla//

jQuery(window).scroll("load",acciones.scrollventana);        /* colocar oscuro en menu al scrolar*/

