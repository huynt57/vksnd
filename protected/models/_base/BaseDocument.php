<?php

/**
 * This is the model base class for the table "tbl_document".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "Document".
 *
 * Columns in table "tbl_document" available as properties of the model,
 * and there are no model relations.
 *
 * @property integer $id
 * @property string $name
 * @property string $path
 * @property string $description
 * @property integer $created_at
 * @property integer $updated_at
 *
 */
abstract class BaseDocument extends GxActiveRecord {

	public static function model($className=__CLASS__) {
		return parent::model($className);
	}

	public function tableName() {
		return 'tbl_document';
	}

	public static function label($n = 1) {
		return Yii::t('app', 'Document|Documents', $n);
	}

	public static function representingColumn() {
		return 'name';
	}

	public function rules() {
		return array(
			array('created_at, updated_at', 'numerical', 'integerOnly'=>true),
			array('name, path, description', 'safe'),
			array('name, path, description, created_at, updated_at', 'default', 'setOnEmpty' => true, 'value' => null),
			array('id, name, path, description, created_at, updated_at', 'safe', 'on'=>'search'),
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
			'name' => Yii::t('app', 'Name'),
			'path' => Yii::t('app', 'Path'),
			'description' => Yii::t('app', 'Description'),
			'created_at' => Yii::t('app', 'Created At'),
			'updated_at' => Yii::t('app', 'Updated At'),
		);
	}

	public function search() {
		$criteria = new CDbCriteria;

		$criteria->compare('id', $this->id);
		$criteria->compare('name', $this->name, true);
		$criteria->compare('path', $this->path, true);
		$criteria->compare('description', $this->description, true);
		$criteria->compare('created_at', $this->created_at);
		$criteria->compare('updated_at', $this->updated_at);

		return new CActiveDataProvider($this, array(
			'criteria' => $criteria,
		));
	}
}