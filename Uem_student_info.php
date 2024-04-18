<?php
session_start();  // CSV PURPOE
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>ScoreVault</title>

    <link rel="shortcut icon" href="scorevolt_logo.png">

    <link
      rel="stylesheet"
      href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    />

    <link rel="stylesheet" href="style.css" />


    <style>

      body{
        
      }
      .dropbtn {
  background-color: #04AA6D;
  color: white;
  padding: 12px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
  background-color: #3e8e41;
}

#myInput {
  box-sizing: border-box;
  background-image: url('');
  background-position: 14px 12px;
  background-repeat: no-repeat;
  font-size: 24px;
  padding: 14px 20px 12px 45px;
  border: none;
  border-bottom: 0px solid yellow;
}
/* #myInput:hover{
  background-color: blue;
} */

#myInput:focus {outline: 3px solid rgb(0, 255, 13);}
.dropdown {
  position: relative;
  display: inline-block;

}

.dropdown-content {          
  display: none;
  position: absolute;
  background-color:white;
  min-width: 100px;
  overflow: auto;
  border: 1px solid green;
  z-index: 1;
  padding: 15px  25px;
  transition: all 0.25s ease-in; /* here */
  transform: translateY(-10px); /* here */
}
table,tr,td{
  border:2px solid black;

}
.pill-nav a {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px;
  text-decoration: none;
  font-size: 25px;
  font-family:arial;
  border-radius: 5px;
  font-weight:bold;
  margin:10px;
 
}

.pill-nav a:hover {
  background-color: #CADCFC;
  color: black;
}

.pill-nav a.active {
  background-color:#CADCFC ;
  color: Black;
}
.navi{
  display:flex;
  justify-content: space-evenly;
  align-items: center;
  margin-top:10px;
  
  

}
.nav{
  height:80px;
  background-color:#11224D;
  position: relative;
  bottom:9px;
  border:1px solid black
  border-redius:10px;
}
body{
  font-family:arial;
}

.blur{
  filter:blur(5px);
}

