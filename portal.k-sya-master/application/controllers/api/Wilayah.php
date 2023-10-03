<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wilayah extends CI_Controller {
	function __construct(){ 
		parent::__construct();
	}  

  

    public function get_provinsi()
    {
        $data = $this->db->order_by('provinsi','ASC')->get('tbl_provinsi')->result();  
		echo json_encode($data);
    } 
	public function get_kabkota($provinsi_id)
	{
		$data = $this->db->where('provinsi_id',$provinsi_id)->order_by('kabupaten_kota','ASC')->get('tbl_kabkot')->result(); 
		echo json_encode($data);
	}
	public function get_kecamatan($kabupaten_id)
	{
		$data = $this->db->where('kabkot_id',$kabupaten_id)->order_by('kecamatan','ASC')->get('tbl_kecamatan')->result(); 
		echo json_encode($data);
	} 
	public function get_desa($kec_id)
	{
		$data = $this->db->where('kecamatan_id',$kec_id)->order_by('kelurahan','ASC')->get('tbl_kelurahan')->result(); 
		echo json_encode($data);
	}






}