<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Duke Textbook Exchange</title>
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link href="styles/handp.css" rel="stylesheet" type="text/css">
</head>

<body class="no_col_2">
<div id="site">
    <div id="header" role="banner">
        <h1 id="logo"><a href="index.php"><img src="images/logo.jpg" alt="Hansel and Petal" height="124" width="207"></a></h1>
        <div class="inner">
            <ul id="quick_links" class="reset menu">
                <li><a href="#">My Account</a></li>
                <li><a href="#">Basket</a></li>
                <li><a href="sellform.php">Sell Textbooks</a></li>
            </ul>
            <form action="#" method="get" id="quick_search" role="search">
                <input id="quickSearch" class="text white" placeholder="Search by Title/Author/ISBN/Keyword..." type="search">
                <span class="btn_icon icon_search">
                <input value="Search" type="submit">
                </span>
            </form>
            <p id="offer">Textbook shopping made easy for Duke Students!</p>
        </div>
    </div>
    <div id="nav_main" role="navigation" class="reset menu pull_out">
        <ul>
            <li> <a href="designers.php" class="parent"><span>A-D</span></a>
                <div>
                    <ul>
                        <li> <a href="#">A</a>
                            <ul>
                                <li><a href="#">AMES</a></li>
                                <li><a href="#">ARABIC</a></li>
                                <li><a href="#">ARTSVIS</a></li>
                            </ul>
                        </li>
                        <li> <a href="#">B</a>
                            <ul>
                                <li><a href="#">BIOCHEM</a></li>
                                <li><a href="#">BIOLOGY</a></li>
                                <li><a href="#">BME</a></li>
                            </ul>
                        </li>
                        <li> <a href="#">C</a>
                            <ul>
                                <li><a href="#">CHEM</a></li>
                                <li><a href="#">CHINESE</a></li>
                                <li><a href="#">CULANTH</a></li>
                            </ul>
                        </li>
                        <li> <a href="#">D</a>
                            <ul>
                                <li><a href="#">DOCST</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </li>
            <li><a href="#"><span>E-H</span></a></li>
            <li><a href="#"><span>I-L</span></a></li>
            <li><a href="#"><span>M-P</span></a></li>
            <li> <a href="#"><span>Q-T</span></a>
            </li>
            <li><a href="#"><span>U-Z</span></a></li>
            <li class="current"><a href="#"><span>Test Prep</span></a></li>
        </ul>
    </div>
    <div id="content">
        <div id="breadcrumbs" class="reset menu">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li>Build a Bouquet</li>
            </ul>
        </div>
        <div id="col_1" role="main">
            <h1 class="inline_block">Sell a Textbook</h1>
            <p>Give us details to help us categorize your book</p>
            <form action="#" method="post" id="bab_form" class="basket_add clearfix">
                <fieldset class="bab_item" id="bab-CL" data-legend="Textbook for sale">
                    <div class="color">
                        <label for="colorCL">Select Department</label>
                        <!-- Blush, Yellow, Pink, Purple -->
                        <select name="color_Calla_Lilies" id="colorCL">
                            <option selected value="160_calla_blush_160337318">AMES</option>
                            <option value="160_calla_yellow_153712017">ARABIC</option>
                            <option value="160_calla_pink_119602389">ARTSVIS</option>
                            <option value="160_calla_purple_162814062">BIOCHEM</option>
                            <option value="160_calla_purple_162814062">BME</option>
                            <option value="160_calla_purple_162814062">CHEM</option>
                            <option value="160_calla_purple_162814062">CHINESE</option>                                                                                    
                        </select>
                    </div>
                    <div class="color">
                        <label for="colorCL">Select Class</label>
                        <!-- Blush, Yellow, Pink, Purple -->
                        <select name="color_Calla_Lilies" id="colorCL">
                            <option selected value="160_calla_blush_160337318">201</option>
                            <option value="160_calla_yellow_153712017">202</option>
                            <option value="160_calla_pink_119602389">393</option>
                            <option value="160_calla_purple_162814062">536</option>
                            <option value="160_calla_purple_162814062">622</option>                            
                        </select>
                    </div>
                    <div class="color">
                        <label for="colorCL">Select Semester</label>
                        <!-- Blush, Yellow, Pink, Purple -->
                        <select name="color_Calla_Lilies" id="colorCL">
                            <option selected value="160_calla_blush_160337318">Spring 2015</option>
                            <option value="160_calla_yellow_153712017">Fall 2014</option>
                            <option value="160_calla_pink_119602389">Spring 2014</option>
                            <option value="160_calla_purple_162814062">Fall 2013</option>
                        </select>
                    </div>                    
                    <div class="qty">
                        <label for="qtyCL">Instructor</label>
                        <input name="qty_Calla_Lilies" id="qtyCL" class="text" type="text">
                    </div>    
                    <div class="qty">
                        <label for="qtyCL">ISBN</label>
                        <input name="qty_Calla_Lilies" id="qtyCL" class="text" type="text">
                    </div>       
                    <div class="qty">
                        <label for="qtyCL">Price</label>
                        <input name="qty_Calla_Lilies" id="qtyCL" class="text" type="text">
                    </div>          
                    <p>
                      <label for="filename">Upload Photos (up to 3):</label>
                      <input type="file" name="filename" id="filename">
                      <input type="file" name="filename" id="filename">
                      <input type="file" name="filename" id="filename">
                    </p>                                                      
                    <input type="hidden" name="cost_Calla_Lilies" value="3">
                </fieldset>
                <div id="totals">
                    <input class="btn checkout" value="Submit" type="submit" name="bouquet">
                    </span> </div>
            </form>
        </div>
    </div>
    <div id="footer">
        <div class="row clearfix">
            
            <ul class="reset menu hover">
                <li><a href="#">My Account</a></li>
                <li><a href="#">Order Status</a></li>
                <li><a href="#">Customer Service</a></li>
                
                <li><a href="#">Shipping Information</a></li>
            </ul>
            <ul class="reset menu hover">
                <li><a href="#">About Us</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms &amp; Conditions</a></li>
            </ul>
            <img src="images/logo.jpg" alt="Hansel and Petal" height="124" width="207"> </div>
        <p id="copyright" class="reset pull_out padding" role="contentinfo"><a href="http://www.ixd.hanselandpetal.com/">© Duke University</a></p>
    <p id="disclaimer">Duke University reserved the right to persecute any unlawful buyers and sellers of Duke Textbook Exchange.</p>
    </div>
</div>
<script src="js/jquery-1.10.2.min.js"></script> 
<script src="js/scripts.js"></script>
</body>
</html>