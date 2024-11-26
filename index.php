<?php
include 'db_connection.php';

// Buscar produtos
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
    <title>Catálogo Digital de Moda Íntima</title>
    <style>
        /* Estilo geral */
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
            margin-top: 20px;
            margin-bottom: 40px;
            max-width: 100%;
            height: auto;
            max-width: 250px;
        }

        h1 {
            font-size: 36px;
            color: #ec4d88;
            font-weight: bold;
            letter-spacing: 2px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .sexyshop-link {
            display: inline-block;
            padding: 15px 30px;
            background-color: #ec4d88;
            color: white;
            font-size: 20px;
            text-decoration: none;
            border-radius: 25px;
            margin-top: 20px;
            transition: background-color 0.3s ease;
        }

        .sexyshop-link:hover {
            background-color: #d13a6b;
        }

        .product-container {
            max-width: 1200px;
            width: 100%;
            padding: 30px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            background-color: rgba(255, 255, 255, 0.8);
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        .product {
            background-color: #ffffff;
            border-radius: 10px;
            border: 1px solid #ec4d88;
            padding: 20px;
            width: 300px;
            margin: 20px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
            text-align: center;
        }

        .product:hover {
            transform: scale(1.05);
        }

        .product h2 {
            color: #ec4d88;
            font-size: 24px;
            margin-bottom: 10px;
        }

        .product p {
            font-size: 14px;
            color: #666;
            line-height: 1.6;
            margin-bottom: 10px;
        }

        .product p strong {
            font-weight: bold;
        }

        .product img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-top: 10px;
        }

        .product .price {
            font-size: 18px;
            font-weight: bold;
            color: #ec4d88;
            margin-top: 15px;
        }

        .product a {
            text-decoration: none;
            color: #fff;
            background-color: #ec4d88;
            padding: 10px;
            border-radius: 5px;
            margin-top: 15px;
            display: inline-block;
        }

        .product a:hover {
            background-color: #d13a6b;
        }

        @media (max-width: 768px) {
            .product-container {
                flex-direction: column;
                align-items: center;
            }

            .product {
                width: 80%;
            }
        }

        @media (max-width: 480px) {
            .logo {
                max-width: 300px;
            }
        }
    </style>
</head>
<body>

    <!-- Logo -->
    <img src="logo.jpg" alt="Logo da Loja" class="logo">
    
    <!-- Link estilizado -->
    <a href="Catalogo.php" class="sexyshop-link">Acessar SexyShop</a>
    
    <!-- Lista de produtos -->
    <div class="product-container">
        <?php while ($row = $result->fetch_assoc()) : ?>
            <div class="product">
                <h2><?= htmlspecialchars($row['nome'], ENT_QUOTES, 'UTF-8'); ?></h2>
                <p><?= htmlspecialchars($row['descricao'], ENT_QUOTES, 'UTF-8'); ?></p>
                <p><strong>Quantidade disponível:</strong> <?= htmlspecialchars($row['quantidade'], ENT_QUOTES, 'UTF-8'); ?></p>
                <p><strong>Preço:</strong> R$ <?= number_format($row['preco'], 2, ',', '.'); ?></p>
                <?php if (!empty($row['imagem'])) : ?>
                    <img src="uploads/<?= htmlspecialchars($row['imagem'], ENT_QUOTES, 'UTF-8'); ?>" alt="Imagem do produto">
                <?php endif; ?>
                <a href="produto_detalhes.php?id=<?= $row['id']; ?>">Ver Detalhes</a>
            </div>
        <?php endwhile; ?>
    </div>
</body>
</html>

<?php
// Fechar conexão
$conn->close();
?>