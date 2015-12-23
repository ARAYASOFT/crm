<?php

session_start();

class BackendController extends Controller {

	public function actionConfigGroupCustomer(){
		$groupCustomers = GroupCustomer::model()->findAll();

		$this->renderPartial("//Backend/ConfigGroupCustomer", array(
			'groupCustomers' => $groupCustomers
		));
	}

	public function actionSaveGroupCustomer(){

		if(!empty($_POST)){
			$id = $_POST['id'];
			if(empty($id)){
				$groupCustomer = new GroupCustomer();
			}else{
				$groupCustomer = GroupCustomer::model()->findByPk($id);
			}

			
			$groupCustomer->name = $_POST['name'];
			$groupCustomer->save();
			
			echo 'success';
		}
	
	}


	public function actionEditGroupCustomer($id){

		if(!empty($id)){
			$groupCustomer = GroupCustomer::model()->findByPK($id);
			echo CJSON::encode($groupCustomer);
		}
	}

	public function actionDeleteGroupCustomer($id){

		if(!empty($id)){
			GroupCustomer::model()->deleteByPK($id);
			echo 'success';
		}
	}

	public function actionConfigVisitType(){
		$visitTypes = VisitType::model()->findAll();

		$this->renderPartial("//Backend/ConfigVisitType", array(
			'visitTypes' => $visitTypes
		));
	}

	public function actionSaveVisitType(){

		if(!empty($_POST)){
			$id = $_POST['id'];
			if(empty($id)){
				$visitType = new VisitType();
			}else{
				$visitType = VisitType::model()->findByPk($id);
			}

			
			$visitType->name = $_POST['name'];
			$visitType->save();
			
			echo 'success';
		}
	
	}

	public function actionEditVisitType($id){

		if(!empty($id)){
			$visitType = VisitType::model()->findByPK($id);
			echo CJSON::encode($visitType);
		}
	}

	public function actionDeleteVisitType($id){

		if(!empty($id)){
			VisitType::model()->deleteByPK($id);
			echo 'success';
		}
	}

}