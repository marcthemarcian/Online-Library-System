<!DOCTYPE html>
<html>
<head>
  <title>Online Bookshelf</title>
  <?php Yii::app()->getClientScript()->registerCssFile(Yii::app()->baseUrl."/css/admin/home.css"); ?>
  <?php Yii::app()->getClientScript()->registerCssFile(Yii::app()->baseUrl."/css/admin/navBar.css"); ?>
</head>
<body>
  <div id='cssmenu'>
    <ul>
     <li class='active'><?php echo CHtml::link('Home',array('admin/')); ?></li>
     <li><?php echo CHtml::link('Library',array('admin/library')); ?></li>
     <li><?php echo CHtml::link('About',array('admin/about')); ?></li>
     <li><?php echo CHtml::link('Logout',array('admin/logout')); ?></li>
    </ul>
  </div>
  <div id="content">
    <div id="profile">
      <img id="profpic" src="<?php echo Yii::app()->baseUrl.'/images/profpic.jpg'?>" width="200" height="200"/>
      <div id="details">
        <p><strong>Username: </strong><?php echo Yii::app()->user->getState("username"); ?></p>
        <p><strong>First Name: </strong><?php echo Yii::app()->user->getState("first_name"); ?></p>
        <p><strong>Last Name: </strong><?php echo Yii::app()->user->getState("last_name"); ?></p>
        <p><strong>Gender: </strong><?php echo Yii::app()->user->getState("gender"); ?></p>
        <?php echo CHtml::link('<button class="minimal">Edit Profile</button>',array('admin/editProfile')); ?>
      </div>
    </div>
    <div id="borrowedbookcontainer">
        <?php echo CHtml::link('<button id="add" class="minimal">Add Book</button>',array('admin/addBook')); ?>
        <?php echo CHtml::link('<button id="add" class="minimal">Remove Book</button>'); ?>
        <?php echo CHtml::link('<button id="add" class="minimal">Suspend User</button>'); ?>
        <?php echo CHtml::link('<button id="add" class="minimal">Do something</button>'); ?>
    </div>
  </div>  
</body>
</html>