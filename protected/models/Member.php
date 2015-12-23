<?php

class Member extends CActiveRecord {

	public static function model($name = __CLASS__){
		return parent::model($name);
	}

	public function tableName() {
		return 'members';
	}

	public function rules(){
		return array(
			array('username, password, email, fname, lname, phone','required'),
			array('email','email')
		);
	}

} 