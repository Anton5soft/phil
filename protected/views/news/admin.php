<h1>Manage News</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>


</div><!-- search-form -->
<?php $this->widget('zii.widgets.grid.CGridView', array(
    'id'=>'document-grid',
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