<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pátio dos veículos</title>
</head>
<body>
    <?php
        require_once("php/conexao.php");
        if(isset($_GET["id"])==true){
            echo "<script>colorArea(".$_GET['id'].");</script>";
        }
    ?>

    <main id="patio">
        <div id="area1" class="areas"
        onclick="exibirArea('1')"> Área 1 </div>
        <div id="area1" class="areas"
        onclick="exibirArea('2')"> Área 2 </div>
        <div id="area1" class="areas"
        onclick="exibirArea('3')"> Área 3 </div>
</body>
</html>