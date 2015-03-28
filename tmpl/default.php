<?php
/**
 * @package 	Qloginpopup for Joomla! 1.5
 * @version 	$Id:  default.php 002 2010-12-07 02:26:33Z NetQ $
 * @author		NETQ CREATIVE SOFTWARE (service@netqcreative.com)
 * @copyright 	Copyright (C) 2010 - NETQ CREATIVE SOFTWARE
 * @license 	GNU/GPL http://www.gnu.org/copyleft/gpl.html
 */

// no direct access
defined('_JEXEC') or die('Restricted access');
?>
<style>
#img{
background: url("<?php echo JURI::base();?>modules/mod_wakawaka/images/google-doodle.jpg") repeat scroll 510px 205px	 transparent;
width:100px;
height:100px;
display:block;
margin:40px;
}
</style>
<?php

	$js='jQuery(document).ready(function(){
jQuery(document).mousemove(function(event){
var mouseX = event.pageX;
var mouseY = event.pageY;
console.log(mouseX,mouseY);
var xy=jQuery(\'img\').getPosition();

//stare top
if(mouseX >xy.x && mouseX < xy.x+100 && mouseY>0 && mouseY<xy.y)
{
document.getElementById(\'img\').style.backgroundPosition="510px 0px";
}
//stare at me
if(mouseX >xy.x && mouseX < xy.x+100 && mouseY>xy.y && mouseY<xy.y+100)
{
document.getElementById(\'img\').style.backgroundPosition="510px 205px";
}
//stare bottom;
if(mouseX >xy.x && mouseX < xy.x+100 && mouseY>xy.y+100)
{
document.getElementById(\'img\').style.backgroundPosition="510px 101px";
}

//stare top  left
if(mouseX>0 && mouseX<xy.x && mouseY>0 && mouseY<xy.y){
document.getElementById(\'img\').style.backgroundPosition="616px 306px";
}
//stare left
if(mouseX>0 && mouseX<xy.x && mouseY<xy.y+100 && mouseY > xy.y ){
document.getElementById(\'img\').style.backgroundPosition="616px 205px";
}
//starre bottom left
if(mouseX>0 && mouseX<xy.x && mouseY>xy.y+100){
document.getElementById(\'img\').style.backgroundPosition="616px 101px";
}


//stare right
if(mouseX>xy.x+100 && mouseY<xy.y+100 && mouseY>xy.y){
document.getElementById(\'img\').style.backgroundPosition="408px 205px";
}
//stare top right
if(mouseX>xy.x+100 && mouseY>0 && mouseY<xy.y){
document.getElementById(\'img\').style.backgroundPosition="408px 306px";
}

if(mouseX>xy.x+100 && mouseY>0 && mouseY>xy.y+100){
document.getElementById(\'img\').style.backgroundPosition="408px 101px";
}

});
}); ;';





		$doc = &JFactory::getDocument();
		$doc->addScriptDeclaration($js);
?>
<span id="img"></span>

