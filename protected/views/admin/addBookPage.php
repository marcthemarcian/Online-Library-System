<!DOCTYPE html>
<html>
<head>
  <title>Online Bookshelf</title>
  <?php Yii::app()->getClientScript()->registerCssFile(Yii::app()->baseUrl."/css/login.css"); ?>
  <?php Yii::app()->getClientScript()->registerCssFile(Yii::app()->baseUrl."/css/admin/home.css"); ?>
  <?php Yii::app()->getClientScript()->registerCssFile(Yii::app()->baseUrl."/css/admin/add.css"); ?>
</head>
<body style="background-color: #FE3F44">
  <div id="addcontainer">
    <p class="title">Add Book</p>    
    <div id="form">
    <?php echo CHtml::beginForm(array('admin/add'), 'post'); ?>
          <?php echo CHtml::activeLabel($model,'Title:'); ?>
          <?php echo CHtml::activeTextField($model,'title', array("required"=>"required")) ?>
          <br><br>
          <?php echo CHtml::activeLabel($model,'Author:'); ?>
          <?php echo CHtml::activeTextField($model,'author', array("required"=>"required")) ?>
          <br><br>
          <?php echo CHtml::activeLabel($model,'Date Published:'); ?>
          <?php echo CHtml::activeTextField($model,'date_published', array("required"=>"required")) ?>
          <br><br>
          <?php echo CHtml::activeLabel($model,'Publisher:'); ?>
          <?php echo CHtml::activeTextField($model,'publisher', array("required"=>"required")) ?>
          <br><br>
          <?php echo CHtml::activeLabel($model,'Copies Available:'); ?>
          <?php echo CHtml::activeTextField($model,'copies_available', array("required"=>"required")) ?>
          <br><br>
          <?php echo CHtml::activeLabel($model,'Total Copies:'); ?>
          <?php echo CHtml::activeTextField($model,'total_copies', array("required"=>"required")) ?>
          <br><br>
          <?php echo CHtml::activeLabel($model,'Genre:'); ?>
          <?php 
              $select = "";
              echo CHtml::dropDownList('genre', $select, 
              array('sciences' => 'Sciences', 'literature' => 'Literature', 'management' => 'Management', 
              'journals' => 'Journals', 'research_paper' => 'Research Papers')); ?>
      </div>   
      <div class="row submit">
          <a><button style="margin: 50px auto" class="minimal">Add Book</button></a>
      </div>

      <?php echo CHtml::errorSummary($model); ?>
    </div>

    <?php echo CHtml::endForm(); ?>
  </div>
</body>
</html>