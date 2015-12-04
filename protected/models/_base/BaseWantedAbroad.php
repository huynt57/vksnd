<?php

/**
 * This is the model base class for the table "tbl_wanted_abroad".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "WantedAbroad".
 *
 * Columns in table "tbl_wanted_abroad" available as properties of the model,
 * and there are no model relations.
 *
 * @property integer $id
 * @property string $nation_request
 * @property string $object_name
 * @property string $wanted_number
 * @property string $crime
 * @property integer $date_publish
 * @property string $staff_assigned
 *
 */
abstract class BaseWantedAbroad extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'tbl_wanted_abroad';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'WantedAbroad|WantedAbroads', $n);
	}

	public static function representingColumn() {
		return 'nation_request';
	}

	public function rules() {
		return array(
			array('id', 'required'),
			array('id, date_publish', 'numerical', 'integerOnly'=>true),
			array('nation_request, object_name, wanted_number, crime, staff_assigned', 'safe'),
			array('nation_request, object_name, wanted_number, crime, date_publish, staff_assigned', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id, nation_request, object_name, wanted_number, crime, date_publish, staff_assigned', 'safe', 'on'=>'search'),
		);
	}

	public function relations() {
		return array(
		);
	}

	public function pivotModels() {
		return array(
		);
	}

	public function attributeLabels() {
		return array(
			'id' => Yii::t('app', 'ID'),
			'nation_request' => Yii::t('app', 'Nation Request'),
			'object_name' => Yii::t('app', 'Object Name'),
			'wanted_number' => Yii::t('app', 'Wanted Number'),
			'crime' => Yii::t('app', 'Crime'),
			'date_publish' => Yii::t('app', 'Date Publish'),
			'staff_assigned' => Yii::t('app', 'Staff Assigned'),
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('nation_request', $this->nation_request, true);
		$criteria->compare('object_name', $this->object_name, true);
		$criteria->compare('wanted_number', $this->wanted_number, true);
		$criteria->compare('crime', $this->crime, true);
		$criteria->compare('date_publish', $this->date_publish);
		$criteria->compare('staff_assigned', $this->staff_assigned, true);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}