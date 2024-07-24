<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <title>Book-Warm</title>
        <link rel="stylesheet" href="styleWeb.css">
    </head>
    <body>
        <div class="form">
            <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
            <p>You are in user dashboard page.</p>
            <p><a href="logout.php">Logout</a></p>
        </div>
        <!---------- HEADER STARTS -------------------------->
        <header class="header">
            <div class="header-div">
                <!-- <a href="#" class="logo"> <i class="fas fa-book"></i> BookWarm </a> -->
                <a href="#" class="logo">
                    <img class="logo-img" src="/images/logo.jpg" alt="Logo">
                </a>
    
                <form action="" class="search-form">
                    <input type="search" name="" placeholder="Search here..." id="search-box">
                    <label for="search-box" class="fas fa-search"></label>
                </form>
    
                <div class="icons">
                    <div id="search-btn" class="fas fa-search"></div>
                    <!-- <a href="#" class="fas fa-heart"></a> -->
                    <div id="login-btn" class="fas fa-user"><a href="/registeration-login-system-master/registration.php">Dashboard</a></div>
                </div>
            </div>
    
            <div class="header-div2">
                <nav class="nav-bar">
                    <a href="#">Home</a>
                    <a href="#fe01">F.E.</a>
                    <a href="#se02">S.E.</a>
                    <a href="#te03">T.E.</a>
                    <a href="#be04">B.E.</a>
                    <a href="/review section/index.php">Reviews</a>
                    <a href="#">Contact</a>
                </nav>
            </div>
        <!------------- HEADER ENDS ------------------------------>
    
        <!------------- BOTTOM NAV-BAR STARTS -------------------->
            <nav class="bottom-navbar">
            <a href="#" class="fas fa-home"></a>
            <a href="#" class="fas fa-list"></a>
            <a href="#" class="fas fa-comments"></a>
            <a href="#" class="fas fa-envelope"></a>
        </nav>
        <!-------------- BOTTOM NAV-BAR ENDS ---------------------->
    
        <script src="./index.js" type="text/javascript"></script>

<!------------------- FIRST YEAR STARTS --------------------------->
<section class="fe" id="fe01">
    <img class="fe" src="/Online Book Store/images/fe.jpeg" alt="sebackground">

    <div class="clipped-title1" id="box">
        <a href="/Online Book Store/TEWebsite/TEWeb.html"><h1>First Year</h1></a>
     </div>
    <br>
    <!--<p class="separa">Find the Text Books and Reference<br>Books of Second Year Comps here</p>-->

    
</section>
<!------------------- FIRST YEAR ENDS --------------------------->

<!------------------- EXTRA SECTION ------------------------------->
<section class="extra">
    
</section>
<!------------------- EXTRA SECTION ------------------------------->

<!------------------- SECOND YEAR STARTS --------------------------->
<section class="se" id="se02">
    <img class="se" src="/Online Book Store/images/se2.jpg" alt="sebackground">

    <div class="clipped-title2" id="box">
        <a href="/TEWebsite/TEWeb.html"><h1>Second Year</h1></a>
     </div>
    <br>
    <!--<p class="separa">Find the Text Books and Reference<br>Books of Second Year Comps here</p>-->

    
</section>
<!------------------- SECOND YEAR ENDS --------------------------->

<!------------------- EXTRA SECTION ------------------------------->
<section class="extra">
    
</section>
<!------------------- EXTRA SECTION ------------------------------->

<!------------------- THIRD YEAR STARTS ----------------------------->
<section class="te" id="te03">
    <img class="te" src="/Online Book Store/images/te1.png" alt="TEbackground">

    <div class="clipped-title3" id="box">
        <a href="/TEWebsite/ThirdYear.html"><h1>Third Year</h1></a>
     </div>
    <br>
    <!--<p class="extcpara">Find the Text Books and Reference<br>Books of Third Year Comps here</p>-->

    
</section>
<!--------------------- THIRD YEAR ENDS -------------------------------->

<!------------------- EXTRA SECTION ------------------------------->
<section class="extra">
    
</section>
<!------------------- EXTRA SECTION ------------------------------->

<!------------------- FOURTH YEAR STARTS ----------------------------->
<section class="be" id="be04">
    <img class="be" src="/Online Book Store/images/be1.jpg" alt="BEbackground">

    <div class="clipped-title4" id="box">
        <a href="Online Book Store/BEWebsite/BEWeb.html"><h1>Fourth Year</h1></a>
     </div>
    <br>
    <!--<p class="bepara">Find the Text Books and Reference<br>Books of Fourth Year Comps here</p>-->

    
</section>
<!--------------------- FOURTH YEAR ENDS -------------------------------->

<!--------------------- FOOTER STARTS  ----------------------------------->
<footer>
    <section class="footer">

        <div class="box-container">
    
            <div class="box">
                <h3>our locations</h3>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> mumbai </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> chennai</a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> bangalore </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> delhi </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> kolkata </a>
                <a href="#"> <i class="fas fa-map-marker-alt"></i> noida </a>
            </div>
    
            <div class="box">
                <h3>quick links</h3>
                <a href="#"> <i class="fas fa-arrow-right"></i> Home </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> F.E.</a>
                <a href="#"> <i class="fas fa-arrow-right"></i> S.E.</a>
                <a href="#"> <i class="fas fa-arrow-right"></i> T.E.</a>
                <a href="#"> <i class="fas fa-arrow-right"></i> B.E.</a>
                <a href="#"> <i class="fas fa-arrow-right"></i> Reviews </a>
                
            </div>
    
            <div class="box">
                <h3>extra links</h3>
                <a href="#"> <i class="fas fa-arrow-right"></i> account info </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> most referred </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> privacy policy </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> reselling policy </a>
                <a href="#"> <i class="fas fa-arrow-right"></i> our serivces </a>
            </div>
    
            <div class="box">
                <h3>contact info</h3>
                <a href="#"> <i class="fas fa-phone"></i> 9845645679 </a>
                <a href="#"> <i class="fas fa-phone"></i> 9765461542 </a>
                <a href="#"> <i class="fas fa-envelope"></i> bookwarm@gamil.com </a>
                
            </div>
            
        </div>
    
        <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
            <a href="https://github.com/Mini-project01/bookstore-management-system" class="fab fa-github"></a>
        </div>
    
        <div class="credit"> created by <span><strong>VASM</strong></span> | all rights reserved! </div>
    
    </section>
</footer> 
    <!------------------------- FOOTER SECTION ENDS --------------------------->

</body>
</html>
