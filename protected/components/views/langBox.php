<?php echo CHtml::form(); ?>
    <div id="langdrop">
        <?php echo CHtml::dropDownList('_lang', $currentLang, array(
            'en' => 'English', 'ru' => 'Russian'), array('submit' => '')); ?>
    </div>
<?php echo CHtml::endForm(); ?>