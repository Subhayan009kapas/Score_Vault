<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Add  New Data</title>
          <link rel="shortcut icon" href="scorevolt_logo.png">
          <style>
                    table,tr,td{
                              border: 4px solid black;
                    }
                    .head{
                      font-size:20px;
                      font-weight:bold;
                    }

                    body{
  background-color: #f4f4f4; /* Initial background color */
    padding: 50px;
    text-align: center;
    animation: colorChange 2s infinite alternate; /* Apply animation */
    height:650px;
}
@keyframes colorChange {
    0% {
      background-color: white; /* Initial color */
    }
    50% {
      background-color:  #CADCFC; /* Intermediate color */
    }
    100% {
      background-color: ; /* Final color */
    }
  }


  .button-28 {
  

  appearance: none;
  background-color: #CADCFC;
  border: 2px solid #1A1A1A;
  border-radius: 15px;
  box-sizing: border-box;
  color: #3B3B3B;
  cursor: pointer;
  display: inline-block;
  font-family: Roobert,-apple-system,BlinkMacSystemFont,"Segoe UI",Helvetica,Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
  font-size: 20px;
  font-weight: 600;
  line-height: normal;
  margin: 0;
  min-height: 60px;
  min-width: 0;
  outline: none;
  padding: 16px 24px;
  text-align: center;
  text-decoration: none;
  transition: all 300ms cubic-bezier(.23, 1, 0.32, 1);
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  width: 20%;
  will-change: transform;
}

.button-28:disabled {
  pointer-events: none;
}

.button-28:hover {
  color: #fff;
  background-color: #00246B;
  box-shadow: rgba(0, 0, 0, 0.25) 0 8px 15px;
  transform: translateY(-2px);
}

.button-28:active {
  box-shadow: none;
  transform: translateY(0);
}
          </style>
