<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
</head>
<body>
    <div id="caixa_login">
            <h1>Área restrita</h1>
             <input type="text"
                       id="usuario_digitado"
                       placeholder="Digite seu usuário">
                <br><br>
                <input type="password"
                       id="senha_digitada"
                       placeholder="Digite sua senha">
                <br><br>
                <button id="btnEntrar">Entrar</button>

    </div>
    <script>
        $("#btnEntrar").click(function(){
            var usuario = $("#usuario_digitado").val();
            var senha = $("#senha_digitada").val();
            $.ajax({
                url: "fazer_login.php",
                type: "POST",
                data: {usuario_digitado: usuario, 
                       senha_digitada: senha},
                       success: function(resposta){
                        alert(resposta);   
                       },
                       error: function(){
                        alert("Erro ao fazer login");
                       }

            });
        });
    </script>
</body>
</html>