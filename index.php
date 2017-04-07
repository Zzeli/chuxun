<?php
define('CONTROLLER', 'App/controller/');
define('MODEL', 'App/model/');
define('VIEWS', 'App/views/');
define('CSS_PATH', '/Static/css/');
define('JS_PATH', '/Static/js/');
define('FONT_PATH', '/Static/fonts/');
define('MUSIC_PATH', '/Static/musics/');
define('IMG_PATH', '/Static/images/');

require 'Core/common.php';
//require '/DBPdo.php';
require 'Core/Framework.php';

\Core\Framework::start();

