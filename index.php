<?php

require "settings.php";
require "include/rb.php";
require "vendor/autoload.php";

session_start();

R::setup('mysql:host='.$settings['database']['server'].'; dbname='.$settings['database']['database'],$settings['database']['username'],$settings['database']['password']);
