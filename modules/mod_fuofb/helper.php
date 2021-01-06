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

class modFUOFBHelper {

    static function getFUOFBImage($image_text,$image_style,$language) {
    	$mod_URL = 'media/mod_fuofb/images/'.$language.'/';
    	$mod_path = 'media/mod_fuofb/images/'.$language.'/';
    	$img_URL = $mod_URL.'find-us-on-facebook-'.$image_style.'.png';
    	$img_path = $mod_path.'find-us-on-facebook-'.$image_style.'.png';
		$size = getimagesize(JPATH_BASE.'/'.$img_path); //get dimensions of image
    	$attr = array('title'=>$image_text,'width'=>$size[0],'height'=>$size[1]);
    	$img =  JHTML::image(JURI::base().$img_URL,'Facebook Image',$attr);
	    
		return $img;
	}

    function getFUOFBCustomImage($image_text,$custom_image) {
    	$mod_URL = 'media/mod_fuofb/images/';
    	$mod_path = 'media/mod_fuofb/images/';
    	$img_URL = $mod_URL.$custom_image;
    	$img_path = $mod_path.$custom_image;
		$size = getimagesize(JPATH_BASE.'/'.$img_path); //get dimensions of image
    	$attr = array('title'=>$image_text,'width'=>$size[0],'height'=>$size[1]);
    	$img =  JHTML::image(JURI::base().$img_URL,'Find Us On FaceBook - Image',$attr);
	    
		return $img;
	}
}
