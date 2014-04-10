<?php

/**
 * Обертка над стандартным ClientScript для более удобной работы
 *
 * @author and
 */
class andScript {

    
    /**
     * Публикует и регистрирует пользовательский скрипт
     * @param string $path алиас пути до скрипта
     * @param string $file название файла скрипта
     */
    public static function registerJs($path, $file){
        Yii::app()->clientScript->registerScriptFile(
            Yii::app()->assetManager->publish(
                Yii::getPathOfAlias($path)."/{$file}",
                -1,
                Yii::app()->params['debug']
            ),
            CClientScript::POS_END
        );
    }
    
    
    public static function registerCss($path, $file){
        Yii::app()->clientScript->registerCssFile(
            Yii::app()->assetManager->publish(
                Yii::getPathOfAlias($path)."/{$file}",
                -1,
                Yii::app()->params['debug']
            )
        );
    }
    
    
    /**
     * Отиеняет публикацию скрипта или их группы
     * @param mixed $script либо название скрипта, либо массив названий
     * @return void 
     */
    public static function unsetScript($script){
        if(is_array($script)){
              foreach( $script as $s )
                    Yii::app()->clientScript->scriptMap[$s] = false;
        } else {
            Yii::app()->clientScript->scriptMap[$script] = false;
        }
        return true;
    }
    
    
    /**
     * Обертка над Yii::app()->clientScript->registerPackage, позволяющая поиск пакетов в конфигурации
     * и в режиме отладки перезаписывание пакетов, чего не может стандартная функция
     * 
     * @param string $name название пакета, который необходимо подключить
     * @return void
     */
    public static function registerPackage($name){
        $package = self::searchPackage($name);

        if(!$package)
            return;
        
            Yii::app()->clientScript->packages[$name] = $package;
            
            // Принудительная публикация в режиме отладки
            Yii::app()->clientScript->packages[$name]['baseUrl'] 
                    = Yii::app()->assetManager->publish(
                            Yii::getPathOfAlias(Yii::app()->clientScript->packages[$name]['basePath']),
                            false,
                            -1,
                            Yii::app()->params['debug']
                       );

            Yii::app()->clientScript->registerPackage($name);
        return;
    }
    
    
    /**
     * Выполняет поиск пакета скриптов в конфигурации приложения
     * Поиск осуществляется в двух параметрах:
     *  - Yii::app()->params['applicationScriptPackages'] - здесь лежат общие пакеты. Этот параметр должен быть обязательно
     *  - Yii::app()->params['modulePackages'] - здесь лежат пакеты специфичные для модуля, которые хранятся в его конфигурации
     * 
     * @param string $name имя искомого пакета
     * @return array массив параметров пакета 
     */
    private static function searchPackage($name){
        $packages = Yii::app()->params['applicationScriptPackages'];
        
        // Таким образом мы можем, при желании, переопределить пакеты приложения
        if(isset(Yii::app()->params['modulePackages'])){
            $packages = array_merge($packages, Yii::app()->params['modulePackages']);
        }
        
        return isset($packages[$name])?$packages[$name]: false;
    }
    
    
    public static function getPackageURL($package){
        return Yii::app()->clientScript->getPackageBaseUrl($package);
    }

}