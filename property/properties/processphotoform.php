<?php
   // Define path to application directory
    defined('APPLICATION_PATH')
        || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/application'));
     
 require_once(APPLICATION_PATH .'/config/common.inc.php');
 require_once('FormPhotos.php');
 
 echo "I am process form;";
 
 if (!empty($_POST)) {
    echo print_r($_POST);
 
 $form = new FormPhotos();
 
 if ($form->isValid($_POST)) {
     
     $validValues = $form->getValues();
     print_r($validValues);
     echo "form is valid";
     
     $dbPhotosTable = new Zend_DB_Table('photos');
     
     
     
     
 if ($_POST['photo_id'] == 0)    { 
    $photo_id =  $dbPhotosTable->insert(array(
         'photo_id' => null,
         'file_name' => $validValues['movietitle']
     ));
    
    print "<p>REcord is $photo_id";
    header("Location: index.php?action=listphotos");
     

 }//end insert
 else {
      $photo_id =  $dbPhotosTable->update(array(
       
         'file_name' => $validValues['file_name']
     ),'photos_id = ' . $_POST['photos_id']);
     //echo "updating the movie";
 }
     
 } else echo "form is NOT valid";
 
 }
