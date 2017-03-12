<?php
  //Start SessionHandler
  session_start();
  //Include Configuration
  require_once('config/config.php');

  //Helper Function Files
  require_once('helpers/db_helper.php');
  require_once('helpers/format_helper.php');
  require_once('helpers/system_helper.php');


  //Autoload Classes It loads libraries
  function __autoload($class_name){
    require_once('libraries/'.$class_name.'.php');//Here we load all files just Take care of file and class have the same name
  }
?>
