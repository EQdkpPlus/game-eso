<?php
 /*
 * Project:		EQdkp-Plus
 * License:		Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:		2012
 * Date:		$Date$
 * -----------------------------------------------------------------------
 * @author		$Author$
 * @copyright	2006-2012 EQdkp-Plus Developer Team
 * @link		http://eqdkp-plus.com
 * @package		eqdkp-plus
 * @version		$Rev$
 * 
 * $Id$
 */

if ( !defined('EQDKP_INC') ){
	header('HTTP/1.0 404 Not Found');exit;
}
$german_array = array(
	'factions' => array(
		'aldmeri' 		=> 'Aldmeri-Dominion',
		'daggerfall' 	=> 'Dolchsturz-Bündnis',
		'ebonhard'		=> 'Ebenherz-Pakt'
	),
	'classes' => array(
		0	=> 'Unbekannt',
		1	=> 'Drachenritter',
		2	=> 'Templer',
		3	=> 'Zauberer',
		4	=> 'Nachtklinge',
	),
	'races' => array(
		0 	=> 'Unknown',		
		1 	=> 'Kaiserliche',	// Collectors edition only
		2 	=> 'Hochelfen',		// Aldmeri
		3 	=> 'Waldelfen',		// Aldmeri
		4 	=> 'Khajiit',		// Aldmeri
		5 	=> 'Bretonen',		// Dolchsturz
		6 	=> 'Rothwardonen',	// Dolchsturz
		7 	=> 'Orks',			// Dolchsturz
		8 	=> 'Nord',			// Ebenherz
		9 	=> 'Dunkelelfen',	// Ebenherz
		10 	=> 'Argonier',		// Ebenherz
	),
	'lang' => array(
		'eso'					=> 'The Elder Scrolls Online',
		'pk_tab_fs_esosettings'	=> 'Elder Scrolls Einstellungen',
		'eso_faction'			=> 'Fraktionen',
	),
);

?>