.footer{
  background-color: #f4f4f4; /* Initial background color */
    padding: 50px;
    text-align: center;
    animation: colorChange 10s infinite alternate; /* Apply animation */
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
.dropdown a:hover {background-color: rgb(15, 216, 48);}

.show {display: block;}

.ani {
  font-size: 80px;
  color: #e82626;
  text-align: center;
  animation: glow 1s ease-in-out infinite alternate;
}

@-webkit-keyframes glow {
  from {
    text-shadow: 0 0 10px  #CADCFC, 0 0 40px  #CADCFC, 0 0 40px  #CADCFC, 0 0 40px  #CADCFC, 0 0 40px  #CADCFC, 0 0 40px  #CADCFC, 0 0 40px#e60073;
  }
  
  to {
    text-shadow: 0 0 20px  #CADCFC, 0 0 30px  #CADCFC, 0 0 30px  #CADCFC, 0 0 30px  #CADCFC, 0 0 30px  #CADCFC, 0 0 30px  #CADCFC, 0 0 30px #CADCFC, 0 0 30px
  }
}

/* button css */


/* CSS */
/* CSS */
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
  width: 100%;
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
/* button css */

/* for  csv addd */
.excel-form {
        margin: 20px auto;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        background-color:  #CADCFC; /* Sky blue background color */
        max-width: 1400px;
        height: 300px; /* Increased height */
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }

    .excel-form input[type="file"] {
        width: 100%;
        padding: 15px;
        margin-bottom: 20px;
        border: 2px solid #007bff; /* Blue border */
        border-radius: 10px;
        box-sizing: border-box;
        background-color: #f9f9f9; /* Light gray background color */
        display:flex;
    }

    .excel-form button[type="submit"] {
        width: 80%; /* Adjusted width */
        padding: 15px;
        border: none;
        border-radius: 10px;
        background-color: #007bff;
        color: #fff;
        font-size: 16px;
        font-weight: bold;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .excel-form button[type="submit"]:hover {
        background-color: #0056b3;
    }

/* for csv add */




    </style>
  </head>


  <body>

  <!-- For  csv addd -->
  <?php 
if (isset($_SESSION['message'])){       // CSV PURPOSE
    echo "<h4>".$_SESSION['message']."</h4>";
    unset($_SESSION['message']);
}
?>
  <!-- For  csv addd -->
    

 <div   class="nav" >
 <div  class="navi">
 <div>
 <a href="#" class="logo" style="font-size: 45px ; font-weight:bold ; font-family:Georgia ; color:white; position:relative ; right:100px"><i style="position:relative; top:10px;"><img src="scorevolt_logo.png" height="60px" ></i>ScoreVault</a></li>
 </div>

 <div class="pill-nav">
 
  <a class="active" href="#home">Home</a>
  <a  href="#upload">Upload  File</a>
  <a href="#about">About</a>
  <a href="http://localhost/uem_student/form.php">Add Data</a>
  <a href="http://localhost/uem_student/fetch.php">Student-Database</a>
  <a href="#contact">Contact</a>
</div>

</div>



 
  
 </div>


 <br>
 <br>
 <br>

 
 


    <!--header section end-->

    <!-- start home section -->

    <div class="slideshow-container" id="home">
      <div class="mySlides fade">
        <!-- <div class="numbertext">1 / 3</div> -->
        <img src="profile/uem_frontL_look.jpg" style="width: 100%"  class="blur"/>
        <!-- <button type="button" align="justify" onclick="location.href='www.google.com' " >Order Now </button> -->

        <button type="button"  style="font-size:50px;">
          <a href="http://localhost/uem_student/fetch.php" class="button-28">
            Go To DataBase <span class="fas fa-chevron-right"></span>
          </a>
        </button>

        <div class="text"></div>
      </div>

      <div class="mySlides fade">
        <!-- <div class="numbertext">2 / 3</div> -->
        <img src="https://content.jdmagicbox.com/comp/jaipur/z2/0141px141.x141.140619132133.u8z2/catalogue/uem-university-of-engineering-and-management--udaipuria-jaipur-colleges-to63nitdpm.jpg" style="width: 100%" class="blur" />

        <button type="button">
          <a href="http://localhost/uem_student/fetch.php" class="button-28">
          Go To DataBase <span class="fas fa-chevron-right"></span>
          </a>
        </button>
        <div class="text">
          <div class="text" style="font-weight: bold"></div>
        </div>
      </div>

      <div class="mySlides fade">
        
        <img src="profile/uem_jaipur.jpeg" style="width: 100%"  class="blur"/>
        <button type="button">
          <a href="http://localhost/uem_student/fetch.php" class="button-28">
          Go To DataBase<span class="fas fa-chevron-right"></span>
          </a>
        </button>

        <div class="text"><div class="text"></div></div>
      </div>

      <div class="mySlides fade">
        <!-- <div class="numbertext">3 / 3</div> -->
        <img src="profile/uem_from_gata.jpg" style="width: 100%" class="blur" />
        <button type="button">
          <a  href="http://localhost/uem_student/fetch.php" class="button-28">
          Go To DataBase<span class="fas fa-chevron-right"></span>
          </a>
        </button>
        <div class="text"></div>
      </div>
    </div>
    <br />
    <div style="text-align: center">
      <span class="dot"  style="Background-color:#00246B"></span>
      <span class="dot" ></span>
      <span class="dot"></span>
      <span class="dot"></span>
    </div>

    <!-- about start -->

    <br />
    <br />
    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    <div></div>

    <div class="excel-form"  id="upload">
      <h2   style="font-size: 50px; color: #00246B ; position:relative ; bottom:20px" align="center">Upload File</h2>
    <form action="./code.php" method="POST" enctype="multipart/form-data">
        
        <input type="file" name="import_file" class="form-control" />
        <input  type="submit" name="save_excel_data"   class="button-28"  >
    </form>
</div>

  

    <section class="about" id="about" style="background-color: #00072D">
      <h1 style="font-size: 50px; color: rgb(225, 230, 236)" align="center">
        <span style="font-size: 60px">about</span> us
      </h1>

      <br />
      <br />

      <div class="row">
        <div class="image">
          <img src="image/formula-animate.svg" alt="" />
        </div>

        <div class="content">
          <h3
            class="ani"
            style="
              font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman',
                serif;
              color:  #00246B;
              font-size: 40px;
              color:  sky;
            "
          >
          ScoreVault<br />
            &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp "Empowering Institutions, Empowering Futures !"
          </h3>

          <p
            style="
              font-size: x-large;
              font-family: Verdana, Geneva, Tahoma, sans-serif;
              color: floralwhite;
            "
          >
            Welcome to <b style="font-size: xx-large">ScoreVault</b>, the ultimate hub for educational institutions seeking streamlined data management and academic support. Our platform offers a comprehensive solution tailored exclusively for institutions, empowering them to efficiently handle student data, including exam results, password IDs, and certificates.

With our user-friendly interface and advanced security measures, institutions can effortlessly navigate through our centralized database system to input, update, and retrieve student records. Administrators have full control over data access permissions, ensuring confidentiality and data integrity.

Our mission is to revolutionize education by providing institutions with the tools they need to optimize their operations, enhance academic performance, and foster student success. Join us in reshaping the future of education through innovation and efficiency.
          </p>
        </div>

        <div align="center" style="border: 2px">
          <a
            href="#contact"
            class="btn"
            style="font-size: xx-large; background-color: azure; color: black"
          >
            contact us <span class="fas fa-chevron-right"></span>
          </a>
        </div>
      </div>
    </section>
    
    <!-- about      end -->
   
      <!-- form  adda  data --
<br>
<br><br>
<br>



    <!-- contact start -->
    

    
    <section class="footer" style="background-color: black ; background-repeat: no-repeat; background-position: right; background-color:white ; color:#11224D"  ; >
    <h1
      style="
        font-size: 50px;
        color:color:#11224D; position:relative; bottom:40px;
      "
      align="center"
    >
      <span style="font-size: 60px ; position:relative; top:40px;">Contact</span><span style="position:relative; top:40px;"> us</span>
    </h1>
      <div class="box-container"  style=" position:relative; top:90px;">
        <div class="box">
          <h3 style="font-size: 30px ; color:#11224D">quick links</h3>
          <a href="#home" style="font-size: 20px; color:#11224D">home</a>

          <a href="#about" style="font-size: 20px ; color:#11224D">about</a>
          <a href="form.html" style="font-size: 20px ; color:#11224D">Add Data</a>
          <a href="http://localhost/uem_student/fetch.php" style="font-size: 20px ; color:#11224D">Student Data</a>
        </div>
         
          

        <div class="box" id="contact">
          <h3 style="font-size: 30px ; color:#11224D">contact info</h3>
          <a href="#" style="font-size: 20px ; color:#11224D">
            <i class="fas fa-phone" style="font-size: 20px ; color:#11224D"></i>
            +91-7602598673</a
          >

          <a href="#" style="font-size: 20px ; color:#11224D">
            <i class="fas fa-phone" style="font-size: 20px ; color:#11224D"></i>
            +91-7586068924</a
          >

          <a href="#" style="font-size: 20px ; color:#11224D">
            <i class="fas fa-phone" style="font-size: 20px ; color:#11224D"></i>
            +91-9163938071</a
          >

          <a href="#" style="font-size: 20px ; color:#11224D">
            <i class="fas fa-envelope" style="font-size: 20px ; color:#11224D"></i>
            subhayankapas@gmail.com
          </a>

          <a href="" style="font-size: 20px ; color:#11224D">
            <i class="fas fa-envelope" style="font-size: 20px ; color:#11224D"></i>
            helloab272@gmail.com</a
          >

          <a href="#" style="font-size: 20px ; color:#11224D">
            <i class="fas fa-map-marker-alt" style="font-size: 20px ; color:#11224D"></i
            >JAIPUR,INDIA - 303807</a
          >
        </div>

        <div class="box" id="follow">
          <h3 style="font-size: 30px ; color:#11224D">follow us</h3>
          <a href="https://www.facebook.com/" style="font-size: 20px ; color:#11224D">
            <i class="fab fa-facebook-f" style="font-size: 20px ; color:#11224D"></i> facebook
          </a>

          <a href="https://twitter.com/?lang=en-in" style="font-size: 20px  ; color:#11224D">
            <i class="fab fa-twitter" style="font-size: 20px ; color:#11224D"></i> twitter
          </a>

          <a href="https://www.instagram.com/" style="font-size: 20px ; color:#11224D">
            <i class="fab fa-instagram" style="font-size: 20px  ; color:#11224D"></i> instagram
          </a>

          <a href="https://in.linkedin.com/" style="font-size: 20px ; color:#11224D">
            <i class="fab fa-linkedin" style="font-size: 20px ; color:#11224D"></i> linkedin
          </a>

          <a href="https://www.quora.com/" style="font-size: 20px ; color:#11224D">
            <i class="fab fa-quora" style="font-size: 20px  ; color:#11224D"></i> quora</a
          >

          <a
            href="https://www.pinterest.com/pinterest/"
            style="font-size: 20px  ; color:#11224D"
          >
            <i class="fab fa-pinterest" style="font-size: 20px ; color:#11224D"></i> pinterest
          </a>
        </div>
      </div>

      <div class="credit" style="font-size: 30px ; color:#00246B ; position:relative; top:90px;">
        created by Our Team<span class=""  style="font-size: 30px ; color:#00246B ; font-weight:bold"  > THE WEB_TITAN</span> | All Rights Reserved ⓒ
       <span style="color:#00246B ; font-weight:bold" > ScoreVault</span>
      </div>
    </section>
    <!-- contact end -->

    

    <script>
      let slideIndex = 0;
      showSlides();
      function showSlides() {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
          slideIndex = 1;
        }
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        setTimeout(showSlides, 3500); // Change image every 2 seconds
      }

     
    </script>
    <script>
       // dropdowm
     
      // dropdown
    </script>

    <script src="js/script.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>


     <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script> -->

     
  </body>
</html>
