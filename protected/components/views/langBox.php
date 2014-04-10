<div class="nav">
<?php echo CHtml::form() ;?>
        <li><?php echo CHtml::dropDownList('_lang', $currentLang, array(
            'en' => 'English', 'ru' => 'Russian'), array('submit' => '')); ?></li>
<?php echo CHtml::endForm(); ?>
</div>