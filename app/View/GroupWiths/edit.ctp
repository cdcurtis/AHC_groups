<div class="groupWiths form">
<?php echo $this->Form->create('GroupWith'); ?>
	<fieldset>
		<legend><?php echo __('Edit Group With'); ?></legend>
	<?php
		echo $this->Form->input('student_source_id');
		echo $this->Form->input('student_preference_id');
		echo $this->Form->input('StudentPreferences');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('GroupWith.student_source_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('GroupWith.student_source_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Group Withs'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student Preferences'), array('controller' => 'students', 'action' => 'add')); ?> </li>
	</ul>
</div>
