<?php
/*	Project:	EQdkp-Plus
 *	Package:	Elder Scroll online game package
 *	Link:		http://eqdkp-plus.eu
 *
 *	Copyright (C) 2006-2015 EQdkp-Plus Developer Team
 *
 *	This program is free software: you can redistribute it and/or modify
 *	it under the terms of the GNU Affero General Public License as published
 *	by the Free Software Foundation, either version 3 of the License, or
 *	(at your option) any later version.
 *
 *	This program is distributed in the hope that it will be useful,
 *	but WITHOUT ANY WARRANTY; without even the implied warranty of
 *	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *	GNU Affero General Public License for more details.
 *
 *	You should have received a copy of the GNU Affero General Public License
 *	along with this program.  If not, see <http://www.gnu.org/licenses/>.
 */

if ( !defined('EQDKP_INC') ){
	header('HTTP/1.0 404 Not Found');exit;
}

if(!class_exists('eso')) {
	class eso extends game_generic {
		protected static $apiLevel	= 20;
		public $version				= '1.3.2';
		protected $this_game		= 'eso';
		protected $types			= array('factions', 'races', 'classes');
		protected $classes			= array();
		protected $roles			= array();
		protected $races			= array();
		protected $factions			= array();
		public $langs				= array('english', 'german');

		protected $class_dependencies = array(
			array(
				'name'		=> 'faction',
				'type'		=> 'factions',
				'admin' 	=> false,
				'decorate'	=> false,
				'parent'	=> false,
			),
			array(
				'name'		=> 'race',
				'type'		=> 'races',
				'admin'		=> false,
				'decorate'	=> true,
				'parent'	=> false,
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

		public function install($install=false){}

		public function profilefields(){
			// Category 'character' is a fixed one! All others are created dynamically!
			$xml_fields = array(
				'veterans_rank'	=> array(
					'type'			=> 'dropdown',
					'category'		=> 'character',
					'lang'			=> 'uc_veterans_rank',
					'options'		=> array('0' => 'uc_vr0', '1' => 'uc_vr1', '2' => 'uc_vr2', '3' => 'uc_vr3', '4' => 'uc_vr4', '5' => 'uc_vr5', '6' => 'uc_vr6', '7' => 'uc_vr7', '8' => 'uc_vr8', '9' => 'uc_vr9', '10' => 'uc_vr10', '11' => 'uc_vr11', '12' => 'uc_vr12', '13' => 'uc_vr13', '14' => 'uc_vr14'),
					'undeletable'	=> true,
					'tolang'		=> true
				),
				'gender'	=> array(
					'type'			=> 'dropdown',
					'category'		=> 'character',
					'lang'			=> 'uc_gender',
					'options'		=> array('male' => 'uc_male', 'female' => 'uc_female'),
					'undeletable'	=> true,
					'tolang'		=> true
				),
				'level' => array(
				'type'				=> 'spinner',
				'category'			=> 'character',
				'lang'				=> 'uc_level',
				'max'				=> 50,
				'min'				=> 1,
				'undeletable'		=> true,
				'sort'				=> 4
				),
				'guild'	=> array(
					'type'			=> 'text',
					'category'		=> 'character',
					'lang'			=> 'uc_guild',
					'size'			=> 32,
					'undeletable'	=> true,
				)
			);
			return $xml_fields;
		}

		protected function load_filters($langs){
			return array();
		}

	}
}
?>
