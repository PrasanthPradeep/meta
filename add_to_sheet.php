<?php
require __DIR__ . '/vendor/autoload.php';

use Google\Spreadsheet\DefaultServiceRequest;
use Google\Spreadsheet\ServiceRequestFactory;

// Authenticate with Google Sheets API and get access token
$client = new Google_Client();
$client->setApplicationName("Your Application Name");
$client->setAuthConfig("path/to/your/credentials.json");
$client->setScopes(['https://www.googleapis.com/auth/drive', 'https://www.googleapis.com/auth/spreadsheets']);
$accessToken = $client->fetchAccessTokenWithAssertion()["access_token"];

// Connect to your Google Spreadsheet
$spreadsheetId = "YOUR_SPREADSHEET_ID";
$worksheetName = "YOUR_WORK
