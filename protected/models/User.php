<?php

class User extends CActiveRecord {
  public function tableName() {
    return 'user';
  }

  public function rules() {    
    return array(
      array('username, password', 'required'),
      array('username, password', 'length', 'max'=>255),
    );
  }

  public function relations() {
    return array(
    );
  }

  public function attributeLabels() {
    return array(
      'U_ID' => 'U',
      'username' => 'Username',
      'password' => 'Password',
      'first_name' => 'First Name',
      'last_name' => 'Last Name',
      'gender' => 'Gender',
      'user_type' => 'User Type',
    );
  }

  public static function model($className=__CLASS__){
    return parent::model($className);
  }

  public function checkUsername() {
    $userIdentity = new UserIdentity($this->username, $this->password);

    if(!$userIdentity->authenticate()) {
    	$this->addError('password','Incorrect username or password.');
    	return false;
  	} else {
  		return true;
  	}
  }
}
