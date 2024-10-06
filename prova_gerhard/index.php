<!-- index.php -->
<?php
// Inicializando a sessão para guardar informações do usuário
session_start();

// Verifica se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Lista fixa de usuários (substituir por um banco de dados se necessário)
    $usuarios = [
        'admin' => '123456',
        'gabriel@dias' => '123',
        'usuario2' => 'senha2'
    ];

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    // Verifica se o usuário e senha estão corretos
    if (isset($usuarios[$email]) && $usuarios[$email] == $senha) {
        // Armazena o os valores de 
        $_SESSION['email'] = $email;
        $_SESSION['nome'] = $nome;
        // Redireciona para a página de escolha
        header('Location: escolha.php');
        exit();
    } else {
        $erro = "Usuário ou senha incorretos!";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>

<body>

    <!-- Formulário de login -->
    <h1>LOGIN</h1>
    <form action="index.php" method="POST">
        <input type="text" name="nome" id="nome" placeholder="NOME" required><br><br>
        <input type="email" name="email" id="email" placeholder="EMAIL" required><br><br>
        <input type="password" name="senha" id="senha" placeholder="SENHA" required><br><br>
        <input type="submit" value="LOGAR">
    </form>

    <!-- Exibe mensagem de erro se houver -->
    <?php if (isset($erro)): ?>
        <p style="color:red;"><?php echo $erro; ?></p>
    <?php endif; ?>

</body>

</html>