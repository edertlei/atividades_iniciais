<?php

function areaRetangulo($base, $altura) {
    
    $area = $base * $altura;
    return $area;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (isset($_POST['base']) && isset($_POST['altura'])) {
        
        $base = floatval($_POST['base']);
        $altura = floatval($_POST['altura']);
        
        
        $area = areaRetangulo($base, $altura);
        
        
        printf("A area do retangulo eh %.3f\n", $area);
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calcular Área do Retângulo</title>
</head>
<body>
    <h2>Calcular Área do Retângulo</h2>
    <form action="areaRetangulo.php" method="post">
        <label for="base">Digite a base do retângulo:</label>
        <input type="text" id="base" name="base" required>
        <br><br>
        <label for="altura">Digite a altura do retângulo:</label>
        <input type="text" id="altura" name="altura" required>
        <br><br>
        <button type="submit">Calcular Área do Retângulo</button>
    </form>
</body>
</html>
