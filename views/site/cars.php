<?php
require_once "navigation.php";
?>
<?php

if (!empty($data)) {
    if (!empty($_GET["action"])) {
        switch ($_GET["action"]) {
            case "create":
                require_once "html/carCreate.php";
                break;
            case "listAll":
                require_once "html/carList.php";
                break;
            case "view":
                require_once "html/carView.php";
                break;
            case "update":
                require_once "html/carUpdate.php";
                break;
            default:
                require_once "html/carList.php";
                break;
        }
    }
}
?>
<?php
require_once "footer.php";
?>