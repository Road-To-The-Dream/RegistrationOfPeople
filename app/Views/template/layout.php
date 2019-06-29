<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <meta charset="utf-8">

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/chosen.css">

    <!-- Scripts -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script type="text/javascript" src="js/chosen.jquery.min.js"></script>
    <script type="text/javascript" src="js/chosenHandler.js"></script>
    <script type="text/javascript" src="js/validationInput.js"></script>
</head>
<body>
<header>
    <div class="container mb-3">
        <nav class="header navbar navbar-expand-lg navbar-dark">
            <a href="/" class="nav-link p-0 pr-2">
                <img class="mr-2" src="image/logo.png" alt="image">
            </a>
            <a href="/" class="name-logo">Info</a>

            <div class="collapse navbar-collapse" id="navbarColor02">
                <ul class="navbar-nav list mr-auto">
                    <a href="http://<?= $configuration['baseHost'] ?>/">Registration</a>
                </ul>
            </div>
        </nav>
    </div>
</header>

<?php
ob_get_flush();
?>

</body>
</html>
