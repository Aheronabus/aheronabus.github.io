<?php
   $archivo = $_FILES['archivo']['name'];
   $guardado = $_FILES['archivo']['tmp_name'];

   if (!file_exists('archivos')) {
   		mkdir('archivos',0777,true);
   		if (file_exists('archivos')) {
   			if (move_uploaded_file($guardado, 'archivos/'.$archivo)) {
				echo "Archivo enviado correctamente";   				
   			}else{
   				echo "Hubo un error al enviar el Archivo. Intentalo de nuevo";
   			}
   		}
   } else {
   		if (move_uploaded_file($guardado, 'archivos/'.$archivo)) {
			echo "Archivo enviado correctamente";   				
   		}else{
   			echo "Hubo un error al enviar el Archivo. Intentalo de nuevo";
   		}
   }
?>