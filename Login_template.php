<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_template
{
	protected $_ci;
   
   	public function __construct()
   	{
           $this->_ci =& get_instance();
   	}
   function display($template, $data=null)
   	{
        $data_template['_content']=$this->_ci->load->view($template, $data, True);
        $this->_ci->load->view('layout_admin_login/main_login.php', $data_template);
   	}
   
   }
   
   /* End of file admin_template.php */
   /* Location: ./application/libraries/admin_template.php */
   