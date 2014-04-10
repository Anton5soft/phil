<?php
$this->widget('zii.widgets.CBreadcrumbs', array(
    'links'=>array(
        'TOUR',
    ),
    'htmlOptions' => array(
        'class' => 'breadcrumbs breadcrumb'
    )
));
?>
<div class="tourc">
</div>
<div class="tourcont">
   <center><h1><?php echo Yii::t('tour','Tour') ?></h1></center>
        <table class="table table-bordered table-striped table-hover">
           <?php foreach($posts as $x => $post): ?>
            <thead>
            <tr>
            <th><?php echo $post -> title ?></div>  </th>
    </div>
</tr>
</thead>
<tbody>
<tr>
    <td><p style="color:white"><?php echo $post -> content ?></p>  </td>
    <?php endforeach; ?>
</tbody>
</table>
</section>
    <br>
    <br>
    <div class="pagination">
        <center><?php $this->widget('PagTour',array(
           'pages' => $pages,
           'header' => '',
       'firstPageLabel'=>'<<',
       'prevPageLabel'=>'<',
       'nextPageLabel'=>'>',
       'lastPageLabel'=>'>>',
       'maxButtonCount'=>'10',

           'selectedPageCssClass' => 'active',
           'hiddenPageCssClass' => 'disabled',
           'htmlOptions' => array(
                   'class' => '',
               )
                )) ?></center>
    </div>
</div>

