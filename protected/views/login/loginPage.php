<!DOCTYPE html>
<html>
<head>
	<title>Online Bookshelf</title>
  <?php Yii::app()->getClientScript()->registerCssFile(Yii::app()->baseUrl."/css/login.css"); ?>
</head>
<body>
	<div id="container">
		<p class="title">Online Library System</p>

    <div class="login">
    <?php echo CHtml::beginForm(array('login/signin')); ?>
      <div class="row">
          <?php echo CHtml::activeLabel($model,'Username:'); ?>
          <?php echo CHtml::activeTextField($model,'username', array("required"=>"required")) ?>
      </div>
   
      <div class="row">
          <?php echo CHtml::activeLabel($model,'Password:'); ?>
          <?php echo CHtml::activePasswordField($model,'password', array("required"=>"required")) ?>
      </div>
   
      <div class="row submit">
        <button type="submit" class="minimal">Login</button>
      </div>
    <?php echo CHtml::endForm(); ?>
    </div>

    <?php echo CHtml::errorSummary($model); ?>

	</div>
  <p class="footer">
    <?php echo CHtml::link('Don\'t have an account? Create one now.',array('login/showSignup')); ?>
  </p>
</body>
</html>