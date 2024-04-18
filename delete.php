<?php    //done 3 start
require_once('new.php');
$enroll= $_GET['en'];
$query="SELECT * FROM student_data where Enrollment='$enroll'";
$result =mysqli_query($conn , $query);

$row=mysqli_fetch_assoc($result);
echo $row ['Name'];
echo $row ['Enrollment'];
$conn=new mysqli("localhost","root","","uem_student");
$result=$conn->query("DELETE FROM student_data WHERE Enrollment='".$row['Enrollment']."'");
if ($result){
          echo "<script>alert('Record Deletedd')</script>";
          ?>
          <META HTTP-EQUIV="Refresh" CONTENT="2.5; URL=http://localhost/UEM_Student/fetch.php">
          <?php
      }else {
          echo "<script>alert('Deletion Failed ')</script>";
      }
?>
<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Document</title>
          <style>
                    table,tr,td{
                              border: 2px solid black;
                    }
                    .head{
                              font-size:30px;
                              text-align:center;
                    }
          </style>
</head>
<body>
<h1   align="center">Record Deleted</h1>

<table align="center">
    <tr>
    <td> Name</td>
    <td> Enrollment</td>
</tr>
<tr>
  <td><?php echo $row['Name'];?></td>
  <td><?php echo $row['Enrollment'];?></td>
                </tr>
</table >
</body>
</html>