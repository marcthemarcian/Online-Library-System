<?php
  // Remember to copy files from the SDK's src/ directory to a
  // directory in your application on the server, such as php-sdk/
  require_once('php-sdk/facebook.php');

  $config = array(
    'appId' => '1429243437326587',
    'secret' => '7be413718b40c58e326db4dff23c9c9d',
    'allowSignedRequest' => true // optional but should be set to false for non-canvas apps
  );

  $facebook = new Facebook($config);
  $user_id = $facebook->getUser();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Online Bookshelf</title>
  <?php Yii::app()->getClientScript()->registerCssFile(Yii::app()->baseUrl."/css/login.css"); ?>
</head>
<body>
  <div id="container">
    <p class="title">Online Library System</p>
    <div id="facebook">
      <?php echo CHtml::link('Login via Facebook',array('login/suFacebook')); ?>
    </div>
    <div id="googleplus">
      <?php echo CHtml::link('Login via Google+',array('login/suGoogle')); ?>
    </div>
    <div id="linkedin">
      <?php echo CHtml::link('Login via LinkedIn',array('login/suLinkedin')); ?>
    </div>
    <div id="twitter">
      <?php echo CHtml::link('Login via Twitter',array('login/suTwitter')); ?>
    </div>
  </div>
  <p class="footer">
    <?php echo CHtml::link('Click here to go back to the login page.',array('/')); ?>
  </p>
</body>
</html>