<div class="news">
    <div class="title">
        <?php echo CHtml::link(CHtml::encode($data->title), $data->url); ?>
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