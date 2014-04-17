<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'video_grid',
    'dataProvider'=>$model->search(),
    'filter'=>$model,
    'columns'=>array(
        'id',
        'link',
        array(
            'template'=>'{delete}',
            'class'=>'CButtonColumn',
        ),
    ),
)); ?>


