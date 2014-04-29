<!DOCTYPE html>
<html>
<head>
  <title>Online Bookshelf</title>
  <?php Yii::app()->getClientScript()->registerCssFile(Yii::app()->baseUrl."/css/student/home.css"); ?>
  <?php Yii::app()->getClientScript()->registerCssFile(Yii::app()->baseUrl."/css/student/navBar.css"); ?>
  <?php Yii::app()->getClientScript()->registerCssFile(Yii::app()->baseUrl."/css/student/book.css"); ?>
</head>
<body>
  <div id='cssmenu'>
    <ul>
     <li><?php echo CHtml::link('Home',array('student/')); ?></li>
     <li class='active'><?php echo CHtml::link('Library',array('student/library')); ?></li>
     <li><?php echo CHtml::link('About',array('student/about')); ?></li>
     <li><?php echo CHtml::link('Logout',array('student/logout')); ?></li>
    </ul>
  </div>
  <div id='bookcontainer'>
    <?php $book = Book::model()->find('B_ID = "'.$_GET['B_ID'].'"'); ?>
    <div id="photo">
      <img src='../<?php echo $book->picture?>' style="height:200px; width:150px;"/>
    </div>
    <div id="details">
      <p>Title: <?php echo $book->title?></p>
      <p>Author: <?php echo $book->author?></p>
      <p>Date Published: <?php echo $book->date_published?></p>
      <p>Publisher: <?php echo $book->publisher?></p>
      <p>Copies Available: <?php echo $book->copies_available?></p>
      <p>Total Copies: <?php echo $book->total_copies?></p>
      <p>Genre: <?php echo $book->genre?></p>
    </div>
  </div>
</body> 
</html>