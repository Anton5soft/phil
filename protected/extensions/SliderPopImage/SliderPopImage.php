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
        $this->render('PopImage');
        }

}

?>
