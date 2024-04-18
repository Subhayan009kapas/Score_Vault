
<!-- SHOWING THE ALL DATA FETCHED FROM DATA BASE -->


<?php
require_once('new.php');
$query="select * from student_data";
$result =mysqli_query($conn , $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Student Data Base</title>
          <link rel="shortcut icon" href="scorevolt_logo.png">
          <style>
                    table,tr,td{
                              border: 2px solid black;
                              text-align:center;
                              font-size:30px;
                              
                    }
                    tr{
                      background-color: #CADCFC;
                    }
                
                    .head{
                              font-size:40px;
                              text-align:center;
                              font-weight:bold;
                              color:white;
                              background-color:#00246B;
                    }


                    .button {
  display: inline-block;
  border-radius: 4px;
 position:;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 20px;
  width: 100px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
  color:white;
}

.button span:after {
  content: '\00bb';
  position: fixed;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}

#myInput {
    width: 300px;
    background-color: #f8f8f8;
    border: 1px solid #ccc;
    border-radius: 20px;
    padding: 10px;
    outline: none;
    transition: all 0.3s;
}

#myInput:focus {
    border-color: #4CAF50;
    box-shadow: 0 0 8px 0 rgba(0, 0, 0, 0.1);
}
body{
  background-color:#d5e9f5;
}

.back-button {
    position: fixed;
    top: 30px;
    left: 200px;
    background-color: #00246B;
    color: #fff;
    padding: 20px 40px;
    border:3px solid black;
    border-radius: 8px;
    text-decoration: none;
    font-size:20px;
    font-weight: bold;
    transition: background-color 0.3s;
}

.back-button:hover {
    background-color:  #CADCFC;
    color:black;
}
/* animation */

/* animation */
          </style>
</head>
<body>
<a href="http://localhost/uem_student/Uem_student_info.php" class="back-button">&#8592;  Back To Home</a>
<div   align="center"><img src="scorevolt_logo.png" height="120px"  ></div>
<h1   align="center"  style="font-size:50px ; text-decoration:underline">UEM STUDENT DATA</h1>
<!-- <div  align="center"   style="height:40px"><span style="font-size:40px">Search :</span><input type="text" name="", id="myInput" placeholder="Enter Enrollment no" onkeyup="searchFun()"   size="25" style="font-size:30px"  ></div> -->

<div align="center" style="margin-top: 20px;">
    <span style="font-size: 40px;">Search:</span>
    <input type="text" name="enrollment" id="myInput" placeholder="Enter Enrollment no" onkeyup="searchFun()" style="font-size: 28px; padding: 8px; border: 1px solid #ccc; border-radius: 5px; margin-left: 10px;">
</div>
<br>
          <table  align="center" id="myTable">
                    <tr  class="head">
                              <td>Image</td>
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
                              <td colspan=2>Operations</td>
                    </tr>

                    <?php 
                    while ($row=mysqli_fetch_assoc($result)){    //done2 start2
                      echo "<tr>
                        <td  >"."<img src ='".$row["Image"]."' height='200px' width='200px'>"."</td>
                         <td>".$row['Name']."</td>
                         <td>".$row['Enrollment']."</td>
                         <td>".$row['sem1']."</td>
                         <td>".$row['sem2']."</td>
                         <td>".$row['sem3']."</td>
                         <td>".$row['sem4']."</td>
                         <td>".$row['sem5']."</td>
                         <td>".$row['sem6']."</td>
                         <td>".$row['sem7']."</td>
                         <td>".$row['sem8']."</td>
                         <td >
                         <div  class='button' style='vertical-align:middle ; background-color:green'>
                         <a href='view_prof.php?en=$row[Enrollment] ' ><span>View</span></a>
                         </div>
                         </td>

                         <td   >
                         <div  class='button' style='vertical-align:middle ; background-color:blue'>
                         <a href='update_design.php?en=$row[Enrollment] '><span>Update</span></a>
                         </div>
                         <br>

                         <div   class='button'  style='vertical-align:middle ; background-color:red'><a href='delete.php?en=$row[Enrollment]' onclick ='return checkdelete()'><span>Delete</span></a></div>
                         </td>

                        


                         </tr>
                      ";
                    }
                    ?>    <!-- done2  end -->



          </table>

          <script>
            const searchFun=()=>{
                let filter = document.getElementById('myInput').value.toUpperCase();
                let  myTable=document.getElementById('myTable');
                let tr=myTable.getElementsByTagName('tr');
                for (var i =0;i<tr.length;i++){
                    let td=tr[i].getElementsByTagName('td')[2];
                    if(td){
                        let textvalue =td.textContent || td.innerHTML;

                        if (textvalue.toUpperCase().indexOf(filter)>-1){
                            tr[i].style.display="";
                        }else{
                            tr[i].style.display="none";
                        }
                    }
                }
            }
            function checkdelete(){
                return confirm('Are you Sure You Want to DELETE this Data');
            }
            </script>

           
                    
</body>
</html>