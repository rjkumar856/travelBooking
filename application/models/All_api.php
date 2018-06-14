<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class All_api extends CI_Model{
    
    function __construct() {
        parent::__construct();
    }
    
    public function InsertNewGuestBlog($data){
    $this->db->insert('guest_blog',$data);
    $insert_id = $this->db->insert_id();
    return  $insert_id;
    }

    public function GetDirectorMessage(){
    $sql = "SELECT * FROM director_message_contents ORDER BY date_added DESC LIMIT 1";        
    $query = $this->db->query($sql);        
    return $query->result_array();
    }
    
    public function GetNotificationDetails(){
    $sql = "SELECT * FROM notification_slider ORDER BY date_added DESC LIMIT 10";        
    $query = $this->db->query($sql);        
    return $query->result_array();
    }
    
    public function GetAlertNotification(){
    $sql = "SELECT * FROM moving_slider_marquee ORDER BY date_added DESC LIMIT 1";        
    $query = $this->db->query($sql);        
    return $query->result_array();
    }
    
    public function GetAchieversDetails(){
    $sql = "SELECT * FROM achievers ORDER BY date_added DESC LIMIT 4";        
    $query = $this->db->query($sql);        
    return $query->result_array();
    }
    
    public function GetGalleryDetails(){
    $sql = "SELECT * FROM galleries ORDER BY date_added DESC LIMIT 6";        
    $query = $this->db->query($sql);        
    return $query->result_array();
    }
    
    public function GetGalleryImages(){
    $sql = "SELECT * FROM galleries ORDER BY date_added DESC";        
    $query = $this->db->query($sql);        
    return $query->result_array();
    }
    
    public function InsertNewEnquiry($data){
    $this->db->insert('request_enquiry',$data);
    $insert_id = $this->db->insert_id();
    return  $insert_id;
    }
    
    public function InsertSubmitResume($data){
    $this->db->insert('career',$data);
    $insert_id = $this->db->insert_id();
    return  $insert_id;
    }
    
    public function InsertSubmitAdmission($data){
    $this->db->insert('request_admission',$data);
    $insert_id = $this->db->insert_id();
    return  $insert_id;
    }

    public function GetTodayQuiz(){
        $sql = "SELECT * FROM quiz_questions WHERE date=(SELECT date FROM quiz_questions ORDER BY date_added DESC LIMIT 1) ORDER BY date_added DESC LIMIT 10";        
        $query = $this->db->query($sql);        
        return $query->result_array();
    }
    
    public function GetQuizDates(){
        $sql = "SELECT DISTINCT date FROM quiz_questions";        
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
    
    public function GetDailyNews(){
        $sql = "SELECT * FROM daily_news ORDER BY date_added DESC";        
        $query = $this->db->query($sql);        
        return $query->result_array();
    }
    
    public function GetDailyNewsByDate($data){
        $sql = "SELECT * FROM daily_news WHERE date='$data' ORDER BY date_added DESC";        
        $query = $this->db->query($sql);        
        return $query->result_array();
    }
    
    public function GetDailyArticle(){
        $sql = "SELECT * FROM daily_article ORDER BY date_added DESC";        
        $query = $this->db->query($sql);        
        return $query->result_array();
    }
    
    public function GetDailyArticleByDate($data){
        $sql = "SELECT * FROM daily_article WHERE date='$data' ORDER BY date_added DESC";        
        $query = $this->db->query($sql);        
        return $query->result_array();
    }
    
    public function GetSiasaVideos(){
        $sql = "SELECT * FROM siasa_videos ORDER BY date_added DESC";        
        $query = $this->db->query($sql);        
        return $query->result_array();
    }
    
    public function GetSiasaVideosByDate($data){
        $sql = "SELECT * FROM siasa_videos WHERE date='$data' ORDER BY date_added DESC";        
        $query = $this->db->query($sql);        
        return $query->result_array();
    }
    
    public function GetWeeklyCurrentAffair(){
        $sql = "SELECT * FROM weekly_current_affairs ORDER BY date_added DESC";        
        $query = $this->db->query($sql);        
        return $query->result_array();
    }
    
    public function GetWeeklyCurrentAffairByDate($data){
        $sql = "SELECT * FROM weekly_current_affairs WHERE from_date<='$data' AND to_date>='$data' ORDER BY date_added DESC";        
        $query = $this->db->query($sql);        
        return $query->result_array();
    }
    
    public function GetMonthlyCurrentAffair(){
        $sql = "SELECT * FROM monthly_current_affairs ORDER BY date_added DESC";        
        $query = $this->db->query($sql);        
        return $query->result_array();
    }
    
    public function GetMonthlyCurrentAffairByDate($data){
        $sql = "SELECT * FROM monthly_current_affairs WHERE month='$data[month]' AND year='$data[year]' ORDER BY date_added DESC";        
        $query = $this->db->query($sql);        
        return $query->result_array();
    }
    
     public function GetGuestBlog(){
        $sql = "SELECT *,gb.id as BlogID FROM guest_blog gb INNER JOIN user cu ON cu.id=gb.cust_id WHERE gb.status='1' ORDER BY gb.date_added DESC";        
        $query = $this->db->query($sql);        
        return $query->result_array();
    }
    
    public function ViewGuestBlog($data){
        $sql = "SELECT *,gb.id as BlogID FROM guest_blog gb INNER JOIN user cu ON cu.id=gb.cust_id WHERE gb.slug='$data' AND gb.status='1' ORDER BY gb.date_added DESC";        
        $query = $this->db->query($sql);        
        return $query->result_array();
    }
    
    public function insert_submit_test($data){
        $this->db->insert('online_test_submit_prelims',$data);
        $insert_id = $this->db->insert_id();
        return  $insert_id;
    }
    
    public function GetAllFaculty(){
        $sql = "SELECT * FROM faulty_details ORDER BY date_added ASC";        
        $query = $this->db->query($sql);        
        return $query->result_array();
    }
    
    
     public function GetAllMessage(){
        $sql = "select * from director_message order by date_added DESC LIMIT 4";        
        $query = $this->db->query($sql);        
        return $query->result_array();
    }
    
    public function GetStudyMaterials(){
        $sql = "SELECT DISTINCT subject FROM study_materials ORDER BY subject ASC";        
        $query = $this->db->query($sql);
        $this->result = array();
        
        foreach($query->result_array() as $key=>$value){
        $this->result['subjects'][] = $value['subject'];
        $sql_result = "SELECT * FROM study_materials WHERE subject='$value[subject]' ORDER BY title ASC";
        $query_result = $this->db->query($sql_result);   
        $this->result[$value['subject']] = $query_result->result_array();
        }
        return $this->result;
    }
    
    public function GetUpscMaterials(){
        $sql = "SELECT DISTINCT subject FROM upsc_materials ORDER BY subject ASC";        
        $query = $this->db->query($sql);
        $this->result = array();
        
        foreach($query->result_array() as $key=>$value){
        $this->result['subjects'][] = $value['subject'];
        $sql_result = "SELECT * FROM upsc_materials WHERE subject='$value[subject]' ORDER BY title ASC";
        $query_result = $this->db->query($sql_result);   
        $this->result[$value['subject']] = $query_result->result_array();
        }
        return $this->result;
    }
    
    public function GetFoundationDetails(){
        $sql = "SELECT * FROM course_details WHERE page_id='1'";        
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
    public function GetPrelimsDetails(){
        $sql = "SELECT * FROM course_details WHERE page_id='2'";        
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
    public function GetMainCourseDetails(){
        $sql = "SELECT * FROM course_details WHERE page_id='3'";        
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
    public function GetOptionalCourseDetails(){
        $sql = "SELECT * FROM course_details WHERE page_id='4'";        
        $query = $this->db->query($sql);
        return $query->result_array();
    }
    
    public function GetOnlineTestMains(){
        $sql = "SELECT DISTINCT subject FROM online_test_mains ORDER BY subject ASC";        
        $query = $this->db->query($sql);
        $this->result = array();
        
        foreach($query->result_array() as $key=>$value){
        $this->result['subjects'][] = $value['subject'];
        $sql_result = "SELECT * FROM online_test_mains WHERE subject='$value[subject]' ORDER BY title ASC";
        $query_result = $this->db->query($sql_result);   
        $this->result[$value['subject']] = $query_result->result_array();
        }
        return $this->result;
    }
    
    public function GetOnlineTestOptional(){
        $sql = "SELECT DISTINCT subject FROM online_test_optional ORDER BY subject ASC";        
        $query = $this->db->query($sql);
        $this->result = array();
        
        foreach($query->result_array() as $key=>$value){
        $this->result['subjects'][] = $value['subject'];
        $sql_result = "SELECT * FROM online_test_optional WHERE subject='$value[subject]' ORDER BY title ASC";
        $query_result = $this->db->query($sql_result);   
        $this->result[$value['subject']] = $query_result->result_array();
        }
        return $this->result;
    }
    
    public function InsertSubmitResultMains($data){
        $this->db->insert('online_test_mains_submission',$data);
        $insert_id = $this->db->insert_id();
        return  $insert_id;
    }
    
    public function InsertSubmitResultOptional($data){
        $this->db->insert('online_test_optional_submission',$data);
        $insert_id = $this->db->insert_id();
        return  $insert_id;
    }
    
    public function GetOnlineTestPrelims(){
        $sql = "SELECT * FROM online_test_subjects GROUP BY title ORDER BY title ASC";        
        $query = $this->db->query($sql);
        $this->result = array();
        
        foreach($query->result_array() as $key=>$value){
        $this->result['title'][$value['id']] = $value['title'];
        $sql_result = "SELECT question_type FROM online_test_questions_prelims WHERE subject_id='$value[id]' GROUP BY question_type ORDER BY question_type ASC";
        $query_result = $this->db->query($sql_result);   
        $this->result[$value['id']] = $query_result->result_array();
        }
        return $this->result;
    }
    
    public function GetOnlineTestPrelimsQues($data){
        $sql = "SELECT * FROM online_test_questions_prelims WHERE question_type='$data' ORDER BY date_added DESC LIMIT 100";        
        $query = $this->db->query($sql);        
        return $query->result_array();
    }
}