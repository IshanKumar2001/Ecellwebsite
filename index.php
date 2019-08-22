<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/' :
        require __DIR__ . '/home.php';
        break;
    case '' :
        require __DIR__ . '/home.php';
        break;

    case '/initiatives/startups' :
        require __DIR__ . '/Start-ups.php';
        break;
    case '/initiatives/portfolios' :
        require __DIR__ . '/Portfolios.php';
        break;
    case '/initiatives/startup-service-program' :
        require __DIR__ . '/Start-up Service Program.php';
        break;
    case '/initiatives/campus-ambassadors' :
        require __DIR__ . '/Campus Ambasssdors.php';
        break;
    case '/events/calendar' :
        require __DIR__ . '/Events Calendar.php';
        break;
    case '/events/e-conclave' :
        require __DIR__ . '/E-Conclave.php';
        break;
    case '/events/industrial-visits' :
        require __DIR__ . '/Industrial Visits.php';
        break;
    case '/events/minor-events' :
        require __DIR__ . '/Minor Events..php';
        break;
    case '/events/internfair' :
        require __DIR__ . '/Internfair.php';
        break;
    case '/events/innovriti' :
        require __DIR__ . '/Innovitri.php';
        break;
    case '/events/past-speakers' :
        require __DIR__ . '/Past Speakers.php';
        break;
    case '/blog' :
        require __DIR__ . '/Blogs.php';
        break;
    case '/gallery' :
        require __DIR__ . '/Gallery.php';
        break;
    case '/get-involved/muj-student' :
        require __DIR__ . '/As MUJ Students.php';
        break;
    case '/get-involved/non-muj-student' :
        require __DIR__ . '/As non-MUJ Students.php';
        break;
    case '/get-involved/alumni' :
        require __DIR__ . '/Alumni.php';
        break;
    case '/get-involved/corporate' :
        require __DIR__ . '/Corporate.php';
        break;
    case '/contact-us' :
        require __DIR__ . '/Contact Us.php';
        break;
    default:
        require __DIR__ . '/404.php';
        break;
}