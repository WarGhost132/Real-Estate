<?php

// Dumper
define('DUMPER_URL', '<<dumper_host>>:<<dumper_port>>/api/v1/create_application');
define('DUMPER_SECRET_KEY', '<<dumper-secret-key>>');
define('DUMPER_DB_SECRET_KEY', '<<dumper-db-secret-key>>');

// Google sheets
define('GOOGLE_SHEETS_API_KEY', '<<google-sheets-api-key>>');

// Database connection
function getDbConnection(): array {

    $headers = "Content-Type: application/json\r\naccept: application/json\r\nAuthorization: ".DUMPER_SECRET_KEY."\r\n";
    $url = DUMPER_URL;
    $db_secret = DUMPER_DB_SECRET_KEY;

    $http = [
        'header' => $headers,
        'url' => $url,
        'db_secret' => $db_secret
    ];

    return $http;
}

function getGoogleConnection(): string {
    return GOOGLE_SHEETS_API_KEY;
}