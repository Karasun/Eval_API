<?php

// Identifiants pour la base de données. Nécessaires à PDO2.
define('SQL_DSN','mysql:dbname=bingosurtoi;host=localhost:3308');
define('SQL_USERNAME', 'root');
define('SQL_PASSWORD', 'root');
define('SQL_OPTIONS', 'array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")');

define('CHEMIN_MODELE', 'modeles/');
define('CHEMIN_LIB',    'libs/');

const SECRET = '0hLa83lleBroue11e!';
