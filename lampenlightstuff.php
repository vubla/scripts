<?php 
$wids = array(93, 106,107,108,109,158,159,160);

$properties = array('lightsource_multi','lightsource_color_multi', 
	                'lightsource_inclusive', 'dv_lightsource_inclusive', 'dv_watt', 'dv_voltage', 'energy_label', 'lumen', 'burning_hours', 'kelvin');


foreach ($wids as $w)
{
	foreach ($properties as $p) { 
		echo 'UPDATE  `vubla_webshop_' . $w . "`.`options_settings` SET  `importancy` =  '1' WHERE  `options_settings`.`name` like  '" . $p . "';\n";
	}

}