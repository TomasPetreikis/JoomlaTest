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

// no direct access
defined('_JEXEC') or die('Restricted access');

$doc = JFactory::getDocument();
$style = '.mod_fuofb {'
	. 'text-align: '.$image_align.';'
	. '}'; 
$doc->addStyleDeclaration( $style );

?>

<div class="mod_fuofb<?php echo $moduleclass_sfx ?>">
<?php

if($popup_text != ''){
	$title = ' title="'.htmlspecialchars($popup_text).'"';
	$title_js = " title=\"".htmlspecialchars($popup_text)."\"";
}else{
	$title = '';
	$title_js = '';
}

switch ($target){
// cases are slightly different
	case 1:
		// open in a new window
		$output = '<a href="'. $url .'" target="_blank">'. $image .'</a>';
		break;
	case 2:
		// open in a popup window
		$output = "<a href=\"#\" onclick=\"javascript: window.open('". $url ."', '', 'toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes,width=780,height=550'); return false\"".$title_js.">". $image ."</a>\n";
		break;
	default:
		// formerly case 2
		// open in parent window
		$output = '<a href="'. $url .'"'.$title.'>'. $image .'</a>';
		break;
}

echo $output;
?>
</div>