<!-- resultado.php -->
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['nome'], $_POST['equipamento'], $_POST['cpu'], $_POST['memoria'], $_POST['armazenamento'], $_POST['so'])) {
    $nome = htmlspecialchars($_POST['nome']);
    $equipamento = $_POST['equipamento'];
    $cpu = explode('|', $_POST['cpu']);
    $memoria = explode('|', $_POST['memoria']);
    $armazenamento = explode('|', $_POST['armazenamento']);
    $so = explode('|', $_POST['so']);

    $total = $cpu[1] + $memoria[1] + $armazenamento[1] + $so[1];

    if ($equipamento == 'desktop' && isset($_POST['monitor'])) {
        $monitor = explode('|', $_POST['monitor']);
        $total += $monitor[1];
    }
} else {
    header('Location: montagem.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Resultado Final</title>
    <link rel="stylesheet" href="style.css">
</head>

<body id="login">

    <div id="preco_resultado">

        <h2>Especificações da Máquina de <label for="nome_cliente"><?php echo $nome; ?></label></h2>

        <ul>

            <li><strong>Equipamento:</strong> <?php echo ucfirst($equipamento); ?></li>
            <li><strong>CPU:</strong> <?php echo $cpu[0]; ?></li>
            <li><strong>Memória:</strong> <?php echo $memoria[0]; ?></li>
            <li><strong>Armazenamento:</strong> <?php echo $armazenamento[0]; ?></li>
            <li><strong>Sistema Operacional:</strong> <?php echo $so[0]; ?></li>

            <?php if ($equipamento == 'desktop' && isset($monitor)): ?>

                <li><strong>Monitor:</strong> <?php echo $monitor[0]; ?></li>

            <?php endif; ?>

        </ul>

        <h3>Valor Total: R$ <label for="nome_cliente"><?php echo number_format($total, 2, ',', '.'); ?></label></h3>

    </div>

</body>

</html>