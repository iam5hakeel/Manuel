<?php
// Start the session to manage user login and session data
session_start();

// Set the content type to HTML
header('Content-Type: text/html; charset=UTF-8');

// Allow CORS for the Azure iframe to access resources and send/receive cookies
header("Access-Control-Allow-Origin: https://mobeenwebapp-aqgefwedcvgfa7cq.northeurope-01.azurewebsites.net");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Headers: Content-Type, X-Requested-With");

// Set Secure Cookies if using HTTPS
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
    ini_set('session.cookie_secure', '1'); // Ensures session cookie is sent over HTTPS
    ini_set('session.cookie_samesite', 'None'); // Allow cookies in cross-origin requests
}

// Optionally, you can also set the cookie domain to share session across subdomains
// Make sure this is set to the base domain to allow sharing of session cookies
ini_set('session.cookie_domain', '.livenorrealestatebrokers.com');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Video Sharing App | Developed by Manuel</title>
    
    <!-- Favicon links -->
    <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
    <link rel="manifest" href="images/site.webmanifest">
    
    <style>
        /* Ensure iframe takes full screen */
        html, body {
            margin: 0;
            padding: 0;
            height: 100%;
        }

        iframe {
            width: 100%;
            height: 100%;
            border: none;
        }
    </style>
</head>
<body>
    <!-- Full-page iframe to load the provided URL -->
    <iframe src="https://manuel.livenorrealestatebrokers.com/index.php"></iframe>
</body>
</html>