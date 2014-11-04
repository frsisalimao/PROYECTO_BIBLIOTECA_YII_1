<?php
/* @var $this CatalogoRutaController */
/* @var $model CatalogoRuta */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'catalogo-ruta-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'idcatalogo_ruta'); ?>
		<?php echo $form->textField($model,'idcatalogo_ruta'); ?>
		<?php echo $form->error($model,'idcatalogo_ruta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ciudad_origen'); ?>
		<?php echo $form->textField($model,'ciudad_origen',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'ciudad_origen'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'catalogo_rutacol'); ?>
		<?php echo $form->textField($model,'catalogo_rutacol',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'catalogo_rutacol'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'costo'); ?>
		<?php echo $form->textField($model,'costo',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'costo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->