<?php
include 'db_connection.php';

// Verificar se o ID do produto foi passado pela URL
if (isset($_GET['id'])) {
    $produto_id = $_GET['id'];

    // Buscar detalhes do produto com base no ID
    $sql = "SELECT * FROM produtos WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $produto_id);
    $stmt->execute();
    $result = $stmt->get_result();

    // Verificar se o produto foi encontrado
    if ($result->num_rows > 0) {
        $produto = $result->fetch_assoc();
    } else {
        echo "Produto não encontrado.";
        exit;
    }
} else {
    echo "ID do produto não especificado.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Produto</title>
    <style>
        /* Estilos personalizados para a página de detalhes */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
            color: #333;
            text-align: center;
        }

        .logo {
            max-width: 300px;
            margin-top: 50px;
        }

        h1 {
            color: #ec4d88;
            font-size: 36px;
            margin-top: 20px;
        }

        .product-details {
            background-color: #fff;
            padding: 30px;
            margin: 20px auto;
            max-width: 800px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .product-details img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .product-details h2 {
            color: #ec4d88;
            font-size: 28px;
        }

        .product-details p {
            font-size: 16px;
            margin-bottom: 10px;
        }

        .price {
            font-size: 20px;
            font-weight: bold;
            color: #ec4d88;
            margin-top: 20px;
        }

        .quantity {
            font-size: 18px;
            font-weight: bold;
            color: #333;
            margin-top: 10px;
        }

        .buy-button, .back-button {
            background-color: #ec4d88;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            margin-top: 20px;
        }

        .buy-button:hover, .back-button:hover {
            background-color: #d13a6b;
        }
    </style>
</head>
<body>
    <img src="logo.jpg" alt="Logo da Loja" class="logo">

    <h1>Detalhes do Produto</h1>

    <div class="product-details">
        <h2><?= $produto['nome']; ?></h2>
        <img src="uploads/<?= $produto['imagem']; ?>" alt="Imagem do produto">
        <p><?= $produto['descricao']; ?></p>
        <p class="price">Preço: R$ <?= number_format($produto['preco'], 2, ',', '.'); ?></p>
        <p class="quantity">Quantidade Disponível: <?= $produto['quantidade']; ?></p>

        <!-- Link para WhatsApp -->
        <a href="https://wa.me/5511951696046?text=Olá,%20quero%20comprar%20o%20produto%20<?= urlencode($produto['nome']); ?>%20por%20R$%20<?= number_format($produto['preco'], 2, ',', '.'); ?>." class="buy-button" target="_blank">Comprar pelo WhatsApp</a>

        <!-- Botão para voltar ao catálogo -->
        <a href="index.php" class="back-button">Voltar para o Catálogo</a>
    </div>
</body>
</html>
