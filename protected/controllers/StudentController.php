<?php
  
  class StudentController extends CController {

    public function actionIndex() {
      if(Yii::app()->user->getState("logged-in") != "true" || Yii::app()->user->getState("user_type") != 1) {
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

    public function actionEditProfile() {
      $user = User::model()->find('username = "'.Yii::app()->user->username.'"');
      $model = new User;
      $model->attributes = $user->attributes;

      $this->render("editProfilePage");
    }

    public function actionBook() {
      $this->render("bookPage");
    }

    public function actionUpdate() {
      $user = User::model()->findByPk(Yii::app()->user->U_ID);
      $user->first_name = $_POST['User']['first_name'];
      $user->last_name = $_POST['User']['last_name'];
      $user->update();

      Yii::app()->user->setState('first_name', $_POST['User']['first_name']);
      Yii::app()->user->setState('last_name', $_POST['User']['last_name']);

      $this->redirect(array("student/"));
    }
  }