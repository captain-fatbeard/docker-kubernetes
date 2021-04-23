<?php

if (isset($_GET['info'])) {
    phpinfo();
    die();
}

session_start();

echo 'Hello php FPM served by nginx';

if (isset($_GET['set'])) {

    $_SESSION['session test'] = $_GET['set'];
}

var_dump($_SESSION);
