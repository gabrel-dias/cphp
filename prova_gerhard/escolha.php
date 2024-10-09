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
    <link rel="stylesheet" href="style.css">
</head>

<body id="escolha_php">

    <form action="montagem.php" method="POST">

        <div id="geral">

            <h2>Bem-vindo, <?php echo $nome; ?>!</h2>

            <h3>Você deseja comprar um:</h3>

            <div id="opcoes">
                <input type="radio" id="notebook" name="equipamento" value="notebook" required>
                <label for="notebook"><img src="../imgs/laptop.png" alt="Notebook"></label><br>
                <input type="radio" id="desktop" name="equipamento" value="desktop" required>
                <label for="desktop"><img src="../imgs/computer.png" alt="Desktop"></label><br><br>
                <input type="submit" value="Escolher">
            </div>

        </div>

    </form>
</body>

</html>