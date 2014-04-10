<div class="admin">
    <?php
    $baseUrl = Yii::app()->baseUrl;
    Yii::app()->clientScript->registerCoreScript('jquery.ui');
    Yii::app()->clientScript->registerScriptFile($baseUrl.'/js/links.js', CClientScript::POS_END);
    Yii::app()->clientScript->registerScriptFile($baseUrl.'/js/dialogadmin.js', CClientScript::POS_END);
    ?>
    <h1>Admin Panel</h1>

    <?php $this->widget('bootstrap.widgets.TbMenu', array(
        'type'=>'tabs', // '', 'tabs', 'pills' (or 'list')
        'stacked'=>true, // whether this is a stacked menu
        'items'=>array(
            array('label'=>'Admin Panel', 'url'=>array('/admin'), 'active'=>true),
            array('label'=>'Create News',
                'url'=>'#',
                'linkOptions'=>array(
                    'class'=>'adminpanel',
                    'data-url'=>Yii::app()->createUrl("news/create"),
                ),
            ),
            array('label'=>'Manage News',
                'url'=>'#',
                'linkOptions'=>array('class'=>'adminpanel',
                'data-url'=>Yii::app()->createUrl("news/admin"),
            ),
            ),
            array('label'=>'Add Video',
                'url'=>'#',
                'linkOptions'=>array(
                    'class'=>'adminpanel',
                'data-url'=>Yii::app()->createUrl("video/create"),
            ),
            ),
            array('label'=>'Manage Video',
                'url'=>'#',
                'linkOptions'=>array(
                    'class'=>'adminpanel',
                'data-url'=>Yii::app()->createUrl("video/admin"),
            ),
        ),
            array('label'=>'Add Tour',
                'url'=>'#',
                'linkOptions'=>array(
                    'class'=>'adminpanel',
                'data-url'=>Yii::app()->createUrl("tour/create"),
            ),
        ),
            array('label'=>'Manage Tour',
                'url'=>'#',
                'linkOptions'=>array(
                    'class'=>'adminpanel',
                'data-url'=>Yii::app()->createUrl("tour/admin"),
            ),
         ),
            array('label'=>'Add Image to gallery',
                'url'=>'#',
                'linkOptions'=>array(
                    'class'=>'adminpanel',
                'data-url'=>Yii::app()->createUrl("document/create"),
            ),
     ),
            array('label'=>'Manage Images',
                'url'=>'#',
                'linkOptions'=>array(
                    'class'=>'adminpanel',
                'data-url'=>Yii::app()->createUrl('document/admin'),
            ),
     ),
        ),
    )); ?>

</div>
<div class="ajaxcont">
    <p>Admin Panel</p>
    <p>Here you can create and change you content</p>
</div>
