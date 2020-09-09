<?php

	$dal = new DalUsuario ($con);
	$usuarios = $dal->localizar();
		
	foreach ($usuarios->fetchAll(PDO::FETCH_OBJ) as $registro) {
		if ($registro->usu_cod == $contato->__get('cod_usuario')) {
			$option = "<option value='{$registro->usu_cod}' selected>{$registro->usu_nome}</option>";
		} else {
			$option = "<option value='{$registro->usu_cod}'>{$registro->usu_nome}</option>";
		}

		echo $option;
	}
