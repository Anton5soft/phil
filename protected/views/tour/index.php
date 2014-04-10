
<div class="tourc">
</div>
<div class="tourcont">
   <center><h1><?php echo Yii::t('tour','Tour') ?></h1></center>

           <?php foreach($posts as $x => $post): ?>
               <div class="panel panel-default">
                   <div class="panel-heading">
            <?php echo $post -> title ?></div>
    </div>
        <blockquote><?php echo $post -> content ?></blockquote>
    <?php endforeach; ?>

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

