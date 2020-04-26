<?php 

$clave=$_POST['clave'];

 if(strlen($clave) < 8){
      echo  "La clave debe tener al menos 8 caracteres";
      return false;
    
   }else{
      echo  "";
   }
   if(strlen($clave) > 10){
      echo  "La clave no puede tener más de 10 caracteres";
      return false;
     
   }else{
      echo  "";
   }
   if (!preg_match('`[a-z]`',$clave)){
      echo  "La clave debe tener al menos una letra minúscula";
      return false;
     
   }else{
      echo  "";
   }
   if (!preg_match('`[A-Z]`',$clave)){
      echo  "La clave debe tener al menos una letra mayúscula";
      return false;
     
   }else{
      echo  "";
   }
   if (!preg_match('`[0-9]`',$clave)){
      echo  "La clave debe tener al menos un caracter numérico";
      return false;
  
   }else{
      echo  "";
   }
   
   

 ?>