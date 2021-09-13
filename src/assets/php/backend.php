<?php 

if(isset($_POST['Aname'])){

  require_once'con.php';
   class Sever{
    public $conn;
    
    function __construct($conn){
      $this->conn=$conn;
    }

    // addcontent
     function AddContent($title,$contentDescription,$status,$score,$contentType,$InstId,$DepId){
        
      $query="INSERT INTO contents(ContentID,ContentTitle,ContDescription,InstID,DepartmentID,Status,Score,ContType)VALUES(0,'$title','$contentDescription','$status','$score','$contentType','$InstId','$DepId')";
     }


    //  FetchContent
    function DisplayContent(){
      $query="SELECT*FROM contents";
      $queryResult=mysqli_query($this->conn,$query);
      $result=array();
      while($row=mysqli_fetch_array($queryResult)){
        $temp=array();
        $temp['title']=$row[1];
        $temp['discription']=$row[2];
        $temp['score']=$row[6];
        $temp['contentType']=$row[7];
        array_push($result,$temp);
      }
      echo json_encode($result);

    }

   }


   class Registration{
    public $conn;
    function __construct($conn){
      $this->conn=$conn;
    }

    function StudentRegister(){
      echo "Student";
    }


    function TeacherRegister(){
      echo "Teacher";
    }


    function InstructorRegister(){
      echo "Instructor";
    }

   }


   if($conn){
     $id='';
     $sever=new Sever($conn);
      $reg=new Registration($conn);
     if(isset($_POST['cat']))
     {
      $id=$_POST['cat'];
       if($id=='student')
       {
       
         $reg->StudentRegister();
       }else if($id=='teacher')
       {
         $reg->TeacherRegister();
       }else if($id=='instructor')
       {
         $reg->InstructorRegister();
       }else {
        
       }

     }else {
       
     }
      
     $sever->DisplayContent();
   }

  }else {
    echo 'not allowed';
  }
?>