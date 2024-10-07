<!-- escolha.php -->
<?php
// Verifica se há uma sessão ativa e recupera todos os dados que foram armazenados na página anterior, por exemplo
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['nome'])) {
    // Redireciona de volta ao login se não estiver logado
    header('Location: index.php');
    exit();
}

// Pega o nome do usuário da sessão
// Converte caracteres especiais em entidades de HTML e recupera o valor de nome do usuário que foi coletado na página anterior
$nome = htmlspecialchars($_SESSION['nome']); // método inútil aparentemente
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Escolha o Equipamento</title>
</head>

<body>
    <h2>Bem-vindo, <?php echo $nome; ?>!</h2>
    <form action="montagem.php" method="POST">
        <input type="hidden" name="nome" value="<?php echo $nome; ?>">
        <div>
            <h3>Você deseja comprar um:</h3>
            <input type="radio" id="notebook" name="equipamento" value="notebook" required>
            <label for="notebook">Notebook</label><br>
            <input type="radio" id="desktop" name="equipamento" value="desktop" required>
            <label for="desktop">Desktop</label><br><br>
            <input type="submit" value="Escolher">
        </div>
    </form>
</body>

</html>