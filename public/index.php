<?php

$page = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch ($page) {
    case '/event_machine/':
        require '../src/views/user/index.php';
        break;

}
