<?php

session_start();

class MemberController extends Controller {

	public function actionLogin(){

		if(!empty($_POST)){
			$logingCheck = array();
			$logingCheck['username'] = $_POST['username'];
			$logingCheck['password'] = $_POST['password'];
			$logingCheck['status'] = 'active';

			$model = Member::model()->findByAttributes($logingCheck);

			if(!empty($model)){
				Yii::app()->session['id'] 		= $model->id;
				Yii::app()->session['fname'] 	= $model->fname;
				Yii::app()->session['level'] 	= $model->level; 
				Yii::app()->session['ck'] 		= '0';
				$members = Member::model()->findByPk($model->id);
				$members->login_date 	= date('Y-m-d h:i:sa');
				$members->save();

				$this->redirect(Yii::app()->homeUrl);
			}

		}// end if
		

		$this->render('//Member/Login');
	}

	public function actionLogout(){
		unset(Yii::app()->session['id']);
		unset(Yii::app()->session['fname']);
		unset(Yii::app()->session['level']);
		unset(Yii::app()->session['ck']);

		$this->render('//Member/Login');

	}

	public function actionRegister(){

		//echo print_r($_POST);

		if(!empty($_POST)){
			$members = new Member();
			$members->username 	= $_POST['username'];
			$members->password 	= $_POST['password'];
			$members->email 	= $_POST['email'];

			$members->fname 	= $_POST['fname'];
			$members->lname 	= $_POST['lname'];
			$members->gender	= $_POST['gender'];
			$members->phone 	= $_POST['phone'];


			$members->create_date 	= date('Y-m-d h:i:sa');

			if($members->save()){
				Yii::app()->session['fname'] 	= $_POST['fname'];
				$this->redirect(array("Member/Login"));
			}
		}

		$members = new Member();
		$this->render("//Member/Register",array(
			"member"	=> $members
		));
	}

	public function actionProfile(){

		$member = Member::model()->findByPk(Yii::app()->session['id']);
		$this->render('//Member/Profile',array(
			"member"	=> $member
		));

	}

	public function actionUpdateprofile(){
		
		
		if(Yii::app()->session['id']!= null){
			$members = Member::model()->findByPk(Yii::app()->session['id']);
			$members->username 	= $_POST['username'];
			$members->password 	= $_POST['password'];
			$members->email 	= $_POST['email'];
			$members->fname 	= $_POST['fname'];
			$members->lname 	= $_POST['lname'];
			$members->gender	= $_POST['gender'];
			$members->phone 	= $_POST['phone'];


			//$members->create_date 	= date('Y-m-d h:i:sa');

			if($members->save()){
				Yii::app()->session['ck'] = '1'; 
				Yii::app()->session['fname'] 	= $_POST['fname'];

				$this->redirect(array("Member/Profile"));
			}
		}

		$this->render('//Member/Updateprofile',array(
			"member"	=> $members
		));

	}


	
}