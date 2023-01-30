<?php

require_once("./views/layout.php");
require_once("./views/home.php");

$page = "home";
if(isset($_GET["page"]) && !empty($_GET["page"])){
    $page = $_GET["page"];
}

switch ($page) {
    case 'home':
        echo layoutHeader();
        echo layoutNavbar();
        echo home();
        echo layoutFooter();
        break;
    
    
    case "sobreMi":
        echo layoutHeader();
        echo layoutNavbar();
        echo home();
        echo layoutFooter();
        break;

    case "experiencia":
        echo layoutHeader();
        echo layoutNavbar();
        echo home();
        echo layoutFooter();
        break;

    default:
        echo "404";
        break;
}

?>