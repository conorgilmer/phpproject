<?php
//A generic class to get back lists
class dbLists {
    
    
    static public function getProperties() {
          $dbTable = new Zend_Db_Table('property');
          $rows = $dbTable->fetchAll();
          return $rows;
        
        
    }
   
    static public function getContacts() {
         $dbTable = new Zend_Db_Table('contact');
          $rows = $dbTable->fetchAll();
          return $rows;
        
        
    }
    
        static public function getCounties() {
          $dbTable = new Zend_Db_Table('counties');
          $rows = $dbTable->fetchAll();
          return $rows;
        
        
    }
   
    static public function getPhotos() {
         $dbTable = new Zend_Db_Table('photos');
          $rows = $dbTable->fetchAll();
          return $rows;
        
        
    }
    
    static public function getHouseType() {
         $dbTable = new Zend_Db_Table('housetype');
          $rows = $dbTable->fetchAll();
          return $rows;
        
        
    }
    
    /*
    static public function getMovies() {
          $dbTable = new Zend_Db_Table('movie');
          $rows = $dbTable->fetchAll();
          return $rows;
        
        
    }
   
    static public function getCinemas() {
         $dbTable = new Zend_Db_Table('cinema');
          $rows = $dbTable->fetchAll();
          return $rows;
        
        
    }
    
    */
}


?>
