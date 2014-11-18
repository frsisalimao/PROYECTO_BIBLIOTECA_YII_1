<?php
/* @var $this CatalogoRutaController */
/* @var $data CatalogoRuta */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idcatalogo_ruta')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idcatalogo_ruta), array('view', 'id'=>$data->idcatalogo_ruta)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ciudad_origen')); ?>:</b>
	<?php echo CHtml::encode($data->ciudad_origen); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ciudad_destino')); ?>:</b>
	<?php echo CHtml::encode($data->ciudad_destino); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('costo')); ?>:</b>
	<?php echo CHtml::encode($data->costo); ?>
	<br />


</div>