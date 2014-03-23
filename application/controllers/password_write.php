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
        $counter = $this->session->userdata('counter');
        if ($counter <= 10) {
            $this->load->view('Canvas', $password, $counter);
        }
        else {
            $results = $this->biometricAnalysis();
            $this->session->set_userdata(['results' => $results]);
            $this->load->view('verification');
        }
        $counter = $counter + 1;
        $this->session->set_userdata('counter', $counter);
	}

    public function biometricAnalysis()
    {
        //load images from database

    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */