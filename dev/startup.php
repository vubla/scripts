<?php
include '../crons/config.php';

include CLASS_FOLDER.'/autoload.php';

autoload::init();
$vdo = VPDO::getVdo(DB_METADATA);

//Reset 
$vdo->exec('update crawllist set scrape_asap = 1, currentlybeingcrawled = 0 where currentlybeingcrawled = 1');

