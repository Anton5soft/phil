<?php
/* @var $this NewsController */
/* @var $model News */

$this->breadcrumbs=array(
	'News'=>array('index'),
	$model->title,
);
$this->menu=array(
    array('label'=>'Admin Panel', 'url'=>array('/admin')),
    array('label'=>'Create news', 'url'=>array('news/create')),
    array('label'=>'List News', 'url'=>array('/news/index')),
    array('label'=>'Manage News', 'url'=>array('/news/admin')),
    array('label'=>'View News', 'url'=>array('view', 'id'=>$model->id)),
    array('label'=>'Update News', 'url'=>array('update', 'id'=>$model->id)),
    array('label'=>'Delete News', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
    array('label'=>'Video Add', 'url'=>array('video/create')),
    array('label'=>'List Video', 'url'=>array('video/index')),

);
?>

<?php $this->renderPartial('_view', array(
    'data'=>$model,
)); ?>
