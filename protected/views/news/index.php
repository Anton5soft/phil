<?php
$baseUrl = Yii::app()->baseUrl;
Yii::app()->clientScript->registerCoreScript('jquery.ui');
Yii::app()->clientScript->registerScriptFile($baseUrl.'/js/linksnews.js', CClientScript::POS_END);
?>
<?php
$this->widget('zii.widgets.CBreadcrumbs', array(
    'links'=>array(
       'NEWS'
    ),
    'htmlOptions' => array(
        'class' => 'breadcrumbs breadcrumb'
    )
));
?>

<div class="newsc">
</div>
<div class="newscont">
    <center><h1><?php echo Yii::t('news','News') ?></h1></center>
<ul>
        <?php foreach($posts as $x => $post): ?>
    <div class="titlenews">
        <h3>"<?php echo CHtml::link(CHtml::encode($post->title),"#",array("class"=>"yourll",'data-url'=>$post->url)); ?>"</h3>


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
