<?php

use Model\ActiveRecord;
require 'funciones.php';
require 'config/database.php';
require __DIR__ . '/../vendor/autoload.php';

//Conecatrnos a la base de datos
$db = conectarDB();



ActiveRecord::setDB($db); 
