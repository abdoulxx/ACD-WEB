<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Confirmation de votre candidature</title>
  <style>
    body {
      background-color: #f6f9fc;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      color: #333;
      padding: 20px 0;
      margin: 0;
    }

    .email-wrapper {
      background-color: #ffffff;
      max-width: 600px;
      margin: auto;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 0 10px rgba(0,0,0,0.05);
    }

    .email-header {
      background-color: #ff0000;
      color: white;
      padding: 20px;
      text-align: center;
    }

    .email-body {
      padding: 30px 20px;
    }

    .email-body h2 {
      margin-top: 0;
      color: #ff0000;
    }

    ul.details {
      list-style: none;
      padding: 0;
      margin: 20px 0;
    }

    ul.details li {
      margin-bottom: 10px;
      line-height: 1.5;
    }

    ul.details li strong {
      display: inline-block;
      width: 180px;
    }

    .notice {
      background-color: #eaf4ff;
      padding: 15px;
      border-left: 4px solid #ff0000;
      border-radius: 5px;
      margin: 20px 0;
      font-size: 14px;
    }

    .cta {
      display: inline-block;
      padding: 12px 20px;
      background-color: #ff0000;
      color: white;
      text-decoration: none;
      font-weight: bold;
      border-radius: 6px;
      margin-top: 25px;
    }

    .cta:hover {
      background-color: #ff0000;
    }

    .email-footer {
      text-align: center;
      font-size: 13px;
      color: #888;
      padding: 20px;
    }
  </style>
</head>
<body>
  <div class="email-wrapper">
    <div class="email-header">
      <h1>Confirmation de votre candidature</h1>
    </div>

    <div class="email-body">
      <h2>Merci {{ $data['nom_responsable'] }} !</h2>
      <p>Votre candidature au <strong>Prix d’Excellence</strong> a bien été enregistrée. Voici un récapitulatif :</p>

      <ul class="details">
        <li><strong>Nom de l’entreprise :</strong> {{ $data['nom_entreprise'] }}</li>
        <li><strong>Statut juridique :</strong> {{ $data['statut_juridique'] }}</li>
        <li><strong>Numéro RCCM :</strong> {{ $data['numero_rccm'] }}</li>
        <li><strong>Pays & ville de siège :</strong> {{ $data['pays_ville_siege'] }}</li>
        
        <li><strong>Nom du responsable :</strong> {{ $data['nom_responsable'] }}</li>
        <li><strong>Fonction :</strong> {{ $data['fonction_responsable'] }}</li>
        <li><strong>Email du responsable :</strong> {{ $data['email_responsable'] }}</li>
        <li><strong>Téléphone du responsable :</strong> {{ $data['telephone_responsable'] }}</li>
        
        <li><strong>Présentation de l’entreprise :</strong> {{ $data['produits_services'] }}</li>
        <li><strong>Chiffre d’affaires :</strong> {{ $data['chiffre_affaires'] }}</li>
        
        <li><strong>Date de soumission :</strong> {{ \Carbon\Carbon::now()->format('d/m/Y à H:i') }}</li>
      </ul>
      

      <div class="notice">
        Votre dossier est en cours d’analyse. Une fois validé, vous recevrez un mail de confirmation ou notre équipe vous contactera pour une audition afin de finaliser votre candidature.<br><br>
        Sachez que votre candidature peut être <strong>acceptée ou rejetée</strong> selon les informations transmises.
      </div>

      <a href="{{ url('/candidature/' . $data['id'] . '/telecharger') }}" class="cta" target="_blank">ð Télécharger ma candidature</a>
    </div>

    <div class="email-footer">
      L’équipe du Prix d’Excellence<br>
      © {{ date('Y') }} Tous droits réservés.
    </div>
  </div>
</body>
</html>
