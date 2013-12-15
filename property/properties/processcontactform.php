<?php
   // Define path to application directory
    defined('APPLICATION_PATH')
        || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/application'));
     
 require_once(APPLICATION_PATH .'/config/common.inc.php');
 require_once('FormContact.php');
 
 //echo "I am process form;";
 
 if (!empty($_POST)) {
    //echo print_r($_POST);
 
 $form = new FormContact();
 
 if ($form->isValid($_POST)) {
     $validValues = $form->getValues();
     //print_r($validValues);
     
     $dbContactsTable = new Zend_DB_Table('contact');
     
     
 if ($_POST['contact_id'] == 0)    {
   //  die("in here");
    $contact_id =  $dbContactsTable->insert(array(
         'contact_id' => null,
         'contact_name' => $validValues['contact_name'],
         'contact_phone_no' => $validValues['contact_phone_no']
            ));
    
    //print "<p>REcord is $contact_id";
     
    //      $dbMovieXTable = new Zend_DB_Table('cinema_x_movies');
//$record_id =  $dbMovieXTable->insert(array(
  //       'movie_id' => $movie_id,
    //     'cinema_id' => $validValues['cinema']
     //));
   // echo "allok where to go";
    
           header("location: index.php?action=listcontacts");
           

 }//end insert
 else {
      $contact_id =  $dbContactsTable->update(array(
       
         'contact_name' => $validValues['contact_name'],
             'contact_phone_no' => $validValues['contact_phone_no']
     ),'contact_id = ' . $_POST['contact_id']);
     //echo "updating the movie";
      
           header("location: index.php?action=listcontacts");
           
 }
     
 } else echo "form is NOT valid";
 
 }
