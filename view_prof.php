<?php    //done 3 start
require_once('new.php');
$enroll= $_GET['en'];
$query="SELECT * FROM student_data where Enrollment='$enroll'";
$result =mysqli_query($conn , $query);

$row=mysqli_fetch_assoc($result);
?>


<?php
 
 $dataPoints1 = array(
   array("x"=> 1, "y"=> $row['sem1'],"indexLabel"=> "Semester 1"),
   array("x"=> 2, "y"=> $row['sem2'], "indexLabel"=> "Semester 2"),
   array("x"=> 3, "y"=> $row['sem3'],"indexLabel"=> "Semester 3"),
   array("x"=> 4, "y"=> $row['sem4'],"indexLabel"=> "Semester 4"),
   array("x"=> 5, "y"=> $row['sem6'],"indexLabel"=> "Semester 5"),
   array("x"=> 6, "y"=> $row['sem5'],"indexLabel"=> "Semester 6"),
   array("x"=> 7, "y"=> $row['sem6'] ,"indexLabel"=> "Semester 7"),
   array("x"=> 8, "y"=> $row['sem7'],"indexLabel"=> "Semester 8"),
   
 );
 $dataPoints2 = array(
  array("x"=> 1, "y"=> $row['nptel1']/10,"indexLabel"=> "Nptel 1"),
	array("x"=> 2, "y"=> $row['nptel2']/10, "indexLabel"=> "Nptel 2"),
	array("x"=> 3, "y"=> $row['nptel3']/10,"indexLabel"=> "Nptel 3"),
	array("x"=> 4, "y"=> $row['nptel4']/10,"indexLabel"=> "Nptel 4"),
	array("x"=> 5, "y"=> $row['nptel5']/10,"indexLabel"=> "Nptel 5"),
	array("x"=> 6, "y"=> $row['nptel6']/10,"indexLabel"=> "Nptel 6"),
	array("x"=> 7, "y"=> $row['nptel7']/10,"indexLabel"=> "Nptel 7"),
  array("x"=> 8, "y"=> $row['nptel8']/10,"indexLabel"=> "Nptel 8")
);
 
?>
 <!--  done 3 end -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>View Student</title>
    <link rel="shortcut icon" href="scorevolt_logo.png">

    

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

      .button-28 {
  

  appearance: none;
  background-color: #CADCFC;
  border: 2px solid #1A1A1A;
  border-radius: 15px;
  box-sizing: border-box;
  color: black;
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
  width: 10%;
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
body{
 
} 
.box{
 
  
}
.icon{
   color:#00246B;
}

/* for csv */
#myForm {
        margin: 20px auto;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        background-color:#CADCFC; /* Sky blue background color */
        max-width: 500px;
    }

    /* CSS for the form */
    #myForm form {
        text-align: center;
        height:300px;
        background-color:#CADCFC;
       
    }

    #myForm  label {
        font-size: 18px;
        font-weight: bold;

    }

    #myForm  input[type="email"] {
        width: 100%;
        padding: 10px;
        margin-top: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }

    #myForm  input[type="submit"] {
        width: 100%;
        padding: 10px;
        margin-top: 20px;
        border: none;
        border-radius: 5px;
        background-color: #007bff;
        color: #fff;
        font-size: 16px;
        font-weight: bold;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    #myForm  input[type="submit"]:hover {
        background-color: #0056b3;
    }
/* for csv */
      /* animation */
     
    </style>

