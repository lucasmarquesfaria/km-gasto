<?php 
require_once "calculo.php";

// Chama a função para calcular os resultados
$resultado = calcularResultado();

// Atribui os resultados às variáveis para exibição
$km_inicio = $_POST['km_inicio'] ?? '';
$km_fim = $_POST['km_fim'] ?? '';
$novaData = $_POST['data'] ?? '';
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gastos por quilometros</title>
    
    <!-- import css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container">    
        <div class="row">
            <form action="index.php" method="POST">
                <div class="form-group pt-2">    
                    <input type="number" class="form-control" id="" placeholder="KM Inicial" name="km_inicio">
                </div>
                <div class="form-group">    
                    <input type="number" class="form-control" id="" placeholder="KM Final" name="km_fim">
                </div>
                <div class="form-group">    
                    <input type="date" class="form-control" id="" name="data">
                </div>
                <button type="submit" value="enviar" class="btn btn-primary">Calcular</button>
                <br>
                <br>
                <br>
            </form>
    
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">KM Rodados Inicio</th>
                        <th scope="col">KM Rodados Final</th>
                        <th scope="col">KM Total Gastos</th>
                        <th scope="col">Data</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?php echo $km_inicio; ?></td>
                        <td><?php echo $km_fim; ?></td>
                        <td><?php echo $resultado; ?></td>
                        <td><?php echo $novaData; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
