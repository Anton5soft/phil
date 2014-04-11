

<h1>Manage Documents</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'document-grid',
    'ajaxUpdate'=>true,
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'doc_name',
		'doc_file',
		'doc_type',
		'doc_size',
		'summary',
		/*
		'up_dated',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
