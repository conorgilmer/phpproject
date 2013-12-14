<?php
   // Define path to application directory
    defined('APPLICATION_PATH')
        || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/application'));
     
 require_once(APPLICATION_PATH .'/config/common.inc.php');
 require_once('FormMovie.php');
 
 echo "I am process form;";
 
 if (!empty($_POST)) {
    echo print_r($_POST);
 
 $form = new FormMovie();
 
 if ($form->isValid($_POST)) {
     
     $validValues = $form->getValues();
     print_r($validValues);
     echo "form is valid";
     
     $dbMovieTable = new Zend_DB_Table('movie');
     
     
     
     
 if ($_POST['movie_id'] == 0)    { 
    $movie_id =  $dbMovieTable->insert(array(
         'movie_id' => null,
         'title' => $validValues['movietitle']
     ));
    
    print "<p>REcord is $movie_id";
     
          $dbMovieXTable = new Zend_DB_Table('cinema_x_movies');
$record_id =  $dbMovieXTable->insert(array(
         'movie_id' => $movie_id,
         'cinema_id' => $validValues['cinema']
     ));

 }//end insert
 else {
      $movie_id =  $dbMovieTable->update(array(
       
         'title' => $validValues['movietitle']
     ),'movie_id = ' . $_POST['movie_id']);
     //echo "updating the movie";
 }
     
 } else echo "form is NOT valid";
 
 }
