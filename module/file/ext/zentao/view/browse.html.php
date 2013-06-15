<?php include '../../../../common/view/header.admin.html.php'; ?>
<form method='post' target='hiddenwin' action='<?php echo inlink('score');?>'>
<table class='table-1' align='center'>
  <caption><?php echo $lang->file->browse;?></caption>
  <tr>
    <th><?php echo $lang->file->id;?></th>
    <th><?php echo $lang->file->title;?></th>
    <th><?php echo $lang->file->pathname;?></th>
    <th><?php echo $lang->file->extension;?></th>
    <th><?php echo $lang->file->size;?></th>
    <th><?php echo $lang->file->addedBy;?></th>
    <th><?php echo $lang->file->addedDate;?></th>
    <th><?php echo $lang->file->public;?></th>
    <th><?php echo $lang->file->downloads;?></th>
    <th><?php echo $lang->file->score;?></th>
    <th colspan='2'><?php echo $lang->actions;?></th>
  </tr>
  <?php foreach($files as $file):?>
  <tr class='a-center'>
    <td><?php echo $file->id;?></td>
    <td class='a-left'><?php echo $file->title;?></td>
    <td><?php echo html::a(inlink('download', "id=$file->id"), $file->pathname, '_blank');?></td>
    <td><?php echo $file->extension;?></td>
    <td><?php echo $file->size;?></td>
    <td><?php echo $file->addedBy;?></td>
    <td><?php echo $file->addedDate;?></td>
    <td><?php echo $lang->file->publics[$file->public];?></td>
    <td><?php echo $file->downloads;?></td>
    <td><?php echo html::input("scores[{$file->id}]", $file->score, 'size=2');?></td>
    <td>
      <?php 
      echo html::a(inlink('edit', "id=$file->id"),$lang->file->edit);
      if($file->public)  echo html::a(inlink('deny',  "id=$file->id"), $lang->file->deny,  'hiddenwin');
      if(!$file->public) echo html::a(inlink('allow', "id=$file->id"), $lang->file->allow, 'hiddenwin');
      ?>
    </td>
  </tr>
  <?php endforeach;?>
  <tr><td colspan='12' class='a-right'><?php echo html::submitButton($lang->file->setScore);?></td></tr>
</table>
</form>
<form method='post' enctype='multipart/form-data' target='hiddenwin' 
action='<?php echo inlink('upload', "objectType=$objectType&objectID=$objectID");?>' class='a-center'>
<?php echo $lang->file->upload . $this->fetch('file', 'buildForm') . html::submitButton();?>
</form>
<?php include '../../../../common/view/footer.admin.html.php'; ?>
