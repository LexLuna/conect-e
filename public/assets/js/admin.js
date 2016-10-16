$('input[type=button]' ).click(function() {
    bid = (this.id) ; // button ID 
    console.log(bid);
    
    
    modal_slider(bid);
});
var nombre = $("#nombre1").val();
console.log("mi nombre" + nombre);
function modal_slider(id){
  get_nombre(id);
   var titulo =$("#titulo_modal").html(nombre);
   titulo.delay(2000);
   console.log("pasa por el modal");
}
function get_nombre(id){

     var parametros = {
            "id" :id
            };
    $.ajax({
      data:  parametros,
      url:   'ajax.php?mode=nombrecomercio',
      type:  'post',
      beforeSend: function () {
                console.log("enviando");
      },
      success:  function (response) {
           var titulo =$("#titulo_modal").html(response);
               titulo.delay(2000);
                  },
      error: function (){
        console.log("Errro al enviar mensaje");
      }
    });
}


function nuevo_comercio(){
    console.log("agregar comercio");
	$("#contenido-admin").load("view/admin/nuevo_comercio.php");

}
$( "#agregar_comercio" ).submit(function( event ) {
    console.log("agregamos uno nuevo");
    agregar_comercio();
  event.preventDefault();
});

function agregar_comercio(){
    console.log("aqui lo haras");
}

function editar_logos(){
    var id=0;
     var parametros = {
            "user" :id
            };
    $.ajax({
      data:  parametros,
      url:   'ajax.php?mode=vistalogo',
      type:  'post',
      beforeSend: function () {
                console.log("enviando");
      },
      success:  function (response) {
             $("#vista_logos").html(response);
                  },
      error: function (){
        console.log("Errro al enviar mensaje");
      }
    });
}

 




