<?php
session_start();
   // Define path to application directory
    defined('APPLICATION_PATH')
        || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/application'));
     
 require_once(APPLICATION_PATH .'/config/common.inc.php');
 require_once('FormLogin.php');
 
 //echo "I am the login form;";
 
 if (!empty($_POST)) {
   //echo print_r($_POST);
 
 $form = new FormLogin();
 
 if ($form->isValid($_POST)) {
     
     $validValues = $form->getValues();
     print_r($validValues);
    // echo "form is valid";
 //TAke the values and check against the database
       $dbLoginTable = new Zend_DB_Table('adminusers');
       $username = $form->getValue('username');
       $password = $form->getValue('password');
       $rows = $dbLoginTable->fetchAll("username = '$username' and password = '$password'");
     
       if (sizeof($rows) == 1) {
           
         //  echo "user found";
           $_SESSION['loggedIn']=1;
           $_SESSION['user']=$rows[0];
           header("location: index.php");
           
       }
     
 
 } else {
     
     echo "not valid";
 }
 } else {
     
     header("Location: index.php");
     
 }