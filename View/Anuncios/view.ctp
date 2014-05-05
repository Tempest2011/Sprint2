<div class="anuncios view">
<h2><?php echo __('Anuncio'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($anuncio['Anuncio']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($anuncio['Anuncio']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fechacreacion'); ?></dt>
		<dd>
			<?php echo h($anuncio['Anuncio']['fechacreacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha'); ?></dt>
		<dd>
			<?php echo h($anuncio['Anuncio']['fecha']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fechafin'); ?></dt>
		<dd>
			<?php echo h($anuncio['Anuncio']['fechafin']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Docente'); ?></dt>
		<dd>
			<?php echo $this->Html->link($anuncio['Docente']['nombre'], array('controller' => 'docentes', 'action' => 'view', $anuncio['Docente']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Anuncio'), array('action' => 'edit', $anuncio['Anuncio']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Anuncio'), array('action' => 'delete', $anuncio['Anuncio']['id']), null, __('Are you sure you want to delete # %s?', $anuncio['Anuncio']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Anuncios'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Anuncio'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Docentes'), array('controller' => 'docentes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Docente'), array('controller' => 'docentes', 'action' => 'add')); ?> </li>
	</ul>
</div>
