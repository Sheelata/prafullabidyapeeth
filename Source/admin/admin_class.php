<?php
  if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
class admin_class  {
   public $conn;
    public function __construct() {
       $host_name='localhost';
       $user_name='root';
       $password='';
       $this->conn=  mysqli_connect($host_name,$user_name,$password);
       $db_name='tanvir_sbdcs';
        if(!$this->conn){   }
       else {
                 mysqli_select_db($this->conn,$db_name)or die("Could not connect to database") ;
                 mysqli_query($this->conn,'SET CHARACTER SET utf8');
                 mysqli_query($this->conn,"SET SESSION collation_connection='utf8_unicode_ci' ");
        }
    }
    
    
    public function add_mission_vision($mission,$vision) {
   $query = mysqli_query($this->conn,"UPDATE  mission_vision SET mission='$mission', vision = '$vision' WHERE id='1'");
    }
    
    
    public function get_mission_vision() {
   $result = mysqli_query($this->conn,"SELECT *FROM mission_vision WHERE id='1'");
   return $result;
    }
	
	 public function add_teritorial_description($teritorial_description) { 
   $query = mysqli_query($this->conn,"UPDATE  teritorial_description SET teritorial_description='$teritorial_description' WHERE id='1'");
    }
    
    
    public function get_teritorial_description() {
   $result = mysqli_query($this->conn,"SELECT *FROM teritorial_description WHERE id='1'");
   return $result;
    }
	
	
	public function add_student_information($teritorial_description) { 
   $query = mysqli_query($this->conn,"UPDATE  student_information SET student_information='$student_information' WHERE id='1'");
    }
    
    
    public function get_student_information() {
   $result = mysqli_query($this->conn,"SELECT *FROM student_information WHERE id='1'");
   return $result;
    }
	
	
	
	   public function add_infrastructure($school_building,$shahid_minar,$knowledge_corner,$flag_stage) {
   $query = mysqli_query($this->conn,"UPDATE  infrastructure SET school_building='$school_building', shahid_minar = '$shahid_minar',knowledge_corner='$knowledge_corner', flag_stage = '$flag_stage' WHERE id='1'");
    }
    
    
    public function get_infrastructure() {
   $result = mysqli_query($this->conn,"SELECT *FROM infrastructure WHERE id='1'");
   return $result;
    }
	
	  public function add_foundation($foundation) {
   $query = mysqli_query($this->conn,"UPDATE  foundation SET foundation = '$foundation' WHERE id='1'");
    }
    
    
   public function get_foundation() {
   $result = mysqli_query($this->conn,"SELECT *FROM foundation WHERE id='1'");
   return $result;
    } 
	
	
	
	
	
	
	
	
     public function update_brief_description($history,$overview) {
   $query = mysqli_query($this->conn,"UPDATE  brief_description SET history='$history', overview = '$overview' WHERE id='1'");
    }
      public function get_brief_description() {
   $result = mysqli_query($this->conn,"SELECT *FROM brief_description WHERE id='1'");
   return $result;
    }
    
   
public function principal_info($principal_message_1stPart,$principal_message_2ndPart) {
   $query = mysqli_query($this->conn,"UPDATE  principal_info SET principal_message_1stPart='$principal_message_1stPart', principal_message_2ndPart = '$principal_message_2ndPart'  WHERE id='1'");
    } 
    
     public function get_principal_info() {
   $result = mysqli_query($this->conn,"SELECT *FROM principal_info WHERE id='1'");
   return $result;
    }
    
    
    public function add_principal_image($fileNameUrl) {
   $query = mysqli_query($this->conn,"UPDATE principal_info SET image_link='$fileNameUrl' where id='1'");
    }
    
public function get_principal_image(){
       $result = mysqli_query($this->conn,"SELECT *FROM principal_info");
   return $result;
}


public function get_chairman_info() {
   $result = mysqli_query($this->conn,"SELECT *FROM chairman_info WHERE id='1'");
   return $result;
    }

public function add_chairman_image($fileNameUrl) {
   $query = mysqli_query($this->conn,"UPDATE chairman_info SET image_link='$fileNameUrl' where id='1'");
    }
    
public function get_chairman_image(){
       $result = mysqli_query($this->conn,"SELECT *FROM chairman_info");
   return $result;
}
      
public function update_chairman_info($chairman_message_1stPart,$chairman_message_2ndPart) {
   $query = mysqli_query($this->conn,"UPDATE  chairman_info SET  	chairman_message_1stPart = '$chairman_message_1stPart', chairman_message_2ndPart  = '$chairman_message_2ndPart'  WHERE id='1'");
    } 





    

