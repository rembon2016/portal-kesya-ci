<?php

class Site_model extends CI_Model{
	
	function get_site_data(){
		$query = $this->db->get('tbl_site', 1);
		return $query;
	}

	function update_information($site_id,$site_name,$site_title,$site_description,$logo_header,$logo_footer,$facebook,$twitter,$linkedin,$instagram,$pinterest,$address,$phone,$maps){
		$this->db->set('site_name',$site_name);
		$this->db->set('site_title',$site_title);
		$this->db->set('site_description',$site_description);
		$this->db->set('site_logo_header',$logo_header);
		$this->db->set('site_logo_footer',$logo_footer);
		$this->db->set('site_facebook',$facebook);
		$this->db->set('site_twitter',$twitter);
		$this->db->set('site_instagram',$instagram);
		$this->db->set('site_pinterest',$pinterest);
		$this->db->set('site_linkedin',$linkedin);
		$this->db->set('address',$address);
		$this->db->set('phone',$phone);
		$this->db->set('maps',$maps);
		$this->db->where('site_id',$site_id);
		$this->db->update('tbl_site');
	}

	function update_information_header($site_id,$site_name,$site_title,$site_description,$logo_header,$facebook,$twitter,$linkedin,$instagram,$pinterest,$address,$phone,$maps){
		$this->db->set('site_name',$site_name);
		$this->db->set('site_title',$site_title);
		$this->db->set('site_description',$site_description);
		$this->db->set('site_logo_header',$logo_header);
		$this->db->set('site_facebook',$facebook);
		$this->db->set('site_twitter',$twitter);
		$this->db->set('site_instagram',$instagram);
		$this->db->set('site_pinterest',$pinterest);
		$this->db->set('site_linkedin',$linkedin);
		$this->db->set('phone',$phone);
		$this->db->set('maps',$maps);
		$this->db->set('address',$address);

		$this->db->where('site_id',$site_id);
		$this->db->update('tbl_site');
	} 

	function update_information_footer($site_id,$site_name,$site_title,$site_description,$logo_footer,$facebook,$twitter,$linkedin,$instagram,$pinterest,$address,$phone,$maps){
		$this->db->set('site_name',$site_name);
		$this->db->set('site_title',$site_title);
		$this->db->set('site_description',$site_description);
		$this->db->set('site_logo_footer',$logo_footer);
		$this->db->set('site_facebook',$facebook);
		$this->db->set('site_twitter',$twitter);
		$this->db->set('site_instagram',$instagram);
		$this->db->set('site_pinterest',$pinterest);
		$this->db->set('site_linkedin',$linkedin);
		$this->db->set('address',$address);
		$this->db->set('phone',$phone);
		$this->db->set('maps',$maps);
		$this->db->where('site_id',$site_id);
		$this->db->update('tbl_site');
	}

	function update_information_nologo($site_id,$site_name,$site_title,$site_description,$facebook,$twitter,$linkedin,$instagram,$pinterest,$address,$phone,$maps){
		$this->db->set('site_name',$site_name);
		$this->db->set('site_title',$site_title);
		$this->db->set('site_description',$site_description);
		$this->db->set('site_facebook',$facebook);
		$this->db->set('site_twitter',$twitter);
		$this->db->set('site_instagram',$instagram);
		$this->db->set('site_pinterest',$pinterest);
		$this->db->set('site_linkedin',$linkedin);
		$this->db->set('address',$address);
		$this->db->set('phone',$phone);
		$this->db->set('maps',$maps);
		$this->db->where('site_id',$site_id);
		$this->db->update('tbl_site');
	}
}