<?php      
    include('connection.php');  
    $username = $_POST['user'];  
    $password = $_POST['pass'];  
      
        //to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from login where username = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "<h1><center> Login successful </center></h1>";  
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="index.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +918789125619 </a>
         <a href="#"> <i class="fas fa-phone"></i> +918757415122 </a>
         <a href="#"> <i class="fas fa-envelope"></i> mdkaifkhan167@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> ranchi, india - 834001 </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="https://facebook.com/mdkaifkhan01" target="_blank"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="https://twitter.com/MdKaifKhan09" target="_blank"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="https://instagram.com/imkaif_khan" target="_blank"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="https://linkedin.com/mwlite/in/md-kaif-khan-96169a220" target="_blank"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

   <div class="credit"> created by <span>mr. md kaif khan, ms. aqsa zar and mr. kanishk dhruv</span> | all rights reserved! </div>

</section>