<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Sistema</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body class="d-flex flex-column min-vh-100 bg-light">
    <header class="bg-warning d-flex align-items-center" style="height: 4cm;">
        <div class="container text-center">
            <img src="img\logohakunabatata.png" alt="logo" style="height: 50px; width: 50px;">
            <h1>HakunaBatata</h1>
            <h5>Esqueça seus problemas com nossas porções!</h5>
            <style>

                h5 {
                    margin-left: 25%;
                    width: 50%;
                    background-color: white;
                    border: 5px solid white;
                    border-radius: 3%;
                }

            </style>
        </div>
    </header>
    <nav class="navbar navbar-expand-lg p-0 navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="principal.php">Home</a>
            <a class="navbar-brand" href="usuarios_cadastro.php">Usuários</a>
            <a class="navbar-brand" href="produtos_cadastro.php">Produtos</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <form method="POST" action="">
                            <a class="btn btn-link nav-link float-left" href="shopcart.php"><i class="bi bi-cart text-white"></i></a>
                            <button class="btn btn-link nav-link text-white" name="logout" type="submit">Logout</button>
                            <style>

                                button, a {
                                    opacity: 1;
                                }

                                button:hover, a:hover {
                                    transition: background-color 0.5s ease;
                                    background-color: rgb(128, 128, 128, 0.6);
                                }

                            </style>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
