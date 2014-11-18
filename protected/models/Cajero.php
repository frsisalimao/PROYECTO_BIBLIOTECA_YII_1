<?php

/**
 * This is the model class for table "cajero".
 *
 * The followings are the available columns in table 'cajero':
 * @property integer $idcajero
 * @property string $nombre
 * @property string $email
 * @property string $contraseña
 * @property string $estado
 *
 * The followings are the available model relations:
 * @property ReservaOficina[] $reservaOficinas
 * @property Venta[] $ventas
 */
class Cajero extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cajero';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idcajero', 'required'),
			array('idcajero', 'numerical', 'integerOnly'=>true),
			array('nombre, email, contraseña, estado', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idcajero, nombre, email, contraseña, estado', 'safe', 'on'=>'search'),
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
			'reservaOficinas' => array(self::HAS_MANY, 'ReservaOficina', 'idcajero'),
			'ventas' => array(self::HAS_MANY, 'Venta', 'idcajero'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idcajero' => 'Idcajero',
			'nombre' => 'Nombre',
			'email' => 'Email',
			'contraseña' => 'Contraseña',
			'estado' => 'Estado',
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

		$criteria->compare('idcajero',$this->idcajero);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('contraseña',$this->contraseña,true);
		$criteria->compare('estado',$this->estado,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Cajero the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
