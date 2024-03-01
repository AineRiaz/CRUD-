<?php   

include("connection.php");
?>

<?php

if(isset($_POST['submit']))
{
    //echo "hello world";
  $name=$_POST['name'];
  $fname=$_POST['fname'];
  $email=$_POST['email'];
  $pass=$_POST['password'];
  $cont=$_POST['contact#'];
  $cnic=$_POST['cnic#'];
  $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
  $subject=isset($_POST['subject'])? $_POST ['subject']: '';
  $new=implode(',',$subject);
  

  $date=$_POST['date'];
  $address=$_POST['address'];
  
  $select=$_POST['select'];
  $mark=$_POST['marks'];
  
 $pic=$_FILES["pic"]["name"];
 $pictemp=$_FILES["pic"]["tmp_name"];
 $folder="images/".$pic;
 move_uploaded_file($pictemp,"images/".$pic);
 //echo "<img src='$folder ' height='100px' width='100px' >";
 $time=$_POST['time'];
  $create_query = "INSERT INTO student (`id`, `Name`, `father name`,Email,`Password`,`Contact#`,`CNIC#`,`Gender`,`Date of birth`,`Address`,`Subject`,`Religion`,`Marks`,`Attach picture`,`Submission time`) VALUES (Null,'$name','$fname','$email','$pass','$cont','$cnic','$gender','$date','$address','$new','$select','$mark','$folder','$time')";
 $query_run = mysqli_query($conn, $create_query);
 //echo"$query_run";
if($query_run){
   //echo "RUN";
}
else{
   //echo "not display";
}



}
