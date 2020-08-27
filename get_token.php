<?php
include('Classes/Twillio.php');

$identity = (!empty($_GET['identity'])) ? $_GET['identity'] : '';
$roomName = (!empty($_GET['roomName'])) ? $_GET['roomName'] : '';

//for security
function get_domain($url)
{
    $pieces = parse_url($url);
    $domain = isset($pieces['host']) ? $pieces['host'] : $pieces['path'];
    if (preg_match('/(?P<domain>[a-z0-9][a-z0-9\-]{1,63}\.[a-z\.]{2,6})$/i', $domain, $regs)) {
        return $regs['domain'];
    }
    return false;
}
$myDomain = 'example.com'; // e.g. example.com (without http:// and /)


if (!empty($identity) && !empty($roomName) && $myDomain == get_domain($_SERVER['HTTP_REFERER'])) {
    $twilio = new Twilio_Auth();
    echo $twilio->get_twilio_token($identity, $roomName);
} else {
    echo "Not Allowed!";
}
