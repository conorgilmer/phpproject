<?php
session_start();
   // Define path to application directory
    defined('APPLICATION_PATH')
        || define('APPLICATION_PATH', realpath(dirname(__FILE__) . '/application'));
     
 require_once(APPLICATION_PATH .'/config/common.inc.php');
       
    // $dbTable = new Zend_Db_Table('movie');
    // $rows = $dbTable->fetchAll();
     
   //  foreach($rows as $row) {
         
        // print_r($row->toArray());
         
   //  }
    
 
   // die(get_include_path());
    set_include_path(APPLICATION_PATH. "/models" . PATH_SEPARATOR . get_include_path());
     
     
    include_once('smartymovies.inc.php');
     
    $smarty = new Smarty_Movies();
    
     
    $smarty->assign('name','Property Database');
    $smarty->assign('showJumboTron',false);
    
    $smarty->assign('loggedIn',false);
    $loggedIn = false;
    if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']==1) {
        
       $smarty->assign('loggedIn',true);  
     $loggedIn=true;
    }
    
   // $smarty->assign('page','page1');
       
    $pageAction = isset($_GET['action']) ? $_GET['action'] : 'home';
   // die($pageAction);
    switch($pageAction) {
        
        case 'createmovies':
            //die('loading here $pageAction');
            $row['movie_id']=0;
            $row['title']='';
            $smarty->assign('row',$row);
            $smarty->assign('page','page_1.tpl');
            $smarty->assign('pageTitle','DSA Move Home Page');
           
            break;
        
        case 'edit':
            //die('loading here $pageAction');
            
            $record_id = $_GET['id'];
            $dbTable = new Zend_Db_Table('movie');
            $row = $dbTable->fetchRow('movie_id = ' . $record_id);
            
            $smarty->assign('row',$row);
            $smarty->assign('page','editmovie.tpl');
            $smarty->assign('pageTitle','DSA Edit Movie');
           
            break;
        
          case 'listcontacts':
                $dbTable = new Zend_Db_Table('contact');
                $rows = $dbTable->fetchAll();
                $smarty->assign('rows',$rows);
                $smarty->assign('page','listcontacts.tpl');
                $smarty->assign('pageTitle','Property Agents Listings');
           
            break;
        
        
           case 'listmovies':
                $dbTable = new Zend_Db_Table('movie');
                $rows = $dbTable->fetchAll();
                $smarty->assign('rows',$rows);
                $smarty->assign('page','listmovies.tpl');
                $smarty->assign('pageTitle','DSA Movie Listings');
           
            break;
           case 'cinemalistings':
                
                $smarty->assign('rowsOfMovies',  dbLists::getMovies());
                $smarty->assign('rowsOfCinemas',  dbLists::getCinemas());
                $smarty->assign('page','cinemalistings.tpl');
                $smarty->assign('pageTitle','DSA Movie Listings');
           
            break;
    
        default:
           //die('loading here');
         $smarty->assign('showJumboTron',true);
         $smarty->assign('page','front.tpl');
         $smarty->assign('pageTitle','DSA Movie Home Page');
            
            break;
        
    }
  $smarty->display('master.tpl',$pageAction);

?>