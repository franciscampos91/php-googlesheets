<?php
require __DIR__ . '/vendor/autoload.php';

// Caminho para o seu arquivo JSON da conta de serviço
$credentialsPath = __DIR__ . '/credentials.json'; // substitua pelo nome do arquivo baixado

// ID da sua planilha (aquele da URL do Google Sheets)
$spreadsheetId = '17Pe2rQ6K7qEIgPE1Sg3NRvzI9Gpn47JeRSv-8yTLiME'; // substitua aqui

// Nome do intervalo (pode ser 'Página1!A1:G')
$range = 'Página1!A1:G';

// Autenticando com o Google
$client = new \Google_Client();
$client->setApplicationName('Google Sheets API com PHP');
$client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
$client->setAuthConfig($credentialsPath);
$client->setAccessType('offline');

$service = new Google_Service_Sheets($client);


// 🔹 Inserindo nova linha
$newData = [
    [$_POST['cidade'], $_POST['uf'], $_POST['habitantes'], $_POST['extensao'], $_POST['fundacao'], $_POST['latitude'], $_POST['longitude']]
];

$body = new Google_Service_Sheets_ValueRange([
    'values' => $newData
]);

$params = ['valueInputOption' => 'RAW'];

$insert = $service->spreadsheets_values->append(
    $spreadsheetId,
    $range,
    $body,
    $params
);

header("location: index.php");
exit;
