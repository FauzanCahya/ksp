<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mass_pro_c extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('sap/mass_pro_m','grub_kode');
		$data = $this->session->userdata('sign_in');
        $nama = $data['id'];

        if($nama == "" || $nama == null){
        	redirect('login_c','refresh');
        }
	}

	public function index()
	{
		$data = array(
				'title' 	 		=> 'Master Produksi',
				'page'  	 		=> 'sap/mass_pro_v',
				'sub_menu' 	 		=> 'sap',
				'menu' 	   	 		=> 'sap',
				'lihat_data' 		=> $this->grub_kode->lihat_data_maspro(),
				'url_simpan' 		=> base_url().'sap/mass_pro_c/simpan',
				'url_hapus'  		=> base_url().'sap/mass_pro_c/hapus',
				'url_ubah'	 		=> base_url().'sap/mass_pro_c/ubah_grub_akun',
			);
		
		$this->load->view('home_v',$data);
	}

	function simpan()
	{
		$kode 		 	= $this->input->post('kode');
		$warna   		= $this->input->post('warna');
		$ct_pt   		= $this->input->post('ct_pt');
		$nama_item 		= $this->input->post('nama_item');
		$bahan_hd   	= $this->input->post('bahan_hd');
		$lebar   	 	= $this->input->post('lebar');
		$lipatan   	 	= $this->input->post('lipatan');
		$panjang   	 	= $this->input->post('panjang');
		$tebal   	 	= $this->input->post('tebal');
		$bd   	 		= $this->input->post('bd');
		$qc_meter   	= $this->input->post('qc_meter');
		$treat   	 	= $this->input->post('treat');
		$bs_prod   	 	= $this->input->post('bs_prod');
		$bs_printing   	= $this->input->post('bs_printing');
		$bs_potong   	= $this->input->post('bs_potong');

		$this->grub_kode->simpan_data_maspro($kode,$warna,$ct_pt,$nama_item,$bahan_hd,$lebar,$lipatan,$panjang,$tebal,$bd,$qc_meter,$treat,$bs_prod,$bs_printing,$bs_potong);
		$this->session->set_flashdata('sukses','1');
		redirect('sap/mass_pro_c');
	}

	function hapus()
	{
		$id = $this->input->post('id_hapus');
		$this->grub_kode->hapus_grub_kode_akun($id);
		$this->session->set_flashdata('hapus','1');
		redirect('grub_kode_akuntansi_c');
	}

	function data_grub_kode_akun_id()
	{
		$id = $this->input->post('id');
		$data = $this->grub_kode->data_grub_kode_akun_id($id);
		echo json_encode($data);
	}

	function ubah_grub_akun()
	{
		$id 	 		  = $this->input->post('id_kode_grub_modal');
		$grub_modal  	  = $this->input->post('grub_modal');
		$kode_grub_modal  = $this->input->post('kode_grub_modal');
		$nama_grub_modal  = $this->input->post('nama_grub_modal');
		$unit_modal  	  = $this->input->post('unit_modal');
		$approve_modal    = $this->input->post('approve_modal');
		
		$this->grub_kode->ubah_data_grub_kode_akun($id,$grub_modal,$kode_grub_modal,$nama_grub_modal,$unit_modal,$approve_modal);
		$this->session->set_flashdata('sukses','1');
		redirect('grub_kode_akuntansi_c');	
		// echo "1";
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */