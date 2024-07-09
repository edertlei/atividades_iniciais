<?php

function buscaMaiorValor($num1, $num2, $num3) {
    $maior = $num1; 
    
   
    if ($num2 > $maior) {
        $maior = $num2;
    }
    
    
    if ($num3 > $maior) {
        $maior = $num3;
    }
    
    return $maior;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    if (isset($_POST['numero1']) && isset($_POST['numero2']) && isset($_POST['numero3'])) {
        
        $num1 = intval($_POST['numero1']);
        $num2 = intval($_POST['numero2']);
        $num3 = intval($_POST['numero3']);
        
        
        $maior = buscaMaiorValor($num1, $num2, $num3);
        
       
        printf("O maior valor informado foi %d\n", $maior);
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Encontrar Maior Valor</title>
</head>
<body>
    <h2>Encontrar Maior Valor</h2>
    <form action="maiorValor.php" method="post">
        <label for="numero1">Digite o primeiro número inteiro:</label>
        <input type="text" id="numero1" name="numero1" required>
        <br><br>
        <label for="numero2">Digite o segundo número inteiro:</label>
        <input type="text" id="numero2" name="numero2" required>
        <br><br>
        <label for="numero3">Digite o terceiro número inteiro:</label>
        <input type="text" id="numero3" name="numero3" required>
        <br><br>
        <button type="submit">Encontrar Maior Valor</button>
    </form>
</body>
</html>
