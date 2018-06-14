<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Account_details extends CI_Model{
    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_user_details($data){
        $sql = "SELECT *, us.id AS customer_id, ci.name AS city_name,st.name AS state_name, co.name AS country_name FROM user us LEFT JOIN profile pr ON us.id=pr.user_id LEFT JOIN city ci ON ci.id=pr.city_id LEFT JOIN state st ON st.id=pr.state_id LEFT JOIN country co ON co.id=pr.country_id WHERE us.id='$data'";        
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
    public function get_user_active_cable_package($data){
        $sql = "SELECT *, cp.id as packageId, cp.name as Package_name, pr.name as Provider_name FROM user_has_cable uc INNER JOIN cable_package cp ON cp.id=uc.package_id INNER JOIN provider pr ON pr.id=cp.Provider_id WHERE uc.user_id='$data'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
    public function get_user_active_internet_package($data){
        $sql = "SELECT *, ip.id as packageId, ip.Name as Package_name, nt.Name as Provider_name FROM user_has_broadband ub INNER JOIN internet_pack ip ON ip.id=ub.package_id INNER JOIN network_type nt ON nt.id=ip.Network_id WHERE user_id='$data'";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
    public function get_recommended_internet_package($data){
        $sql = "SELECT *, nt.Name as Provider_name, ip.Name as Plan_name FROM internet_pack ip INNER JOIN user_has_broadband ub ON ub.package_id=ip.id INNER JOIN network_type nt ON nt.id=ip.Network_id WHERE ip.id NOT IN (SELECT package_id FROM user_has_broadband WHERE user_id='$data')";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
    public function get_recommended_cable_package($data){
        $sql = "SELECT *, pr.Name as Provider_name, cp.Name as Plan_name FROM cable_package cp INNER JOIN provider pr ON pr.id=cp.Provider_id WHERE cp.id NOT IN (SELECT package_id FROM user_has_cable WHERE user_id='$data')";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
    public function change_user_password($data){
        $password=array('password'=>md5($data['user_password']));
        $this->db->where('id',$data['id']);
        return $this->db->update('user',$password);
    }
    
    public function insert_transaction($data){
        $this->db->insert('wvc_transaction', $data);
        $insert_id = $this->db->insert_id();
        return $insert_id;
    }
    
    public function guest_blog_submission($data){
        return $this->db->insert('guest_blog', $data);
    }
    
    public function get_post_payments($data){
        $sql = "SELECT * FROM wvc_payment pa INNER JOIN wvc_transaction tr ON tr.id=pa.transaction_id WHERE pa.user_id='$data' AND pa.Status='1' ORDER BY pa.Date_added DESC LIMIT 12";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
    public function update_due_date_broadband($data){
        $due_date=array('due_date'=>$data['due_date']);
        $this->db->where('user_id',$data['user_id']);
        return $this->db->update('user_has_broadband',$due_date);
    }
    
    public function update_due_date_cable($data){
        $due_date=array('due_date'=>$data['due_date']);
        $this->db->where('user_id',$data['user_id']);
        return $this->db->update('user_has_cable',$due_date);
    }
    
    public function post_complaint_submission($data){
        return $this->db->insert('complaint', $data);
    }
    
    public function get_post_complaint($data){
        $sql = "SELECT * FROM complaint WHERE user_id='$data' AND status='1' ORDER BY created_at DESC LIMIT 12";
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
    public function get_package_details($package_type,$package_id){
        if($package_type == 1){
            $sql = "SELECT * FROM internet_pack WHERE id='$package_id'";
            $query = $this->db->query($sql);
        }else{
            $sql = "SELECT * FROM cable_package WHERE id='$package_id'";
            $query = $this->db->query($sql);
        }
        return $query->result_array();
    }
}