<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */


$this->pageTitle=Yii::app()->name . ' - Register';
$this->breadcrumbs=array(
	'Register',
);
?>


<div class="form-horizontal">
<?php echo CHtml::form(array('Member/Register')) ?>

  <fieldset>
    <legend>ลงทะเบียน ใหม่</legend>

    

    <div class="form-group">
      <label for="inputText" class="col-lg-2 control-label">First Name</label>
      <div class="col-lg-10">
        <input class="form-control" id="inputText" placeholder="First Name" type="text" name="fname">
      </div>
    </div>

    <div class="form-group">
      <label for="inputText" class="col-lg-2 control-label">Last Name</label>
      <div class="col-lg-10">
        <input class="form-control" id="inputText" placeholder="Last Name" type="text" name="lname">
      </div>
    </div>
    
    <div class="form-group">
      <label class="col-lg-2 control-label">Gender</label>
      <div class="col-lg-10">
        <div class="radio">
          <label>
            <input name="gender" id="optionsRadios1" value="f" checked="" type="radio" >
            Female
          </label>
        </div>
        <div class="radio">
          <label>
            <input name="gender" id="optionsRadios2" value="m" type="radio" >
            male
          </label>
        </div>
      </div>
    </div>

<hr />

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
      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
      <div class="col-lg-10">
        <input class="form-control" id="inputEmail" placeholder="Email" type="text" name="email">
      </div>
    </div>

    <div class="form-group">
      <label for="inputPhone" class="col-lg-2 control-label">Phone</label>
      <div class="col-lg-10">
        <input class="form-control" id="inputPhone" placeholder="Phone" type="text" name="phone">
      </div>
    </div>
    
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" class="btn btn-primary">Sign Up</button>
      </div>
    </div>
  </fieldset>
  <?php echo CHtml::endForm(); ?>
  </div>

<!-- </form> -->