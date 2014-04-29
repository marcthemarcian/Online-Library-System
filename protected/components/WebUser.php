<?php 
  class WebUser extends CWebUser {
    private $_model;

    protected function loadUser($id=null) {
      if($this->_model===null) {
        if($id!==null) $this->_model=User::model()->findByPk($id);
      }
      return $this->_model;
    }
  }
?>