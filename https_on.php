<?php
if ($_SERVER['HTTPS'] == 'on') {
    $url = "http://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
    header('Location: ' . $url, true, 301);
    exit();
}
?>
