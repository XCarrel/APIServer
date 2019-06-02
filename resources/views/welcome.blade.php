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
            <tr>
                <td style="padding: 5px">Liste des langues</td>
                <td style="padding: 5px">api/v1/languages</td>
            </tr>
            <tr>
                <td style="padding: 5px">Liste des vocabulaires</td>
                <td style="padding: 5px">api/v1/vocs</td>
            </tr>
            <tr>
                <td style="padding: 5px">Liste des vocabulaires avec leurs mots</td>
                <td style="padding: 5px">api/v1/fullvocs</td>
            </tr>
            <tr>
                <td style="padding: 5px">Liste des vocabulaires avec les langues X et Y (id)</td>
                <td style="padding: 5px">api/v1/vocs/X/Y</td>
            </tr>
            <tr>
                <td style="padding: 5px">Contenu d'un vocabulaire précis</td>
                <td style="padding: 5px">api/v1/voc/{id}</td>
            </tr>
            <tr>
                <td style="padding: 5px">Liste des devoirs d'un élève</td>
                <td style="padding: 5px">api/v1/assignments/{token}</td>
            </tr>
            <tr>
                <td style="padding: 5px">Retour de résultat (POST)</td>
                <td style="padding: 5px">api/v1/result</td>
                <td style="padding: 5px">id : of the assignment (NOT the vocabulary!)<br>token : authenticates the user<br>result : score</td>
            </tr>
        </table>

    </div>
</div>
</body>
</html>
