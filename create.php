


















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database table</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        table{
            border: solid 3px purple;
        }
        th{
            color:white;
            background-color: crimson;
        }
        td{
            color:black;
        }
        .update{
            color:white;
            background-color:green ;
        }
        .delete{
            color:white;
            background-color: red;
            
        }
       
        
    </style>
</head>
<body>
    <center><h1><u>Display all Record</u></h1></center>
    <div class="table">
<table border="3px">
    <thead>
        <tr>
            <th>ID</th>
            <th>NAME</th>
             <th>FATHER NAME</th>
            <th>EMAIL</th>
             <th>PASSWORD</th>
            <th>CONTACT#</th>
             <th>CNIC</th>
             <th>GENDER</th>
             <th>DATE OF BIRTH</th>
             <th>ADDRESS</th>
            <th>SUBJECT</th>
            <th>RELIGION</th>
            <th>MARKS</th>
            <th>ATTACH PICTURE</th>
            <th>SUBMISSION TIME</th>
            
            <th>UPDATE</th>
            <th>DELETE</th>
        </tr>
    </thead>
    <tbody>
    <?php
include("connection.php");

$query= "SELECT * FROM STUDENT";
$query_run = mysqli_query($conn,$query);
$total=mysqli_num_rows($query_run);
//echo $total;

while($res = mysqli_fetch_array($query_run)){
   ?>
  
   <tr>
    <td><?php echo $res['id'];?></td>
    <td><?php echo $res['Name'];?></td>
    <td><?php echo $res['father name'];?></td>
    <td><?php echo $res['Email'];?></td>
    <td><?php echo$res['Password'];?></td>
     <td><?php echo $res['Contact#'];?></td>
    <td><?php echo  $res['CNIC#'];?></td>
     <td><?php echo $res['Gender'];?></td>
   <td><?php echo $res['Date of birth'];?></td>
   <td><?php echo  $res['Address'];?></td>
    <td><?php echo $res['Subject'];?></td>
    <td><?php echo $res['Religion'];?></td>
    <td><?php echo $res['Marks'];?></td>
   <td><img src="<?php echo $res['Attach picture'];?>" height="70px" width="70px"></td>
    <td><?php echo $res['Submission time'];?></td>
    <td><a class="update" href="update.php?id=<?php echo $res['id'];?>" data-toggle="tooltip" data-placement="bottom" title="Update">UPDATE</a></td>
    <td><a class="delete" href="delete.php?id=<?php echo $res['id'];?>" data-toggle="tooltip" data-placement="bottom" title="Delete">DELETE</a></td>
   </tr>
 
 <?php
}

?>







    </tbody>
</table>
    </div>
</body>
</html>

