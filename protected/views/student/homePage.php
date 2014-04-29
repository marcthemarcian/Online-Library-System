<!DOCTYPE html>
<html>
<head>
  <title>Online Bookshelf</title>
  <?php Yii::app()->getClientScript()->registerCssFile(Yii::app()->baseUrl."/css/student/home.css"); ?>
  <?php Yii::app()->getClientScript()->registerCssFile(Yii::app()->baseUrl."/css/student/navBar.css"); ?>
</head>
<body>
  <div id='cssmenu'>
    <ul>
     <li class='active'><?php echo CHtml::link('Home',array('student/')); ?></li>
     <li><?php echo CHtml::link('Library',array('student/library')); ?></li>
     <li><?php echo CHtml::link('About',array('student/about')); ?></li>
     <li><?php echo CHtml::link('Logout',array('student/logout')); ?></li>
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
        <?php echo CHtml::link('<button class="minimal">Edit Profile</button>',array('student/editProfile')); ?>
      </div>
    </div>
    <div id="borrowedbookcontainer">
      <h2>Borrowed Books</h2>
      <div id="bBooks">
        
      </div>
      <div id="wishlist">

      </div>
    </div>
  </div>  
</body>
</html>