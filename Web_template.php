<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web_template
{
	protected $ci;

	public function __construct()
	{
        $this->ci =& get_instance();
	}

	function display($template, $data=null)
   	{
        $data_template['_content']=$this->ci->load->view($template, $data, True);
        $this->ci->load->view('/main_web.php', $data_template);
  }
}

/* End of file web_template.php */
/* Location: ./application/libraries/web_template.php */
