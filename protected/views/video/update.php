<?php
/* @var $this VideoController */
/* @var $model Video */

$this->breadcrumbs=array(
	'Videos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);
$this->menu=array(
    array('label'=>'Admin Panel', 'url'=>array('/admin')),
    array('label'=>'Create news', 'url'=>array('news/create')),
    array('label'=>'List News', 'url'=>array('/news/index')),
    array('label'=>'Manage News', 'url'=>array('/news/admin')),
    array('label'=>'Video Add', 'url'=>array('video/create')),
    array('label'=>'List Video', 'url'=>array('video/index')),
    array('label'=>'Manage Video', 'url'=>array('video/admin')),
    array('label'=>'View Video', 'url'=>array('view', 'id'=>$model->id)),
    array('label'=>'Manage Video', 'url'=>array('admin')),
);

?>
<h1>Update Video <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>