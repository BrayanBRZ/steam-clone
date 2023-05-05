<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crunchyroll</title>
    <! register ->

        <style type="text/css">
            body {
                font-size: medium;
                font-family: 'Roboto', sans-serif;
            }

            .square {
                width: 100%;
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

    <h1 id="makeAccount">Criar Conta </h1>

    <form method=POST>
        Nome </br>
        <input type="text" name="nome" /> </p>

        Sobrenome</br>
        <input type="text" name="sobrenome" /> </p>

        Data de nascimento </br>
        <input type="date" id="data" name="data"> </p>

        CPF </br>
        <input type="number" min="11" max="14" name="cpf" /> </p>

        Telefone </br>
        <input type="tel" placeholder="(xx) xxxxx-xxxx" /> </br>
        <input type="checkbox" name="msgtel" value="1" /> receber notificações por telefone</p>

        E-mail </br>
        <input type="email" name="email" /> </br>
        <input type="checkbox" name="msgmail" value="1" /> Quero receber todas as novidades, ofertas e anúncios</p>

        Senha </br>
        <input type="password" name="password1" /> </p>

        Confirme a senha </br>
        <input type="password" name="password2" /> </p>

        <input type="submit" value="CRIAR CONTA" /> </br>

        <p id="terms">Ao criar uma conta, você declara que possui mais de 16 anos de idade e está de acordo com os
            Termos de Serviço & Política de Privacidade </p>

    </form>

</body>

</html>