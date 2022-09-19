<?php
     session_start();
     include_once('config.php');
     // print_r($_SESSION);
     if((!isset($_SESSION['loginP']) == true) and (!isset($_SESSION['senha']) == true))
     {
         unset($_SESSION['LoginP']);
         unset($_SESSION['senha']);
         header('Location: Tela de Login.html');
     }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário do Jônata</title>
    <link href="EstiloFormulario.css" rel="stylesheet">
</head>
<body>
    <a href="sistema.php">Voltar</a>
    <div class="box">
        <form action="formularioPF.php" method="POST">
            <fieldset>
                <legend><b>Fórmulário de Cadastro da Empresa</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="loginP" id="loginP" class="inputUser" required>
                    <label for="loginP" class="labelInput">Login</label>
                </div>
                <br>
                <br>
                <div class="inputBox">
                    <input type="password" name="senha" id="senha" class="inputUser" required>
                    <label for="senha" class="labelInput">Senha</label>
                </div>
                <br>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome completo</label>
                </div>
                <br>
                <br>
                <div class="inputBox">
                    <input type="text" name="cpf" id="cpf" class="inputUser" required>
                    <label for="cpf" class="labelInput">CPF</label>
                </div>
                <br>
                <br>
                <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br>
                <br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <p>Cargo:</p>
                <input type="radio" id="proprietario" name="funcao" value="proprietario" required>
                <label for="proprietario">Proprietário</label>
                <br>
                <input type="radio" id="funcionario" name="funcao" value="funcionario" required>
                <label for="funcionario">Funcionário</label>
                <br>
                <br>
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" required>
                <br><br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>
                <br><br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>