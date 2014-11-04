<?php
/* @var $this BoletoController */
/* @var $data Boleto */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idboleto')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idboleto), array('view', 'id'=>$data->idboleto)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('numero_boleto')); ?>:</b>
	<?php echo CHtml::encode($data->numero_boleto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo')); ?>:</b>
	<?php echo CHtml::encode($data->tipo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idunidad_transaporte')); ?>:</b>
	<?php echo CHtml::encode($data->idunidad_transaporte); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idventa')); ?>:</b>
	<?php echo CHtml::encode($data->idventa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idreserva_oficina')); ?>:</b>
	<?php echo CHtml::encode($data->idreserva_oficina); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('compra_idcompra')); ?>:</b>
	<?php echo CHtml::encode($data->compra_idcompra); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('reserva_idreserva')); ?>:</b>
	<?php echo CHtml::encode($data->reserva_idreserva); ?>
	<br />

	*/ ?>

</div>