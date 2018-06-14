<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Civil_services extends CI_Model{
    
    function __construct() {
        parent::__construct();
    }

    public function GetTodayQuiz(){
        $sql = "SELECT * FROM quiz_questions ORDER BY date_added DESC LIMIT 10";        
        $query = $this->db->query($sql);        
        return $query->result_array();
    }
    
    public function GetDateQuiz($data){
        $sql = "SELECT * FROM quiz_questions WHERE date='$data'";        
        $query = $this->db->query($sql);        
        return $query->result_array();
    }
    
    public function insert_submit_quiz($data){
        $this->db->insert('quiz_result_submission',$data);
        $insert_id = $this->db->insert_id();
        return  $insert_id;
    }
}