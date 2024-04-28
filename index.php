<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Calculadora</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script type="text/javascript" src="javascript/validacao.js"></script>
    <link rel="stylesheet" href="css/style.css" type="text/css">
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

                <!--Campo de digitação-->

                <form class="bg-body-secondary" method="post" onsubmit="return validateForm();">
                    <div class="mb-3">
                        <label for="num1" class="form-label">Primeiro número:</label><br>
                        <input type="number" class="form-control" id="num1" name="n1"><br>
                    </div>

                    <div class="mb-3">
                        <label for="num2" class="form-label">Segundo número:</label><br>
                        <input type="number" class="form-control" id="num2" name="n2"><br>
                    </div>

                    <!--Botões-->
                    <button type="submit" class="btn btn-outline-primary" name="operacao" value="somar">Somar</button>
                    <button type="submit" class="btn btn-outline-primary" name="operacao" value="subtrair">Subtrair</button>
                    <button type="submit" class="btn btn-outline-primary" name="operacao" value="multiplicar">Multiplicar</button>
                    <button type="submit" class="btn btn-outline-primary" name="operacao" value="dividir">Dividir</button>
                </form>




                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    if (isset($_POST['operacao'])) {
                        $operacao = $_POST['operacao'];
                        $num1 = floatval($_POST['n1']);
                        $num2 = floatval($_POST['n2']);
                        $resultado = null;

                        switch ($operacao) {
                            case 'somar':
                                $resultado = $num1 + $num2;
                                echo "<h1>Resultado da adição: $num1 + $num2 = $resultado</h1>";
                                break;
                            case 'subtrair':
                                $resultado = $num1 - $num2;
                                echo "<h1>Resultado da subtração: $num1 - $num2 = $resultado</h1>";
                                break;
                            case 'multiplicar':
                                $resultado = $num1 * $num2;
                                echo "<h1>Resultado da multiplicação: $num1 * $num2 = $resultado</h1>";
                                break;
                            case 'dividir':
                                if ($num2 != 0) {
                                    $resultado = $num1 / $num2;
                                    echo "<h1>Resultado da divisão: $num1 / $num2 = $resultado</h1>";
                                } else {
                                    echo "<h1>Erro: Divisão por zero!</h1>";
                                }
                                break;
                            default:
                                echo "<h1>Operação inválida!</h1>";
                                break;
                        }
                    }
                }
                ?>


                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>