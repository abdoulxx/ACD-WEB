<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Candidature - {{ $data['nom_entreprise'] }}</title>
  <style>
    @page {
      margin: 0cm;
    }

    body {
      margin: 0;
      font-family: DejaVu Sans, sans-serif;
      font-size: 13px;
      color: #333;
    }

    .header {
      background: #fff;
      padding: 20px 40px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      border-bottom: 3px solid #E0001B;
    }

    .header .title {
      background-color: #E0001B;
      color: white;
      font-weight: bold;
      padding: 10px 20px;
      font-size: 14px;
      text-align: center;
    }

    .logo {
      width: 80px;
    }

    .content {
      padding: 40px 50px;
    }

    h2 {
      color: #E0001B;
      margin-top: 40px;
      font-size: 16px;
    }

    .section {
      margin-bottom: 25px;
    }

    .section p {
      margin: 4px 0;
    }

    .label {
      font-weight: bold;
    }

    .footer {
      position: fixed;
      bottom: 0;
      left: 0;
      right: 0;
      background-color: #E0001B;
      color: white;
      text-align: center;
      padding: 10px 0;
      font-size: 13px;
    }
  </style>
</head>
<body>

  <!-- En-tête -->
  <div class="header">
  
    <div class="title">CANDIDATURE AU PRIX D’EXCELLENCE INTERNATIONAL</div>
  </div>

  <!-- Contenu -->

 <div class="content">

    {{-- Informations Générales --}}
    <h2>1. Informations Générales</h2>
    <div class="section">
      <p><span class="label">Nom de l’entreprise :</span> {{ $data['nom_entreprise'] }}</p>
      <p><span class="label">Statut juridique :</span> {{ $data['statut_juridique'] }}</p>
      <p><span class="label">Numéro RCCM :</span> {{ $data['numero_rccm'] }}</p>
      <p><span class="label">Pays & Ville de siège :</span> {{ $data['pays_ville_siege'] }}</p>
      <p><span class="label">Responsable :</span> {{ $data['nom_responsable'] }} ({{ $data['fonction_responsable'] }})</p>
      <p><span class="label">Email Responsable :</span> {{ $data['email_responsable'] }}</p>
      <p><span class="label">Téléphone Responsable :</span> {{ $data['telephone_responsable'] }}</p>
    </div>
  
    {{-- Profil & Activité --}}
    <h2>2. Profil & Activité</h2>
    <div class="section">
      <p><span class="label">Présentation de l’entreprise :</span> {{ $data['produits_services'] }}</p>
      <p><span class="label">Chiffre d’affaires (2-3 ans) :</span> {{ $data['chiffre_affaires'] }}</p>
    </div>
  
    {{-- Attestation --}}
    <div class="section" style="margin-top: 40px;">
      <p><strong>J’atteste que les informations fournies sont exactes. J’autorise leur publication en cas de sélection.</strong></p>
      <p><strong>Date de soumission :</strong> {{ \Carbon\Carbon::now()->format('d/m/Y à H:i') }}</p>
    </div>
  
  </div>
  

  <!-- Pied de page -->
  <div class="footer">
    PRIX D’EXCELLENCE INTERNATIONAL | ACD CORPORATE SERVICES
  </div>

</body>
</html>
