<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Lap_opb_c extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('divisi_m','divisi');
		$data = $this->session->userdata('sign_in');
        $nama = $data['id'];

        if($nama == "" || $nama == null){
        	redirect('login_c','refresh');
        }

        $this->load->helper('url');
		$this->load->library('fpdf/HTML2PDF');
	}

	public function index()
	{
		$data = array(
				'title' 	 		=> 'Order Pembelian Barang',
				'page'  	 		=> 'lap_opb_v',
				'sub_menu' 	 		=> 'Laporan',
				'sub_menu1'	 		=> 'Penerimaan Barang',
				'menu' 	   	 		=> 'master_data',
				'menu2'		 		=> 'divisi',
				'lihat_data' 		=> $this->divisi->lihat_data_divisi(),
				'lihat_departemen'  => $this->divisi->lihat_data_depart(),
				'url_simpan' 		=> base_url().'divisi_c/simpan',
				'url_hapus'  		=> base_url().'divisi_c/hapus',
				'url_ubah'	 		=> base_url().'divisi_c/ubah_divisi',
			);
		
		$this->load->view('home_v',$data);
	}

	function cetak($id=""){

		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');
		$view = "pdf/lap_opb_pdf";
		

        // $dt = $this->db->query("SELECT tb.no_lpb , tb.tanggal , tbd.keterangan ,  tbd.nama_produk , tbd.kuantitas , tbd.satuan , tbd.no_po , tb.diterima FROM tb_laporan_penerimaan tb , tb_laporan_penerimaan_detail tbd WHERE tb.id_laporan = tbd.id_induk AND tb.tanggal LIKE '%-$bulan-$tahun%' ")->result();

        $dt = $this->db->query("SELECT tb.no_opb , tbd.nama_produk, tbd.kuantitas , tbd.realisasi , tbd.satuan , tb.tanggal, ms.nama_divisi FROM tb_order_pembelian tb , tb_order_pembelian_detail tbd , master_divisi ms WHERE ms.id_divisi = tb.divisi AND tb.id_order = tbd.id_induk AND tb.tanggal LIKE '%-$bulan-$tahun%' ")->result();


		
		$data = array(
			'title' 		=> 'LAPORAN PERMINTAAN BARANG ',
			'title2'		=> 'SEMUA BAGIAN',
			'dt'			=> $dt,
		);
		$this->load->view($view,$data);
	}

	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */