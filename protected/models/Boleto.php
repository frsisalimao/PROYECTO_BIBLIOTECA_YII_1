<?php

/**
 * This is the model class for table "boleto".
 *
 * The followings are the available columns in table 'boleto':
 * @property integer $idboleto
 * @property string $numero_boleto
 * @property string $tipo
 * @property string $estado
 * @property integer $idunidad_transaporte
 * @property integer $idventa
 * @property integer $idreserva_oficina
 * @property integer $compra_idcompra
 * @property integer $reserva_idreserva
 *
 * The followings are the available model relations:
 * @property UnidadTransaporte $idunidadTransaporte
 * @property Venta $idventa0
 * @property ReservaOficina $idreservaOficina
 * @property Compra $compraIdcompra
 * @property Reserva $reservaIdreserva
 */
class Boleto extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'boleto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idboleto, idunidad_transaporte', 'required'),
			array('idboleto, idunidad_transaporte, idventa, idreserva_oficina, compra_idcompra, reserva_idreserva', 'numerical', 'integerOnly'=>true),
			array('numero_boleto, tipo, estado', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idboleto, numero_boleto, tipo, estado, idunidad_transaporte, idventa, idreserva_oficina, compra_idcompra, reserva_idreserva', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'idunidadTransaporte' => array(self::BELONGS_TO, 'UnidadTransaporte', 'idunidad_transaporte'),
			'idventa0' => array(self::BELONGS_TO, 'Venta', 'idventa'),
			'idreservaOficina' => array(self::BELONGS_TO, 'ReservaOficina', 'idreserva_oficina'),
			'compraIdcompra' => array(self::BELONGS_TO, 'Compra', 'compra_idcompra'),
			'reservaIdreserva' => array(self::BELONGS_TO, 'Reserva', 'reserva_idreserva'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idboleto' => 'Idboleto',
			'numero_boleto' => 'Numero Boleto',
			'tipo' => 'Tipo',
			'estado' => 'Estado',
			'idunidad_transaporte' => 'Idunidad Transaporte',
			'idventa' => 'Idventa',
			'idreserva_oficina' => 'Idreserva Oficina',
			'compra_idcompra' => 'Compra Idcompra',
			'reserva_idreserva' => 'Reserva Idreserva',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('idboleto',$this->idboleto);
		$criteria->compare('numero_boleto',$this->numero_boleto,true);
		$criteria->compare('tipo',$this->tipo,true);
		$criteria->compare('estado',$this->estado,true);
		$criteria->compare('idunidad_transaporte',$this->idunidad_transaporte);
		$criteria->compare('idventa',$this->idventa);
		$criteria->compare('idreserva_oficina',$this->idreserva_oficina);
		$criteria->compare('compra_idcompra',$this->compra_idcompra);
		$criteria->compare('reserva_idreserva',$this->reserva_idreserva);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Boleto the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
