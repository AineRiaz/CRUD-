<?php    

include("connection.php");
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>UPDATE form</title>
    <link rel="stylesheet" href="reg.css">
    <style>
      .btn:hover{
  box-shadow:0 0 5px yellow,
  0 0 25px yellow,0 0 30px yellow,
  0 0 100px yellow,0 0 200px yellow;
}
.btn{
  color:white;
}
.body{
  background-image: url(nature.jpg);
}
.container{
  box-shadow:20px 25px 20px black;

}
    </style>
</head>
<body class="body">
  
    <div class="container">
        <div class="title">
             Update Detail
        </div>
        <form id="registrationForm" class="form" action="" method="POST" enctype="multipart/form-data">
        <?php   

include("connection.php");
$id=$_GET['id'];
$showquery= "SELECT * FROM STUDENT where id=$id";
$showdata= mysqli_query($conn,$showquery);
$total=mysqli_num_rows($showdata);
$result = mysqli_fetch_array($showdata);
$subject = $result['Subject'];
$sub1=explode(",",$subject);

if(isset($_POST['update']))
{
  $update=$_GET['id'];
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
  if (!empty($_FILES["pic"]["name"])) {
    // New image has been uploaded
    $pic = $_FILES["pic"]["name"];
    $pictemp = $_FILES["pic"]["tmp_name"];
    $folder = "images/" . $pic;
    
    // Move the uploaded image to the folder
    move_uploaded_file($pictemp, "images/" . $pic);
} else {
    // No new image uploaded, keep the existing image
    $folder = $result['Attach picture'];
}

  $time=$_POST['time'];
  $query = "UPDATE student 
  SET Name='$name', `father name`='$fname', Email='$email', Password='$pass', `Contact#`='$cont', `CNIC#`='$cnic', Gender='$gender', `Date of birth`='$date', Address='$address', Subject='$new', Religion='$select', Marks='$mark', `Attach picture`='$folder', `Submission time`='$time' 
  WHERE id=$update";

  
 

  $query_run = mysqli_query($conn,$query);
if($query_run){
  
  
    echo "data update properly";
  

 }else{
  
  
    echo "data not update";
  
  
 } 
}
?>











          <div class="input-field">
            <label for="">Name:</label>
            <input type="text" id="name" value="<?php echo $result['Name'];?>" class="input" name="name"  required>
          </div>
          <div class="input-field">
            <label for="">Father Name:</label>
            <input type="text"  value="<?php echo $result['father name'];?>" class="input" name="fname" required>
          </div>
          <div class="input-field">
            <label for="">Email:</label>
            <input type="email" id="email" class="input" value="<?php echo $result['Email'];?>" name="email" required>
          </div>
          <div class="input-field">
            <label for="">Password:</label>
            <input type="password" id="password" value="<?php echo $result['Password'];?>" class="input" name="password">
          </div> 
          <div class="input-field">
            <label for="">Contact #:</label>
            <input type="tel" value="<?php echo $result['Contact#'];?>" class="input" name="contact#" required>
          </div> 
          <div class="input-field">
            <label for="">CNIC #:</label>
            <input type="tel" class="input" value="<?php echo $result['CNIC#'];?>" name="cnic#" required>
          </div>
          <div class="input-field">
            <label for="">Gender:</label>
            <input type="radio" value="male"  class="input" name="gender"
           <?php
            if($result['Gender'] =="male"){
               echo "checked";
            }
            ?>
            >Male
            <input type="radio" value="female" class="input" name="gender"
            <?php
            if($result['Gender'] == "female"){
              echo "checked";
            }
            ?>
            >Female
          </div>
          <div class="input-field">
            <label for="">Date of birth:</label>
            <input type="date" value="<?php echo $result['Date of birth'];?>"  class="input" name="date" required>
          </div>
          <div class="input-field">
            <label for="">Address:</label>
            <textarea class="input" name="address"  cols="30" rows="4"><?php echo $result['Address'];?></textarea>
          </div>
          <div class="input-field">
            <label for="">Choose Elective sub(Sci):</label>
            <input type="checkbox" value="Math" name="subject[]" class="check"
            <?php
            if(in_array('Math', $sub1))
            {
                echo "checked";
            }
            ?>
            >Math&nbsp;
            <input type="checkbox" value="Chemistry" name="subject[]" class="check"
           <?php
            if(in_array('Chemistry', $sub1))
            {
                echo "checked";
            }
            ?>
        >Chemistry&nbsp;
        
        <input type="checkbox" value="Physic" name="subject[]" class="check"
           <?php 
        if(in_array('Physic', $sub1))
            {
                echo "checked";
            }
            ?>
            >Physic&nbsp;
            <input type="checkbox" value="Biology" name="subject[]" class="check"
            <?php
            if(in_array('Biology', $sub1))
            {
                echo "checked";
            }
            ?>
            >Biology&nbsp;
            
            <input type="checkbox" value="Statistic" name="subject[]" class="check"
            <?php
            if(in_array('Statistic', $sub1))
            {
                echo "checked";
            }
            ?>
            >Statistic&nbsp;
            <input type="checkbox" value="computer"  name="subject[]" class="check"
            <?php
            if(in_array('computer', $sub1))
            {
                echo "checked";
            }
            ?>
            >Computer
          </div>  
          <div class="input-field">
            <label for="">Religion:</label>
            <select name="select" class="input" >
                <option value="Muslim"
                <?php
                if($result['Religion'] == "Muslim"){
                  echo "selected";
                }
                 
                ?>
              >Muslim</option>
                <option value="Hindu"
                <?php
                if($result['Religion'] == "Hindu"){
                  echo "selected";
                }
                ?>
                >Hindu</option>
                <option value="Sikh"
                <?php
                if($result['Religion'] == "Sikh"){
                  echo "selected";
                }
                ?>
                >Sikh</option>
                <option value="Christian"
                <?php
                if($result['Religion'] == "Christian"){
                  echo "selected";
                }
                ?>
                >Christian</option>
                <option value="No religion"
                <?php
                if($result['Religion'] == "No religion"){
                  echo "selected";
                }
                ?>
                >NO Religion</option>
            </select>
            </div>
          <div class="input-field">
            <label for="">Marks(Previous class):</label>
            <input type="number" class="input" value="<?php echo $result['Marks'];?>" name="marks" required>
          </div>
          <div class="input-field">
            <label for="">Attach pic:</label>
           <td><input type="file" class="input" name="pic"><img src="<?php echo $result['Attach picture']; ?>" height="80px" width="80px" ></td>
           <input type="hidden" name="id" value="<?php echo $result['id']?>">
          </div>
          <div class="input-field">
            <label for="">Submission Time:</label>
            <input type="time"  value="<?php echo $result['Submission time'];?>" class="input" name="time">
          </div>
          <div class="input-field">
            
            <input type="submit" value="update" class="btn" name="update" >
          </div>

        </form>
    </div>
    
        
    </body>
    </html>