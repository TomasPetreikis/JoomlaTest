/*** Change Color Preset ***/
jQuery(function ($) {  
        a = $("a").css("color");
        document.documentElement.style.setProperty('--background-color',a)
        document.documentElement.style.setProperty('--text-color',a)
});