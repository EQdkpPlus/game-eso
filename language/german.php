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
	'classes' => array(
		0	=> 'Unbekannt',
		1	=> 'Drachenritter',
		2	=> 'Templer',
		3	=> 'Zauberer',
		4	=> 'Nachtklinge',
	),
	'races' => array(
		'Hochelfen', 'Waldelfen', 'Khajiit',	// Aldmeri
		'Bretonen', 'Rothwardonen', 'Orks',		// Dolchsturz
		'Nord', 'Dunkelelfen', 'Argonier',		// Ebenherz
	),
	'factions' => array(
		'Aldmeri-Dominion',
		'Dolchsturz-Bündnis',
		'Ebenherz-Pakt',
	),
	'lang' => array(
		'eso'					=> 'The Elder Scrolls Online',
		'pk_tab_fs_esosettings'	=> 'Elder Scrolls Einstellungen',
		'eso_faction'			=> 'Fraktionen',
	),
);

?>