<div class="viewnews">
<div class="news">
    <div class="title">
        <center> <h3>"<?php echo CHtml::encode($data->title); ?></h3></center>
    </div>

    <div class="content">
        <?php
        $this->beginWidget('CMarkdown', array('purifyOutput'=>true));
        echo $data->content;
        $this->endWidget();
        ?>
    </div>
    <div class="author">
       <?php echo ' on ' . date('F j, Y',$data->created_time); ?>
    </div>
</div>
</div>