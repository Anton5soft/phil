<?php
$baseUrl = Yii::app()->baseUrl;
Yii::app()->clientScript->registerCoreScript('jquery.ui');
Yii::app()->clientScript->registerScriptFile($baseUrl.'/js/linkbred.js', CClientScript::POS_END);
?>
<?php
$this->widget('bredlinks', array(
    'links'=>array(
        'NEWS' => '#',
        $model->title,
    ),

    'htmlOptions' => array(
        'class' => 'breadcrumbs breadcrumb'
    )
));
?>

<?php $this->renderPartial('_view', array(
    'data'=>$model,
)); ?>
