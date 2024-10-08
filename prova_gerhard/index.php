<?php
// Inicializando a sessão para guardar informações
session_start();

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Lista fixa de usuários
    $usuarios = [
        'admin' => 'admin',
        'gabriel@dias' => '123',
        'enzzo@dias' => '123'
    ];
    
    // Os dados que foram enviados do formulário para o servidor
    // usando o método POST são acessados e armazenados nas variáveis
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Verifica se o usuário e senha estão corretos
    if (isset($usuarios[$email]) && $usuarios[$email] == $senha) {
        // Armazena os valores de email e nome na sessão
        $_SESSION['email'] = $email;
        $_SESSION['nome'] = $nome;
        // Redireciona para a página de escolha
        header('Location: escolha.php');
        exit();
    } else {
        // Define uma mensagem de erro que será utilizda caso o login não seja validado
        $erro = "Usuário ou senha incorretos!";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body id="login">

    <!-- Formulário de login -->
    <div id="form_login">
        <h1>LOGIN</h1>
        <form action="index.php" method="POST">
            <input type="text" name="nome" id="nome" placeholder="NOME" required><br><br>
            <input type="email" name="email" id="email" placeholder="EMAIL" required><br><br>
            <input type="password" name="senha" id="senha" placeholder="SENHA" required><br><br>
            <!-- Exibe mensagem de erro se houver -->
            <?php if (isset($erro)): ?>
                <p style="color:white;"><?php echo $erro; ?></p>
            <?php endif; ?>
            <input type="submit" value="LOGAR">
        </form>
    </div>

</body>

</html>