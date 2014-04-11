<<<<<<< HEAD
=======

>>>>>>> 7af85f9f8b4c49aaeb89601e01504a139b8c1c8e
<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'news_grid',
    'dataProvider'=>$model->search(),
    'filter'=>$model,
    'columns'=>array(
        'title',
        'content',
        'created_time',
        'updated_time',
        'lang',
        /*
        'up_dated',
        */
        array(
            'class'=>'CButtonColumn',
        ),
    ),
)); ?>