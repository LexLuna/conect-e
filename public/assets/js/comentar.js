
$( "#comentar" ).submit(function( event ) {
    agregar_comentario();
  event.preventDefault();
});

function agregar_comentario(){
     $.post("ajax.php?mode=comentario",$("#comentar").serialize(),function(res){
         console.log(res);
         if(res==0){
             location.reload();
         }
         else{
             alert("No estoy vacio");
         }
         
     });
     
}
function agregar_comentario(){
     var comentario = $("#comentario").val();
     var hora = getHora();
     
     var parametros = {
            "comentario" :comentario,
            "hora" :hora
           
            };
    $.ajax({
      data:  parametros,
      url:   'ajax.php?mode=comentario',
      type:  'post',
      beforeSend: function () {
                console.log("enviando");
      },
      success:  function (response) {
          console.log(response);
                if(response==0){
                    location.reload();
                    }
                    else{
                        alert("No estoy vacio");
                    }
                  },
      error: function (){
        console.log("Errro al enviar mensaje");
      }
    });
}

function getHora(){

    var hora = new Date();
var h=0;
var m=0;
var s=0;
if (hora.getHours()>12) {
    h=hora.getHours()-12;
    if (h<10) {
        h =  "0" +h;

    }

}
else if(hora.getHours()<=12){
    h=hora.getHours();
    if (h<10) {
        h =  "0" +h;

    }

}
if (hora.getMinutes()>9) {
    m = hora.getMinutes();
}
else{
    m = "0" + hora.getMinutes();
}
if (hora.getSeconds()>9) {
    s= hora.getSeconds();
}
else{
    s = "0" + hora.getSeconds();
}

var dame_hora = h + ":" + m + ":" + s;
 return dame_hora;
}