<?php

class FormPhotos extends Zend_Form{
 
public function init(){
  $this->setMethod('post');
 $this->setAction('testing');
        // Add an email element
        $this->addElement('text', 'file_name', array(          
            'required'   => true,
            'filters'    => array('StringTrim')
            
        ));
        
        
        // Add the submit button
        $this->addElement('submit', 'submit', array(
            'ignore'   => true,
            'label'    => 'Create Photo',
        ));
        
        
}
 
}