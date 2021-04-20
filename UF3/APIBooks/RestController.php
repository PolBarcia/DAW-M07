<?php
require_once("BookRestHandler.php");

$view = "";
if(isset($_GET["view"]))
    $view = $_GET["view"];
switch($view){

    case "all":
        $bookRestHandler = new BookRestHandler();
        $bookRestHandler->getAllBooks();
        break;

    case "single":
        $bookRestHandler = new BookRestHandler();
        $bookRestHandler->getBook($_GET["id"]);
        break;

    case "" :
        echo "404 - not found";
        break;
}
?>