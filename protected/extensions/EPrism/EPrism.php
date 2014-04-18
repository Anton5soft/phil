<?php
class EPrism extends CWidget
{
    /**
     * @var array options for plugin script file.
     */
    private $scriptOptions = [];
    
    /**
     * @var boolean flag to disable automatic highlighting. 
     */
    public $manualHighlight = false;
    
    /**
     * @var int where the script will be inserted in the page.
     */
    public $scriptPosition;
    
    /**
     * @var mixed the CSS file for extension. 
     * If false - CSS file won't be registered.
     * If null - the default CSS file will be registered.
     * If string - defined file will be registered.
     */
    public $cssFile;
    
    /**
     * @var mixed the JS file for extension. 
     * If false - JS file won't be registered.
     * If null - the default JS file will be registered.
     * If string - defined file will be registered.
     */
    public $scriptFile;
    
    /**
     * Initialize widget.
     */
    public function init()
    {
        if (is_null($this->scriptPosition)) {
            $this->scriptPosition = Yii::app()->clientScript->defaultScriptFilePosition;
        }
        
        if ($this->manualHighlight) {
            $this->scriptOptions['data-manual'] = true;
        }
        
        return parent::init();
    }
    
    /**
     * Add Prism plugin.
     */
    public function run()
    {
        $assets = Yii::app()->getAssetManager()->publish(dirname(__FILE__) . '/assets');
        
        $cs = Yii::app()->getClientScript();
        
        if ($this->cssFile !== false) {
            $cs->registerCssFile($this->cssFile ? $this->cssFile : $assets . '/prism.css');
        }
        
        if ($this->scriptFile !== false) {
            $cs->registerScriptFile(
                $this->scriptFile ? $this->scriptFile : $assets . '/prism.js',
                $this->scriptPosition,
                $this->scriptOptions
            );
        }
    }
}
