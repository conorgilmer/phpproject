<?php

class FormMovie extends Zend_Form{
 
public function init(){
  $this->setMethod('post');
 $this->setAction('testing');
        // Add an email element
        $this->addElement('text', 'movietitle', array(          
            'required'   => true,
            'filters'    => array('StringTrim')
            
        ));
        
        
        $cinema = new Zend_Form_Element_Text('cinema');
        $cinema->setRequired(true)
                ->addValidator("digits") ;    
                
        $this->addElement($cinema);
        
        // Add the submit button
        $this->addElement('submit', 'submit', array(
            'ignore'   => true,
            'label'    => 'Create Movie',
        ));
        
        
}
 
}