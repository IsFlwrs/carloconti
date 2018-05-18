<?php
set_time_limit(0);
ini_set('display_errors',1);
error_reporting(E_ALL);

date_default_timezone_set("Mexico/General");
define('requiresBD', false);
define('DB_Engine', 'mysqli');
define('DB_Server', 'localhost');
define('DB_Port', false);

define('DB_name', 'mobile');
define('DB_User', 'root');
define('DB_Password', '');
define('Path', "http://localhost/cinco/carloconti");
define('Path_img', "http://localhost/cinco/carloconti/images");
define('Path_admin', "http://localhost/cinco/carloconti/admin");
?>