<?php

define('DSN', 'mysql:host=localhost;dbname=dotinstall_poll_php' );
define('DB_USER', 'root');
define('DB_PASSWORD', 'root');

define('SITE_URL', 'localhost:8888/poll_php/');

error_reporting(E_ALL & ~E_NOTICE);

session_set_cookie_params(0, '/poll_php/');