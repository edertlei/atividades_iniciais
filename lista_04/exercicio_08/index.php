<?php

function converteFahrenheitParaCelsius($fahrenheit) {
    
    $celsius = ($fahrenheit - 32) * 5 / 9;
    return $celsius;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (isset($_POST['fahrenheit'])) {
        
        $fahrenheit = floatval($_POST['fahrenheit']);
        
        
        $celsius = converteFahrenheitParaCelsius($fahrenheit);
        
        
        printf("%.2fF eh equivalente a %.2fC\n", $fahrenheit, $celsius);
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Conversor de Temperatura</title>
</head>
<body>
    <h2>Conversor de Temperatura - Fahrenheit para Celsius</h2>
    <form action="converteTemperatura.php" method="post">
        <label for="fahrenheit">Digite a temperatura em graus Fahrenheit:</label>
        <input type="text" id="fahrenheit" name="fahrenheit" required>
        <br><br>
        <button type="submit">Converter</button>
    </form>
</body>
</html>
