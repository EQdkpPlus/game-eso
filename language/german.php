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
		'eso'						=> 'The Elder Scrolls Online',
		'pk_tab_fs_esosettings'		=> 'Elder Scrolls Einstellungen',
		'eso_faction'				=> 'Fraktionen',
		
		'uc_gender'					=> 'Geschlecht',
		'uc_male'					=> 'Männlich',
		'uc_female'					=> 'Weiblich',
		'uc_guild'					=> 'Gilde',
		
		'uc_veterans_rank'			=> 'Veteranen-Rang',
		'uc_vr0'					=> 'Kein Veteranen Rang',
		'uc_vr1'					=> 'Veteranen Rang 1',
		'uc_vr2'					=> 'Veteranen Rang 2',
		'uc_vr3'					=> 'Veteranen Rang 3',
		'uc_vr4'					=> 'Veteranen Rang 4',
		'uc_vr5'					=> 'Veteranen Rang 5',
		'uc_vr6'					=> 'Veteranen Rang 6',
		'uc_vr7'					=> 'Veteranen Rang 7',
		'uc_vr8'					=> 'Veteranen Rang 8',
		'uc_vr9'					=> 'Veteranen Rang 9',
		'uc_vr10'					=> 'Veteranen Rang 10',
		'uc_vr11'					=> 'Veteranen Rang 11',
		'uc_vr12'					=> 'Veteranen Rang 12',
	),
);

?>