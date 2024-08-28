<?php

$mensagem1 = "";
$mensagem2 = "";
$mensagem3 = "";
$mensagem4 = "";

$limite = "100";


    if($_SERVER['REQUEST_METHOD'] =='POST'){
        if(isset($_POST['base']) && isset($_POST['altura'])){
            $base = $_POST['base'];
            $altura = $_POST['altura'];
            $resultado = ($base * $altura)  / 2;
            $mensagem1 = $resultado;
            // echo "A área do triângulo é de $resultado.";

            if($resultado > 100){
                $mensagem2 = "O resultado: $resultado, é maior que o limite de 100";
            } else if ($resultado < 100){
                $mensagem3 = "O resultado:$resultado, é menor que o limite de 100";
            } else{
                $mensagem4 = "O resultado: $resultado, é igual ao limite de 100";
            }
        }
    }

    

    
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<section id="main">
    <h1 id="titulo"> Calcular a área do triângulo </h1>
    <form method="post" id="form">
        <div class="form-content"> 
            <label for="calcular"> Diga a base do triângulo </label>
            <input type="number" id="base" name="base" required>
        </div>

        <div class="form-content"> 
            <label for="calcular"> Diga a altura do triângulo </label>
            <input type="number" id="altura" name="altura" required>
        </div>
        <input type="submit" value="enviar">
        <!-- //<button type="submit">enviar</button> -->
    </form>

    <?=  "A área do triângulo é de: $mensagem1" ?>
    </br>


    <?= $mensagem2 ?>
    <?= $mensagem3 ?>
    <?= $mensagem4 ?>


    </form>
</section>

</body>
</html>


