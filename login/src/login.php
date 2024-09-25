<?php
require 'Usuario.php';
 
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
 
    $user = new Usuario($usuario, $senha);
 
    if ($user->login()) {
        echo "Login com sucesso! Bem-vindo, " . $user->getUsuario();
    } else {
        echo "Usuário ou senha inválidos.";
    }
}
?>