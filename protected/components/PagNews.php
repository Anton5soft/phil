<?php
Yii::import('CLinkPager');
    class PagNews extends CLinkPager {
            protected function createPageButton($label, $page, $class, $hidden, $selected) {
            //parent::createPageButton($label, $page, $class, $hidden, $selected);

             if($hidden || $selected)
             $class.=' '.($hidden ? self::CSS_HIDDEN_PAGE : self::CSS_SELECTED_PAGE);
             return '<li class="'.$class.'">'.CHtml::ajaxLink($label,$this->createPageUrl($page), array('success'=>'js:function(data) {

                                                jQuery(".newscont").remove();
                                                jQuery(".newsc").html(data).find("newscont").children(".pag").empty();
                                                }
                                                '), array('live'=> false)).'</li>';
}
	
}