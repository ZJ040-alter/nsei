<!DOCTYPE html>
<html lang="en">
<head>
    <?php
     $txt = isset($_GET["t"])?$_GET["t"]:"Texto Genérico";
     $tam = isset($_GET["tam"])?$_GET["tam"]:"12pt";
     $cor = isset($_GET["cor"])?$_GET["cor"]:"#000000";
    ?>
    <style>
        body{
            background-color: burlywood;
            color: white;
            font-size: 50px;
        }
        span.texto {
            font-size: <?php echo $cor; ?>;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerador de texto personalizado</title>
    <link rel="shortcut icon" href="ft.ico" type="image/x-icon">
</head>
<body>
    <center>
        <form method="get" action="<?=$_SERVER['PHP_SELF']?>">
            <label for="itxt">Texto: </label>
            <input type="text" name="t" id="itxt" placeholder="Digite seu texto" value="<?=$txt?>" ><br>
            <label for="itam">Tamanho</label>
            <select name="tam" id="itam">
                <option value="8pt">8</option>
                <option value="10pt">10</option>
                <option value="14pt" selected>14</option>
                <option value="20pt">20</option>
                <option value="40pt">40</option>
            </select><br>
            <label for="icor">Cor: </label>
            <input type="color" name="cor" id="icor"/><br>
            <input type="submit" value="Gerar"/><br>
            <?php
        echo "<span class='texto'>$txt</span>";
        ?>
</center>
</body>
</html>