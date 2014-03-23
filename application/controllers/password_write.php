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
        $this->load->library('session');
        $counter = $this->session->userdata('counter');
        if($counter == 1){
            $password = $this->input->post('password');
            $this->session->set_userdata(['password' => $password]);
        }
        $password = $this->session->userdata('password');
        if($counter > 1 && $counter <= 10){
        	$time = floatval($this->input->get('time'));
        	$times = $this->session->userdata('times');
        	$times[] = $time;
        	$this->session->set_userdata(['times' => $times]);
        }
        if ($counter <= 10) {
            $data['password'] = $password;
            $data['counter'] = $counter;
            $this->load->view('Canvas', $data);
        }
        else {
        	$time = floatval($this->input->get('time'));
        	$times = $this->session->userdata('times');
        	$times[] = $time;
        	$this->session->set_userdata(['times' => $times]);
            $results = $this->biometricAnalysis($times);
            $this->session->set_userdata(['ranges' => $results]);
            $ranges = $this->session->userdata('ranges');
			//var_dump($ranges);
			//exit;
            $this->load->view('verification');
        }
        $counter = $counter + 1;
        $this->session->set_userdata('counter', $counter);
	}

    public function biometricAnalysis($times)
    {
    	$result = shell_exec('python /imageAnalyze/imageAnalyze.py ' . escapeshellarg(json_encode($times)));
    	return json_decode($result);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */