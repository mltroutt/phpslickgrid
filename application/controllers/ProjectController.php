<?php

class ProjectController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
        $this->config       	= Zend_Registry::get('config');
        $this->role_nm 			= Zend_Registry::get('role_nm');
        
        // Grab a refrence to the logger.
        $this->log              = Zend_Registry::get('log');
        // Firebug Console Log example
        //$this->log->debug("this is a debug msg");
        
        $this->project_id=$this->_request->getParam('project_id',null);
        
        
        /* The layout is not part of the current view
         * you have to grab a copy of the layout to
        * change values in the header and footer;
        */
        $this->layout = Zend_Layout::getMvcInstance();
    }

    public function indexAction()
    {
        // action body
        
   
    	$this->layout->footer_right = $this->view->ModalUpload("<i class='icon-upload' />", "Upload Excel File");
    }
    
    public function importAction() 
    {
    	// action body
    	
    	
    }

}

