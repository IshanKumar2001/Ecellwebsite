<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/' :
        require __DIR__ . '/home.php';
        break;
    case '' :
        require __DIR__ . '/index.php';
        break;
    case '/about-us' :
        require __DIR__ . '/about.php';
        break;
    case '/initiatives/startups' :
        require __DIR__ . '/about.php';
        break;
    case '/initiatives/portfolios' :
        require __DIR__ . '/about.php';
        break;
    case '/initiatives/startup-service-program' :
        require __DIR__ . '/about.php';
        break;
    case '/initiatives/campus-ambassadors' :
        require __DIR__ . '/about.php';
        break;
    case '/events/calendar' :
        require __DIR__ . '/about.php';
        break;
    case '/events/e-conclave' :
        require __DIR__ . '/about.php';
        break;
    case '/events/industrial-visits' :
        require __DIR__ . '/about.php';
        break;
    case '/events/minor-events' :
        require __DIR__ . '/about.php';
        break;
    case '/events/internfair' :
        require __DIR__ . '/about.php';
        break;
    case '/events/innovriti' :
        require __DIR__ . '/about.php';
        break;
    case '/events/past-speakers' :
        require __DIR__ . '/about.php';
        break;
    case '/blog' :
        require __DIR__ . '/about.php';
        break;
    case '/gallery' :
        require __DIR__ . '/about.php';
        break;
    case '/get-involved/muj-student' :
        require __DIR__ . '/about.php';
        break;
    case '/get-involved/non-muj-student' :
        require __DIR__ . '/about.php';
        break;
    case '/get-involved/alumni' :
        require __DIR__ . '/about.php';
        break;
    case '/get-involved/corporate' :
        require __DIR__ . '/about.php';
        break;
    case '/contact-us' :
        require __DIR__ . '/about.php';
        break;
    default:
        require __DIR__ . '/404.php';
        break;
}