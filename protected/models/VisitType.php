<?php

class VisitType extends CActiveRecord {

	public static function model($name = __CLASS__){
		return parent::model($name);
	}

	public function tableName() {
		return 'visit_types';
	}

	public function rules(){
		return array();
	}

} 