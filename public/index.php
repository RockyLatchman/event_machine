<?php

$page = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

require '../src/views/header.php';

switch ($page) {
    case '/event_machine/':
        require '../src/views/user/index.php';
        break;

}

require '../src/views/footer.php';
