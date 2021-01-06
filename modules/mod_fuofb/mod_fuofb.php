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

require_once( dirname(__FILE__).'/helper.php' );

$facebook_url		= $params->get('facebook_url', 'http://facebook.com/');
$target				= $params->get('target',1);
$language			= $params->get('language', 'en');
$image_style		= $params->get('image_choice', 1);
$image_align		= $params->get('image_align', 'center');
$custom_image		= $params->get('custom_image', 0);
$use_custom_image	= $params->get('use_custom_image', 0);
$popup_text			= $params->get('title_text', '');
$set_Itemid			= intval($params->get('set_itemid', 0));
$moduleclass_sfx	= $params->get('moduleclass_sfx', '');

if($use_custom_image){
	$image = @modFUOFBHelper::getFUOFBCustomImage( $popup_text, $custom_image );
}else{
	$image = modFUOFBHelper::getFUOFBImage( $popup_text, $image_style, $language );
}

$fixUrl = (strpos($facebook_url,'http')===false) ? 'http://': '';

$url = $fixUrl.$facebook_url;
	
require JModuleHelper::getLayoutPath('mod_fuofb', $params->get('layout', 'default'));
