<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
} ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pokéshop</title>
    <!-- jQuery / Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <!-- Vex modal -->
    <script src="/node_modules/vex-js/dist/js/vex.combined.js"></script>
    <script>vex.defaultOptions.className = 'vex-theme-os'</script>
    <script src="/node_modules/konami/konami.js"></script>
    <link rel="stylesheet" href="/node_modules/vex-js/dist/css/vex.css" />
    <link rel="stylesheet" href="/node_modules/vex-js/dist/css/vex-theme-os.css" />
    <!-- Own CSS -->
    <link rel="stylesheet" href="../css/main.css">
</head>
<body class="vh-100">
<?php require_once 'templates/navbar.php'?>
