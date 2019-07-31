<?php
//session_start();
$servername="localhost";
$username="root";
$password="";
$dbname="registration_form";

//initialize values
$id=0;
$User_name="";
$Email_id="";
$Password="";
$First_name="";
$Last_name="";
$Ph_number="";
$DOB="";
$Gender="";
$Address="";
$Country="";
$Status="";
$Skill="";
$Describe_your_self="";
$Hobby="";
$Tell_about_urself="";
$Think_as_programmer="";


$db=mysqli_connect($servername,$username,$password,$dbname);

//check connection
  if($db->connect_error) 
  {
    die("connection failed:" .$db);
  }
  /*else 
  {
    echo "connected sucessfully";
   }*/




  //if save button is clicked
  if(isset($_POST['save'])){
  	$User_name = $_POST['User_name'];
  	$Email_id = $_POST['Email_id'];
    $Password = $_POST['Password'];
    $First_name = $_POST['First_name'];
    $Last_name = $_POST['Last_name'];
    $Ph_number = $_POST['Ph_number'];
    $DOB = $_POST['DOB'];
    $Gender = $_POST['Gender'];
    $Address = $_POST['Address'];
    $Country = $_POST['Country'];
    $Status = $_POST['Status'];
    $Skill = $_POST['Skill'];
    $Describe_your_self = $_POST['Describe_your_self'];
    $Hobby = $_POST['Hobby'];
    $Tell_about_urself = $_POST['Tell_about_urself'];
    $Think_as_programmer = $_POST['Think_as_programmer'];


  	$query = "INSERT INTO reg_table(User_name,Email_id,Password,First_name,Last_name,Ph_number,DOB,Gender,Address,Country,Status,Skill,Describe_your_self,Hobby,Tell_about_urself,Think_as_programmer)VALUES('$User_name','$Email_id','$Password','$First_name','$Last_name','$Ph_number','$DOB','$Gender','$Address','$Country','$Status','$Skill','$Describe_your_self','$Hobby','$Tell_about_urself','$Think_as_programmer')";
  	mysqli_query($db, $query);
    $_SESSION['msg']="Details Saved";
  	header('location:index.php');//redirect to index page after insertion
  }

?>