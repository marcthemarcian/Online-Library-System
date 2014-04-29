<?php
  
  class AdminController extends CController {

    public function actionIndex() {
      if(Yii::app()->user->getState("logged-in") != "true" || Yii::app()->user->getState("user_type") != 2) {
        Yii::app()->user->setState("logged-in", "false");
        $this->redirect(array("login/"));
      }

      $this->render("homePage");
    }

    public function actionLogout() {
      Yii::app()->user->clearStates();
      $this->redirect(array("/"));
    }

    public function actionLibrary() {
      $this->render("libraryPage");
    }

    public function actionAbout() {
      $this->render("aboutPage");
    }

    public function actionBook() {
      $this->render("bookPage");
    }

    public function actionEditProfile() {
      $user = User::model()->find('username = "'.Yii::app()->user->username.'"');
      $model = new User;
      $model->attributes = $user->attributes;

      $this->render("editProfilePage");
    }

    public function actionUpdate() {
      $user = User::model()->findByPk(Yii::app()->user->U_ID);
      $user->first_name = $_POST['User']['first_name'];
      $user->last_name = $_POST['User']['last_name'];
      $user->update();

      Yii::app()->user->setState('first_name', $_POST['User']['first_name']);
      Yii::app()->user->setState('last_name', $_POST['User']['last_name']);

      $this->redirect(array("admin/"));
    }

    public function actionAddBook() {
      $model = new Book;
      $this->render("addBookPage", array('model' => $model));
    }

    public function actionRemoveBook() {
      $book = Book::model()->deleteByPk($_GET['B_ID']);
      $this->redirect("../admin", array('model' => $book));
    }

    public function actionAdd() {
      $book = new Book;
      $book->title = $_POST['Book']['title'];
      $book->author = $_POST['Book']['author'];
      $book->date_published = $_POST['Book']['date_published'];
      $book->publisher = $_POST['Book']['publisher'];
      $book->picture = 'image/icon.jgp';
      $book->copies_available = $_POST['Book']['copies_available'];
      $book->total_copies = $_POST['Book']['total_copies'];
      $book->genre = $_POST['genre'];
      
      if ($book->save()) {
        $this->redirect("../admin");
      } else {
        $this->render("addBookPage", array("model"=>$book));
      }

    }
  }