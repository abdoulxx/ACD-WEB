<?php
// Script de test email simple
echo "=== TEST CONFIGURATION EMAIL ===\n";
echo "APP_ENV: " . (getenv('APP_ENV') ?: 'local') . "\n";
echo "MAIL_MAILER: " . (getenv('MAIL_MAILER') ?: 'smtp') . "\n";
echo "MAIL_HOST: " . (getenv('MAIL_HOST') ?: 'non défini') . "\n";
echo "MAIL_PORT: " . (getenv('MAIL_PORT') ?: 'non défini') . "\n";
echo "MAIL_USERNAME: " . (getenv('MAIL_USERNAME') ?: 'non défini') . "\n";

// Test de connexion socket simple
$host = getenv('MAIL_HOST') ?: 'smtp.gmail.com';
$port = getenv('MAIL_PORT') ?: 465;

echo "\n=== TEST CONNEXION SOCKET ===\n";
$socket = @fsockopen($host, $port, $errno, $errstr, 5);
if ($socket) {
    echo "✅ Connexion réussie à {$host}:{$port}\n";
    fclose($socket);
} else {
    echo "❌ Connexion échouée: {$errstr} (Code: {$errno})\n";
}

echo "\n=== RECOMMANDATIONS ===\n";
if (getenv('APP_ENV') === 'local') {
    echo "⚠️  APP_ENV=local détecté - Les emails seront seulement loggés\n";
    echo "   Changez APP_ENV=production pour envoyer les emails\n";
}

if (!getenv('MAIL_HOST')) {
    echo "⚠️  MAIL_HOST non défini\n";
}

echo "\n=== FIN DU TEST ===\n";
?>
