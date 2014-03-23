<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Verify extends CI_Controller {

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
	{$this->load->view('landingendC');
    }}

/*		if(biometricVerify()){
			$this->load->view('landingendC');
		}
		
		if(!biometricVerify()){
			$this->load->view('landingendF');
		}
	}

	public function biometricVerify()
	{
		$threshold = 3;
		$numCorrect = 0;

		$time = $this->input->get('time');
		$resultTemp = shell_exec('python /imageAnalyze/imageAnalyze.py');
		$result = json_decode($resultTemp);
		$prop = $result['prop'];
		$centX = $result['centX'];
		$centY = $result['centY'];
		$this->load->library('session');
		$ranges = $this->session->userdata('ranges');
		$minProps = $ranges['propsRange'][0];
		$maxProps = $ranges['propsRange'][1];
		$minCentsX = $ranges['centsXRange'][0];
		$maxCentsX = $ranges['centsXRange'][1];
		$minCentsY = $ranges['centsYRange'][0];
		$maxCentsY = $ranges['centsYRange'][1];
		$minTimes = $ranges['timesRange'][0];
		$maxTimes = $ranges['timesRange'][1];

		if($minProps < $prop && $prop < $maxProps){
			$numCorrect = $numCorrect + 1;
		}

		if($minCentsX < $centX && $centX < $maxCentsX){
			$numCorrect = $numCorrect + 1;
		}

		if($minCentsY < $centY && $centY < $maxCentsY){
			$numCorrect = $numCorrect + 1;
		}	

		if($minTimes < $time && $time < $maxTimes){
			$numCorrect = $numCorrect + 1;
		}			

		if($numCorrect >= $threshold){
			return true;
		}

		else{
			return false;
		}
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */