<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: #f0f0f0;
            font-family: Arial, sans-serif;
        }

        .navbar-brand img {
            margin-right: 10px;
        }

        form {
            margin-top: 20px;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        button {
            margin-right: 10px;
        }

        h1 {
            margin-top: 20px;
            font-size: 24px;
            color: #333;
        }

        .tabuada-container {
            margin-top: 20px;
        }

        .table {
            background-color: #fff;
        }
    </style>
</head>

<body>

    <!--centralização de tudo -->
    <div class="container text-center">
        <div class="row">
            <div class="col">

                <!--Navbar-->
                <nav class="navbar navbar-expand-lg bg-body-secondary">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="index.php">
                            <img src="imagens/calculadora.png" alt="Logo" width="40" height="40" class="d-inline-block align-text-top">
                            Calculadora
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="tabuada.php">Tabuada</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- Formulário da Tabuada -->
                <form class="bg-body-secondary" method="post">
                    <div class="mb-3">
                        <label for="numero" class="form-label">Digite um número:</label><br>
                        <input type="number" class="form-control" id="numero" name="numero"><br>
                    </div>
                    <button type="submit" class="btn btn-outline-primary" name="gerar-tabuada">Gerar Tabuada</button>
                </form>

                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['gerar-tabuada'])) {
                    $numero = isset($_POST['numero']) ? $_POST['numero'] : 0;
                ?>
                    <div class="tabuada-container">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Operação</th>
                                    <th scope="col">Resultado</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                for ($i = 1; $i <= 10; $i++) {
                                    $resultado = $numero * $i;
                                    echo "<tr><td>$numero x $i</td><td>$resultado</td></tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                <?php } ?>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>