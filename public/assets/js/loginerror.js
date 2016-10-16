$( "#login_erro" ).submit(function( event ) {

 login();
  event.preventDefault();
});

function login(){
     var user = $("#user_login").val();
     var pass = $("#pass_login").val();
     var check = $("#recordar_login").is(':checked');
     var parametros = {
            "user" :user,
            "pass" :pass,
            "session" : check
            };
    $.ajax({
      data:  parametros,
      url:   'ajax.php?mode=login',
      type:  'post',
      beforeSend: function () {
                console.log("enviando");
      },
      success:  function (response) {
              console.log('completo');
              if (response === "1") {
              var url = "?view=index"; 
                    $(location).attr('href',url);
              }else {
                $("#error_login").html('<div class="alert alert-danger" role="alert">Usuario o contraseña incorrectos</div>');
                
              }
              console.log(response);
                  },
      error: function (){
        console.log("Errro al enviar mensaje");
      }
    });
}