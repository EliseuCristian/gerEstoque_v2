<?php
include_once("conexao.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>

    <style>
        nav{
            text-align: center;
            background-color:blue;

        }
        a{
            text-decoration: none;
            color:white
        }
    </style>


</head>
<body>

<nav>
    <ul>
    <a href="index.html">Home</a>
    <a href="teste.php">Painel</a>
    <a href="buscando.php">Selecionar</a>
    </ul>
</nav>

    <h1>Valores Iniciais</h1>
    <table border="1">
        <tr>
            <th>Produto</th>
            <th>Quantidade</th>
            <th>Preço</th>
        </tr>
        <?php 
        $sql2 = "SELECT * FROM prod_cad";

        $busca = mysqli_query($conexao, $sql2);
        while ($linha = mysqli_fetch_assoc($busca)) {
            echo "<tr>";
            echo "<td>" . $linha['nome_prod'] . "</td>";
            echo "<td>" . $linha['qtd_prod'] . "</td>";
            echo "<td>" . $linha['preco'] . "</td>";
            echo "</tr>";
        }
        ?>
    </table>

    <button class="btn" onclick="window.print()">Imprimir</button>
    
</body>
</html>