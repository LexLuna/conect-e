var id_comercio ="";
function set_comercio_id(id){
    id_comercio = id;
}
function setVoto(calificacion){
    console.log("calificacion " +calificacion);
       var parametros = {
            "calificacion" : calificacion,
            "id_comercio" : id_comercio
            };
    $.ajax({
      data:  parametros,
      url:   'ajax.php?mode=votar',
      type:  'post',
      beforeSend: function () {
                console.log("enviando");
                $("#contenido_modal").html('<div class="alert alert-info" role="alert">Se esta enviando tu voto...</div>');
      },
      success:  function (response) {
              console.log('completo');
              console.log(response);
              if(response===""){
                  $("#contenido_modal").html('<div class="alert alert-success" role="alert">Has votado con exito</div>');
                 
              }else{
                  $("#contenido_modal").html('<div class="alert alert-danger" role="alert">ERROR! : No se pudo realizar el cambio</div>');
              }
//              location.reload();
                },
      error: function (){
        console.log("Errro al enviar mensaje");
      }
    });
}