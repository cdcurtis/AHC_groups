<div class="groupWiths form">
<?php echo $this->Form->create('GroupWith'); ?>
	<fieldset>
		<legend><?php echo __('Add Group With'); ?></legend>
	<?php
		echo $this->Form->input('student_preference_id');
		echo $this->Form->input('StudentPreferences');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Group Withs'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student Preferences'), array('controller' => 'students', 'action' => 'add')); ?> </li>
	</ul>
</div>
