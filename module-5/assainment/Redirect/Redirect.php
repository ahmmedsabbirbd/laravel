<?php
namespace Assainment\Redirect;

class Redirect {

    public static function exit() {
        exit();
    }

    public static function exitWithHome() {
        header("Location: index.php");
        exit;
    }
}