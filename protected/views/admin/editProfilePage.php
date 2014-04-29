<!DOCTYPE html>
<html>
<head>
  <title>Online Bookshelf</title>
  <?php Yii::app()->getClientScript()->registerCssFile(Yii::app()->baseUrl."/css/login.css"); ?>
  <?php Yii::app()->getClientScript()->registerCssFile(Yii::app()->baseUrl."/css/admin/home.css"); ?>
</head>
<body style="background-color: #FE3F44">
  <div id="container">
    <p class="title">Edit Profile</p>    
    <?php echo CHtml::beginForm(array('admin/update'), 'post'); ?>
      <div class="row">
          <?php echo CHtml::activeLabel(new User,'First name:'); ?>
          <?php echo CHtml::activeTextField(new User,'first_name', array("required"=>"required", "value"=>Yii::app()->user->first_name)) ?>
      </div>   
      <div class="row">
          <?php echo CHtml::activeLabel(new User,'Last name:'); ?>
          <?php echo CHtml::activeTextField(new User,'last_name', array("required"=>"required", "value"=>Yii::app()->user->last_name)) ?>
      </div>   
      <div class="row submit">
          <a><button class="minimal">Edit</button></a>
      </div>
    <?php echo CHtml::endForm(); ?>
    </div>

    <?php echo CHtml::errorSummary(new User); ?>
</body>
</html>