<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mass_pro_m extends CI_Model
{
	function __construct() {
		  parent::__construct();
		  $this->load->database();
	}

	function simpan_data_maspro($kode,$warna,$ct_pt,$nama_item,$bahan_hd,$lebar,$lipatan,$panjang,$tebal,$bd,$qc_meter,$treat,$bs_prod,$bs_printing,$bs_potong)
	{
		$sql = "
			INSERT INTO master_produksi (
				KODE,
				WARNA,
				CT_PT,
				NAMA_ITEM,
				BAHAN_HD,
				LEBAR,
				LIPATAN,
				PANJANG,
				TEBAL,
				BD,
				QC_METER,
				TREAT,
				BS_PROD,
				BS_PRINTING,
				BS_POTONG
			) VALUES (
				'$kode',
				'$warna',
				'$ct_pt',
				'$nama_item',
				'$bahan_hd',
				'$lebar',
				'$lipatan',
				'$panjang',
				'$tebal',
				'$bd',
				'$qc_meter',
				'$treat',
				'$bs_prod',
				'$bs_printing',
				'$bs_potong'
			)";
		$this->db->query($sql);
	}

	function lihat_data_maspro()
	{
		$sql = "
			SELECT * FROM master_produksi ";

		return $this->db->query($sql)->result();
	}

	function hapus_grub_kode_akun($id)
	{
		$sql = "DELETE FROM  ak_grup_kode_akun WHERE ID = '$id' " ;
		$this->db->query($sql);
	}

	function data_grub_kode_akun_id($id)
	{
		$sql = "SELECT * FROM ak_grup_kode_akun WHERE ID = '$id' ";
		$query = $this->db->query($sql);
		return $query->row();
	}

	function ubah_data_grub_kode_akun($id,$grub_modal,$kode_grub_modal,$nama_grub_modal,$unit_modal,$approve_modal)
	{
		$sql = "
			UPDATE ak_grup_kode_akun SET
				GRUP   	   = '$grub_modal',
				KODE_GRUP  = '$kode_grub_modal',
				NAMA_GRUP  = '$nama_grub_modal',
				UNIT  	   = '$unit_modal',
				APPROVE    = '$approve_modal'
			WHERE ID = '$id'
		";
		$this->db->query($sql);
	}
}
