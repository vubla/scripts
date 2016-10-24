<?php
include '../crons/config.php';

//include '/var/www/rasmus.vubla.com/htdocs/config.php';
include CLASS_FOLDER.'/autoload.php';

autoload::init();
system ('wget http://api.vubla.com/phpdata/dontcare.txt');
//system ('wget '.API_URL.'/phpdata/dontcare.txt');


Dictionary::refreshDontCareWords('dontcare.txt');

system ('rm dontcare.txt*');




?>
