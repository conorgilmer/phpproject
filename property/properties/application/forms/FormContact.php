<?php

class FormContact extends Zend_Form{
 
public function init(){
  $this->setMethod('post');
 $this->setAction('testing');
        // Add an email element
        $this->addElement('text', 'contact_name', array(          
            'required'   => true,
            'filters'    => array('StringTrim')
            
        ));
        $this->addElement('text', 'contact_phone_no', array(          
            'required'   => true,
            'filters'    => array('StringTrim')
            
        ));
        
        
        
//        $cinema = new Zend_Form_Element_Text('cinema');
  //      $cinema->setRequired(true)
      //          ->addValidator("digits") ;    
                
    //    $this->addElement($cinema);
        
        // Add the submit button
        $this->addElement('submit', 'submit', array(
            'ignore'   => true,
            'label'    => 'Create Contact',
        ));
        
        
}
 
}