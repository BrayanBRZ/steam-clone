<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crunchyroll</title>
    <! – animegenders ->

        <style type="text/css">
            body {
                font-size: medium;
                font-family: 'Roboto', sans-serif;
            }

            .square {
                width: 1400px;
                height: 60px;
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

            form {
                position: relative;
                top: 100px;
                left: 20px;
            }

            #choosepreferences {
                font-size: x-large;
                position: absolute;
                top: 50px;
                left: 25px;
            }

            #terms {
                font-size: small;
                top: 50px;
                left: 25px;
            }
        </style>
</head>

<body>
    <div class="square"></div>
    <img src="/steam-clone/images/CrunchyrollMainPage.png" alt="CrunchyrollMainPage">

    <h1 id="choosepreferences">Escolha suas preferências! </h1>

    <form method=POST>

        Quais seus gêneros você gostaria de explorar? </br>
        <input type="checkbox" name="gender" value="gender" /> gender </br>
        <input type="checkbox" name="gender" value="gender" /> gender </br>
        <input type="checkbox" name="gender" value="gender" /> gender </br>
        <input type="checkbox" name="gender" value="gender" /> gender </br>
        <input type="checkbox" name="gender" value="gender" /> gender </br>
        <input type="checkbox" name="gender" value="gender" /> gender </br>
        <input type="checkbox" name="gender" value="gender" /> gender </br>
        <input type="checkbox" name="gender" value="gender" /> gender </br>
        <input type="checkbox" name="gender" value="gender" /> gender </br>
        <input type="checkbox" name="gender" value="gender" /> gender </p>

        Quais seus animes preferidos? </br>
        <select name="anime1">
            <option value="none">não possuo</option>
            <option value="anime">anime</option>
            <option value="anime">anime</option>
            <option value="anime">anime</option>
            <option value="anime">anime</option>
            <option value="anime">anime</option>
            <option value="anime">anime</option>
            <option value="anime">anime</option>
            <option value="anime">anime</option>
            <option value="anime">anime</option>
        </select>

        <select name="anime1">
            <option value="none">não possuo</option>
            <option value="anime">anime</option>
            <option value="anime">anime</option>
            <option value="anime">anime</option>
            <option value="anime">anime</option>
            <option value="anime">anime</option>
            <option value="anime">anime</option>
            <option value="anime">anime</option>
            <option value="anime">anime</option>
            <option value="anime">anime</option>
        </select>

        <select name="anime1">
            <option value="none">não possuo</option>
            <option value="anime">anime</option>
            <option value="anime">anime</option>
            <option value="anime">anime</option>
            <option value="anime">anime</option>
            <option value="anime">anime</option>
            <option value="anime">anime</option>
            <option value="anime">anime</option>
            <option value="anime">anime</option>
            <option value="anime">anime</option>
        </select> </p>

        <input type="submit" value="FINALIZAR" /> </br>

    </form>

</body>

</html>