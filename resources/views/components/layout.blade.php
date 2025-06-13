<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Tubes.com</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap"
            rel="stylesheet" />
        <link rel="stylesheet" href="css/layout.css">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">
    </head>
    <body class="bg-gray-50 ">
        <x-navbar />
        <x-register />
        <x-login />
        
        {{ $slot }}
        
        <x-modal />
        <script src="js/layout.js"></script>
        <script src="js/sitesbyname.js"></script>
    </body>
</html>