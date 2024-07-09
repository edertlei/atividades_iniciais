<?php

function ehPar($numero) {
    if ($numero % 2 == 0) {
        
        return 1;
    } else {
        
        return 0;
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (isset($_POST['numero'])) {
        
        $numero = intval($_POST['numero']);
        
        
        $resultado = ehPar($numero);
        
       
        if ($resultado == 1) {
            echo "O número $numero é par.\n";
        } else {
            echo "O número $numero é ímpar.\n";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Verificador de Par ou Ímpar</title>
</head>
<body>
    <h2>Verificador de Par ou Ímpar</h2>
    <form action="parOuImpar.php" method="post">
        <label for="numero">Digite um número inteiro:</label>
        <input type="text" id="numero" name="numero" required>
        <button type="submit">Verificar Par ou Ímpar</button>
    </form>
</body>
</html>
