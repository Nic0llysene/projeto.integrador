<?php include 'produtos.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
    <style>
        img {
             border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            height: 350px;
            object-fit: cover;
        }
</style>
</head>
<body>
    <h1>Produtos Disponíveis</h1>
    <div class="produtos">
        <?php foreach ($produtos as $item): ?>
            <div class="produto">
                <img src="img/<?php echo $item['imagem']; ?>" alt="<?php echo $item['nome']; ?>">
                <h2><?php echo $item['nome']; ?></h2>
                <p>Preço: R$ <?php echo number_format($item['preco'], 2, ',', '.'); ?></p>
        </div>
    <?php endforeach; ?>
        </div>
    </body>
</html>