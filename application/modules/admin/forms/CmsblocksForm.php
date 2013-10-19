<?php
class Admin_Form_CmsblocksForm extends Zend_Form
{
    
    public function init()
    {
        // Set the custom decorator
        $this->addElementPrefixPath('Shineisp_Decorator', 'Shineisp/Decorator/', 'decorator');
        $translate = Shineisp_Registry::get('Zend_Translate');
        
        $this->addElement('text', 'var', array(
            'filters'     => array('StringTrim'),
            'required'    => false,
            'decorators'  => array('Composite'),
            'label'       => $translate->_('Var'),
            'class'       => 'text-input large-input'
        ));
        
        $this->addElement('text', 'title', array(
            'filters'     => array('StringTrim'),
            'required'    => false,
            'decorators'  => array('Composite'),
            'label'       => $translate->_('Title'),
            'class'       => 'text-input large-input'
        ));
        
        $this->addElement('textarea', 'body', array(
            'filters'     => array('StringTrim'),
            'decorators'  => array('Composite'),
            'label'       => $translate->_('Body'),
            'class'       => 'textarea'
        ));

        $this->addElement('multiselect', 'language_id', array(
            'decorators'  => array('Composite'),
            'label'       => $translate->_('Language'),
            'class'       => 'text-input large-input'
        ));
                
        $this->getElement('language_id')
                  ->setAllowEmpty(false)
                  ->setRegisterInArrayValidator(false)
                  ->setMultiOptions(Languages::getList());   
                  
        $this->addElement('submit', 'save', array(
            'required' => false,
            'label'    => $translate->_('Save'),
            'decorators' => array('Composite'),
            'class'    => 'button'
        ));
        
        $this->addElement('hidden', 'block_id');

    }
    
}