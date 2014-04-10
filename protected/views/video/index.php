<?php
$this->widget('zii.widgets.CBreadcrumbs', array(
    'links'=>array(
        'VIDEO',
    ),
    'htmlOptions' => array(
        'class' => 'breadcrumbs breadcrumb'
    )
));
?>
<?php
$baseUrl = Yii::app()->baseUrl;
Yii::app()->clientScript->registerCoreScript('jquery.ui');
Yii::app()->clientScript->registerScriptFile($baseUrl.'/js/jsslidervideo/jquery.bxslider.min.js', CClientScript::POS_END);
Yii::app()->clientScript->registerScriptFile($baseUrl.'/js/jsslidervideo/startslider.js', CClientScript::POS_END);
Yii::app()->clientScript->registerCssFile($baseUrl.'/js/jsslidervideo/jquery.bxslider.css');
?>
<div class='videocont'>
    <ul class="bxslider">
        <?php echo "<li>" . implode("</li><li>", $items) . "</li>"; ?>
    </ul>
    </div>