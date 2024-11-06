<?php
include "conexao.php";
$usuario = $_POST['usuario_digitado'];
$senha = $_POST['senha_digitada'];

// 1º Passo - Comando SQL
$sql = "SELECT * FROM tb_usuarios
        WHERE username='$usuario' AND password='$senha'";
// 2º Passo - Preparar a conexão
$consulta = $pdo->prepare($sql);
// 3º Passo - Tentar executar
try{
    $consulta->execute();
    $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
    if($resultado){
        session_start();
        $_SESSION['logado'] = "sim";
        echo "Logado com sucesso";
    }else{
        echo "Usuário e/ou senha incorretos";
    }
}catch(PDOException $erro){
    echo "Falha no login! ".$erro->getMessage();
}

?>