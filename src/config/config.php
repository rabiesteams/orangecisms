return [
    'url' => 'https://api.orange.ci/smsapi/sendSMS',
    'client_id' => 'votre_identifiant_client',
    'client_secret' => 'votre_secret_client',
    'sender_name' => 'votre_nom_expéditeur',

];
'providers' => [
        \rabiesteams\OrangeciSmsServiceProvider::class,
    ];
