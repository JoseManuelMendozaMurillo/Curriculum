<?php

require_once "./views/layout.php";
require_once "./views/sobreMi.php";

$page = "home";
if (isset($_GET["page"]) && !empty($_GET["page"])) {
    $page = $_GET["page"];
}

switch ($page) {
    case 'sobreMi':
        echo layoutHeader();
        echo layoutNavbar();
        echo sobreMi();
        echo layoutFooter();
        break;

    case "experiencia":
        echo layoutHeader();
        echo layoutNavbar();
        echo sobreMi();
        echo layoutFooter();
        break;

    default:
        echo "404";
        break;
}
