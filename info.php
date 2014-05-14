<?php

/**
 *  @template       Bootstrap Backend-Theme
 *  @version        see info.php of this template
 *  @author         L.Paganin & F.Bonain - E-well'com
 *  @copyright      2014 L.Paganin & F.Bonain - E-well'com
 *  @license        GNU General Public License
 *  @license terms  see info.php of this template
 *  @platform       LEPTON, see info.php of this template
 */

// include class.secure.php to protect this file and the whole CMS!
if (defined('WB_PATH')) {	
	include(WB_PATH.'/framework/class.secure.php'); 
} else {
	$root = "../";
	$level = 1;
	while (($level < 10) && (!file_exists($root.'/framework/class.secure.php'))) {
		$root .= "../";
		$level += 1;
	}
	if (file_exists($root.'/framework/class.secure.php')) { 
		include($root.'/framework/class.secure.php'); 
	} else {
		trigger_error(sprintf("[ <b>%s</b> ] Can't include class.secure.php!", $_SERVER['SCRIPT_NAME']), E_USER_ERROR);
	}
}
// end include class.secure.php


// OBLIGATORY VARIABLES
$template_directory	= 'bootstrap_admin';
$template_name		= 'Bootstrap Admin Theme';
$template_function	= 'theme';
$template_version	= '1.0';
$template_platform	= '1.x';
$template_author	= 'L.Paganin & F.Bonain - E-well\'com';
$template_license	= '<a href="http://www.gnu.org/licenses/gpl.html">GNU General Public License</a>';
$template_license_terms	= '-';
$template_description	= 'xipix backend theme for LEPTON CMS';
$template_guid		= '';
?>
