<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/../css/theme.css">
    
	<?php 
    Yii::app()->clientScript->registerScriptFile("../jquery-2.1.4.min.js");
    Yii::app()->clientScript->registerScriptFile("../jquery-ui/jquery-ui.min.js");
    Yii::app()->clientScript->registerScriptFile("../script.js");
    ?>	

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>


<?php if(Yii::app()->session['id'] == null){ ?>

  <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><i class="glyphicon glyphicon-flag"></i> <?php echo CHtml::encode(Yii::app()->name); ?></a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

    <?php
        $this->widget('zii.widgets.CMenu',array(
            'htmlOptions'=>array('class'=>'nav navbar-nav'),
            'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
            'encodeLabel'=>false,
            'items'=>array(
                array('label'=>'Home', 'url'=>array('/site/index')),
            ),
        ));


        $this->widget('zii.widgets.CMenu',array(
            'htmlOptions'=>array('class'=>'nav navbar-nav navbar-right'),
            'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
            'encodeLabel'=>false,
            'items'=>array(
                array('label'=>'Login', 'url'=>array('/Member/Login')), 
                array('label'=>'Sign Up', 'url'=>array('/Member/Register')), 

            
            ),
        ));


    ?>


    </div>
  </div>
</nav>

    <div class="container">
    <?php 
        if (( Yii::app()->controller->route !== 'frontend/index' )and(Yii::app()->controller->route !=='site/index'))
            $this->breadcrumbs = array_merge(array (Yii::t('zii','Home')=>Yii::app()->homeUrl), $this->breadcrumbs);
        $this->widget('zii.widgets.CBreadcrumbs', array(
            'links'=>$this->breadcrumbs,
            'homeLink'=>false,
            'tagName'=>'ul',
            'separator'=>'',
            'activeLinkTemplate'=>'<li><a href="{url}">{label}</a> <span class="divider"></span></li>',
            'inactiveLinkTemplate'=>'<li><span>{label}</span></li>',
            'htmlOptions'=>array ('class'=>'breadcrumb')
        ));

    ?><!-- breadcrumbs -->

      <div class="starter-template">
        <p class="lead"><div id="content"><?php echo $content; ?></div></p>
      </div>

    </div><!-- /.container -->




<?php
}else if(Yii::app()->session['level'] == 'admin') {
?>
  <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><i class="glyphicon glyphicon-flag"></i> <?php echo CHtml::encode(Yii::app()->name); ?></a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

    <?php
        $this->widget('zii.widgets.CMenu',array(
            'htmlOptions'=>array('class'=>'nav navbar-nav'),
            'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
            'encodeLabel'=>false,
            'items'=>array(
                array('label'=>'Home', 'url'=>array('/site/index')),
                array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
                
            ),
        ));


        $this->widget('zii.widgets.CMenu',array(
            'htmlOptions'=>array('class'=>'nav navbar-nav navbar-right'),
            'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
            'encodeLabel'=>false,
            'items'=>array(
                array('label'=>'Hi ('.Yii::app()->session['fname'].') <b class="caret"></b>', 
                    'url'=>array('#'), 
                    'itemOptions'=>array('class'=>'dropdown'), 
                    'linkOptions'=>array('class'=>'dropdown-toggle', 
                    'data-toggle'=>'dropdown'), 'items'=>array(
                        array('label'=>'Profile', 'url'=>array('/Member/Profile')),
                        array('label'=>'divider','itemOptions'=>array('class'=>'divider'), ),
                        array('label'=>'Logout', 'url'=>array('/site/logout'))
                    )),
            ),
        ));


    ?>


    </div>
  </div>
</nav>



<div class="nav navbar-inverse" style="margin-bottom: 20px;">
<div class="container">
    <ul class="nav navbar-nav">
        <li>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="glyphicon glyphicon-star"></i> 
                บันทึกประจำวัน <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                <li>
                    <a href="#">
                        <i class="glyphicon glyphicon-star"></i> บันทีกติกต่อนัดหมาย
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="glyphicon glyphicon-star"></i> ตารางนัดหมาย
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="glyphicon glyphicon-star"></i> ตารางงานประจำวัน
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#">
                        <i class="glyphicon glyphicon-star"></i> จัดการข้อมูลลูกค้า
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="glyphicon glyphicon-list-alt"></i>  
                รายงาน <span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                <li>
                    <a href="#">
                        <i class="glyphicon glyphicon-list-alt"></i> รายงานจำนวนลูกค้าแยกตามเดือน
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="glyphicon glyphicon-list-alt"></i> รายงานนัดหมายลูกค้า
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="glyphicon glyphicon-list-alt"></i> รายงานข้อมูลติดต่อลูกค้า แยกตามคน
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#">
                        <i class="glyphicon glyphicon-list-alt"></i> รายงานคำชม, ข้อแนะนำ จากลูกค้า
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="glyphicon glyphicon-cog"></i> 
                ตั้งค่า<span class="caret"></span>
            </a>
            <ul class="dropdown-menu">
                <li>
                    <a href="#" onclick="return configGroupCustomer()">
                        <i class="glyphicon glyphicon-cog"></i> ประเภทลูกค้า
                    </a>
                </li>
                <li>
                    <a href="#" onclick="return configVisitType()" >
                        <i class="glyphicon glyphicon-cog"></i> ประเภทการติดต่อ
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#">
                        <i class="glyphicon glyphicon-cog"></i> พนักงาน
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#">
                <i class="glyphicon glyphicon-exclamation-sign"></i> 
                ช่วยเหลือ
            </a>
        </li>





    </ul>
</div>
</div>







<div class="container">
<div id="content">

    <?php 
        if (( Yii::app()->controller->route !== 'frontend/index' )and(Yii::app()->controller->route !=='site/index'))
            $this->breadcrumbs = array_merge(array (Yii::t('zii','Home')=>Yii::app()->homeUrl), $this->breadcrumbs);
        $this->widget('zii.widgets.CBreadcrumbs', array(
            'links'=>$this->breadcrumbs,
            'homeLink'=>false,
            'tagName'=>'ul',
            'separator'=>'',
            'activeLinkTemplate'=>'<li><a href="{url}">{label}</a> <span class="divider"></span></li>',
            'inactiveLinkTemplate'=>'<li><span>{label}</span></li>',
            'htmlOptions'=>array ('class'=>'breadcrumb')
        ));

    ?><!-- breadcrumbs -->
      <div class="starter-template">
        <p class="lead"><?php echo $content; ?></p>
      </div>
</div>
    </div><!-- /.container -->

<?php
}else if(Yii::app()->session['level'] == 'member') {
?>
  <nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"><i class="glyphicon glyphicon-flag"></i> <?php echo CHtml::encode(Yii::app()->name); ?></a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

    <?php
        $this->widget('zii.widgets.CMenu',array(
            'htmlOptions'=>array('class'=>'nav navbar-nav'),
            'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
            'encodeLabel'=>false,
            'items'=>array(
                array('label'=>'Home', 'url'=>array('/site/index')),
                array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
                
            ),
        ));


        $this->widget('zii.widgets.CMenu',array(
            'htmlOptions'=>array('class'=>'nav navbar-nav navbar-right'),
            'submenuHtmlOptions'=>array('class'=>'dropdown-menu'),
            'encodeLabel'=>false,
            'items'=>array(
                array('label'=>'Hi ('.Yii::app()->session['fname'].') <b class="caret"></b>', 
                    'url'=>array('#'), 
                    'itemOptions'=>array('class'=>'dropdown'), 
                    'linkOptions'=>array('class'=>'dropdown-toggle', 
                    'data-toggle'=>'dropdown'), 'items'=>array(
                        array('label'=>'Profile', 'url'=>array('/Member/Profile')),
                        array('label'=>'divider','itemOptions'=>array('class'=>'divider'), ),
                        array('label'=>'Logout', 'url'=>array('/site/logout'))
                    )),
            ),
        ));


    ?>


    </div>
  </div>
</nav>

    <div class="container">
    <?php 
        if (( Yii::app()->controller->route !== 'frontend/index' )and(Yii::app()->controller->route !=='site/index'))
            $this->breadcrumbs = array_merge(array (Yii::t('zii','Home')=>Yii::app()->homeUrl), $this->breadcrumbs);
        $this->widget('zii.widgets.CBreadcrumbs', array(
            'links'=>$this->breadcrumbs,
            'homeLink'=>false,
            'tagName'=>'ul',
            'separator'=>'',
            'activeLinkTemplate'=>'<li><a href="{url}">{label}</a> <span class="divider"></span></li>',
            'inactiveLinkTemplate'=>'<li><span>{label}</span></li>',
            'htmlOptions'=>array ('class'=>'breadcrumb')
        ));

    ?><!-- breadcrumbs -->
    <h1>HELLO MEMBER</h1>
      <div class="starter-template">
        <p class="lead"><div id="content"><?php echo $content; ?></div></p>
      </div>

    </div><!-- /.container -->

<?php }  ?>


	<footer class="footer">
      <div class="container">
        <p class="text-muted">&copy; <?php echo date('Y'); ?> arayasoft.com All right reserved.</p>
      </div>
    </footer>

		


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/../jquery-2.1.4.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/../bootstrap/js/bootstrap.min.js"></script>
 
  </body>
</html>