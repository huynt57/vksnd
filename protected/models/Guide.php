<?php

Yii::import('application.models._base.BaseGuide');

class Guide extends BaseGuide
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}