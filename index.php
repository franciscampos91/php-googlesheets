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

// 🔹 Lendo dados
$response = $service->spreadsheets_values->get($spreadsheetId, $range);
$values = $response->getValues();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capitais</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="container">

        <h3>Capitais</h3>

        <a href="inserir.html">Inserir</a>

        <table>
            <tr>
                <th>Cidade</th>
                <th>UF</th>
                <th>Habitantes</th>
                <th>Extensão</th>
                <th>Fundação</th>
                <th>Latitude</th>
                <th>Longitude</th>
            </tr>


            <?php

                //array_slice($values, 1) remove a primeira linha, que contém os cabeçalhos.
                foreach (array_slice($values, 1) as $row) {
                    echo "<tr>";
                    foreach ($row as $cell) {
                        echo "<td>" . htmlspecialchars($cell) . "</td>";
                    }
                    echo "</tr>";
                }


            ?>

        </table>

    </div>
    
</body>
</html>