<?php
 /*
 * Project:		EQdkp-Plus
 * License:		Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:       08.03.2011
 * Date:        $Date$
 * -----------------------------------------------------------------------
 * @author      $Author$
 * @copyright   2006-2008 Corgan - Stefan Knaak | Wallenium & the EQdkp-Plus Developer Team
 * @link        http://eqdkp-plus.com
 * @package     eqdkp-plus
 * @version     $Rev$
 * 
 * $Id$
 */

if ( !defined('EQDKP_INC') ){
	header('HTTP/1.0 404 Not Found');exit;
}

if(!class_exists('eso')) {
	class eso extends game_generic {
		public $version			= '0.2.2';
		protected $this_game	= 'eso';
		protected $types		= array('factions', 'races', 'classes');
		protected $classes		= array();
		protected $roles		= array();
		protected $races		= array();
		protected $factions		= array();
		public $langs			= array('english', 'german');

		protected $class_dependencies = array(
			array(
				'name'		=> 'faction',
				'type'		=> 'factions',
				'admin' 	=> true,
				'decorate'	=> false,
				'parent'	=> false,
			),
			array(
				'name'		=> 'race',
				'type'		=> 'races',
				'admin'		=> false,
				'decorate'	=> true,
				'parent'	=> array(
					'faction' => array(
						'aldmeri'		=> array(1,2,3,4),
						'daggerfall'	=> array(1,5,6,7),
						'ebonhard'		=> array(1,8,9,10),
					),
				),
			),
			array(
				'name'		=> 'class',
				'type'		=> 'classes',
				'admin'		=> false,
				'decorate'	=> true,
				'primary'	=> true,
				'colorize'	=> true,
				'roster'	=> true,
				'recruitment' => true,
				'parent'	=> array(
					'race' => array(
						0 	=> 'all',	// Unknown
						1 	=> 'all',	// Imperial
						2 	=> 'all',	// Altmer
						3 	=> 'all',	// Bosmer
						4 	=> 'all',	// Khajiit
						5 	=> 'all',	// Bretons
						6 	=> 'all',	// Redguards
						7 	=> 'all',	// Orcs
						8 	=> 'all',	// Nord
						9 	=> 'all',	// Dunmer
						10 	=> 'all',	// Argonians
					),
				),
			),
		);
		
		/*public $default_roles = array(
			1 => array(2, 5, 6, 8, 11),
			2 => array(1, 2, 5, 10, 11),
			3 => array(2, 3, 4, 6, 8, 9),
			4 => array(1, 2, 5, 7, 8, 10, 11)
		);*/
		
		protected $glang		= array();
		protected $lang_file	= array();
		protected $path			= '';
		public $lang			= false;
		
		protected $class_colors = array(
			1	=> '#C8C8C8',
			2	=> '#49A03E',
			3	=> '#3287C1',
			4	=> '#C66F0A',
		);

		public function get_OnChangeInfos($install=false){
			//classcolors
			$info['class_color'] = array(
				
			);
			$info['aq'] = array();

			//Do this SQL Query NOT if the Eqdkp is installed -> only @ the first install
			#if($install){
			#}
			return $info;
		}
		
		public function admin_settings() {
			$settingsdata_admin = array(
				'eso_faction'	=> array(
					'name'		=> 'eso_faction',
					'type'		=> 'dropdown',
					'size'		=> '1',
					'options'	=> registry::register('game')->get('factions'),
				)
			);
			return $settingsdata_admin;
		}
	}
}
?>