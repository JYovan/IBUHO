/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function () {

    $("#btnEnviar").click(function (e) { 
        e.preventDefault();
        console.log("enviando...");
        $.ajax({
            type: "POST",
            url: "inc/send.php",
            data: {
                txtNombre: $("#txtNombre").val(),
                txtEmail: $("#txtEmail").val(),
                txtMensaje: $("#txtMensaje").val()}

        }).done(function (data) { 
            if (data === '1') {
        console.log("mensaje enviado");
                $("#result-contact-messages").html('<div class="alert alert-dismissable alert-success"><button type="button" class="close" data-dismiss="alert">×</button>Mensaje Enviado.</div>');
            }
            else
            {
        console.log("mensaje no enviado");
                $("#result-contact-messages").html('<div class="alert alert-dismissable alert-danger"><button type="button" class="close" data-dismiss="alert">×</button>Ha ocurrido un problema al intentar enviar el mensaje. Intente de nuevo o más tarde.'+data+' </div>');
            }
        });
    });
});