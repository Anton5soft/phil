<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'document_grid',
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
            'template'=>'{delete}',
			'class'=>'CButtonColumn',
		),
	),
)); ?>