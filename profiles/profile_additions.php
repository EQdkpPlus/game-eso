<?php
 /*
 * Project:		EQdkp-Plus
 * License:		Creative Commons - Attribution-Noncommercial-Share Alike 3.0 Unported
 * Link:		http://creativecommons.org/licenses/by-nc-sa/3.0/
 * -----------------------------------------------------------------------
 * Began:		2009
 * Date:		$Date$
 * -----------------------------------------------------------------------
 * @author		$Author$
 * @copyright	2006-2011 EQdkp-Plus Developer Team
 * @link		http://eqdkp-plus.com
 * @package		eqdkp-plus
 * @version		$Rev$
 * 
 * $Id$
 */

	$this->tpl->assign_vars(array(
		'ESO_VETERANS_RANK'		=> (isset($member['veterans_rank']) && $member['veterans_rank'] > 0) ? $this->game->glang('uc_vr'.$member['veterans_rank']) : $this->game->glang('uc_vr0'),
	));
?>