</head>
<body>
<div   align="center"><img src="scorevolt_logo.png" height="120px"  ></div>
          <h1 align="center">Data addition Successfull !!--</h1>
          <h2  align="center">New data--- </h2>
          <table align="center">
                    <tr  class="head">
                              <td>image</td>
                              <td>Name</td>
                              <td>Enrollment</td>
                              <td>sem1</td>
                              <td>sem2</td>
                              <td>sem3</td>
                              <td>sem4</td>
                              <td>sem5</td>
                              <td>sem6</td>
                              <td>sem7</td>
                              <td>sem8</td> 
                              
                              

                    </tr>
                    <tr>
                 
          
                              <td><?php
                              $filename= $_FILES["image"]["name"];
                              $tempname= $_FILES["image"]["tmp_name"];
                              $folder ="profile/".$filename;
                              move_uploaded_file($tempname,$folder);
                              ?>
                              <?php echo "<img src ='".$folder."' height='100px' width='100px'>"?>
                              <br>
                              <?php  $name=$_POST["name"] ;  echo $name ?>
                              </td> 

                     
                              <td><?php  $name=$_POST["name"] ;  echo $name ?></td>

                              <td><?php   $Enrollment=$_POST["Enrollment"]  ;  $Password=$_POST["pass"]; echo "Enrollment:" ; echo $Enrollment."</br>";  echo "Pass:-" ; echo $Password  ?></td> 
                              <!-- sem1 -->
                              <td>
                              <?php
                              $filename1= $_FILES["result1"]["name"];
                              $tempname1= $_FILES["result1"]["tmp_name"];
                              $sem1_result="sem1/".$filename1;
                              move_uploaded_file($tempname1, $sem1_result);
                              ?>
                              <?php echo "<img src ='". $sem1_result."' height='100px' width='100px'>"?>
                              <br>
                                <?php  $sem1=$_POST["sem1"] ; echo $sem1  ?>
                              </td> 

                            

                               <!-- sem2 -->

                              <td>
                              <?php
                              $filename2= $_FILES["result2"]["name"];
                              $tempname2= $_FILES["result2"]["tmp_name"];
                              $sem2_result="sem2/".$filename2;
                              move_uploaded_file($tempname2, $sem2_result);
                              ?>
                              <?php echo "<img src ='". $sem2_result."' height='100px' width='100px'>"?>
                              <br>
                                <?php  $sem2=$_POST["sem2"] ; echo $sem2   ?>
                              </td> 

                               <!-- sem3 -->

                              <td>
                              <?php
                              $filename3= $_FILES["result3"]["name"];
                              $tempname3= $_FILES["result3"]["tmp_name"];
                              $sem3_result="sem3/".$filename3;
                              move_uploaded_file($tempname3, $sem3_result);
                              ?>
                              <?php echo "<img src ='". $sem3_result."' height='100px' width='100px'>"?>
                              <br>
                                <?php  $sem3=$_POST["sem3"] ; echo $sem3  ?>
                              </td> 

                               <!-- sem4 -->

                              <td>
                              <?php
                              $filename4= $_FILES["result4"]["name"];
                              $tempname4= $_FILES["result4"]["tmp_name"];
                              $sem4_result="sem4/".$filename4;
                              move_uploaded_file($tempname4, $sem4_result);
                              ?>
                              <?php echo "<img src ='". $sem4_result."' height='100px' width='100px'>"?>
                              <br>
                                <?php  $sem4=$_POST["sem4"] ; echo $sem4  ?>
                              </td>
                              
                               <!-- sem5 -->

                              <td>
                                <?php
                              $filename5= $_FILES["result5"]["name"];
                              $tempname5= $_FILES["result5"]["tmp_name"];
                              $sem5_result="sem5/".$filename5;
                              move_uploaded_file($tempname5, $sem5_result);
                              ?>
                              <?php echo "<img src ='". $sem5_result."' height='100px' width='100px'>"?>
                              <br>

                                <?php  $sem5=$_POST["sem5"] ;echo $sem5  ?>
                              </td>
                              
                               <!-- sem6 -->

                              <td>
                              <?php
                              $filename6= $_FILES["result6"]["name"];
                              $tempname6= $_FILES["result6"]["tmp_name"];
                              $sem6_result="sem6/".$filename6;
                              move_uploaded_file($tempname6, $sem6_result);
                              ?>
                              <?php echo "<img src ='". $sem6_result."' height='100px' width='100px'>"?>
                              <br>
                                <?php  $sem6=$_POST["sem6"] ; echo $sem6  ?>
                              </td> 

                               <!-- sem7 -->

                              <td>
                              <?php
                              $filename7= $_FILES["result7"]["name"];
                              $tempname7= $_FILES["result7"]["tmp_name"];
                              $sem7_result="sem7/".$filename7;
                              move_uploaded_file($tempname7, $sem7_result);
                              ?>
                              <?php echo "<img src ='". $sem7_result."' height='100px' width='100px'>"?>
                              <br>
                                <?php  $sem7=$_POST["sem7"] ; echo $sem7  ?>
                              </td> 

                              <!-- sem8 -->

                              <td>
                              <?php
                              $filename8= $_FILES["result8"]["name"];
                              $tempname8= $_FILES["result8"]["tmp_name"];
                              $sem8_result="sem8/".$filename8;
                              move_uploaded_file($tempname8, $sem8_result);
                              ?>
                              <?php echo "<img src ='". $sem8_result."' height='100px' width='100px'>"?>
                              <br>
                                <?php  $sem8=$_POST["sem8"] ; echo $sem8  ?>
                              </td> 


                    </tr>
               <!-- new row -->
                    <tr>
                      <td>
                      <?php
                              $filename01= $_FILES["nptel1_res"]["name"];
                              $tempname01= $_FILES["nptel1_res"]["tmp_name"];
                              $nptel1_res="nptel1/".$filename01;
                              move_uploaded_file($tempname01, $nptel1_res);
                              ?>
                              <?php echo "<img src ='". $nptel1_res."' height='100px' width='100px'>"?>
                              <br>
                                <?php  $nptel1=$_POST["nptel1"] ; echo $nptel1 ?>

                      </td>

                      <td>
                      <?php
                              $filename02= $_FILES["nptel2_res"]["name"];
                              $tempname02= $_FILES["nptel2_res"]["tmp_name"];
                              $nptel2_res="nptel2/".$filename02;
                              move_uploaded_file($tempname02, $nptel2_res);
                              ?>
                              <?php echo "<img src ='". $nptel2_res."' height='100px' width='100px'>"?>
                              <br>
                                <?php  $nptel2=$_POST["nptel2"] ; echo $nptel2 ?>

                      </td>

                      <td>
                      <?php
                              $filename03= $_FILES["nptel3_res"]["name"];
                              $tempname03= $_FILES["nptel3_res"]["tmp_name"];
                              $nptel3_res="nptel3/".$filename03;
                              move_uploaded_file($tempname03, $nptel3_res);
                              ?>
                              <?php echo "<img src ='". $nptel3_res."' height='100px' width='100px'>"?>
                              <br>
                                <?php  $nptel3=$_POST["nptel3"] ; echo $nptel3?>

                      </td>

                      <td>
                      <?php
                              $filename04= $_FILES["nptel4_res"]["name"];
                              $tempname04= $_FILES["nptel4_res"]["tmp_name"];
                              $nptel4_res="nptel4/".$filename04;
                              move_uploaded_file($tempname04, $nptel4_res);
                              ?>
                              <?php echo "<img src ='". $nptel4_res."' height='100px' width='100px'>"?>
                              <br>
                                <?php  $nptel4=$_POST["nptel4"] ; echo $nptel4?>

                      </td>


                      <td>
                      <?php
                              $filename05= $_FILES["nptel5_res"]["name"];
                              $tempname05= $_FILES["nptel5_res"]["tmp_name"];
                              $nptel5_res="nptel5/".$filename05;
                              move_uploaded_file($tempname05, $nptel5_res);
                              ?>
                              <?php echo "<img src ='". $nptel5_res."' height='100px' width='100px'>"?>
                              <br>
                                <?php  $nptel5=$_POST["nptel5"] ; echo $nptel5?>

                      </td>

                      <td>
                      <?php
                              $filename06= $_FILES["nptel6_res"]["name"];
                              $tempname06= $_FILES["nptel6_res"]["tmp_name"];
                              $nptel6_res="nptel6/".$filename06;
                              move_uploaded_file($tempname06, $nptel6_res);
                              ?>
                              <?php echo "<img src ='". $nptel6_res."' height='100px' width='100px'>"?>
                              <br>
                                <?php  $nptel6=$_POST["nptel6"] ; echo $nptel6?>

                      </td>

                      <td>
                      <?php
                              $filename07= $_FILES["nptel7_res"]["name"];
                              $tempname07= $_FILES["nptel7_res"]["tmp_name"];
                              $nptel7_res="nptel7/".$filename07;
                              move_uploaded_file($tempname07, $nptel7_res);
                              ?>
                              <?php echo "<img src ='". $nptel7_res."' height='100px' width='100px'>"?>
                              <br>
                                <?php  $nptel7=$_POST["nptel7"] ; echo $nptel7?>

                      </td>

                      <td>
                      <?php
                              $filename08= $_FILES["nptel8_res"]["name"];
                              $tempname08= $_FILES["nptel8_res"]["tmp_name"];
                              $nptel8_res="nptel8/".$filename08;
                              move_uploaded_file($tempname08, $nptel8_res);
                              ?>
                              <?php echo "<img src ='". $nptel8_res."' height='100px' width='100px'>"?>
                              <br>
                                <?php  $nptel8=$_POST["nptel8"] ; echo $nptel8?>

                      </td>

                    </tr>
          </table>
          <br>
          <br>
        <div  align="center"  >  <a href="./fetch.php"  ><input type="button" value="Go to data base>>"  style="font-size:25px;"   class="button-28" ></a></div>

          <?php
                      $conn=new mysqli("localhost","root","","uem_student");
                      $result=$conn->query("INSERT INTO student_data  VALUES( ' ".$folder." ',  ' " .$name ."', ' ".$Enrollment." ', ' ".$Password." ' ,  ' ".$sem1." ' ,  ' ". $sem1_result." ' , ' ".$nptel1." ', ' ".$nptel1_res." ' ,' " .$sem2." ' ,  ' ". $sem2_result." ' , ' ".$nptel2." ', ' ".$nptel2_res." ' , ' " .$sem3." ' ,   ' ". $sem3_result." ' , ' ".$nptel3." ', ' ".$nptel3_res." ' , ' " .$sem4." ' ,  ' ". $sem4_result." '  ,  ' ".$nptel4." ', ' ".$nptel4_res." ' ,' " .$sem5." ' ,  ' ". $sem5_result." ' ,  ' ".$nptel5." ', ' ".$nptel6_res." ' ,' " .$sem6." ' ,  ' ". $sem6_result." '  ,  ' ".$nptel6." ', ' ".$nptel6_res." ' , ' " .$sem7." ' ,  ' ". $sem7_result." '  , ' ".$nptel7." ', ' ".$nptel7_res." ' , ' " .$sem8." '   ,   ' ". $sem8_result." ' , ' ".$nptel8." ', ' ".$nptel8_res." ' )");
                    
          ?>
</body>
</html>