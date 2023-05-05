<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Steam Prod Register</title>
    <! register ->

        <style type="text/css">
            body {
                font-size: medium;
                font-family: 'Roboto', sans-serif;
            }

            .square {
                width: 1400px;
                height: 70px;
                background-color: #414141;
                position: absolute;
                top: -1px;
                left: -1px;
            }

            img {
                position: absolute;
                top: 10px;
                left: 10px;
                width: 200px;
            }

            #login-box {
                position: absolute;
                top: 25px;
                right: 350px;
                color: white;
            }

            #navegation-box {
                position: absolute;
                top: 25px;
                right: 250px;
                color: white;
            }
        </style>
</head>

<body>
    <div class="square"></div>
    <img src="/steam-clone/midia/LogoNaviBar.png" alt="LogoNaviBar.png">

    <h1 id="makeAccount">Registrar Anime </h1>

    <form method=POST enctype="multipart/form-data">

        Título do produto </br>
        <input type="text" name="nome" /> </p>

        Informações adicionais do título do produto </br>
        <input type="text" name="nome" /> </p>

        Marca do produto </br>
        <input type="text" name="marca" /> </p>

        Foto do produto </br>
        <input type="file" name="prodCover" /> </p>

        Data de lançamento do produto </br>
        <input type="date" id="data" name="data"> </p>

        Especificações técnicas do produto </br>
        <input type="text" name="nome" /> </p>

        Gêneros do produto </br>
        <input type="checkbox" name="hardware" value="hardware" /> hardware </br>
        <input type="checkbox" name="software" value="software" /> software </br>
        <input type="checkbox" name="game" value="game" /> game </br>
        <input type="checkbox" name="mouse" value="mouse" /> mouse </br>
        <input type="checkbox" name="teclado" value="teclado" /> teclado </br>
        <input type="checkbox" name="monitor" value="monitor" /> monitor </br>
        <input type="checkbox" name="motherboard" value="motherboard" /> motherboard </br>
        <input type="checkbox" name="videoboard" value="videoboard" /> videoboard </br>
        <input type="checkbox" name="memories" value="memories" /> memories </br>
        <input type="checkbox" name="cabinet" value="cabinet" /> cabinet </br>
        <input type="checkbox" name="coolers" value="coolers" /> coolers </br>
        <input type="checkbox" name="fones" value="fones" /> fones </br>
        <input type="checkbox" name="others" value="others" /> others </p>

        <input type="submit" value="REGISTRAR PRODUTO" /> </br>
    </form>
</body>

</html>