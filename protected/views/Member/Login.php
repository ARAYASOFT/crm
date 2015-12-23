<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<!--<form class="form-horizontal" method="post" action="index.php?r=Member/Login"> -->
<div class="form-horizontal">
<?php echo CHtml::form(array('Member/Login')) ?>

  <fieldset>
    <legend>เข้าสู่ระบบ</legend>
    <div class="form-group">
      <label for="inputText" class="col-lg-2 control-label">Username</label>
      <div class="col-lg-10">
        <input class="form-control" id="inputText" placeholder="Username" type="text" name="username">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">
        <input class="form-control" id="inputPassword" placeholder="Password" type="password" name="password">
      </div>
    </div>
    
    
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Login</button>
      </div>
    </div>
  </fieldset>
  <?php echo CHtml::endForm(); ?>
  </div>

<!-- </form> -->