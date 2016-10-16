console.log("fui llamdado");
$("#estados").change(municipios);

function municipios(){
   var idestado = $("#estados").val();
     var parametros = {
            "idestado" :idestado
            };
    $.ajax({
      data:  parametros,
      url:   'ajax.php?mode=municipios',
      type:  'post',
      beforeSend: function () {
                console.log("enviando");
      },
      success:  function (response) {
              console.log('completo');
              $("#municipios").html(response);
                  },
      error: function (){
        console.log("Errro al enviar mensaje");
      }
    });
}
function registro(){
    console.log("si registro");
    var nombre,paterno,materno,user,estado,municipio,sexo,nacimiento,tyc,correo,clave1,clave2;
    nombre = $("#name_reg").val();
    paterno = $("#paterno_reg").val();
    materno = $("#materno_reg").val();
    user = $("#user_reg").val();
    nacimiento = $("#nacimiento_reg").val();
    sexo = $("#sexo_reg").val();
    estado = $("#estados").val();
    municipio = $("#municipios").val();
    correo = $("#email_reg").val();
    clave1 = $("#pass_reg").val();
    clave2 = $("#pass2_reg").val();
    tyc = $("#tyc_reg").is(':checked');
    if(clave1===clave2){
         var parametros = {
             "nombre" : nombre,
             "paterno" : paterno,
             "materno" : materno,
             "user" : user,
             "nacimiento" : nacimiento,
             "sexo" : sexo,
            "estado" :estado,
            "municipio" : municipio,
            "correo" : correo,
            "pass" : clave1
            };
    $.ajax({
      data:  parametros,
      url:   'ajax.php?mode=registro',
      type:  'post',
      beforeSend: function () {
                console.log("enviando");
                $("#error_reg").html('<div class="alert alert-info" role="alert">Intentando Registrarte</div>');
      },
      success:  function (response) {
              if(response==="1"){
                  $("#error_reg").html('<div class="alert alert-success" role="alert">Registro con Exito</div>');
              }else{
                  $("#error_reg").html(response);
              }
                  },
      error: function (){
        console.log("Errro al enviar mensaje");
      }
    });
    }
    else{
        $("#error_reg").html('<div class="alert alert-warning" role="alert">Las  contraseñas no coinciden</div>');
    }
    
}

$( "form" ).submit(function( event ) {
    registro();
  event.preventDefault();
});

function validar_user(){
     var user = $("#user_reg").val();
     var parametros = {
            "user" :user
            };
    $.ajax({
      data:  parametros,
      url:   'ajax.php?mode=validaruser',
      type:  'post',
      beforeSend: function () {
                console.log("enviando");
      },
      success:  function (response) {
              console.log('completo');
              $("#help_user_reg").html(response);
                  },
      error: function (){
        console.log("Errro al enviar mensaje");
      }
    });
}