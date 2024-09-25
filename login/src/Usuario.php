<?php
class Usuario {
    private $usuario;
    private $senha;
 
    public function __construct($usuario, $senha) {
        $this->usuario = $usuario;
        $this->senha = $senha;
    }
 
    public function getUsuario() {
        return $this->usuario;
    }
 
    public function login() {
        $usuarioCorreto = 'admin';
        $senhaCorreta = 'admin123';
 
        if ($this->usuario === $usuarioCorreto && $this->senha === $senhaCorreta) {
            return true;
        }
        return false;
    }
}
?>