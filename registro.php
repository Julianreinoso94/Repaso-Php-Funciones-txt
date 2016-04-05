<?php 

		//primero que tengo que hacer es recibir las variables
		 $Nombre =$_POST["txtNombre"];
		 $Apellido =$_POST["txtApellido"];
		 $Edad = $_POST["txtEdad"];
         $usuario = $_POST["txtUser"];
		 $password =$_POST ["TxtPassword"];

		 $handle=fopen("Registros.txt","a+");
         

         $texto= $Nombre."|".$Apellido."|".$Edad."|".$usuario."|".$password.chr(13).chr(10); 

         fwrite($handle, $texto) ;

         fclose($handle);





 ?>
