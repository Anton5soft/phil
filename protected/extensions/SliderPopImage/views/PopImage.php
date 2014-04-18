<?php
$assetsPath  = Yii::app()->assetManager->publish( Yii::getPathOfAlias('ext.SliderPopImage.assets') );
Yii::app()->clientScript->registerScript(
    'startjs',
    'jQuery(function(){
jQuery(".'. $this->class . ' a").lightBox();
    });',
    CClientScript::POS_END
);
Yii::app()->getClientScript()->registerScriptFile($assetsPath . '/jquery.lightbox-0.5.js', CClientScript::POS_END);
Yii::app()->getClientScript()->registerCssFile($assetsPath . '/css/jquery.lightbox-0.5.css', '', CClientScript::POS_END); // ''=> 'screen' or 'print'
?>
<div class="<?php echo $this->class ?>">
    <?php
    foreach($this->img as $item){
        echo CHtml::link(
            CHtml::image(
                $item,
                $this->alt,
                array(
                    'height'=>$this->height,
                    'width'=> $this->width,
                    'style'=>'margin:' . $this->margin . 'px'
                )),
            $item);
    }
    ?>
</div>
