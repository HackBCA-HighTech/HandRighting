<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class canvas_data extends CI_Controller {

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
        echo "------------------test-------------------\n";
        define('UPLOAD_DIR', $_SERVER["DOCUMENT_ROOT"] . '/img/generated_canvas/');
        $img = $_POST['imgBase64'];
        $img = str_replace('data:image/png;base64,', '', $img);
        $filename = $_POST['text'];
        $img = str_replace(' ', '+', $img);
        $data = base64_decode($img);
        $file = UPLOAD_DIR . $filename . '.png';
        $success = file_put_contents($file, $data);
//send request to ocr

        print $success ? $file : 'Unable to save the file.';


    }


}

?>