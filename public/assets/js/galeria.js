//$(".galeria-item").mouseover(mostrar_contenido);
//$(".galeria-item").mouseout(function(){
//     $(".desc-galeria").slideDown();
//});
//function mostrar_contenido(){
//    $(this).find(".desc-galeria").slideUp();
//    console.log("te lo muestro");
//}
// jQuery
$(document).ready(function(){ 
  
    $('.galeria-item').hover( 
  
        // Primer click
        function(e){ 
            $(this).find(".desc-galeria").slideDown();
            
            e.preventDefault();
        }, // Separamos las dos funciones con una coma
      
        // Segundo click
        function(e){ 
           $(this).find(".desc-galeria").slideUp();
          
            e.preventDefault();
        }
  
    );
  
});