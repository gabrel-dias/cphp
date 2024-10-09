<!-- montagem.php -->
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['equipamento'], $_POST['nome'])) {
    $equipamento = $_POST['equipamento'];
    $nome = htmlspecialchars($_POST['nome']);
} else {
    header('Location: escolha.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Montar Equipamento</title>
    <link rel="stylesheet" href="style.css">
</head>

<body id="montagem_geral">

    <div id="cartao_montagem">

        <h2><?php echo ucfirst($equipamento); ?> - Montagem</h2>

        <form action="resultado.php" method="POST">

            <input type="hidden" name="nome" value="<?php echo $nome; ?>">
            <input type="hidden" name="equipamento" value="<?php echo $equipamento; ?>">

            <h3>Escolha a CPU:</h3>

            <select class="opc" name="cpu" required>
                <option value="Intel i5-1135G7|1000">Intel i5-1135G7 (R$ 1000)</option>
                <option value="Intel i7-1165G7|1500">Intel i7-1165G7 (R$ 1500)</option>
                <option value="AMD Ryzen 5|900">AMD Ryzen 5 (R$ 900)</option>
                <option value="AMD Ryzen 7|1300">AMD Ryzen 7 (R$ 1300)</option>
            </select>

            <h3>Escolha a Memória:</h3>

            <select class="opc" name="memoria" required>
                <option value="8GB DDR4|400">8GB DDR4 (R$ 400)</option>
                <option value="16GB DDR4|800">16GB DDR4 (R$ 800)</option>
                <option value="32GB DDR4|1200">32GB DDR4 (R$ 1200)</option>
                <option value="64GB DDR4|2000">64GB DDR4 (R$ 2000)</option>
            </select>

            <h3>Escolha o HD/SSD:</h3>

            <select class="opc" name="armazenamento" required>
                <option value="512GB SSD|500">512GB SSD (R$ 500)</option>
                <option value="1TB SSD|800">1TB SSD (R$ 800)</option>
                <option value="1TB HDD|300">1TB HDD (R$ 300)</option>
                <option value="2TB HDD|600">2TB HDD (R$ 600)</option>
            </select>

            <?php if ($equipamento == 'desktop'): ?>

                <h3>Escolha o Monitor:</h3>

                <select class="opc" name="monitor" required>
                    <option value="Monitor 21'|600">Monitor 21' (R$ 600)</option>
                    <option value="Monitor 24'|800">Monitor 24' (R$ 800)</option>
                    <option value="Monitor 27'|1000">Monitor 27' (R$ 1000)</option>
                    <option value="Monitor 32'|1500">Monitor 32' (R$ 1500)</option>
                </select>

            <?php endif; ?>

            <h3>Escolha o Sistema Operacional:</h3>

            <select class="opc" name="so" required>
                <option value="Windows 11|500">Windows 11 (R$ 500)</option>
                <option value="Linux|0">Linux (Grátis)</option>
            </select>

            <br><br>

            <input type="submit" value="Finalizar Montagem">

        </form>

    </div>
    
</body>

</html>