  public function select_all_notice(){
     $result = mysqli_query($this->conn,"SELECT *FROM  notice");
 
      return $result; ///location er address ta patay... resorce location return kore
}
       public function unpublish_notice($id){
          $query = mysqli_query($this->conn,"UPDATE notice SET publish_status = 0  WHERE id = $id");        
}
     public function publish_notice($id){
           $query = mysqli_query($this->conn,"UPDATE notice SET publish_status = 1  WHERE id = $id");         
}

public function add_pdf($fileNameUrl,$notice_title,$date,$month) {
   $query = mysqli_query($this->conn,"insert into notice  (notice_link,notice_title,date,month) values('$fileNameUrl','$notice_title','$date','$month')");
    }
    
public function delete_pdf($id){
       $result = mysqli_query($this->conn,"Delete FROM notice where id=$id");
   return $result;
}

public function select_all_quick_notice(){
     $result = mysqli_query($this->conn,"SELECT *FROM  quick_notice");
 
      return $result; ///location er address ta patay... resorce location return kore
}

 public function update_quick_notice($notice_body){
          $query = mysqli_query($this->conn,"UPDATE quick_notice SET notice_body ='$notice_body'  WHERE id = '1'");        
}



public function select_all_event(){
     $result = mysqli_query($this->conn,"SELECT *FROM  events");
 
      return $result; ///location er address ta patay... resorce location return kore
}
       public function unpublish_event($id){
          $query = mysqli_query($this->conn,"UPDATE events SET publish_status = 0  WHERE id = $id");        
}
     public function publish_event($id){
           $query = mysqli_query($this->conn,"UPDATE events SET publish_status = 1  WHERE id = $id");         
}

public function add_event_image($fileNameUrl,$event_title,$event_body,$date,$month,$year) {
   $query = mysqli_query($this->conn,"insert into events  (event_image_link,event_title,event_body,date,month,year) values('$fileNameUrl','$event_title','$event_body','$date','$month','$year')");
    }
    
public function delete_event($id){
       $result = mysqli_query($this->conn,"Delete FROM events where id=$id");
   return $result;
}


public function select_all_governingbody(){
     $result = mysqli_query($this->conn,"SELECT *FROM  goveringbody");
 
      return $result; ///location er address ta patay... resorce location return kore
}

public function add_goveringbody($fileNameUrl,$name,$designation,$mobile,$email,$sequence) {
   $query = mysqli_query($this->conn,"insert into goveringbody  (image_link,name,designation,mobile,email,sequence) values('$fileNameUrl','$name','$designation','$mobile','$email','$sequence')");
    }
 public function delete_goveringbody($id){
       $result = mysqli_query($this->conn,"Delete FROM goveringbody where id=$id");
   return $result;
}


public function select_all_trustyboard(){
     $result = mysqli_query($this->conn,"SELECT *FROM  trusty_board");
 
      return $result; ///location er address ta patay... resorce location return kore
}

public function add_trustyboard($fileNameUrl,$name,$designation,$mobile,$email,$sequence) {
   $query = mysqli_query($this->conn,"insert into trusty_board  (image_link,name,designation,mobile,email,sequence) values('$fileNameUrl','$name','$designation','$mobile','$email','$sequence')");
    }
 public function delete_trustyboard($id){
       $result = mysqli_query($this->conn,"Delete FROM trusty_board where id=$id");
   return $result;
}



public function select_all_video(){
     $result = mysqli_query($this->conn,"SELECT *FROM  video");
 
      return $result; ///location er address ta patay... resorce location return kore
}

public function add_video($video_title,$video_link,$video_description) {
   $query = mysqli_query($this->conn,"insert into video  (video_title,video_link,video_description) values('$video_title','$video_link','$video_description')");
    }
 public function delete_video($id){
       $result = mysqli_query($this->conn,"Delete FROM video where id=$id");
   return $result;
}



public function select_all_student_pdf(){
     $result = mysqli_query($this->conn,"SELECT *FROM  student_info");
 
      return $result; ///location er address ta patay... resorce location return kore
}

public function add_student_pdf($fileNameUrl,$pdf_title,$class) {
   $query = mysqli_query($this->conn,"insert into student_info  (pdf_link,pdf_title,class) values('$fileNameUrl','$pdf_title','$class')");
    }
 public function delete_student_pdf($id){
       $result = mysqli_query($this->conn,"Delete FROM student_info where id=$id");
   return $result;
}
    
public function select_all_officer_staff(){
     $result = mysqli_query($this->conn,"SELECT *FROM  officer_staff_info");
 
      return $result; ///location er address ta patay... resorce location return kore
}

public function add_officer_staff($fileNameUrl,$name,$designation,$mobile,$email,$sequence) {
   $query = mysqli_query($this->conn,"insert into officer_staff_info  (image_link,name,designation,mobile,email,sequence) values('$fileNameUrl','$name','$designation','$mobile','$email','$sequence')");
    }
 public function delete_officer_staff($id){
       $result = mysqli_query($this->conn,"Delete FROM goveringbody where id=$id");
   return $result;
}

public function update_academic_programs($fileNameUrl) {
   $query = mysqli_query($this->conn,"UPDATE academic_programs SET pdf_link='$fileNameUrl' where id='1'");
    }

public function select_all_academic_programf(){
     $result = mysqli_query($this->conn,"SELECT *FROM  academic_programs");
 
      return $result; ///location er address ta patay... resorce location return kore
}

public function update_tution_fee($fileNameUrl) {
   $query = mysqli_query($this->conn,"UPDATE tution_fee SET pdf_link='$fileNameUrl' where id='1'");
    }

public function select_all_tution_fee(){
     $result = mysqli_query($this->conn,"SELECT *FROM  tution_fee");
 
      return $result; ///location er address ta patay... resorce location return kore
}
public function update_holiday($fileNameUrl) {
   $query = mysqli_query($this->conn,"UPDATE holiday SET pdf_link='$fileNameUrl' where id='1'");
    }

public function select_holiday(){
     $result = mysqli_query($this->conn,"SELECT *FROM  holiday");
 
      return $result; ///location er address ta patay... resorce location return kore
}

public function update_admission_circular($fileNameUrl) {
   $query = mysqli_query($this->conn,"UPDATE admission_circular SET pdf_link='$fileNameUrl' where id='1'");
    }

public function select_admission_circular(){
     $result = mysqli_query($this->conn,"SELECT *FROM  admission_circular");
 
      return $result; ///location er address ta patay... resorce location return kore
}

public function update_carrier($fileNameUrl) {
   $query = mysqli_query($this->conn,"UPDATE carrier SET pdf_link='$fileNameUrl' where id='1'");
    }

public function select_carrier(){
     $result = mysqli_query($this->conn,"SELECT *FROM  carrier");
 
      return $result; ///location er address ta patay... resorce location return kore
}

public function update_library_info($fileNameUrl) {
   $query = mysqli_query($this->conn,"UPDATE library_info SET pdf_link='$fileNameUrl' where id='1'");
    }

public function select_library_info(){
     $result = mysqli_query($this->conn,"SELECT *FROM  library_info");
 
      return $result; ///location er address ta patay... resorce location return kore
}
public function update_psc($fileNameUrl) {
   $query = mysqli_query($this->conn,"UPDATE psc SET pdf_link='$fileNameUrl' where id='1'");
    }

public function select_psc(){
     $result = mysqli_query($this->conn,"SELECT *FROM  psc");
 
      return $result; ///location er address ta patay... resorce location return kore
}
public function update_jsc($fileNameUrl) {
   $query = mysqli_query($this->conn,"UPDATE jsc SET pdf_link='$fileNameUrl' where id='1'");
    }

public function select_jsc(){
     $result = mysqli_query($this->conn,"SELECT *FROM  jsc");
 
      return $result; ///location er address ta patay... resorce location return kore
}
public function update_ssc($fileNameUrl) {
   $query = mysqli_query($this->conn,"UPDATE ssc SET pdf_link='$fileNameUrl' where id='1'");
    }

public function select_ssc(){
     $result = mysqli_query($this->conn,"SELECT *FROM  ssc");
 
      return $result; ///location er address ta patay... resorce location return kore
}


public function select_all_question_pdf(){
     $result = mysqli_query($this->conn,"SELECT *FROM  question");
 
      return $result; ///location er address ta patay... resorce location return kore
}

public function add_question_pdf($fileNameUrl,$pdf_title,$class) {
   $query = mysqli_query($this->conn,"insert into question  (pdf_link,pdf_title,class) values('$fileNameUrl','$pdf_title','$class')");
    }
 public function delete_question_pdf($id){
       $result = mysqli_query($this->conn,"Delete FROM question where id=$id");
   return $result;
}


public function select_all_exam_pdf(){
     $result = mysqli_query($this->conn,"SELECT *FROM  exam_routine");
 
      return $result; ///location er address ta patay... resorce location return kore
}

public function add_exam_pdf($fileNameUrl,$pdf_title,$class) {
   $query = mysqli_query($this->conn,"insert into exam_routine  (pdf_link,pdf_title,class) values('$fileNameUrl','$pdf_title','$class')");
    }
 public function delete_exam_pdf($id){
       $result = mysqli_query($this->conn,"Delete FROM exam_routine where id=$id");
   return $result;
}


public function delete_image($id){
       $result = mysqli_query($this->conn,"Delete FROM images where id='$id'");
   return $result;
}

public function add_image($fileNameUrl,$category) {
   $query = mysqli_query($this->conn,"insert into images  (image_link,category) values('$fileNameUrl','$category')");
    return $query;
    }

public function get_all_image(){
     $result = mysqli_query($this->conn,"SELECT *FROM  images");
 
      return $result; ///location er address ta patay... resorce location return kore
}

public function delete_slider_image($id){
       $result = mysqli_query($this->conn,"Delete FROM slider_image where id='$id'");
   return $result;
}

public function add_slider_image($fileNameUrl,$category) {
   $query = mysqli_query($this->conn,"insert into slider_image  (image_link,category) values('$fileNameUrl','$category')");
    return $query;
    }

public function get_all_slider_image(){
     $result = mysqli_query($this->conn,"SELECT *FROM  slider_image");
 
      return $result; ///location er address ta patay... resorce location return kore
}









    
    public function check_admin_login($username,$password) {
        $sql="SELECT password FROM  admin_login WHERE username = '$username' ";
        $result= mysqli_query($this->conn,$sql);  
        $row=  mysqli_fetch_assoc($result);
        
        if($row['password']==$password){
           $_SESSION['adnin_name']=$username;
         }
    }
        public function select_all_news_info( ){
      $sql="SELECT *FROM hot_news";
      $result= mysql_query($sql);  
      return $result; ///location er address ta patay... resorce location return kore
}
         public function publish_news_info($id){
           $sql = "UPDATE news SET  	publication_status = 1  WHERE id = $id";
           $result= mysql_query($sql);  
           return $result; ///location er address ta patay... resorce location return kore
} 
public function unpublish_news_info($id){
           $sql = "UPDATE news SET  	publication_status = 0  WHERE id = $id";
           $result= mysql_query($sql);  
           return $result; ///location er address ta patay... resorce location return kore
}






  