<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light1",
	title:{
		text:"Academic Progress Chart: Semester SGPA vs. NPTEL Performance",
    fontSize: 40
	},
	axisY:{
		includeZero: true
	},
	legend:{
		cursor: "pointer",
		verticalAlign: "center",
		horizontalAlign: "right",
		itemclick: toggleDataSeries
	},
	data: [{
		type: "column",
		name: "Semester",
		indexLabel: "{y}",
		yValueFormatString: "#0.##",
		showInLegend: true,
		dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
	},{
		type: "column",
		name: "Nptel",
		indexLabel: "{y}",
		yValueFormatString: "#0.##",
		showInLegend: true,
		dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
function toggleDataSeries(e){
	if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
		e.dataSeries.visible = false;
	}
	else{
		e.dataSeries.visible = true;
	}
	chart.render();
}
 
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
       <div  style="margin-top:30px"><input type="submit" value="Print Page" onclick="printpage()"  class="button-28"></div>
         
</div>



       <!-- blog start -->
    <!-- blogs section starts  -->
    <b style="background-color: rgb(215, 236, 236)">
          <section class="blogs" id="blogs">
            <h1 class="heading" align="center" style="font-size: 50px">
              <span  style="margin-bottom:30px">Student Performence</span>
              <br>
             
            </h1>
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
            <div class="box-container">
    
              <div class="box" >
                <div class="image">
                    <?php 
                    echo "<table><tr>
                    <td>"."<a href=".$row["sem1_result"]." ><img src ='".$row["sem1_result"]."' height='200px' width='200px'></a>"."</td>
                              </tr>
                                  </table>";
                     ?>
                     </div>
                <div class="content" >
                  <div class="icon">
                    <a href="#"  style="color: #00246B">
                      <i class="fas fa-calendar"   style="color: #00246B" ></i> 1s Feb, 2023
                    </a>
                    <a  style="font-size: 20px">
                      <i class="fa-solid fa-store"   style="color: #00246B" ></i> by UEMJ
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
          <td>"."<a href=".$row["sem2_result"]." ><img src ='".$row["sem2_result"]."' height='200px' width='200px'></a>"."</td>
                    </tr>
                        </table>";
           ?>
                </div>
                <div class="content">
                  <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"   style="color: #00246B" ></i> 1st June, 2023</a>
                    <a href="https://localhost/2nd_year_project/Shyam_Hotel.php" style="font-size: 20px">
                      <i class="fa-solid fa-store"   style="color: #00246B" ></i> By UEMJ</a
                    >
                  </div>
                  <h3> 2nd sem: <?php echo  $row['sem2']?></h3>
                  
                
                </div>
              </div>
    
    
              <div class="box">
                <div class="image">
                <?php 
          echo "<table><tr>
          <td>"."<a href=".$row["sem3_result"]." ><img src ='".$row["sem3_result"]."' height='200px' width='200px'></a>"."</td>
                    </tr>
                        </table>";
           ?>
                </div>
                <div class="content">
                  <div class="icon">
                    <a href="#">
                      <i class="fas fa-calendar"   style="color: #00246B" ></i> 1st Feb, 2024
                    </a>
                    <a href="https://localhost/2nd_year_project/Pandya_fast-Food.php" style="font-size: 20px">
                      <i class="fa-solid fa-store"   style="color: #00246B" ></i> by UEMJ
                    </a>
                  </div>
                  <h3> 3rd sem:<?php echo  $row['sem3']?></h3>
                 
                  
                </div>
              </div>
    
              <div class="box">
                <div class="image">
                <?php 
          echo "<table><tr>
          <td>"."<a href=".$row["sem4_result"]." ><img src ='".$row["sem4_result"]."' height='200px' width='200px'></a>"."</td>
                    </tr>
                        </table>";
           ?>
                </div>
                <div class="content">
                  <div class="icon">
                    <a href="#">
                      <i class="fas fa-calendar"   style="color: #00246B" ></i>2nd June , 2023</a
                    >
                    <a href="https://localhost/2nd_year_project/Mama_bhanja.php" style="font-size: 20px">
                      <i class="fa-solid fa-store"    style="color: #00246B" ></i> by UEMJ</a
                    >
                  </div>
                  <h3>4th sem:<?php echo  $row['sem4']?></h3>
                  
                 
                </div>
              </div>
    
              <div class="box">
                <div class="image">
                <?php 
          echo "<table><tr>
          <td>"."<a href=".$row["sem5_result"]." ><img src ='".$row["sem5_result"]."' height='200px' width='200px'></a>"."</td>
                    </tr>
                        </table>";
           ?>
                </div>
                <div class="content">
                  <div class="icon">
                    <a href="#">
                      <i class="fas fa-calendar"   style="color: #00246B" ></i> 22nd January, 2025
                    </a>
                    <a href="https://localhost/2nd_year_project/italian.php" style="font-size: 20px">
                      <i class="fa-solid fa-store"   style="color: #00246B" ></i> byUEMJ</a
                    >
                  </div>
                  <h3>5th sem:<?php echo  $row['sem5']?></h3>
                  
                  
                </div>
              </div>
    
    
              <div class="box">
                <div class="image">
                <?php 
          echo "<table><tr>
          <td>"."<a href=".$row["sem6_result"]." ><img src ='".$row["sem6_result"]."' height='200px' width='200px'></a>"."</td>
                    </tr>
                        </table>";
           ?>
                </div>
                <div class="content">
                  <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"   style="color: #00246B" ></i> 1st may, 2022 </a>
                    <a href="https://localhost/2nd_year_project/Bengali_canteen.php" style="font-size: 20px"
                      ><i class="fa-solid fa-store"   style="color: #00246B" ></i>By  UEMJ</a
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
          <td>"."<a href=".$row["sem7_result"]." ><img src ='".$row["sem7_result"]."' height='200px' width='200px'></a>"."</td>
                    </tr>
                        </table>";
           ?>
                </div>
                <div class="content">
                  <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"   style="color: #00246B" ></i> 31st may, 2020 </a>
                    <a href="https://localhost/2nd_year_project/Gareeb_nawaz.php" style="font-size: 20px"
                      ><i class="fa-solid fa-store"   style="color: #00246B" ></i> by UEMJ</a
                    >
                  </div>
                  <h3>7th sem:<?php echo  $row['sem7']?></h3>
                  
                  
                </div>
              </div>
              
    
              <div class="box">
                <div class="image">
                <?php 
          echo "<table><tr>
          <td>"."<a href=".$row["sem8_result"]." ><img src ='".$row["sem8_result"]."' height='200px' width='200px'></a>"."</td>
                    </tr>
                        </table>";
           ?>
                </div>
                <div class="content">
                  <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"   style="color: #00246B" ></i> 12th aug, 2022</a>
                    <a href="https://localhost/2nd_year_project/Kabila_fort.php" style="font-size: 20px"
                      ><i class="fa-solid fa-store"   style="color: #00246B" ></i>byUEMJ</a
                    >
                  </div>
                  <h3>8th sem:<?php echo  $row['sem8']?></h3>
                  
               
                </div>
              </div>
             

              <!-- Nptel strat -->

              <div class="box">
                <div class="image">
                <?php 
          echo "<table><tr>
                        <td>". "<img src ='".$row["nptel1_res"]."' height='200px' width='200px'>"."</td>
                    </tr>
                        </table>";
           ?>
                </div>
                <div class="content"  >
                  <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"   style="color: #00246B" ></i> 31st may, 2020 </a>
                    <a href="" style="font-size: 20px"
                      ><i class="fa-solid fa-store"   style="color: #00246B" ></i> by UEMJ</a
                    >
                  </div>
                  <h3>1st Sem Nptel :<?php echo  $row['nptel1']?></h3>
                  
                  
                </div>
              </div>


              <div class="box">
                <div class="image">
                <?php 
          echo "<table><tr>
                        <td>"."<img src ='".$row["nptel2_res"]."' height='200px' width='200px'>"."</td>
                    </tr>
                        </table>";
           ?>
                </div>
                <div class="content">
                  <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"   style="color: #00246B" ></i> 31st may, 2020 </a>
                    <a href="" style="font-size: 20px"
                      ><i class="fa-solid fa-store"   style="color: #00246B" ></i> by UEMJ</a
                    >
                  </div>
                  <h3>2nd  sem Nptel:<?php echo  $row['nptel2']?></h3>
                  
                  
                </div>
              </div>


              <div class="box">
                <div class="image">
                <?php 
          echo "<table><tr>
                        <td>"."<img src ='".$row["nptel3_res"]."' height='200px' width='200px'>"."</td>
                    </tr>
                        </table>";
           ?>
                </div>
                <div class="content">
                  <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"   style="color: #00246B" ></i> 31st may, 2020 </a>
                    <a href="" style="font-size: 20px"
                      ><i class="fa-solid fa-store"   style="color: #00246B" ></i> by UEMJ</a
                    >
                  </div>
                  <h3>3rd sem  Nptel:<?php echo  $row['nptel3']?></h3>
                  
                  
                </div>
              </div>


              <div class="box">
                <div class="image">
                <?php 
          echo "<table><tr>
                        <td>"."<img src ='".$row["nptel4_res"]."' height='200px' width='200px'>"."</td>
                    </tr>
                        </table>";
           ?>
                </div>
                <div class="content">
                  <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"   style="color: #00246B" ></i> 31st may, 2020 </a>
                    <a href="" style="font-size: 20px"
                      ><i class="fa-solid fa-store"   style="color: #00246B" ></i> by UEMJ</a
                    >
                  </div>
                  <h3>4th sem Nptel:<?php echo  $row['nptel4']?></h3>
                  
                  
                </div>
              </div>

              <div class="box">
                <div class="image">
                <?php 
          echo "<table><tr>
                        <td>"."<img src ='".$row["nptel5_res"]."' height='200px' width='200px'>"."</td>
                    </tr>
                        </table>";
           ?>
                </div>
                <div class="content">
                  <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"    style="color: #00246B"  ></i> 31st may, 2020 </a>
                    <a href="" style="font-size: 20px"
                      ><i class="fa-solid fa-store"    style="color: #00246B" ></i> by UEMJ</a
                    >
                  </div>
                  <h3>5th sem Nptel:<?php echo  $row['nptel5']?></h3>
                  
                  
                </div>
              </div>


              <div class="box">
                <div class="image">
                <?php 
          echo "<table><tr>
                        <td>"."<img src ='".$row["nptel6_res"]."' height='200px' width='200px'>"."</td>
                    </tr>
                        </table>";
           ?>
                </div>
                <div class="content">
                  <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"    style="color: #00246B" ></i> 31st may, 2020 </a>
                    <a href="" style="font-size: 20px"
                      ><i class="fa-solid fa-store"    style="color: #00246B" ></i> by UEMJ</a
                    >
                  </div>
                  <h3>6th sem Nptel:<?php echo  $row['nptel6']?></h3>
                  
                  
                </div>
              </div>

              <div class="box">
                <div class="image">
                <?php 
          echo "<table><tr>
                        <td>"."<img src ='".$row["nptel7_res"]."' height='200px' width='200px'>"."</td>
                    </tr>
                        </table>";
           ?>
                </div>
                <div class="content">
                  <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"    style="color: #00246B" ></i> 31st may, 2020 </a>
                    <a href="" style="font-size: 20px"
                      ><i class="fa-solid fa-store"    style="color: #00246B" ></i> by UEMJ</a
                    >
                  </div>
                  <h3>7th sem Nptel:<?php echo  $row['nptel7']?></h3>
                  
                  
                </div>
              </div>

              <div class="box">
                <div class="image">
                <?php 
          echo "<table><tr>
                        <td>"."<img src ='".$row["nptel8_res"]."' height='200px' width='200px'>"."</td>
                    </tr>
                        </table>";
           ?>
                </div>
                <div class="content">
                  <div class="icon">
                    <a href="#"> <i class="fas fa-calendar"    style="color: #00246B" ></i> 31st may, 2020 </a>
                    <a href="" style="font-size: 20px"
                      ><i class="fa-solid fa-store"    style="color: #00246B" ></i> by UEMJ</a
                    >
                  </div>
                  <h3>8th sem Nptel:<?php echo  $row['nptel8']?></h3>
                  
                  
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
  <br>
  <hr>
  <br>
  <br>
  <h1  align="center"  style="font-size:40px;">Send  Email to Gurdian<h1>

<form id="myForm">
    <label for="recipientEmail">Gurdian's Email:</label><br>
    <input type="email" id="recipientEmail" name="recipientEmail" required><br><br>
    <input type="submit" value="Send Email">
</form>

<script>
   (function(){
      document.getElementById('myForm').addEventListener('submit', function(event) {
         event.preventDefault();
         var recipientEmail = document.getElementById('recipientEmail').value;
         var emailSubject = " Update on Academic Progress";
         var websiteURL = window.location.href;
         var emailBody = "Hello Sir/Ma'am ,\n\n We hope this email finds you well. We wanted to inform you that we have updated the student portal with your child's latest academic results, including semester grades, SGPA, and calculated CGPA.\n\n You can access the updated results via the following link::\n\n" + websiteURL + "\n\nYour support means the world to us.\nThank you.\n\nBest regards,\nUniversity of Engineering & Management (UEM), Jaipur ";
         window.location.href = "mailto:" + encodeURIComponent(recipientEmail) + "?subject=" + encodeURIComponent(emailSubject) + "&body=" + encodeURIComponent(emailBody);
      });
   })();
</script>






</body>
</html>
 
 
 
 
 
 
 
 
 
 
