<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'news_grid',
    'dataProvider'=>$model->search(),
    'filter'=>$model,
    'columns'=>array(
        'title',
        array(
            'name'=>'content',
            'type'=>'raw',
        ),
        'created_time',
        'updated_time',
        'lang',
        /*
        'up_dated',
        */
        array(
            'template'=>'{delete}',
            'class'=>'CButtonColumn',
        ),
    ),
)); ?>