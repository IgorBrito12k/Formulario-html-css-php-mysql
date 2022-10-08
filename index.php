<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Cadastro</title>
</head>

<body>
    <div class="container">
        <div class="formulario-imagem">
            <img src="img/undraw_my_password_re_ydq7.svg">
        </div>
        <!-- criar a div formularios -->
        <div class="formulario">
            <form method="POST" action="processa.php" id="form">
                <div class="cabecalho-formulario">
                    <h1>Cadastre-se</h1>
                </div>
                <?php
                if(isset($_SESSION['msg']))
                    echo $_SESSION['msg'];
                    unset($_SESSION['msg']);
                ?>
                <div class="grupo-input">
                    <div class="input-box">
                        <label for="name">Nome</label>
                        <input class="name required" type="text" name="name" placeholder="Digite seu nome">
                        <span class="span-required">Não permitido caracteres especiais</span>
                    </div>

                    <div class="input-box">
                        <label for="nasc">Data de nascimento</label>
                        <input class="nasc required" type="date" name="nasc" placeholder="Digite sua data de nascimento">
                        <span class="span-required">Pessoas menores de 18 não podem se cadastrar.</span>
                    </div>

                    <div class="input-box">
                        <label for="cpf">CPF</label>
                        <input class="required" id="cpf" type="text" name="cpf" placeholder="Digite seu CPF">
                        <span class="span-required">CPF inválido</span>
                    </div>

                    <div class="input-box">
                        <label for="tel">Celular</label>
                        <input class="fone required" type="tel" name="fone" placeholder="11 99999-9999">
                        <span class="span-required">número de 12 caracteres excedido</span>
                    </div>

                    <div class="input-box">
                        <label for="email">Email</label>
                        <input class="email required" type="email" name="email" placeholder="Digite seu email">
                        <span class="span-required">Favor digite um email válido</span>
                    </div>

                    <div class="input-box">
                        <label for="ende">Endereço</label>
                        <input class="ende required" type="text" name="ende" placeholder="Rua, Bairro, Cidade, Estado">
                        <span class="span-required">limite de 100 caracteres excedido</span>
                    </div>

                    <div class="input-box">
                        <label for="obs">Observações</label>
                        <textarea id="obs" name="obs" rows="6" cols="53" placeholder="Digite sua observação"></textarea>
                        <span class="span-required">limite de 300 caracteres</span>
                    </div>
                </div>
                <input id="submit-button" class="btn" type="submit" value="Submit" />
            </form>
        </div>
    </div>
    
    <script src="js/validation.js"></script>
</body>

</html>