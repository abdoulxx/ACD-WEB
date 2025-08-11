<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $subject }}</title>
    <style>
        /* Ajoutez ici vos styles CSS pour le corps de l'e-mail */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
        }
        p {
            line-height: 1.6;
            color: #666;
        }
        /* Ajoutez ici vos styles CSS pour les liens ou les boutons */
        a {
            text-decoration: none;
            color: #007bff;
        }
        /* Ajoutez ici d'autres styles personnalisés si nécessaire */
    </style>
</head>
<body>
    <div class="container">
        <h1>{{ $subject }}</h1>
        <p>{{ $content }}</p>
        <p>Merci de nous rejoindre !</p>
    </div>
</body>
</html>
