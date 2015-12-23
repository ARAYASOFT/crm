<?php

class GroupCustomer extends CActiveRecord {

	public static function model($name = __CLASS__){
		return parent::model($name);
	}

	public function tableName() {
		return 'group_customers';
	}

	public function rules(){
		return array();
	}

} 