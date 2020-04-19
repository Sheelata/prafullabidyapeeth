<?php
 
class Database_class {
   
     public $conn;
    function __construct() {
          $host_name='localhost';
       $user_name='root';
       $password='';
       $this->conn=  mysqli_connect($host_name,$user_name,$password);
       $db_name='tanvir_sbdcs';
        if(!$this->conn){   }
 else {
        mysqli_select_db($this->conn,$db_name);
        mysqli_query($this->conn,'SET CHARACTER SET utf8');
        mysqli_query($this->conn,"SET SESSION collation_connection='utf8_general_ci' ");
           
       }
    }
    
    
    
     public function get_mission(){
       $result = mysqli_query($this->conn,"SELECT *FROM mission_vision WHERE id='1'");
   return $result;
}
   public function get_vision(){
       $result = mysqli_query($this->conn,"SELECT *FROM mission_vision WHERE id='1'");
   return $result;
}
  public function get_teritorial_description(){
       $result = mysqli_query($this->conn,"SELECT *FROM teritorial_description WHERE id='1'");
   return $result;
}

    public function get_infrastructure() {
   $result = mysqli_query($this->conn,"SELECT *FROM infrastructure WHERE id='1'");
   return $result;
    }

public function get_foundation() {
   $result = mysqli_query($this->conn,"SELECT *FROM foundation WHERE id='1'");
   return $result;
    }

