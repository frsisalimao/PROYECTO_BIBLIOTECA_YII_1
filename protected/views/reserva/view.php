<?php
/* @var $this ReservaController */
/* @var $model Reserva */

$this->breadcrumbs=array(
	'Reservas'=>array('index'),
	$model->idreserva,
);

$this->menu=array(
	array('label'=>'List Reserva', 'url'=>array('index')),
	array('label'=>'Create Reserva', 'url'=>array('create')),
	array('label'=>'Update Reserva', 'url'=>array('update', 'id'=>$model->idreserva)),
	array('label'=>'Delete Reserva', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idreserva),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Reserva', 'url'=>array('admin')),
);
?>

<h1>View Reserva #<?php echo $model->idreserva; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idreserva',
		'fecha',
		'hora',
		'total',
		'estado',
		'usuario_idusuario',
	),
)); ?>
