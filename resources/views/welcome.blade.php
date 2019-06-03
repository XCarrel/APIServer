<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        .namerow {
            background-color: lightgray;
        }

        table {
            border-collapse: collapse;
        }
        table, tr, td {
            border: 1px solid gray;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <h1>
            MOB1 - Aggrégateur d'API
        </h1>
        <p>Ce site sert de backend pour exercer les appels à une API depuis les applications mobiles développées dans le cours MOB1 (SI-T1a, juin 2019)</p>
        <p>Il sert les points d'entrées suivants:</p>
        <table style="text-align: left">
            <tr><th>Fonction</th><th>Route</th><th>Méthode</th></tr>
            <tr><td colspan="3" class="namerow">Dardan</td></tr>
            <tr>
                <td style="padding: 5px">Liste des utilisateurs</td>
                <td style="padding: 5px">api/dii/users</td>
                <td>GET</td>
            </tr>
            <tr><td colspan="3" class="namerow">Senistan</td></tr>
            <tr>
                <td style="padding: 5px">Liste des recettes</td>
                <td style="padding: 5px">api/sjm/recipes</td>
                <td>GET</td>
            </tr>
            <tr><td colspan="3" class="namerow">Alexandre + Quentin</td></tr>
            <tr>
                <td style="padding: 5px">Liste des jobs</td>
                <td style="padding: 5px">api/ajdqrr/jobs</td>
                <td>GET</td>
            </tr>
            <tr><td colspan="3" class="namerow">Quentin</td></tr>
            <tr>
                <td style="padding: 5px">Liste des vins</td>
                <td style="padding: 5px">api/qns/wines</td>
                <td>GET</td>
            </tr>
            <tr><td colspan="3" class="namerow">Nicolas</td></tr>
            <tr>
                <td style="padding: 5px">Liste des comptes</td>
                <td style="padding: 5px">api/nhy/accounts</td>
                <td>GET</td>
            </tr>
            <tr><td colspan="3" class="namerow">Jarod</td></tr>
            <tr>
                <td style="padding: 5px">Liste des magasins</td>
                <td style="padding: 5px">api/jsn/shops</td>
                <td>GET</td>
            </tr>
        </table>

    </div>
</div>
</body>
</html>
