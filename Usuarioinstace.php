<?php

class Usuarioinstace {

    function __construct() {
        
    }

    public function c_buscar_registro_por_usuario_senha() {

        $usuario->setUsu_usuario($POST["usu_usuario"]);
        $usuario->setUsu_senha($POST["usu_senha"]);
        return UsuarioDao::getInstance()->m_buscar_registro_por_usuario_senha($usuario);
    }

}

?>
