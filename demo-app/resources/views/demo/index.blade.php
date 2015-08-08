<!DOCTYPE html>
<html lang="en">
<head>
    <style>
    .title, .foto, .likebutton, .server
    {
        text-align: center;
    }

    .server
    {
        color: #CCC;
        border-top: 1px solid #CCC;
        margin-top: 20px;
        padding-top: 10px;
    }
    </style>
    <meta charset="UTF-8">
    <title>Demo</title>
</head>
<body>
    <div class="container">
        <div class="content">
            <div class="title">
            <h1>Relax Daddy! After work we can relax...</h1>
            </div>
            <div class="foto"><img src="/images/helena.jpg" alt=""></div>
            <div class="likebutton">
                {{ $curtidas }} curtida(s)
                <br>
                <a href="/demo/curtir">Curtir</a>
            </div>
            <div class="server">
                Servidor: {{ $container }} <br>IP: {{ $serverip }})
            </div>
        </div>
    </div>
</body>
</html>