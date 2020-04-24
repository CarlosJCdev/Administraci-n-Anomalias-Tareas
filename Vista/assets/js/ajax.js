$(document).ready(function(){

$("#loginForm").bind("submit",function(){//se debe llarmar igual que el formulariosubmit no input

	$.ajax({
      type: $(this).attr("method"),
      url: $(this).attr("action"),
      data: $(this).serialize(),
      success: function(response){
        console.log(response);
        
        if(response.estado == "true"){
        $("body").overhang({
         type: "success",
         message: "Usuario encontrado,   te estamos redirigiendo...!",
           callback:function(){
          window.location.href = "jefatura.php";
         }

        });

        }else{
          $("body").overhang({
         type: "error",
         message: "Ups! Usuario o Contraseña incorrecta!",
               });
        }
         
      },
      error: function(){
        $("body").overhang({
        type: "error",
        message: "Ups! Usuario o Contraseña incorrecta!",
       
         });

      }
      
	});//cierre de ajax
     return false;

});//captura el evento a enviar cierre del evento
});//cierre de function