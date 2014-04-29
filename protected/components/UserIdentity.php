<?php

	class UserIdentity extends CUserIdentity {

    public function authenticate() {
      $user = User::model()->find('username = "'.$this->username.'"');

      if ($user == null) {
        return false;
      }

      if ($user->password != $this->password) {
        return false;
      }

      return true;
    }
  }