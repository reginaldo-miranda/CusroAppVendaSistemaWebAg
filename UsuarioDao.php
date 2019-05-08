<?php

class UsuarioDao {

    private static $instance;

    function __construct() {
        
    }

    static function getInstance() {

        if (!isset(self::$instance))
            self::$instance = new UsuarioDao();
        return self::$instance;
    }

    public function m_buscar_registro_por_usuario_senha(UsuarioDao $usuario) {

        try {

            $sql = "SELECT * FORM USUARIO WHERE USU_USUARIO = USU_USUARIO AND USU_SENHA = :USU_SENHA";
            $startement_sql = ConexaoPDO::getInstance()->prepare($sql);

            $startement_sql->bindvalue("USU_USUARIO", $usuario->getUsu_usuario());
            $startement_sql->bindvalue("USU_SENHA", $usuario->getUsu_senha());


            $startement_sql->execute();

            return $this->m_popula_objeto_usuario($startement_sql->fetch(PDO::FETCH_ASSOC));
        } catch (PDOException $e) {
            print "Erro em m_buscar_registro_por_usuario_senha.$e->getMessage())";
        }
    }

    public function m_popula_objeto_usuario($linha) {

        $usuario = new UsuarioBean();
        $usuario->setUsu_codigo($linha["usu_codigo"]);
        $usuario->setUsu_nome($linha["usu_nome"]);
        $usuario->setUsu_email($linha["usu_email"]);
        $usuario->setUus_celkey($linha["usu_celkey"]);
        $usuario->setUsu_numerocel($linha["usu_numerocel"]);
        $usuario->setUsu_liberado($linha["usu_liberado"]);
        $usuario->setUsu_desconto($linha["usu_desconto"]);
        $usuario->setUsu_comissao($linha["usu_comissao"]);
        $usuario->setUsu_usuario($linha["usu_usuario"]);
        $usuario->setUsu_senha($linha["usu_senha"]);
        return $usuario;
    }

}

?>
