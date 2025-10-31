<?php
ini_set('display_errors', '1');
error_reporting(E_ALL);
$page = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

require '../src/views/header.php';

switch ($page) {
    case '/event_machine/':
        require '../src/views/user/index.php';
        break;
    case '/event_machine/login':
        require '../src/views/user/login.php';
        break;
    case '/event_machine/register':
        require '../src/views/user/register.php';
        if (isset($_POST['submit'])) {
            header('Location: /event_machine/interests');
            exit();
        }
        break;
    case '/event_machine/interests':
        require '../src/views/user/interests.php';
        if (isset($_POST['save'])) {
            header('Location: /event_machine/location');
            exit();
        }
        break;
    case '/event_machine/location':
        require '../src/views/user/location.php';
        break;

    case '/event_machine/all-done':
        require '../src/views/user/finished.php';
        if (isset($_POST['next'])) {
            header('Location: /event_machine/all-done');
            exit();
        }
        break;
    case '/event_machine/browse/events':
        require '../src/views/events/browse.php';
        break;
    case '/event_machine/event':
        require '../src/views/events/view.php';
        break;
    case '/event_machine/messages':
        require '../src/views/messages/view_all.php';
        break;
    case '/event_machine/settings':
        require '../src/views/user/settings.php';
        break;


}

require '../src/views/footer.php';
