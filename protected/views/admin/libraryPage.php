<!DOCTYPE html>
<html>
<head>
  <title>Online Bookshelf</title>
  <?php Yii::app()->getClientScript()->registerCssFile(Yii::app()->baseUrl."/css/admin/home.css"); ?>
  <?php Yii::app()->getClientScript()->registerCssFile(Yii::app()->baseUrl."/css/admin/library.css"); ?>
  <?php Yii::app()->getClientScript()->registerCssFile(Yii::app()->baseUrl."/css/admin/navBar.css"); ?>
</head>
<body>
  <div id='cssmenu'>
    <ul>
     <li><?php echo CHtml::link('Home',array('admin/')); ?></li>
     <li class='active'><?php echo CHtml::link('Library',array('admin/library')); ?></li>
     <li><?php echo CHtml::link('About',array('admin/about')); ?></li>
     <li><?php echo CHtml::link('Logout',array('admin/logout')); ?></li>
    </ul>
  </div>
  <div id="libcontent">
    <div id="tabContainer">
      <ul class="tabs">
        <li>
          <input type="radio" checked name="tabs" id="tab1">
          <a id="content-all"><label for="tab1">All</label></a>
          <div id="tab-content1" class="tab-content animated fadeIn">
          </div>
        </li>
        <li>
          <input type="radio" name="tabs" id="tab2">
          <a class="content-specific" id="sciences" value="tab-content2"><label for="tab2">Sciences</label></a>
          <div id="tab-content2" class="tab-content animated fadeIn">
          </div>
        </li>
        <li>
          <input type="radio" name="tabs" id="tab3">
          <a class="content-specific" id="literature" value="tab-content3"><label for="tab3">Literature</label></a>
          <div id="tab-content3" class="tab-content animated fadeIn">
          </div>
        </li>
        <li>
          <input type="radio" name="tabs" id="tab4">
          <a class="content-specific" id="management" value="tab-content4"><label for="tab4">Management</label></a>
          <div id="tab-content4" class="tab-content animated fadeIn">
          </div>
        </li>
        <li>
          <input type="radio" name="tabs" id="tab5">
          <a class="content-specific" id="journals" value="tab-content5"><label for="tab5">Journals</label></a>
          <div id="tab-content5" class="tab-content animated fadeIn">
          </div>
        </li>
        <li>
          <input type="radio" name="tabs" id="tab6">
          <a class="content-specific" id="research_papers" value="tab-content6"><label for="tab6">Research Papers</label></a>
          <div id="tab-content6" class="tab-content animated fadeIn">
          </div>
        </li>
      </ul>
    </div>
  </diV>
</body> 
</html>

<?php 
  Yii::app()->clientScript->registerCoreScript('jquery.ui');
  Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl.'/js/tableLoader.js',CClientScript::POS_END);
?>