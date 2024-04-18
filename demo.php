<?php    //done 3 start
require_once('new.php');
$enroll= $_GET['en'];
$query="SELECT * FROM student_data where Enrollment='$enroll'";
$result =mysqli_query($conn , $query);

$row=mysqli_fetch_assoc($result);
?>


<?php
 
 $dataPoints = array(
   array("x"=> 1, "y"=> $row['sem1'],"indexLabel"=> "Semester 1"),
   array("x"=> 2, "y"=> $row['sem2'], "indexLabel"=> "Semester 2"),
   array("x"=> 3, "y"=> $row['sem3'],"indexLabel"=> "Semester 3"),
   array("x"=> 4, "y"=> $row['sem4'],"indexLabel"=> "Semester 4"),
   array("x"=> 5, "y"=> $row['sem6'],"indexLabel"=> "Semester 5"),
   array("x"=> 6, "y"=> $row['sem5'],"indexLabel"=> "Semester 6"),
   array("x"=> 7, "y"=> $row['sem6'] ,"indexLabel"=> "Semester 7"),
   array("x"=> 8, "y"=> $row['sem7'],"indexLabel"=> "Semester 8"),
   
 );
 
?>
 <!--  done 3 end -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FoodieRoutes.com</title>

    <link rel="shortcut icon" href="https://i.ibb.co/vVvwwNp/Picsart-23-11-19-00-47-40-912.png">

    <link
      rel="stylesheet"
      href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    />
    <link rel="stylesheet" href="style.css" />
    <style>
      .img{
        height:200px;
        width:200px;
        
      }

      /* animation */
     
    </style>

    <script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	exportEnabled: true,
	theme: "light1", // "light1", "light2", "dark1", "dark2"
	title:{
		text: "Semester-wise Distribution of SGPA for <?php   echo $row['Name'] ?>"
	},
	axisY:{
		includeZero: true
	},
	data: [{
		type: "column", //change type to bar, line, area, pie, etc
		//indexLabel: "{y}", //Shows y value on all Data Points
		indexLabelFontColor: "#5A5757",
		indexLabelPlacement: "outside",   
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>




</head>
    <body>

<div align="center" >
<div   class="img">
    <?php 
          echo "<table >
          <tr>
                        <td>"."<img src ='".$row["Image"]."' height='200px' width='200px'>"."</td>
                    </tr>
                        </table>"; 
           ?>
</div>
<div>
  <br><br>
<div  align="center">
<h1>Name:<?php echo $row['Name'];?></h1>
           <br>
     <h1  style="font-size=50px">      Enrollment No:<?php echo $row['Enrollment'];?></h1>
        
          <br>
       <h1  style="font-size=50px">   Password:<?php echo $row['Password'];?></h1>
       <br>
       <br>
       
         
</div>



       <!-- blog start -->
    <!-- blogs section starts  -->
    <b style="background-color: rgb(215, 236, 236)">
          <section class="blogs" id="blogs">
            <h1 class="heading" align="center" style="font-size: 50px">
              <span  style="margin-bottom:30px">Student Performence</span>
              <br>
              <div  style="margin-top:30px"><button onclick="printpage()"  class="btn">Print Page</button></div>
            </h1>
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <div class="box-container">
    
              <div class="box">
                <div class="image">
                    <?php 
                    echo "<table><tr>
                                  <td>"."<img src ='".$row["sem1_result"]."' >"."</td>
                              </tr>
                                  </table>";
                     ?>
                     </div>
                <div class="content">
                  <div class="icon">
                    <a href="#">
                      <i class="fas fa-calendar"></i> 1s Feb, 2023
                    </a>
                    <a  style="font-size: 20px">
                      <i class="fa-solid fa-store"></i> by UEMJ
                    </a>
                  </div>
                  <h3> 1st sem: 
                    <?php echo  $row['sem1']?></h3>
                  
                 
                </div>
              </div>
    
    
              <div class="box">
                <div class="image">
                <?php 
          echo "<table><tr>
                        <td>"."<img src ='".$row["sem2_result"]."' height='200px' width='200px'>"."</td>
                    </tr>
                        </table>";
           ?>
                </div>
                <div class="content">
                  <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 1st June, 2023</a>
                    <a href="https://localhost/2nd_year_project/Shyam_Hotel.php" style="font-size: 20px">
                      <i class="fa-solid fa-store"></i> By UEMJ</a
                    >
                  </div>
                  <h3> 2nd sem: <?php echo  $row['sem2']?></h3>
                  
                
                </div>
              </div>
    
    
              <div class="box">
                <div class="image">
                <?php 
          echo "<table><tr>
                        <td>"."<img src ='".$row["sem3_result"]."' height='200px' width='200px'>"."</td>
                    </tr>
                        </table>";
           ?>
                </div>
                <div class="content">
                  <div class="icon">
                    <a href="#">
                      <i class="fas fa-calendar"></i> 1st Feb, 2024
                    </a>
                    <a href="https://localhost/2nd_year_project/Pandya_fast-Food.php" style="font-size: 20px">
                      <i class="fa-solid fa-store"></i> by UEMJ
                    </a>
                  </div>
                  <h3> 3rd sem:<?php echo  $row['sem3']?></h3>
                 
                  
                </div>
              </div>
    
              <div class="box">
                <div class="image">
                <?php 
          echo "<table><tr>
                        <td>"."<img src ='".$row["sem4_result"]."' height='200px' width='200px'>"."</td>
                    </tr>
                        </table>";
           ?>
                </div>
                <div class="content">
                  <div class="icon">
                    <a href="#">
                      <i class="fas fa-calendar"></i>2nd June , 2023</a
                    >
                    <a href="https://localhost/2nd_year_project/Mama_bhanja.php" style="font-size: 20px">
                      <i class="fa-solid fa-store"></i> by UEMJ</a
                    >
                  </div>
                  <h3>4th sem:<?php echo  $row['sem4']?></h3>
                  
                 
                </div>
              </div>
    
              <div class="box">
                <div class="image">
                <?php 
          echo "<table><tr>
                        <td>"."<img src ='".$row["sem5_result"]."' height='200px' width='200px'>"."</td>
                    </tr>
                        </table>";
           ?>
                </div>
                <div class="content">
                  <div class="icon">
                    <a href="#">
                      <i class="fas fa-calendar"></i> 22nd January, 2025
                    </a>
                    <a href="https://localhost/2nd_year_project/italian.php" style="font-size: 20px">
                      <i class="fa-solid fa-store"></i> byUEMJ</a
                    >
                  </div>
                  <h3>5th sem:<?php echo  $row['sem5']?></h3>
                  
                  
                </div>
              </div>
    
    
              <div class="box">
                <div class="image">
                <?php 
          echo "<table><tr>
                        <td>"."<img src ='".$row["sem6_result"]."' height='200px' width='200px'>"."</td>
                    </tr>
                        </table>";
           ?>
                </div>
                <div class="content">
                  <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 1st may, 2022 </a>
                    <a href="https://localhost/2nd_year_project/Bengali_canteen.php" style="font-size: 20px"
                      ><i class="fa-solid fa-store"></i>By  UEMJ</a
                    >
                  </div>
                  <h3>6th sem:<?php echo  $row['sem6']?></h3>
                 
                  
                  </a>
                </div>
              </div>
    
    
              <div class="box">
                <div class="image">
                <?php 
          echo "<table><tr>
                        <td>"."<img src ='".$row["sem7_result"]."' height='200px' width='200px'>"."</td>
                    </tr>
                        </table>";
           ?>
                </div>
                <div class="content">
                  <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 31st may, 2020 </a>
                    <a href="https://localhost/2nd_year_project/Gareeb_nawaz.php" style="font-size: 20px"
                      ><i class="fa-solid fa-store"></i> by UEMJ</a
                    >
                  </div>
                  <h3>7th sem:<?php echo  $row['sem7']?></h3>
                  
                  
                </div>
              </div>
              
    
              <div class="box">
                <div class="image">
                <?php 
          echo "<table><tr>
                        <td>"."<img src ='".$row["sem8_result"]."' height='200px' width='200px'>"."</td>
                    </tr>
                        </table>";
           ?>
                </div>
                <div class="content">
                  <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"></i> 12th aug, 2022</a>
                    <a href="https://localhost/2nd_year_project/Kabila_fort.php" style="font-size: 20px"
                      ><i class="fa-solid fa-store"></i>byUEMJ</a
                    >
                  </div>
                  <h3>8th sem:<?php echo  $row['sem8']?></h3>
                  
               
                </div>
              </div>
            </div>
          </section>
        </b>
       

     
      <script>
         function printpage() {
            window.print();
         }
      </script>
   </head>
   <body>
      <h2>This is a sample page to print</h2>
      
        <!-- blogs section ends -->
        <div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>

<div>
        
        <div>



        <?php
require_once('new.php');



// CGPA Calculation----------------------------------------------------------------
// Fetch student data based on enrollment number
$enroll = isset($_GET['en']) ? $_GET['en'] : '';
if (empty($enroll)) {
    // Handle case when enrollment number is not provided
    exit('Enrollment number is required.');
}


$query = "SELECT * FROM student_data WHERE Enrollment = ?";
$stmt = mysqli_prepare($conn, $query);
mysqli_stmt_bind_param($stmt, 's', $enroll);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if (!$result) {
    // Handle database query error
    exit('Error fetching student data.');
}

$row = mysqli_fetch_assoc($result);

// Close statement
mysqli_stmt_close($stmt);

// Calculate CGPA
$totalSemesters = 0;
$totalSGPA = 0;

// Iterate over semesters and sum up SGPA
for ($i = 1; $i <= 8; $i++) { // Assuming 8 semesters
    $sgpa = $row['sem' . $i];
    if ($sgpa != 0) { // Exclude semesters with SGPA 0 (assuming 0 indicates a semester hasn't been completed)
        $totalSGPA += $sgpa;
        $totalSemesters++;
    }
}

// Calculate CGPA
$cgpa=0;
if ($totalSemesters > 0) {
    $cgpa = $totalSGPA / $totalSemesters;
    // echo "CGPA: " . number_format($cgpa, 2); // Output CGPA rounded to 2 decimal places
} else {
     // Handle case when no semesters have been completed
}
?>
<div align="center">
<h3  class="btn" style="font-size:30px;" ><?php echo "CGPA: " . number_format($cgpa, 2);?>
<br>
<?php 

if($cgpa==0){
  echo "CGPA: Not available";
}
?>

</h3>
<div>



</body>
</html>
 
 
 
 
 
 
 
 
 
 
