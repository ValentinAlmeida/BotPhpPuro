<!DOCTYPE html>
<html lang="eng">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bot</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <style>

        *{
            outline: none;
        }

        .max-width{
            max-width: 800px;
            width: 100%;
        }

        body{
            background-color: #111;
        }

        .box{
            margin: 0 auto;
            padding: 10px;
            margin-top: 10%;
            text-align: center;

            background-color: #3d3d3d;
        }

        .box h1{
            color: #fff;
        }

        textarea{
            width: 100%;
            height: 100px;
        }

    </style>
</head>
<body>

<div class="max-width box">

    <h1>
        Bot API
    </h1>

    <textarea class="form-control" placeholder="Insira sua mensagem" id="txtMensagem"></textarea>
    <button type="button" class="btn btn-success w-100" id="btnEnviar">Enviar</button>

</div>

<script src="script.js"></script>

</body>
</html>