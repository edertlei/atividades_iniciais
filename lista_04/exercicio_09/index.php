<?php

function ehBissexto($ano) {
    
    if (($ano % 4 == 0 && $ano % 100 != 0) || $ano % 400 == 0) {
        return 1; 
        return 0;
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    if (isset($_POST['ano'])) {
        
        $ano = intval($_POST['ano']);
        
        
        $resultado = ehBissexto($ano);
        
        
        if ($resultado == 1) {
            printf("O ano %d eh bissexto\n", $ano);
        } else {
            printf("O ano %d nao eh bissexto\n", $ano);
        }
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Verificar Ano Bissexto</title>
</head>
<body>
    <h2>Verificar Ano Bissexto</h2>
    <form action="verificaBissexto.php" method="post">
        <label for="ano">Digite o ano:</label>
        <input type="text" id="ano" name="ano" required>
        <br><br>
        <button type="submit">Verificar</button>
    </form>
</body>
</html>
