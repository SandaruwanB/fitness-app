<?php
    $env = parse_ini_file('.env');
    $db = $env['DB_NAME'];
?>

<h1>Home page</h1>
<h3><?=  $db ?></h3>