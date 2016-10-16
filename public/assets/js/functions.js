/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
// Hay que recordar la importancia de comenzar
// a ejecutar javascript cuando termine de cargar
// la página para evitar inconscistencias.
$(document).ready(function() {
  var menu = $('#menu');
  var contenedor = $('#navegacion');
  var menu_offset = contenedor.offset();
  // Cada vez que se haga scroll en la página
  // haremos un chequeo del estado del menú
  // y lo vamos a alternar entre 'fixed' y 'static'.
  $(window).on('scroll', function() {
    if($(window).scrollTop() > menu_offset.top) {
      contenedor.fadeIn(1000);
      contenedor.addClass('menu-fijo');

      $("body").css("padding-top","140px");
      $("#topnav").css("display","none");
    } else {
        $("#topnav").css("display","block");
        $("body").css("padding-top","0px");
      contenedor.removeClass('menu-fijo');

     
    }
  });
});

function mostrar_Chat(){
    $( "#chat_Contenedor" ).toggle( "slow");
}
//funcion de busqueda
function buscar(){
    $("#centro").load("view/public/resultados_busqueda.php");
}

$("#img_icono_chat").hover(function(){
   $("#img_icono_chat").attr("src","app/image/icono_chat_hover.png");
},
function (){
  $("#img_icono_chat").attr("src","app/image/icono_chat.png");   
});

