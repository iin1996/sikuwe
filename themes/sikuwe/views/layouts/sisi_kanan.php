<?php if(count($this->menu) > 0):?>
    <nav class="child-navbar" role="navigation">
    <div class="container-fluid">
    <?php
    	$this->widget('booster.widgets.TbMenu', array(
            'type'=>'list',
            'stacked'=>true,
            'htmlOptions'=>array('class'=>'well'),
            'items'=>$this->menu,
        )); 
    ?>
    </div>
    </nav> 
<?php endif;?>