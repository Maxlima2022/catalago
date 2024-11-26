<?php
include 'sexyshop_db.php';

// Verificar conexão com o banco de dados
if (!$conn) {
    die("Erro ao conectar com o banco de dados: " . $conn->connect_error);
}

// Buscar todos os produtos do banco de dados
$sql = "SELECT * FROM produtos";
$result = $conn->query($sql);

if (!$result) {
    die("Erro ao buscar produtos: " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SexyShop - Catálogo de Produtos</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: url('2.jpg') no-repeat center center fixed;
            background-size: cover;
            margin: 0;
            padding: 0;
            color: #4a4a4a;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
            text-align: center;
        }

        .logo {
            display: block;
            margin-top: 10px;
            margin-bottom: 30px;
            max-width: 350px; /* Tamanho maior para fácil visualização */
            height: auto; /* Preserva a proporção */
        }

        h1 {
            color: #ec4d88;
            font-size: 36px;
            margin-top: 20px;
        }

        .back-button {
            background-color: #ec4d88;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            margin-bottom: 20px;
            display: inline-block;
        }

        .back-button:hover {
            background-color: #d13a6b;
        }

        .product-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            padding: 20px;
        }

        .product-item {
            background-color: #fff;
            padding: 15px;
            max-width: 200px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .product-item img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .product-item h2 {
            font-size: 18px;
            color: #ec4d88;
        }

        .product-item .price {
            font-size: 16px;
            font-weight: bold;
            color: #ec4d88;
        }

        .view-button {
            background-color: #ec4d88;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            margin-top: 10px;
        }

        .view-button:hover {
            background-color: #d13a6b;
        }
    </style>
</head>
<body>
    <img src="logo.jpg" alt="Logo da Loja" class="logo">

    <a href="index.php" class="back-button">Menu do Catálogo</a>

    <h1>Catálogo  - SexyShop</h1>

    <div class="product-list">
        <?php if ($result->num_rows > 0): ?>
            <?php while ($produto = $result->fetch_assoc()): ?>
                <div class="product-item">
                    <img src="uploads/<?= htmlspecialchars($produto['imagem'], ENT_QUOTES, 'UTF-8'); ?>" alt="Imagem do produto">
                    <h2><?= htmlspecialchars($produto['nome'], ENT_QUOTES, 'UTF-8'); ?></h2>
                    <p class="price">R$ <?= number_format($produto['preco'], 2, ',', '.'); ?></p>
                    <p>Quantidade disponível: <?= $produto['quantidade']; ?> unidades</p>

                    <a href="Detalhes2.php?id=<?= $produto['id']; ?>" class="view-button">Ver Detalhes</a>
                </div>
            <?php endwhile; ?>
        <?php else: ?>
            <p>Não há produtos disponíveis no momento.</p>
        <?php endif; ?>
    </div>

</body>
</html>
