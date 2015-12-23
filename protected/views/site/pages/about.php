<?php
/* @var $this SiteController */

if(Yii::app()->session['id']==null){
	$this->redirect(array("Member/Login"));
}

$this->pageTitle=Yii::app()->name . ' - About';
$this->breadcrumbs=array(
	'About',
);
?>
<h1>About</h1>

<p>This is a "static" page. You may change the content of this page
by updating the file <code><?php echo __FILE__; ?></code>.</p>
