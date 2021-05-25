<?php

define('DB_HOST', 'localhost');

if (!defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

if (!defined('BASEURL') )
    define('BASEURL', '/list.php/');

define('HEADER_TEMPLATE', ABSPATH . 'inc/header.php');
define('FOOTER_TEMPLATE', ABSPATH . 'inc/footer.php');
?>
