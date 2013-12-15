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
     
        case 'createproperty':
            //die('loading here $pageAction');
            $row['property_id']=0;
            $row['property_addr1']='';
            $smarty->assign('row',$row);
            $smarty->assign('page','page_property.tpl');
            $smarty->assign('pageTitle','Property Page');
           
            break;
        
        
        case 'editproperty':
            
            $record_id = $_GET['id'];
            $dbTable = new Zend_Db_Table('property');
            $row = $dbTable->fetchRow('property_id = ' . $record_id);
            
            $smarty->assign('row',$row);
            $smarty->assign('page','editproperty.tpl');
            $smarty->assign('pageTitle','Edit Property Details');
           
            break;
        
        case 'createphoto':
            $row['photo_id']=0;
            $row['file_name']='';
            $smarty->assign('row',$row);
            $smarty->assign('page','page_photo.tpl');
            $smarty->assign('pageTitle','Insert Photos Page');
           
            break;
        
        
        case 'editphoto':
            
            $record_id = $_GET['id'];
            $dbTable = new Zend_Db_Table('photos');
            $row = $dbTable->fetchRow('photo_id = ' . $record_id);
            
            $smarty->assign('row',$row);
            $smarty->assign('page','editphoto.tpl');
            $smarty->assign('pageTitle','Edit Photo Details');
           
            break;
       
            case 'createcontact':
            //die('loading here $pageAction');
            $row['contact_id']=0;
            $row['contact_name']='';
            $row['contact_phone_no']='';
            $smarty->assign('row',$row);
            $smarty->assign('page','page_contact.tpl');
            $smarty->assign('pageTitle','Property Page - Create Contact');
           
            break;
        
        
        case 'editcontact':
            //die('loading here $pageAction');
            
            $record_id = $_GET['id'];
            $dbTable = new Zend_Db_Table('contact');
            $row = $dbTable->fetchRow('contact_id = ' . $record_id);
            
            $smarty->assign('row',$row);
            $smarty->assign('page','editcontact.tpl');
            $smarty->assign('pageTitle','Edit Agent Details');
           
            break;
   
               case 'listproperties':
                $dbTable = new Zend_Db_Table('property');
                $rows = $dbTable->fetchAll();
                $smarty->assign('rows',$rows);
                $smarty->assign('page','listproperties.tpl');
                $smarty->assign('pageTitle','List of Accommodation');
           
            break;
        
          case 'listphotos':
                $dbTable = new Zend_Db_Table('photos');
                $rows = $dbTable->fetchAll();
                $smarty->assign('rows',$rows);
                $smarty->assign('page','listphotos.tpl');
                $smarty->assign('pageTitle','Photographs of Accommodation');
           
            break;
               
          case 'listhousetype':
                $dbTable = new Zend_Db_Table('housetype');
                $rows = $dbTable->fetchAll();
                $smarty->assign('rows',$rows);
                $smarty->assign('page','listhousetype.tpl');
                $smarty->assign('pageTitle','House Type Categories');
           
            break;
          
          case 'listcounties':
                $dbTable = new Zend_Db_Table('counties');
                $rows = $dbTable->fetchAll();
                $smarty->assign('rows',$rows);
                $smarty->assign('page','listcounties.tpl');
                $smarty->assign('pageTitle','Areas/Counties Listings');
           
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
         $smarty->assign('pageTitle','Property Website Home Page');
            
            break;
        
    }
  $smarty->display('master.tpl',$pageAction);

?>