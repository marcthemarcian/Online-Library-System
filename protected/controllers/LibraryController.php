<?php
  
  class LibraryController extends CController {

    public function actionIndex() {
      
      if ($_POST['genre'] == '*') {        
        $books = Book::model()->findAll('');
      } else {        
        $books = Book::model()->findAll('genre = "'.$_POST['genre'].'"');
      }

      $arr = array();
      $i = 0;
      foreach($books as $b) {
        $arr[$i] = $b->attributes;
        $i++;
      }

      echo json_encode($arr);
    }
  }