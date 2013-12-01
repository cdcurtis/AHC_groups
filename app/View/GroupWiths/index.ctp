<div class="groupWiths index">
	<h2><?php echo __('Group Withs'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('student_source_id'); ?></th>
			<th><?php echo $this->Paginator->sort('student_preference_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($groupWiths as $groupWith): ?>
	<tr>
		<td><?php echo h($groupWith['GroupWith']['student_source_id']); ?>&nbsp;</td>
		<td><?php echo h($groupWith['GroupWith']['student_preference_id']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $groupWith['GroupWith']['student_source_id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $groupWith['GroupWith']['student_source_id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $groupWith['GroupWith']['student_source_id']), null, __('Are you sure you want to delete # %s?', $groupWith['GroupWith']['student_source_id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Group With'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student Preferences'), array('controller' => 'students', 'action' => 'add')); ?> </li>
	</ul>
</div>
