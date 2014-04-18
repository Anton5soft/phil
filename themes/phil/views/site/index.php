
<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>
<div id="cont">
<p><b><font face="Arial, Helvetica, sans-serif"><font size="7"><font color="#FFF0F5">HOW DO YOU END UP WITH </font></font></font></b></p>
<p><b><font face="Arial, Helvetica, sans-serif"><font size="7"><font color="#FFF0F5">A MILLION DOLLARS </font></font></font></b></p>
<p><b><font face="Arial, Helvetica, sans-serif"><font size="7"><font color="#FFF0F5">PLAYING POKER?</font></font></font></b></p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p><b><font size="6"><font face="Tahoma, Geneva, sans-serif"><font color="#FFF0F5">STARTING WITH A TEN MILLION.</font></font></font></b></p>
</div>
<div id="ajaxcontmenu">
</div>
<?php
$this->widget('ext.SliderPopImage.SliderPopImage', array(
'img'=>array(
    'images/1396840599_heinecker-200x300.jpg',
    'images/1396840599_heinecker-200x300.jpg',
    'images/1396840599_heinecker-200x300.jpg'
),
    'class'=>'yourclass',
    'margin'=>'10',
    'height'=>'111',
    'width'=>'111',

));
?>
