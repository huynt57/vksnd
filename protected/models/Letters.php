<?php

Yii::import('application.models._base.BaseLetters');

class Letters extends BaseLetters
{
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}