<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Success</h1>
    <?php 
     echo"You Have entered data"."<br>";
     $name =$_POST['name'];
     $Password =$_POST['pass'];
     $enroll=$_POST['Enrollment'];
     $sem1 =$_POST['sem1'];
     $sem2 =$_POST['sem2'];
     $sem3 =$_POST['sem3'];
     $sem4 =$_POST['sem4'];
     $sem5 =$_POST['sem5'];
     $sem6 =$_POST['sem6'];
     $sem7 =$_POST['sem7'];
     $sem8 =$_POST['sem8'];
     echo $name ."<br>";
     echo $Password ."<br>";
     $conn=new mysqli("localhost","root","","uem_student");
     $result=$conn->query("UPDATE student_data SET Name='".$name ."',Enrollment='".$enroll ."',Password='".$Password."',sem1='".$sem1."',sem2='" .$sem2."',sem3='".$sem3."',sem4='" .$sem4."',sem5='" .$sem5."',sem6='" .$sem6."',sem7='" .$sem7."',sem8='" .$sem8."' WHERE Enrollment= '".$enroll."'");

      echo "successfully added";
    ?>
    <div  align="center"  >  <a href="./fetch.php"  ><input type="button" value="Go to data base>>"  style="font-size:25px;"  ></a></div>
</body>
</html>