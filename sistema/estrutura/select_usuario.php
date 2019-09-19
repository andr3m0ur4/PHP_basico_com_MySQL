<?php  
$con = new Conexao ( );
$dal = new DalUsuario ( $con );
$resultado = $dal -> localizar ( );
	
while ( $registro = $resultado -> fetch_assoc ( ) ) {
	if ( $registro['usu_cod'] == $contato -> getCodUsuario ( ) ) {
		echo "<option value='{$registro['usu_cod']}' selected>{$registro['usu_nome']}</option>";
	} else {
		echo "<option value='{$registro['usu_cod']}'>{$registro['usu_nome']}</option>";
	}
}
?>