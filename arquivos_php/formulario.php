<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/media-query.css">
</head>
<body>
    <br>
    <div class = "voltar">
            <a href="home.php">Voltar</a>
    </div>
    <section id="formulario">
            <div id="imagem">
                <!-- Aqui vai a imagem nas CSS -->
            </div>
            <div id="cadastro">
                <h1>Cadastro</h1>
                <p>Seja bem-vindo(a) ao nosso site, faça aqui seu cadastro!</p>
                <?php 

                    if(isset($_POST['submit']))
                {
                    /* aparecendo na tela as informações
                        print_r("Nome: " . $_POST['nome']);
                        print_r("<br>");
                        print_r("Email: " .$_POST['email']);
                        print_r("<br>");
                        print_r("Telefone: " .$_POST['telefone']);
                        print_r("<br>");
                        print_r("Sexo: " .$_POST['genero']);
                        print_r("<br>");
                        print_r("Data de Nascimento: " .$_POST['data_nascimento']);
                        print_r("<br>");
                        print_r("Cidade: " .$_POST['cidade']);
                        print_r("<br>");
                        print_r("Estado: " .$_POST['estado']);
                        print_r("<br>");
                        print_r("Endereço: " .$_POST['endereco']);
                        print_r("<br>");
                        */

                        // passando as informações de todos os inputs para o banco de dados

                        include_once('config.php');
                        
                        $nome = $_POST['nome'];
                        $email = $_POST['email'];
                        $senha = $_POST['senha'];
                        $telefone = $_POST['telefone'];
                        $sexo = $_POST['genero'];
                        $data_nasc = $_POST['data_nascimento'];
                        $cidade = $_POST['cidade'];
                        $estado = $_POST['estado'];
                        $endereco = $_POST['endereco'];

                        /*Verificando se o email e senha já existem*/ 

                        $sqlEmail = "SELECT * FROM usuarios WHERE email = '$email'";
                        $resultEmail = $conexao->query($sqlEmail);

                        $sqlSenha = "SELECT * FROM usuarios WHERE senha = '$senha'";
                        $resultSenha = $conexao->query($sqlSenha);

                        if(mysqli_num_rows($resultEmail) == 1)
                        {
                            echo "Email já cadastrado! Troque o seu email.";
                        }else{
                            if(mysqli_num_rows($resultSenha) == 1){
                                echo "Essa senha pode ter sido utilizada, tente uma mais forte!";
                            } else{
                                $result = mysqli_query($conexao, "INSERT INTO usuarios(nome, email, senha, telefone, sexo, data_nasc, cidade, estado, endereco)
                                VALUES ('$nome', '$email', '$senha', '$telefone', '$sexo', '$data_nasc', '$cidade', '$estado', '$endereco')");
                                echo "Cadastro feito com sucesso! Volte agora para fazer o seu login.";
                            }
                        }
                    }
                ?>
                <form  action="formulario.php" method = "POST" autocomplete="on">
                    <div class="campo">
                        <i class="material-symbols-outlined">person</i>
                        <input type="text" name="nome" id="nome" placeholder="seu nome" autocomplete="nome" required="" maxlength="45">
                        <label for="inome">Nome</label>
                    </div>
                    <div class="campo">
                        <i class="material-symbols-outlined">mail</i>
                        <input type="email" name="email" id="email" placeholder="seu e-mail" autocomplete="email" required="" maxlength="40">
                        <label for="ilogin">Login</label>
                    </div>
                    <div class="campo">
                        <i class="material-symbols-outlined">key</i>
                        <input type="password" name="senha" id="senha" placeholder="sua senha" autocomplete="current-password" required="" minlength="8" maxlength="20">
                        <div id="icon"></div>
                        <label for="isenha">Senha</label>
                    </div>
                    <div class="campo">
                        <i class="material-symbols-outlined">call</i>
                        <input type="text" name="telefone" id="telefone" placeholder="seu telefone" autocomplete="telefone" required="" maxlength="15">
                        <label for="telefone">Telefone</label>
                    </div>
                    <p>Sexo:</p>
                    <input type="radio" id="feminino" name="genero" value="feminino" required>
                    <label for="feminino">Feminino</label>
                    <br>
                    <input type="radio" id="masculino" name="genero" value="masculino" required>
                    <label for="masculino">Masculino</label>
                    <br>
                    <input type="radio" id="outro" name="genero" value="outro" required>
                    <label for="outro">Outro</label>
                    <div class="campo">
                        <i class="material-symbols-outlined">event</i>
                        <input type="date" name="data_nascimento" id="data_nascimento" required>
                    </div>
                    <div class="campo">
                        <i class="material-symbols-outlined">home</i>
                        <input type="text" name="cidade" id="cidade" placeholder="sua cidade" autocomplete="cidade" required="" maxlength="45">
                        <label for="cidade">Cidade</label>
                    </div>
                    <div class="campo">
                        <i class="material-symbols-outlined">public</i>
                        <input type="text" name="estado" id="estado" placeholder="seu estado" autocomplete="estado" required="" maxlength="45">
                        <label for="estado">Estado</label>
                    </div>
                    <div class="campo">
                        <i class="material-symbols-outlined">bookmarks</i>
                        <input type="text" name="endereco" id="endereco" placeholder="seu endereço" autocomplete="endereco" required="" maxlength="45">
                        <label for="endereco">Endereco</label>
                    </div>
                    <input type="submit" class = "entrar" name="submit" id="submit" value = 'Cadastrar'>
                </form>
            </div>
        </section>
</body>
</html>