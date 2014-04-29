<!DOCTYPE html>
<html>
<head>
  <title>Online Bookshelf</title>
  <?php Yii::app()->getClientScript()->registerCssFile(Yii::app()->baseUrl."/css/admin/home.css"); ?>
  <?php Yii::app()->getClientScript()->registerCssFile(Yii::app()->baseUrl."/css/admin/about.css"); ?>
  <?php Yii::app()->getClientScript()->registerCssFile(Yii::app()->baseUrl."/css/admin/navBar.css"); ?>
</head>
<body>
  <div id='cssmenu'>
    <ul>
     <li><?php echo CHtml::link('Home',array('admin/')); ?></li>
     <li><?php echo CHtml::link('Library',array('admin/library')); ?></li>
     <li class='active'><?php echo CHtml::link('About',array('admin/about')); ?></li>
     <li><?php echo CHtml::link('Logout',array('admin/logout')); ?></li>
    </ul>
  </div>
  <div id="aboutcontent">
    <h2 style="color: #FE3F44">Online Library System</h2>
    <p style="color: #FE3F44; margin: 50px 50px;text-align: left; text-indent: 100px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </diV>
</body> 
</html>

<? Yii::app()->clientScript->registerCoreScript('jquery.ui'); ?>
<? Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/tableLoader.js',CClientScript::POS_END); ?>