  public function get_brief_description(){
       $result = mysqli_query($this->conn,"SELECT *FROM brief_description WHERE id='1'");
   return $result;
}

public function get_principal_info() {
   $result = mysqli_query($this->conn,"SELECT *FROM principal_info WHERE id='1'");
   return $result;
    }
    public function get_chairman_info() {
   $result = mysqli_query($this->conn,"SELECT *FROM chairman_info WHERE id='1'");
   return $result;
    }
  public function select_all_notice(){
     $result = mysqli_query($this->conn,"SELECT *FROM  notice");
 
      return $result; ///location er address ta patay... resorce location return kore
}
 public function select_all_publish_notice(){
     $result = mysqli_query($this->conn,"SELECT *FROM  notice WHERE publish_status='1'");
 
      return $result; ///location er address ta patay... resorce location return kore
}

public function get_notice($id){
     $result = mysqli_query($this->conn,"SELECT * FROM  notice WHERE id=$id");
 
      return $result; ///location er address ta patay... resorce location return kore
}

public function select_all_quick_notice(){
     $result = mysqli_query($this->conn,"SELECT *FROM  quick_notice");
 
      return $result; ///location er address ta patay... resorce location return kore
}

public function select_all_event(){
     $result = mysqli_query($this->conn,"SELECT *FROM  events WHERE publish_status='1'");
 
      return $result; ///location er address ta patay... resorce location return kore
}

public function select_all_governingbody(){
     $result = mysqli_query($this->conn,"SELECT * FROM  goveringbody  WHERE designation<>'President' ORDER BY sequence");
 
      return $result; ///location er address ta patay... resorce location return kore
}
public function select_single_governingbody(){
     $result = mysqli_query($this->conn,"SELECT *FROM  goveringbody WHERE designation='President'");
 
      return $result; ///location er address ta patay... resorce location return kore
}


public function select_all_trustyboard(){
     $result = mysqli_query($this->conn,"SELECT * FROM  trusty_board  WHERE designation<>'President' ORDER BY sequence");
 
      return $result; ///location er address ta patay... resorce location return kore
}
public function select_single_trustyboard(){
     $result = mysqli_query($this->conn,"SELECT *FROM  trusty_board WHERE designation='President'");
 
      return $result; ///location er address ta patay... resorce location return kore
}




public function select_all_student_pdf($id){
     $result = mysqli_query($this->conn,"SELECT *FROM  student_info  WHERE class=$id");
 
      return $result; ///location er address ta patay... resorce location return kore
}

public function select_all_officer_staff(){
     $result = mysqli_query($this->conn,"SELECT *FROM  officer_staff_info WHERE designation<>'President' ORDER BY sequence");
 
      return $result; ///location er address ta patay... resorce location return kore
}

public function select_single_officer_staff(){
     $result = mysqli_query($this->conn,"SELECT *FROM  officer_staff_info WHERE designation='President'");
 
      return $result; ///location er address ta patay... resorce location return kore
}


public function select_all_video(){
     $result = mysqli_query($this->conn,"SELECT *FROM  video");
 
      return $result; ///location er address ta patay... resorce location return kore
}

public function get_student_information() {
   $result = mysqli_query($this->conn,"SELECT *FROM student_information WHERE id='1'");
   return $result;
    }

public function select_all_academic_programf(){
     $result = mysqli_query($this->conn,"SELECT *FROM  academic_programs");
 
      return $result; ///location er address ta patay... resorce location return kore
}

public function select_all_tution_fee(){
     $result = mysqli_query($this->conn,"SELECT *FROM  tution_fee");
 
      return $result; ///location er address ta patay... resorce location return kore
}
public function select_holiday(){
     $result = mysqli_query($this->conn,"SELECT *FROM  holiday");
 
      return $result; ///location er address ta patay... resorce location return kore
}
public function select_admission_circular(){
     $result = mysqli_query($this->conn,"SELECT *FROM  admission_circular");
 
      return $result; ///location er address ta patay... resorce location return kore
}
public function select_carrier(){
     $result = mysqli_query($this->conn,"SELECT *FROM  carrier");
 
      return $result; ///location er address ta patay... resorce location return kore
}
public function select_library_info(){
     $result = mysqli_query($this->conn,"SELECT *FROM  library_info");
 
      return $result; ///location er address ta patay... resorce location return kore
}
public function select_psc(){
     $result = mysqli_query($this->conn,"SELECT *FROM  psc");
 
      return $result; ///location er address ta patay... resorce location return kore
}
public function select_jsc(){
     $result = mysqli_query($this->conn,"SELECT *FROM  jsc");
 
      return $result; ///location er address ta patay... resorce location return kore
}
public function select_ssc(){
     $result = mysqli_query($this->conn,"SELECT *FROM  jsc");
 
      return $result; ///location er address ta patay... resorce location return kore
}
public function select_all_question_pdf($id){
     $result = mysqli_query($this->conn,"SELECT *FROM  question WHERE class=$id");
 
      return $result; ///location er address ta patay... resorce location return kore
}
public function select_all_exam_pdf($id){
     $result = mysqli_query($this->conn,"SELECT *FROM  exam_routine WHERE class=$id");
 
      return $result; ///location er address ta patay... resorce location return kore
}

public function get_all_image(){
     $result = mysqli_query($this->conn,"SELECT *FROM  images");
 
      return $result; ///location er address ta patay... resorce location return kore
}

public function get_all_slider_image(){
     $result = mysqli_query($this->conn,"SELECT *FROM  slider_image");
 
      return $result; ///location er address ta patay... resorce location return kore
}


public function select_all_hot_news_info(){
      $sql="SELECT *FROM  hot_news";
      $result= mysql_query($sql);  
      return $result; ///location er address ta patay... resorce location return kore
}
     public function select_all_notice_board_info(){
      $sql="SELECT *FROM  notice_board";
      $result= mysql_query($sql);  
      return $result; ///location er address ta patay... resorce location return kore
}
  
  public function select_all_chairman_info(){
      $sql="SELECT *FROM  chairman_principal_info WHERE id=0";
      $result= mysql_query($sql);  
      return $result; ///location er address ta patay... resorce location return kore
}

  public function select_all_principal_info(){
      $sql="SELECT *FROM  chairman_principal_info WHERE id=1";
      $result= mysql_query($sql);  
      return $result; ///location er address ta patay... resorce location return kore
}

  public function select_all_teachers_info(){
      $sql="SELECT *FROM  staff_table WHERE status='teacher'";
      $result= mysql_query($sql);  
      return $result; ///location er address ta patay... resorce location return kore
}
  public function select_all_assistance_info(){
      $sql="SELECT *FROM  staff_table WHERE status='assistance'";
      $result= mysql_query($sql);  
      return $result; ///location er address ta patay... resorce location return kore
}

 public function select_all_student_info(){
      $sql="SELECT * FROM  2013-14 WHERE id=1";
      $result= mysql_query($sql);  
      return $result; ///location er address ta patay... resorce location return kore
}
public function select_all_notice_info(){
      $sql="SELECT * FROM  new";
      $result= mysql_query($sql);  
      return $result; ///location er address ta patay... resorce location return kore
}


}
