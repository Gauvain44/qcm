<?php
session_start();


if (isset($_GET['deco'])) {
    session_destroy();
    header("Location: ./index.php");
}

$page = isset($_GET['p']) ? $_GET['p'] : 'home';
// include "scripts/fonctions.php";

// Connexion à la BDD
$ini = parse_ini_file("config/config.ini", true);
extract($ini['connexion']);
include "scripts/mysql.php";
$mysql = new mysql($host, $db, $login, $pass);

$maintenant = new Datetime();
?>
<!doctype HTML>
<html>
    <meta name="robots" content="noindex"> <!-- Pour ne pas etre référencé donc pas visible -->

    <?php include "page/head.html"; ?>
    <body style="padding:0" data-target=".bs-docs-sidebar" data-spy="scroll">
        <?php include "page/menu.php"; ?>
        <div class="container-fluid">
            <?php include "page/$page.php"; ?>
        </div>
        <?php include "page/js.html" ?>
    </body>
</html>

