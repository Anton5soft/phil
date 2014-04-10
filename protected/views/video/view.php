<?php
/* @var $this VideoController */
/* @var $model Video */

$this->breadcrumbs=array(
	'Videos'=>array('index'),
	$model->id,
);
$this->menu=array(
    array('label'=>'Admin Panel', 'url'=>array('/admin')),
    array('label'=>'Create news', 'url'=>array('news/create')),
    array('label'=>'List News', 'url'=>array('/news/index')),
    array('label'=>'Manage News', 'url'=>array('/news/admin')),
    array('label'=>'Video Add', 'url'=>array('video/create')),
    array('label'=>'List Video', 'url'=>array('video/index')),
    array('label'=>'Manage Video', 'url'=>array('video/admin')),
    array('label'=>'Create Video', 'url'=>array('create')),
    array('label'=>'Update Video', 'url'=>array('update', 'id'=>$model->id)),
    array('label'=>'Delete Video', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
);

?>

<h1>View Video #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'link',
	),
)); ?>

