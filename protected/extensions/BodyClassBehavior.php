<?php
class BodyClassBehavior extends CBehavior
{
private $class;

	public function getBodyClasses()
	{
        $url = Yii::app()->request->requestUri;
     	    $classesArray = explode('/', $url);
    $reverseArray = array_reverse($classesArray);
       $class = $reverseArray[0];
	    return $class;
	}
}
