<?php    

include("connection.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration form</title>
    <link rel="stylesheet" href="reg.css">
    <style>
.body{
  background-image:url(nature.jpg);
}
.container{
  box-shadow:20px 25px 20px black;

}
.btn{
  color:white;
}
</style>
</head>
<body class="body">
    <div class="container">
        <div class="title">
            Registration Form
        </div>
        <form id="registrationForm" class="form" action="display.php" method="POST" enctype="multipart/form-data">
      
 








          <div class="input-field">
          <label for="">Name:</label>
            <input type="text" id="name" class="input" name="name"  required>
          </div>
          <div class="input-field">
            <label for="">Father Name:</label>
            <input type="text"   id="name" class="input" name="fname" required>
          </div>
          <div class="input-field">
            <label for="">Email:</label>
            <input type="email"  id="email" class="input" name="email" required>
          </div>
          <div class="input-field">
            <label for="">Password:</label>
            <input type="password"  id="password" class="input" name="password">
          </div>


          <div class="input-field">
            <label for="">Contact #:</label>
            <input type="tel" class="input" name="contact#" required>
          </div> 
          <div class="input-field">
            <label for="">CNIC #:</label>
            <input type="tel" class="input" name="cnic#" required>
          </div>
          <div class="input-field">
            <label for="">Gender:</label>
            <input type="radio" value="male"  class="input" name="gender">Male
            <input type="radio" value="female" class="input" name="gender">Female
          </div>
          <div class="input-field">
            <label for="">Date of birth:</label>
            <input type="date" class="input" name="date" required>
          </div>
          <div class="input-field">
            <label for="">Address:</label>
            <textarea class="input" name="address"  cols="30" rows="4"></textarea>
          </div>
          <div class="input-field">
            <label for="">Choose Elective sub(Sci):</label>
            <input type="checkbox" value="Math" name="subject[]" class="check">Math&nbsp;
            <input type="checkbox" value="Chemistry" name="subject[]" class="check">Chemistry&nbsp;
            <input type="checkbox" value="Physic" name="subject[]" class="check">Physic&nbsp;
            <input type="checkbox" value="Biology" name="subject[]" class="check">Biology&nbsp;
            <input type="checkbox" value="Statistic" name="subject[]" class="check">Statistic&nbsp;
            <input type="checkbox" value="computer"  name="subject[]" class="check">Computer
          </div> 
          <div class="input-field">
            <label for="">Religion:</label>
            <select name="select" class="input" >
                <option value="Muslim">Muslim</option>
                <option value="Hindu">Hindu</option>
                <option value="Sikh">Sikh</option>
                <option value="Christian">Christian</option>
                <option value="No religion">NO Religion</option>
            </select>
          </div>
          <div class="input-field">
            <label for="">Marks(Previous class):</label>
            <input type="number" class="input" name="marks" required>
          </div>
          <div class="input-field">
            <label for="">Attach pic:</label>
            <input type="file" class="input" name="pic">
          </div>
          <div class="input-field">
            <label for="">Submission Time:</label>
            <input type="time" class="input" name="time">
          </div>
          <div class="input-field">
            
            <input type="submit" value="submit" class="btn" name="submit" >
          </div>

        </form>
    </div>
    
</body>
</html>








