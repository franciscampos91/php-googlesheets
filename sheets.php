<?php
require __DIR__ . '/vendor/autoload.php';

// Caminho para o seu arquivo JSON da conta de serviço
$credentialsPath = __DIR__ . '/credentials.json'; // substitua pelo nome do arquivo baixado

// ID da sua planilha (aquele da URL do Google Sheets)
$spreadsheetId = '17Pe2rQ6K7qEIgPE1Sg3NRvzI9Gpn47JeRSv-8yTLiME'; // substitua aqui

// Nome do intervalo (pode ser 'Página1!A1:C')
$range = 'Página1!A1:C';

// Autenticando com o Google
$client = new \Google_Client();
$client->setApplicationName('Google Sheets API com PHP');
$client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
$client->setAuthConfig($credentialsPath);
$client->setAccessType('offline');

$service = new Google_Service_Sheets($client);

// 🔹 Lendo dados
$response = $service->spreadsheets_values->get($spreadsheetId, $range);
$values = $response->getValues();

echo "<h3>Dados atuais:</h3>";
if (empty($values)) {
    echo "Nenhum dado encontrado.";
} else {
    echo "<table border='1'>";
    foreach ($values as $row) {
        echo "<tr>";
        foreach ($row as $cell) {
            echo "<td>" . htmlspecialchars($cell) . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
}

// 🔹 Inserindo nova linha
$newData = [
    ["Carlos", "carlos@email.com", "3333-3333"]
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

echo "<p>Nova linha adicionada com sucesso!</p>";
