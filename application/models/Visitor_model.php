<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visitor_model extends CI_Model{
	
	function count_visitor(){
        $user_ip=$_SERVER['REMOTE_ADDR'];
        if ($this->agent->is_browser()){
            $agent = $this->agent->browser();
        }elseif ($this->agent->is_robot()){
            $agent = $this->agent->robot(); 
        }elseif ($this->agent->is_mobile()){
            $agent = $this->agent->mobile();
        }else{
            $agent='Other';
        }

        // $cek_ip=$this->db->query("SELECT DATE_FORMAT(visit_date,'%d') AS tgl, visit_ip, COUNT(*) AS jumlah FROM tbl_visitors WHERE MONTH(visit_date)=MONTH(CURDATE()) GROUP BY visit_ip, DATE_FORMAT(visit_date,'%d')");   
        $cek_ip=$this->db->query("SELECT visit_id FROM tbl_visitors WHERE visit_ip='$user_ip' AND DATE_FORMAT(visit_date,'%d')");
        // $cek_ip=$this->db->query("SELECT visit_id FROM tbl_visitors WHERE visit_ip='$user_ip' AND DATE(visit_date)=CURDATE()");
        echo $this->db->last_query();
        exit();
        if($cek_ip->num_rows() <= 0){
            $hsl=$this->db->query("INSERT INTO tbl_visitors (visit_ip,visit_platform) VALUES('$user_ip','$agent')");
            return $hsl;
        }
    }

}