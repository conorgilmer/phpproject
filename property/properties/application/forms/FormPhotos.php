<?php

class FormPhotos extends Zend_Form{
 
public function init(){
  $this->setMethod('post');
 $this->setAction('testing');
        // Add an email element
        $this->addElement('text', 'title', array(          
            'required'   => false,
            'filters'    => array('StringTrim')
            
        ));
        
               
          $this->addElement('text', 'prop_id', array(          
            'required'   => false,
            'filters'    => array('StringTrim')
            
        ));
        
         

        
        // Add the submit button
        $this->addElement('submit', 'submit', array(
            'ignore'   => true,
            'label'    => 'Create Photo',
        ));
        
        
}
 
}