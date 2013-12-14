<?php
   // Define path to application directory
    defined('APPLICATION_PATH')
        || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/application'));
     
 require_once(APPLICATION_PATH .'/config/common.inc.php');
       
 
  set_include_path(APPLICATION_PATH. "/models" . PATH_SEPARATOR . get_include_path());
     
     

  
  $dbTable = new Zend_Db_Table('movie');
  
  $select = $dbTable->select()->setIntegrityCheck(false)
          ->from(array('t1' => 'movie'), array('movie_id','title'))
          ->join(array('t2'=>'cinema_x_movies'),'t1.movie_id=t2.movie_id',null)
          ->join(array('t3'=>'cinema'),'t2.cinema_id=t3.cinema_id','t3.title as cinemaTitle');
       
  if (isset($_REQUEST['cinema_id'])) {
      
        $select->where('t2.cinema_id = ?', (int) $_REQUEST['cinema_id']);
        
  }
  
   if (isset($_REQUEST['movie_id'])) {
      
        $select->where('t2.movie_id = ?', (int) $_REQUEST['movie_id']);
        
  }
  
  
  $rows = $dbTable->fetchAll($select);
  
  
  $listOfMovies = array();
  foreach($rows as $row) {
      $listOfMovies[] = $row->toArray();

  }
  
   /* Set the header type for output */  
      
       header('Content-Type: application/json');  
      
    /* Create a variable to hold your JSON data */  
      
        $jsonOutput =  json_encode($listOfMovies);  
      
    /* Output the JSON data */  
      
        echo $jsonOutput;
  
   