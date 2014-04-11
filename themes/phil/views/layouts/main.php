<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/styles.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

    </div>

    <?php
    $baseUrl = Yii::app()->baseUrl;
    Yii::app()->clientScript->registerCoreScript('jquery.ui');
    Yii::app()->clientScript->registerScriptFile($baseUrl.'/js/links.js', CClientScript::POS_END);
    Yii::app()->clientScript->registerCssFile($baseUrl.'/themes/phil/css/bootstrap.css');
    ?>
</head>
<body class="">
<div id="mainmenu">
    <div class="navbar navbar-inverse">
        <div class="navbar-inner">
    <?php $this->widget('zii.widgets.CMenu',array(
        'htmlOptions'=>array('class'=>'nav'),
        'items'=>array(
            array('label'=>Yii::t('menu','Home'), 'url'=>'site'),
            array('label'=>Yii::t('menu', 'News'),
                'url'=>'#',
                'linkOptions'=>array(
                    'class'=>'menu',
                    'data-url'=>Yii::app()->createUrl("news"),
                ),
            ),
            array('label'=>Yii::t('menu', 'Video'),
                'url'=>'#',
                'linkOptions'=>array(
                    'class'=>'menu',
                    'data-url'=>Yii::app()->createUrl("video"),
                ),
            ),
            array('label'=>Yii::t('menu', 'Tour'),
                'url'=>'#',
                'linkOptions'=>array(
                    'class'=>'menu',
                    'data-url'=>Yii::app()->createUrl("tour"),
                ),
            ),
            array('label'=>Yii::t('menu', 'Gallery'),
                'url'=>'#',
                'linkOptions'=>array(
                    'class'=>'menu',
                    'data-url'=>Yii::app()->createUrl("document"),
                ),
            ),
            array('label'=>Yii::t('menu', 'About'),
                'url'=>'#',
                'linkOptions'=>array(
                    'class'=>'menu',
                    'data-url'=>Yii::app()->createUrl("site/about"),
                ),
            ),
            array('label'=>Yii::t('menu', 'Contact'),
                'url'=>'#',
                'linkOptions'=>array(
                    'class'=>'menu',
                    'data-url'=>Yii::app()->createUrl("site/contact"),
                ),
                array(
                  $this->widget('LangBox'),
                ),
            ),
            array('label'=>Yii::t('menu','Logout'), 'url'=>array('site/logout'), 'visible'=>!Yii::app()->user->isGuest),

        ),

    )); ?>
</div>
    </div>
    </div><!-- mainmenu -->

<div class="container" id="page">
    <br>
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('bootstrap.widgets.TbBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->
</body>
</html>
