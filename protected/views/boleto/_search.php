<?php
/* @var $this BoletoController */
/* @var $model Boleto */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idboleto'); ?>
		<?php echo $form->textField($model,'idboleto'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'numero_boleto'); ?>
		<?php echo $form->textField($model,'numero_boleto',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tipo'); ?>
		<?php echo $form->textField($model,'tipo',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'estado'); ?>
		<?php echo $form->textField($model,'estado',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idunidad_transaporte'); ?>
		<?php echo $form->textField($model,'idunidad_transaporte'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idventa'); ?>
		<?php echo $form->textField($model,'idventa'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idreserva_oficina'); ?>
		<?php echo $form->textField($model,'idreserva_oficina'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'compra_idcompra'); ?>
		<?php echo $form->textField($model,'compra_idcompra'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'reserva_idreserva'); ?>
		<?php echo $form->textField($model,'reserva_idreserva'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->