<?php 

require_once('Smarty.class.php');

class Smarty_Movies extends Smarty {

   function __construct()
   {

        // Class Constructor.
        // These automatically get set with each new instance.

        parent::__construct();
        $this->debugging=false;
        $this->caching = 0;
        $this->setTemplateDir(APPLICATION_PATH . '/views/smarty/templates/');
        $this->setCompileDir(APPLICATION_PATH . '/views/smarty/templates_c/');
        $this->setConfigDir(APPLICATION_PATH . '/views/smarty/configs/');
       // $this->setCacheDir(APPLICATION_PATH . '/views/smarty/cache/');

       // $this->caching = Smarty::CACHING_LIFETIME_CURRENT;
        $this->assign('app_name', 'Property Website');
        $this->assign('urlAction', 'http://localhost/phpproject/property/properties/index.php?action');
        
        //echo print_r($this->getTemplateDir());
       // echo "testing";
   }

}

?>