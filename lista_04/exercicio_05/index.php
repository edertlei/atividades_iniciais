<?php

function areaQuadrado($base, $altura) {
    
    $area = $base * $altura;
    return $area;
}


if ($_SERVER["REQUEST_METHOD"] == "oPOST") {
   
    if (isset($_POST['base']) && isset($_POST['altura'])) {
        
        $base = floatval($_POST['base']);
        $altura = floatval($_POST['altura']);
        
       
        $area = areaQuadrado($base, $altura);
        
        
        printf("A area do quadrado eh %.3f\n", $area);
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calcular Área do Quadrado</title>
</head>
<body>
    <h2>Calcular Área do Quadrado</h2>
    <form action="areaQuadrado.php" method="post">
        <label for="base">Digite a base do quadrado:</label>
        <input type="text" id="base" name="base" required>
        <br><br>
        <label for="altura">Digite a altura do quadrado:</label>
        <input type="text" id="altura" name="altura" required>
        <br><br>
        <button type="submit">Calcular Área do Quadrado</button>
    </form>
</body>
</html>
