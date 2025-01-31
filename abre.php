<?php
$conexion=new mysqli("localhost", "root", "", "aeromexico");
if($conexion){
echo "la gestion fue exitosa !:)";
}else{
"algo salio mal:(";
}

?>