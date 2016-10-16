 var id=0;
 var colunmas = 0;
function mostrartablasel(tablas){
        console.log(id);
        var parametros = {
                "tabla" : tablas,
                "id"    : id
             };

        $.ajax({
                data:  parametros,
                url:   'inc/mostrartabla.php',
                type:  'post',
                beforeSend: function () {
                     console.log("Procesando");
                        $("#error").html("Procesando, espere por favor...");
                },
                success:  function (response) {
                       $("#error").html(response);
                       // console.log("REsultado"+response);
                        $("#colunmas").html(response);
                        $("#crearnuevo").html("");
               }
        });
}



function aggReg(tablas){
 
$('input[type=button]' ).click(function() {
    bid = (this.id) ; // button ID 
    id = $('tr').attr('id'); // table row ID 
});


var datos = document.getElementsByClassName("datos");

var i; 
//var valores = new Array();
var aux;

var x = new Array();
for (i = 0; i < datos.length; i++) {
    x[i]= datos[i].value;
      console.log(aux);
    //valores[i]= $(aux).val();
}
console.log(x);
     var parametros = {
                "tabla" : tablas,
                "datos" : x 
             };
        $.ajax({
                data:  parametros,
                url:   'inc/agregarregistro.php',
                type:  'post',
                beforeSend: function () {
                     console.log("ProcesandoAgregar");
                        $("#error").html("Procesando, espere por favor...");
                },
                success:  function (response) {
                       $("#crearnuevo").html(""); 
                        alert(response);

                        mostrartablasel(tablas);                             


                },
                error: function(response){
                    $(".datos").val(" "); 
                }
               
        });    
               
}

function crearNuevoRegistro(tablas){

  $("#crearnuevo").html(""); 
var parametros = {
                "tabla" : tablas,
                };
        $.ajax({
                data:  parametros,
                url:   'inc/crearnuevoregistro.php',
                type:  'post',
                beforeSend: function () {
                     console.log("ProcesandoCear");
                        $("#error").html("Procesando, espere por favor...");
                },
                success:  function (response) {              
                      //console.log("Agg"+response);
                       $("#crearnuevo").append(response);

                }
               
        });

}
function cearRegistro(tablas,id){
  console.log("id"+id);
  $("#crearnuevo").html(""); 
var parametros = {
                "tabla" : tablas,
                "id"  : id
                };
        $.ajax({
                data:  parametros,
                url:   'inc/modificarregistro.php',
                type:  'post',
                beforeSend: function () {
                     console.log("ProcesandoAtras");
                        $("#error").html("Procesando, espere por favor...");
                },
                success:  function (response) {              
                      //console.log("Agg"+response);
                       $("#crearnuevo").append(response);

                }
               
        });

}
function validarEditar(tablas){
 
$('input[type=button]' ).click(function() {
    bid = (this.id) ; // button ID 
    id = $('tr').attr('id'); // table row ID 
});


var datos = document.getElementsByClassName("datos");

var i; 
//var valores = new Array();
var aux;
console.log("Editando");
var x = new Array();
for (i = 0; i < datos.length; i++) {
    x[i]= datos[i].value;
      console.log(aux);
    //valores[i]= $(aux).val();
}
console.log(x);
     var parametros = {
                "tabla" : tablas,
                "datos" : x 
             };
        $.ajax({
                data:  parametros,
                url:   'inc/validarEditar.php',
                type:  'post',
                beforeSend: function () {
                     console.log("ProcesandoAtras");
                        $("#error").html("Procesando, espere por favor...");
                },
                success:  function (response) {
                       $("#crearnuevo").html(""); 
                        alert(response);

                        mostrartablasel(tablas);                             


                },
                error: function(response){
                    $(".datos").val(" "); 
                }
               
        });    
               
}
