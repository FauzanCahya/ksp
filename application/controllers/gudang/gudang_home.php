<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gudang_home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->no_cache();
		date_default_timezone_set('Asia/Jakarta');
		$data = $this->session->userdata('masuk_ksp');
        $id = $data['id'];
        // if($id == "" || $id == null){
        // 	redirect('login_c');
        // }
	}

	public function index()
	{
		$data = array(
			'title'    	=> 'Dashboard',
			'page'		=> ''
		);

		$this->load->view('gudang/gudang_home_v',$data);
	}

	private function no_cache(){
       
        $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
        
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */