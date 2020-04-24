<?php

//validacion por metodo post del formulario seguridad
function validar_campo($campo){
 $campo =trim($campo);//se limpia campo no deseados
  $campo =stripcslashes($campo); 
   $campo =htmlspecialchars($campo);

   return $campo;//se retorna el campo para comparacion en la bd
}