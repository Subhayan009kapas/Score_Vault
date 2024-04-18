<!-- done  -->

<!--excel data injector page -->
<?php
session_start();
$con = mysqli_connect("localhost","root","","uem_student");   //change 
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\xlsx;
if (isset($_POST['save_excel_data'])){
     $fileName= $_FILES['import_file']['name'];
     $file_ext=pathinfo($fileName,PATHINFO_EXTENSION);
     $allowed_ext=['xls','csv','xlsx'];
     if (in_array($file_ext,$allowed_ext)){
        $inputFileNamePath=$_FILES['import_file']['tmp_name'];
        $spreadsheet=\PhpOffice\PhpSpreadsheet\IOFactory::load($inputFileNamePath);
        $data=$spreadsheet->getActiveSheet()->toArray();
        $count="0";
        foreach($data as $row ){
          if ($count>0){
            $Image= $row['0'];
            $Name=$row['1'];
             $Enrollment=$row['2'];
             $Password=$row['3'];
         $sem1= $row['4'];
            $sem1_result=$row['5'];
            $nptel1=$row['6'];
            $nptel1_res = $row['7'];
         $sem2= $row['8'];
            $sem2_result=$row['9'];
            $nptel2=$row['10'];
            $nptel2_res = $row['11'];
         $sem3= $row['12'];
            $sem3_result=$row['13'];
            $nptel3=$row['14'];
            $nptel3_res = $row['15'];
         $sem4= $row['16'];
            $sem4_result=$row['17'];
            $nptel4=$row['18'];
            $nptel4_res = $row['19'];
         $sem5= $row['20'];
            $sem5_result=$row['21'];
            $nptel5=$row['22'];
            $nptel5_res = $row['23'];
         $sem6= $row['24'];
            $sem6_result=$row['25'];
            $nptel6=$row['26'];
            $nptel6_res = $row['27'];
         $sem7= $row['28'];
            $sem7_result=$row['29'];
            $nptel7=$row['30'];
            $nptel7_res = $row['31'];
         $sem8= $row['32'];
            $sem8_result=$row['33'];
            $nptel8=$row['34'];
            $nptel8_res = $row['35'];


             $studentQuery="INSERT INTO student_data (Image, Name, Enrollment, Password, sem1, sem1_result, nptel1, nptel1_res, sem2, sem2_result, nptel2, nptel2_res, sem3, sem3_result, nptel3, nptel3_res, sem4, sem4_result, nptel4, nptel4_res, sem5, sem5_result, nptel5, nptel5_res, sem6, sem6_result, nptel6, nptel6_res, sem7, sem7_result, nptel7, nptel7_res, sem8, sem8_result, nptel8, nptel8_res) VALUES('$Image','$Name','$Enrollment','$Password','$sem1','$sem1_result','$nptel1','$nptel1_res','$sem2','$sem2_result','$nptel2','$nptel2_res','$sem3','$sem3_result','$nptel3','$nptel3_res','$sem4','$sem4_result','$nptel4','$nptel4_res','$sem5','$sem5_result','$nptel5','$nptel5_res','$sem6','$sem6_result','$nptel6','$nptel6_res','$sem7','$sem7_result','$nptel7','$nptel7_res','$sem8','$sem8_result','$nptel8','$nptel8_res')";
             $result =mysqli_query($con,$studentQuery);
             $msg=true;
          
            }else{
               $count="1";
             }
        }
        if(isset($msg)){
         $_SESSION['message']="Successfully Imported";
        header('Location: Uem_student_info.php');   //change name 
        exit(0);
        }else{
         $_SESSION['message']="Not Imported";
        header('Location: Uem_student_info.php');   //change name 
        exit(0);
        }
     }else {
        $_SESSION['message']="Invalid File";
        header('Location: Uem_student_info.php');   //change name 
        exit(0);
     }  
     
}
?>