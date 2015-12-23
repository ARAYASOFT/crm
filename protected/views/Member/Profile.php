<?php if(Yii::app()->session['ck'] == '1') {  ?>

<div class="alert alert-dismissible alert-success">
<button type="button" class="close" data-dismiss="alert"> x </button>
	แก้ไข้ข้อมูล เรียบร้อย
</div>
<?php Yii::app()->session['ck'] = '0'; } ?>

<?php
/* @var $this SiteController */


if(Yii::app()->session['id']==null){
	$this->redirect(array("Member/Login"));
}

$this->pageTitle=Yii::app()->name . ' - Profile';
$this->breadcrumbs=array(
	'Profile',
);
?>
<div class="form-horizontal">
<?php echo CHtml::form(array('Member/Updateprofile')) ?>

  <fieldset>
    <legend>ข้อมูลโปรไฟล์</legend>
    <div class="form-group">
      <label for="inputText" class="col-lg-2 control-label">First Name</label>
      <div class="col-lg-10">
        <input class="form-control" id="inputText" placeholder="First Name" type="text" name="fname" value="<?php echo @$member->fname; ?>">
      </div>
    </div>

    <div class="form-group">
      <label for="inputText" class="col-lg-2 control-label">Last Name</label>
      <div class="col-lg-10">
        <input class="form-control" id="inputText" placeholder="Last Name" type="text" name="lname" value="<?php echo @$member->lname; ?>">
      </div>
    </div>
    <div class="form-group">
      <label class="col-lg-2 control-label">Gender</label>
      <div class="col-lg-10">
        <div class="radio">
          <label>
            <input name="gender" id="optionsRadios1" value="f" type="radio" <?php if(@$member->gender =='f'):?> checked <?php endif; ?> >
            Female
          </label>
        </div>
        <div class="radio">
          <label>
            <input name="gender" id="optionsRadios2" value="m" type="radio" <?php if(@$member->gender =='m'):?> checked <?php endif; ?> >
            male
          </label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label for="inputText" class="col-lg-2 control-label">Username</label>
      <div class="col-lg-10">
        <input class="form-control" id="inputText" placeholder="Username" type="text" name="username" value="<?php echo @$member->username; ?>">
      </div>
    </div>
    <div class="form-group">
      <label for="inputPassword" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">
        <input class="form-control" id="inputPassword" placeholder="Password" type="password" name="password" value="<?php echo @$member->password; ?>">
      </div>
    </div>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Email</label>
      <div class="col-lg-10">
        <input class="form-control" id="inputEmail" placeholder="Email" type="text" name="email" value="<?php echo @$member->email; ?>">
      </div>
    </div>

    <div class="form-group">
      <label for="inputPhone" class="col-lg-2 control-label">Phone</label>
      <div class="col-lg-10">
        <input class="form-control" id="inputPhone" placeholder="Phone" type="text" name="phone" value="<?php echo @$member->phone; ?>">
      </div>
    </div>
    
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="submit" class="btn btn-primary">Update Profile</button>
      </div>
    </div>
  </fieldset>
  <?php echo CHtml::endForm(); ?>
  </div>