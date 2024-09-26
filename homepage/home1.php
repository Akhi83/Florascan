<?php
include '../Login/config.php';

session_start();



if (!isset($_SESSION['username'])) {
    header("Location: ../login/login.php");
}

?>





<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Plant Disease Detection</title>
        <link rel="stylesheet" href="home.css">
        <script src="https://kit.fontawesome.com/f633e8ec41.js" crossorigin="anonymous"></script>
        <link rel="icon" type="image/x-icon" href="favicon2.ico">
    </head>
    <body>
    <a href="../login/logout.php">
                Logout
            </a>
    <footer>
            
            <div class="footer-left">
                <h3>Plant Disease Detection</h3>
                <p></p>
                <div class="social">
                    <a href=""> #facebook url
                        <i class="fa-brands fa-square-facebook"></i></a>
                    <a href=""> #instagram url
                        <i class="fa-brands fa-square-instagram"></i></a>
                    <a href=""><i class="fa-brands fa-linkedin"></i></a>
                    <a href=""><i class="fa-brands fa-square-twitter"></i></a>
                </div>
                
            </div>
            <div class="footer-right">
                <ul>
                    <li><i class="fa-solid fa-location-dot"></i> Woxsen University, Hyderabad.</li>
                    <li><i class="fa-solid fa-phone"></i> </li>
                    <li><i class="fa-solid fa-envelope"></i><a href="mailto:plantdiseasedetection@gmail.com "> plantdiseasedetection@gmail.com</a></li>
                </ul>
            </div>
           </footer>
        <div  class="copyrights">
            <p>Copyright &copy 2022. Plant Disease Detection-All rights reserved.
            </p>
        </div>
    </body>

</html>