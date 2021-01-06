<?php
/*------------------------------------------------------------------------
# mod_fuofb
# ------------------------------------------------------------------------
# author    JoomLadds
# copyright Copyright (C) 2012-2020 JoomLadds All Rights Reserved.
# @license - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Websites: https://www.joomladds.com
# Technical Support:  Forum - https://www.joomladds.com/forum.html
-------------------------------------------------------------------------*/

defined('JPATH_BASE') or die();

/**
 * Renders an html link element
 *
 * @package 	Joomla.Framework
 * @subpackage		Parameter
 * @since		1.5
 */

class JFormFieldExamples extends JFormField
{

	public $_name = 'Examples';

	public function getInput(){

		// Output		
		return "<a id=\"view\" href=\"#\" onclick=\"javascript: window.open('https://www.joomladds.com/external/images/mod_fuofb/images.php', '', 'toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=800,height=580'); return false\">Click to View</a>";

	}
}

?>
