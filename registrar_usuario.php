<?php
header('Content-Type: text/html: charset=UTF-8');
error_reporting(E_ALL ^ E_NOTICE);

require_once '../..include/auto_load_path_2.php';

$usuario = new Usuarioinstace();
$usuarioBean = new UsuarioBean();

$usuarioBean = $usuario->c_buscar_registro_por_usuario_senha();

if(!is_null($usuarioBean->getUsu_usuario()) && !is_null($usuarioBean->getUsu_senha())){
    
    
    $resposta["usuario_array"] = array();
    $user = array();
    
    $user["usu_codigo"] = $suarioBean->getUsu_codigo();
    $user["usu_desconto"] = $suarioBean->getUsu_desconto();
    $user["usu_usuario"] = $suarioBean->getUsu_usuario();
    $user["usu_senha"] = $suarioBean->getUsu_senha();
    
    array_push($resposta["usuario_array"],$user);
    $resposta["sucesso"] = 1;
    $resposta["mensagem"] = "Dados retornado com sucesso";
    // teste
    
    
    
}else{
    
    
}
// teste real

?>
