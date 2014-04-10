
<div class="newsc">
</div>
<div class="newscont">
    <center><h1><?php echo Yii::t('news','News') ?></h1></center>
<ul>
        <?php foreach($posts as $x => $post): ?>
    <div class="titlenews">
          <h3>"<?php echo $post -> title ?>"</h3>
        </div>
                <?php echo $post -> content ?>
                <?php echo Yii::app()->dateFormatter->format("dd MMM yyyy",$post -> created_time) ?>
        <?php endforeach; ?>
    </ul>
    <br>
    <div class="pagination">
       <center> <?php $this->widget('PagNews',array(
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
        )) ?></div></center>

</div>
