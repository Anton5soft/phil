<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tour_grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
        'lang',
		'title',
		'content',
        array(
            'template'=>'{delete}',
            'class'=>'CButtonColumn',
        ),
	),
)); ?>
