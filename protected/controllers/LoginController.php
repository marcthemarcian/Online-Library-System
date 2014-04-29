<?php
	
	class LoginController extends CController {


    public function actionIndex() {
      $model = new User;
      
      $this->render("loginPage", array('model'=>$model));
    }

    public function actionShowSignup() {
      $model = new User;
      $this->render("signupPage");
    }

    public function actionSignin() {
      $model = new User;
      $model->attributes=$_POST['User'];
      $user = User::model()->find('username = "'.$model->username.'"');

      if($model->checkUsername()) {
        Yii::app()->user->setState("logged-in", "true");
        Yii::app()->user->setState("U_ID", $user->U_ID);
        Yii::app()->user->setState("username", $user->username);
        Yii::app()->user->setState("first_name", $user->first_name);
        Yii::app()->user->setState("last_name", $user->last_name);
        Yii::app()->user->setState("gender", $user->gender);
        Yii::app()->user->setState("user_type", $user->user_type);

        if ($user->user_type == 1) $this->redirect(array("student/"));
        if ($user->user_type == 2) $this->redirect(array("admin/"));
      } else {
        $this->render("loginPage", array('model'=>$model));
      }
    }

    public function actionSuFacebook() {
      $model = new User;
      include 'php-sdk/facebook.php';

      $config = array(
        'appId' => '1429243437326587',
        'secret' => '7be413718b40c58e326db4dff23c9c9d',
        'allowSignedRequest' => true 
      );

      $facebook = new Facebook($config);
      $user_id = $facebook->getUser();

      if($user_id) {
        try {
          $user_profile = $facebook->api('/me','GET');
          $user = User::model()->find('username = "'.$user_profile['username'].'"');

          $facebook->destroySession();
          
          if ($user == null) {
            $usermodel = new User;
            $usermodel->username = $user_profile['username'];
            $usermodel->password = "admin";
            $usermodel->first_name = $user_profile['first_name'];
            $usermodel->last_name = $user_profile['last_name'];
            $usermodel->gender = $user_profile['gender'];
            $usermodel->user_type = 1;
            $usermodel->save();
            $this->render("loginPage", array('model'=>$model));
          } else {
            echo "<h1>User already exists</h1>";
          }
        } catch(FacebookApiException $e) {
          error_log($e->getType());
          error_log($e->getMessage());
        }   
      } else {
        $login_url = $facebook->getLoginUrl();
        $this->redirect($login_url);
      }      
    }

    public function actionSuGoogle() {
      
    }

    public function actionSuLinkedin() {
      
    }

    public function actionSuTwitter() {
      
    }

	}