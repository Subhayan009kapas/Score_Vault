<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Add Data</title>
<link rel="shortcut icon" href="scorevolt_logo.png">
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
  }
  .background-container {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-image: url("https://www.collegebatch.com/static/clg-gallery/university-of-engineering-management-jaipur-226965.jpg");
    background-size: cover;
    filter: blur(5px); /* Reduced blur */
    z-index: -1;
  }
  .container {
    width: 700px; /* Adjusted width */
    padding: 40px; /* Equal padding on all sides */
    background-color: rgba(255, 255, 255, 0.9);
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    overflow: hidden;
  }
  h1 {
    text-align: center;
    color: #333;
  }
  .form-group {
    margin-bottom: 20px;
  }
  .form-group label {
    font-weight: bold;
    display: block;
    margin-bottom: 5px;
    color: #333;
  }
  .form-group input[type="text"],
  .form-group input[type="file"],
  .form-group input[type="password"],
  .form-group input[type="submit"] {
    height: 34px;
    width: calc(50% - 10px);
    margin-top: 5px;
    padding: 5px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
    font-size: 16px;
    font-weight: bold; /* Bold font */
  }
  .form-group input[type="submit"] {
    font-size: 20px;
    border: none;
    border-radius: 5px;
    padding: 10px 20px;
    cursor: pointer;
    background-color: #00246B;
    color: #fff;
    transition: background-color 0.3s;
  }
  .form-group input[type="submit"]:hover {
    background-color: #45a049;
  }
  .semester-row {
    display: flex;
    justify-content: space-between;
  }
  .semester-section {
    background-color: #f9f9f9;
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 20px;
    margin-bottom: 20px;
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

  
</style>
</head>
<body>



<a href="http://localhost/uem_student/Uem_student_info.php" class="back-button">&#8592;  Back To Home</a>

<div class="background-container"></div>

<div class="container">
<div   align="center"><img src="scorevolt_logo.png" height="80px"  ></div>
  <h1  style="font-weight:bold;">Add Student Data</h1>
  <hr>
  <form action="./display2.php" method="post" enctype="multipart/form-data">
    <div class="form-group" align="center">
    
      <label for="image" >Profile Image:</label>
      <input type="file" id="image" name="image" placeholder="Choose image" style="height: 34px; width: 195px;">
    </div>
    <div  style="display: flex; justify-content: space-around;">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" placeholder="Enter your name" style="height: 34px; width: 195px;">
      </div>
      <div class="form-group">
        <label for="enrollment">Enrollment No:</label>
        <input type="text" id="enrollment" name="Enrollment" placeholder="Enter your Enrollment" style="height: 34px; width: 195px;">
      </div>
    </div>
    
    <div class="form-group" align="center">
      <label for="password">Password:</label>
      <input type="password" id="password" name="pass" placeholder="Enter Password" style="height: 34px; width: 195px;">
    </div>

    <!-- Semester sections -->
    <div class="semester-row">
      <!-- Semester 1 -->
      <div class="form-group semester-section">
        <h2>Semester 1</h2>
        <div class="form-group">
          <label for="sem1">SGPA:</label>
          <input type="text" id="sem1" name="sem1" value="0">
          <input type="file" name="result1">
        </div>
        <div class="form-group">
          <label for="nptel1">NPTEL Percentage:</label>
          <input type="int" id="nptel1" name="nptel1" value="0">
          <input type="file" name="nptel1_res">
        </div>
      </div>

      <!-- Semester 2 -->
      <div class="form-group semester-section">
        <h2>Semester 2</h2>
        <div class="form-group">
          <label for="sem2">SGPA:</label>
          <input type="text" id="sem2" name="sem2" value="0">
          <input type="file" name="result2">
        </div>
        <div class="form-group">
          <label for="nptel2">NPTEL Percentage:</label>
          <input type="int" id="nptel2" name="nptel2" value="0">
          <input type="file" name="nptel2_res">
        </div>
      </div>
    </div>

    <!-- Repeat for semesters 3-4, 5-6, and 7-8 -->
    <div class="semester-row">
      <!-- Semester 3 -->
      <div class="form-group semester-section">
        <h2>Semester 3</h2>
        <div class="form-group">
          <label for="sem3">SGPA:</label>
          <input type="text" id="sem3" name="sem3" value="0">
          <input type="file" name="result3">
        </div>
        <div class="form-group">
          <label for="nptel3">NPTEL Percentage:</label>
          <input type="int" id="nptel3" name="nptel3" value="0">
          <input type="file" name="nptel3_res">
        </div>
      </div>

      <!-- Semester 4 -->
      <div class="form-group semester-section">
        <h2>Semester 4</h2>
        <div class="form-group">
          <label for="sem4">SGPA:</label>
          <input type="text" id="sem4" name="sem4" value="0">
          <input type="file" name="result4">
        </div>
        <div class="form-group">
          <label for="nptel4">NPTEL Percentage:</label>
          <input type="int" id="nptel4" name="nptel4" value="0">
          <input type="file" name="nptel4_res">
        </div>
      </div>
    </div>

    <div class="semester-row">
      <!-- Semester 5 -->
      <div class="form-group semester-section">
        <h2>Semester 5</h2>
        <div class="form-group">
          <label for="sem5">SGPA:</label>
          <input type="text" id="sem5" name="sem5" value="0">
          <input type="file" name="result5">
        </div>
        <div class="form-group">
          <label for="nptel5">NPTEL Percentage:</label>
          <input type="int" id="nptel5" name="nptel5" value="0">
          <input type="file" name="nptel5_res">
        </div>
      </div>

      <!-- Semester 6 -->
      <div class="form-group semester-section">
        <h2>Semester 6</h2>
        <div class="form-group">
          <label for="sem6">SGPA:</label>
          <input type="text" id="sem6" name="sem6" value="0">
          <input type="file" name="result6">
        </div>
        <div class="form-group">
          <label for="nptel6">NPTEL Percentage:</label>
          <input type="int" id="nptel6" name="nptel6" value="0">
          <input type="file" name="nptel6_res">
        </div>
      </div>
    </div>

    <div class="semester-row">
      <!-- Semester 7 -->
      <div class="form-group semester-section">
        <h2>Semester 7</h2>
        <div class="form-group">
          <label for="sem7">SGPA:</label>
          <input type="text" id="sem7" name="sem7" value="0">
          <input type="file" name="result7">
        </div>
        <div class="form-group">
          <label for="nptel7">NPTEL Percentage:</label>
          <input type="int" id="nptel7" name="nptel7" value="0">
          <input type="file" name="nptel7_res">
        </div>
      </div>

      <!-- Semester 8 -->
      <div class="form-group semester-section">
        <h2>Semester 8</h2>
        <div class="form-group">
          <label for="sem8">SGPA:</label>
          <input type="text" id="sem8" name="sem8" value="0">
          <input type="file" name="result8">
        </div>
        <div class="form-group">
          <label for="nptel8">NPTEL Percentage:</label>
          <input type="int" id="nptel8" name="nptel8" value="0">
          <input type="file" name="nptel8_res">
        </div>
      </div>
    </div>

    <div class="form-group">
      <input type="submit" name="submit" value="Submit"  style="position: relative; left:160px; height: 50px;">
    </div>
  </form>
</div>

</body>
</html>
