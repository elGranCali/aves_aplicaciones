<div class="users form">
	<br>
<?php echo $this->Form->create('User'); ?>
	<fieldset>
		<legend> Editar Usuario </legend>
		<?php echo $this->Form->input('id'); ?>
		<div class="form-group">
		<br>
		<?php echo $this->Form->input('name_', array('label' => array ('text' => 'Nombre:  ', 'class' => 'label-important'), 'class' => 'form-control' )); ?>
		<br>
		<?php echo $this->Form->input('telephone',  array('label' => array ('text' => 'Teléfono:  ', 'class' => 'label-important'), 'class' => 'form-control')); ?>
		<br>
		<?php echo $this->Form->input('degree' ,  array('label' => array ('text' => 'Grado académico:  ', 'class' => 'label-important'), 'class' => 'form-control')); ?>
		<br>		
		<?php echo $this->Form->input('category_id' ,  array('label' => array ('text' => 'Categoría:  ', 'class' => 'label-important'), 'class' => 'form-control')); ?>
		<div class="row">
		<div class="col-md-6">
		<br>
		<?php echo $this->Form->input('username',  array('label' => array ('text' => 'Nombre de usuario:  ', 'class' => 'label-important'), 'class' => 'form-control')); ?>
		</div>
		<div class="col-md-6">		
		<br>
		<?php echo $this->Form->input('password',  array('label' => array ('text' => 'Contraseña:  ', 'class' => 'label-important'), 'class' => 'form-control', 'value' => '')); ?>
		</div>
		</div>
		</div>
	</fieldset>
		<br>
		<br>
		<?php echo $this->Form->submit('Guardar', array ('class' => 'btn btn-success')); ?>
		<br>
		<br>
		<br>
		<br>
</div>

