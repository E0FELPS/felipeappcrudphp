<?php
include 'principal_controller.php'; 
include 'produtos_controller.php'; 
include 'header.php'; 

if (!isset($_SESSION['email'])) {
    header("Location: index.php"); 
    exit();
}


$products = getProducts();
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Página Principal</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            min-height: 100vh; 
            display: flex;
            flex-direction: column;
        }
        .container {
            flex: 1; 
        }
        .card {
            height: 95%;
            transition: transform 0.5s ease
        }

        .card:hover {
            transform: scale(1.04);
            box-shadow: 3 16px 16px rgba(0, 0, 0, 0.3);
        }
    </style>
</head>
<body>
    <!-- Carousel -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel" id="containercarrosel">
        <style>

        #containercarrosel {
            margin-top: 50px;
        }
        
        </style>

    <!-- Indicators/dots -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div>

    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
     <div class="carousel-item active">
        <img src="img\carroselamarelo.png" alt="Los Angeles" class="d-block" style="width:100%;">
    </div>
    <div class="carousel-item">
        <img src="img\carroselrosa.png" alt="Chicago" class="d-block" style="width:100%">
    </div>
    <div class="carousel-item">
        <img src="img\carroselazul.png" alt="New York" class="d-block" style="width:100%">
    </div>
    </div>

    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
    </div>
  

    <div class="container mt-5">
        <h2 class="text-center">Nossas delícias</h2><br>
        <div class="row">
        <?php foreach ($products as $product): ?>
    <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
            <img src="<?php echo $product['url_img']; ?>" class="card-img-top" alt="Imagem do produto">
            <div class="card-body">
                <h5 class="card-title"><?php echo $product['nome']; ?></h5>
                <p class="card-text"><strong>Valor:</strong> R$ <?php echo number_format($product['valorunitario'], 2, ',', '.'); ?></p>
                <p class="card-text"><strong>Descrição:</strong> <?php echo $product['descricao']; ?></p>
                <div class="d-flex justify-content-between align-items-center">
                    <form method="POST" action="principal_controller.php" class="d-inline">
                        <input type="hidden" name="id_produto" value="<?php echo $product['id']; ?>">
                        <button type="submit" name="adicionar_produto" class="btn btn-success">Comprar</button>
                        <a href="detalhes_produto.php?id=<?php echo $product['id']; ?>" class="btn btn-secondary">Ver Detalhes</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
        </div>
    </div>

    <?php include 'footer.php'; ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>