<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Password_write extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        $password = $this->input->post('password');
<<<<<<< HEAD
        $_SESSION['password'] = $password;
=======
>>>>>>> f2a579a6ac191b718eb41e683bcfb2691e52b663
        $this->load->view('Canvas', $password);
	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */