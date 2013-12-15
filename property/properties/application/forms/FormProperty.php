<?php

class FormProperty extends Zend_Form{
 
public function init(){
  $this->setMethod('post');
 $this->setAction('testing');
        // Add an email element
        $this->addElement('text', 'property_addr1', array(          
            'required'   => true,
            'filters'    => array('StringTrim')
            
        ));
        $this->addElement('text', 'property_addr2', array(          
            'required'   => false,
            'filters'    => array('StringTrim')
            
        ));
        $this->addElement('text', 'property_addr3', array(          
            'required'   => false,
            'filters'    => array('StringTrim')
            
        ));
        $this->addElement('text', 'property_county', array(          
            'required'   => true,
            'filters'    => array('StringTrim')
            
        ));
        
        $this->addElement('text', 'property_type', array(          
            'required'   => false,
            'filters'    => array('StringTrim')
            
        ));
        
        $this->addElement('text', 'property_size', array(          
            'required'   => false,
            'filters'    => array('StringTrim')
            
        ));
        
        
        $this->addElement('text', 'property_contact', array(          
            'required'   =>false,
            'filters'    => array('StringTrim')
            
        ));
        
        $this->addElement('text', 'property_price', array(          
            'required'   => false,
            'filters'    => array('StringTrim')
            
        ));
        
        
        $this->addElement('text', 'property_photo', array(          
            'required'   => false,
            'filters'    => array('StringTrim')
            
        ));
        
        $this->addElement('text', 'property_status', array(          
            'required'   => true,
            'filters'    => array('StringTrim')
            
        ));
        
        $this->addElement('text', 'property_ts', array(          
            'required'   => false,
            'filters'    => array('StringTrim')
            
        ));
        
        // Add the submit button
        $this->addElement('submit', 'submit', array(
            'ignore'   => true,
            'label'    => 'Create Property',
        ));
        
        
}
 
}