<?php include $this->loadModel('ui')->getEffectViewFile('mobile', 'common', 'header');?>
<?php if($result):?>
<h1 class='f-16px text-center green'><?php echo $lang->score->paySuccess;?> </h1>
<p class='text-center'><?php echo html::a($this->createLink('user', 'score'), $lang->score->details, "class='btn'");?></p>
<?php else:?>
<h1 class='f-16px text-center red'><?php echo $lang->score->payFail;?></h1>
<?php endif;?>
<?php include $this->loadModel('ui')->getEffectViewFile('mobile', 'common', 'footer');?>
