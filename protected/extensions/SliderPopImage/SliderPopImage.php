<?php

class SliderPopImage extends CWidget {

    public $img ;
    public $class;
    public $alt;
    public $height;
    public $width;
    public $margin;

    public function run() {
        $assets = Yii::app()->getAssetManager()->publish(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'assets', false, -1, YII_DEBUG);
        Yii::app()->clientScript->registerScript(
            'startjs',
            'jQuery(function(){
    jQuery(".'. $this->class . ' a").lightBox();
    });',
            CClientScript::POS_END
        );

        Yii::app()->getClientScript()->registerScriptFile($assets . '/jquery.lightbox-0.5.js', CClientScript::POS_END);
        Yii::app()->getClientScript()->registerCssFile($assets . '/css/jquery.lightbox-0.5.css', '', CClientScript::POS_HEAD); // ''=> 'screen' or 'print'
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
        <?php
        }

}
?>
