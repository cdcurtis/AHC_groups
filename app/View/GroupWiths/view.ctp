<div class="groupWiths view">
<h2><?php echo __('Group With'); ?></h2>
	<dl>
		<dt><?php echo __('Student Source Id'); ?></dt>
		<dd>
			<?php echo h($groupWith['GroupWith']['student_source_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Student Preference Id'); ?></dt>
		<dd>
			<?php echo h($groupWith['GroupWith']['student_preference_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Group With'), array('action' => 'edit', $groupWith['GroupWith']['student_source_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Group With'), array('action' => 'delete', $groupWith['GroupWith']['student_source_id']), null, __('Are you sure you want to delete # %s?', $groupWith['GroupWith']['student_source_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Group Withs'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group With'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students'), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student Preferences'), array('controller' => 'students', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Students'); ?></h3>
	<?php if (!empty($groupWith['StudentPreferences'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Last'); ?></th>
		<th><?php echo __('First'); ?></th>
		<th><?php echo __('Grade'); ?></th>
		<th><?php echo __('Gender'); ?></th>
		<th><?php echo __('Group Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($groupWith['StudentPreferences'] as $studentPreferences): ?>
		<tr>
			<td><?php echo $studentPreferences['id']; ?></td>
			<td><?php echo $studentPreferences['last']; ?></td>
			<td><?php echo $studentPreferences['first']; ?></td>
			<td><?php echo $studentPreferences['grade']; ?></td>
			<td><?php echo $studentPreferences['gender']; ?></td>
			<td><?php echo $studentPreferences['group_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'students', 'action' => 'view', $studentPreferences['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'students', 'action' => 'edit', $studentPreferences['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'students', 'action' => 'delete', $studentPreferences['id']), null, __('Are you sure you want to delete # %s?', $studentPreferences['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Student Preferences'), array('controller' => 'students', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
