<div class="anuncios form">
<?php echo $this->Form->create('Anuncio'); ?>
	<fieldset>
		<legend><?php echo __('Add Anuncio'); ?></legend>
	<?php
		echo $this->Form->input('nombre');
		echo $this->Form->input('fechacreacion');
		echo $this->Form->input('fecha');
		echo $this->Form->input('fechafin');
		echo $this->Form->input('docente_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Anuncios'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Docentes'), array('controller' => 'docentes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Docente'), array('controller' => 'docentes', 'action' => 'add')); ?> </li>
	</ul>
</div>