     public function select_edit_news($id){
            $sql="SELECT *FROM news WHERE id=$id";
         $result= mysql_query($sql);  
            return $result; ///location er address ta patay... resorce location return kore
}
    public function update_edit_news($news_title,$publication_status,$id){
            $sql="UPDATE news SET  news= '$news_title' , publication_status = '$publication_status'  WHERE id=$id";
         $result= mysql_query($sql);  
            return $result; ///location er address ta patay... resorce location return kore
}

   public function update_edit_university_logo($university_name,$location,$description,$logo,$id){
            $sql="UPDATE uni_info SET  u_name= '$university_name' ,location='$location' ,script='$description' ,logo='$logo' WHERE id=$id";
         $result= mysql_query($sql);  
            return $result; ///location er address ta patay... resorce location return kore
}
 public function update_edit_university($university_name,$location,$description,$id){
            $sql="UPDATE uni_info SET  u_name= '$university_name' ,location='$location' ,script='$description' WHERE id=$id";
         $result= mysql_query($sql);  
            return $result; ///location er address ta patay... resorce location return kore
}

   public function delete_news( $id){
            $sql="DELETE FROM news WHERE id=$id";
         $result= mysql_query($sql);  
            return $result; ///location er address ta patay... resorce location return kore
}
  public function delete_university( $id){
            $sql="DELETE FROM uni_info WHERE id=$id";
         $result= mysql_query($sql);  
            return $result; ///location er address ta patay... resorce location return kore
}

  
}