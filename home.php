<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css" media="screen" title="no title" charset="utf-8">
</head>

<body>
    <div class="main">
        <div class="logo">
            <img src="img/banner1.png" alt="logo" />
        </div>
        <div class="menu">
            <?php include 'navbar.html' ?>

            
                <div class="second">
                  <div class="slide">
                                <div class="w3-content w3-section" style="max-width:100%">
                         </br>

                          <img class="mySlides w3-animate-fading" src="img/pic1.jpg" style="width:100%">
                          <img class="mySlides w3-animate-fading" src="img/pic2.jpg" style="width:100%">
                          <img class="mySlides w3-animate-fading" src="img/download (1).jpg" style="width:100%">
                          <img class="mySlides w3-animate-fading" src="img/download (2).jpg" style="width:100%">
                        </div>




                        <script>
                        var myIndex = 0;
                        carousel();

                        function carousel() {
                            var i;
                            var x = document.getElementsByClassName("mySlides");
                            for (i = 0; i < x.length; i++) {
                               x[i].style.display = "none";
                            }
                            myIndex++;
                            if (myIndex > x.length) {myIndex = 1}
                            x[myIndex-1].style.display = "block";
                            setTimeout(carousel, 5000);
                        }
                        </script>








                  
                  
              </div>
                <div class="wel_mes">
                    <h2>Welcome </h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
                
            </div>

        </div <div class="welcoome">


        <//-- last part --//>
        <div class="notice">





            <div class="f_left">
                <h3><a href="#">ABOUT US</a></h3>
                <ul>
                    <li><a href="history.php">History</a>
                    </li>
                    <li><a href="vision.php">Vision </a>
                    </li>
                    <li><a href="#">Achivement</a>
                    </li>
                </ul>


            </div>
            <div class="f_mid">
                <h3><a href="#">INFORMATION</a></h3>
                <ul>
                    
                    <li><a href="facility.php">Facilities</a>
                    </li>
                </ul>



            </div>

            <div class="f3">
                <img src="img/face.png" alt="facebook" />
                <img src="img/tw.png" alt="twiter" />

            </div>

        </div>
    </div>
    </div>

    </div>
</body>

</html>