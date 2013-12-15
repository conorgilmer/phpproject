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
 echo "forming Photos";
 if ($form->isValid($_POST)) {
     
     $validValues = $form->getValues();
     print_r($validValues);
     echo "form is valid";
     
     $dbPhotosTable = new Zend_DB_Table('photos');
     
     
 if ($_POST['photo_id'] == 0)    {
     
    $file_ts = time();
    $fileName = $_FILES['file']['name'];
    $tmpName  = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileType = $_FILES['file']['type'];

    // Slurp the content of the file into a variable
                    
    $fp = fopen($tmpName, 'r');
    $content = fread($fp, filesize($tmpName));
    $content = addslashes($content);
    fclose($fp);

    if(!get_magic_quotes_gpc()){
        $fileName = addslashes($fileName);
     }
                    
    $file_info = pathinfo($_FILES['file']['name']);
     
     
    $photo_id =  $dbPhotosTable->insert(array(
         'photo_id' => null,
        
         'title' => $validValues['title'],
         'prop_id' => $validValues['prop_id'],
        'file_content' => $content,
        'file_name'=> $fileName,
        'file_size' => $fileSize,
        'file_extension' => $file_info['extension'],
        'file_type' => $fileType
     ));
    
    print "<p>REcord is $photo_id";
    header("Location: index.php?action=listphotos");
     

 }//end insert
 else {
      $photo_id =  $dbPhotosTable->update(array(
       
         'file_name' => $validValues['file_name'],
        
         'title' => $validValues['title'],
         'prop_id' => $validValues['prop_id']
     ),'photo_id = ' . $_POST['photo_id']);
     //echo "updating the movie";
      
    header("Location: index.php?action=listphotos");
     

 }
     
 } else echo "form is NOT valid";
 
 }
