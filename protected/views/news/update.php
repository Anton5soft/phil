<?php
/* @var $this NewsController */
/* @var $model News */

$this->breadcrumbs=array(
	'News'=>array('index'),
	$model->title=>array('view','id'=>$model->id),
	'Update',
);
$this->menu=array(
    array('label'=>'Admin Panel', 'url'=>array('/admin')),
    array('label'=>'Create news', 'url'=>array('news/create')),
    array('label'=>'List News', 'url'=>array('/news/index')),
    array('label'=>'Manage News', 'url'=>array('/news/admin')),
    array('label'=>'View News', 'url'=>array('view', 'id'=>$model->id)),
    array('label'=>'Video Add', 'url'=>array('video/create')),
    array('label'=>'List Video', 'url'=>array('video/index')),

);
?>
<h1>Update News <?php echo $model->id; ?></h1>
<?php $this->renderPartial('_form', array('model'=>$model)); ?>