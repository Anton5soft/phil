<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>
<div id="content">
	<?php echo $content; ?>
    <nav class="bread-crumbs">
        <?php
        $this->widget('zii.widgets.CBreadcrumbs',
            array(
                'links'	=>$this->breadcrumbs,
                'tagName'	=>'ul', // container tag
                'htmlOptions'	=>array(), // no attributes on container
                'separator'	=>'', // no separator
                'homeLink'	=>'<li><a href="/">Главная</a></li>', // home link template
                'activeLinkTemplate'	=>'<li><a href="{url}">{label}</a></li>', // active link template
                'inactiveLinkTemplate'	=>'<li class="selected"><a>{label}</a></li>', // in-active link template
            ));
        ?><!-- breadcrumbs -->
    </nav>
</div><!-- content -->
<?php $this->endContent(); ?>