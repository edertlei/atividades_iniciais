<?php

function areaCirculo($raio) {
    
    $pi = 3.14159;
    
    
    $area = $pi * $raio * $raio;
    return $area;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (isset($_POST['raio'])) {
        
        $raio = floatval($_POST['raio']);
        
        
        $area = areaCirculo($raio);
        
       
        printf("A area do circulo eh %.3f\n", $area);
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calcular Área do Círculo</title>
</head>
<body>
    <h2>Calcular Área do Círculo</h2>
    <form action="areaCirculo.php" method="post">
        <label for="raio">Digite o raio do círculo:</label>
        <input type="text" id="raio" name="raio" required>
        <br><br>
        <button type="submit">Calcular Área do Círculo</button>
    </form>
</body>
</html>
