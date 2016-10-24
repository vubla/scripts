<?php
include '/var/www/rasmus.vubla.com/htdocs/development/config.php';
//include '/var/www/alex.vubla.com/htdocs/development/config.php';
echo 'Updating to '.DB_METADATA;
include CLASS_FOLDER.'/autoload.php';

autoload::init();
system ('wget http://synonym.oooforum.dk/download/thesaurus.txt.gz;gunzip thesaurus.txt.gz');

system('cat custom_thesaurus >> thesaurus.txt');

Dictionary::refreshThesaurus('thesaurus.txt');

system ('rm thesaurus.txt*');



