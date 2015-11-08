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
                <li>Choose your book</li>
            </ul>
        </div>
        <div id="col_1" role="main">
            <h1 class="inline_block">Choose your book</h1>
            <h2 class="h3 inline_block">From Our Selection</h2>
            <p>Choose the books you want, check the boxes, and click "Add to Basket"</p>
            <form action="#" method="post" id="bab_form" class="basket_add clearfix">
                <fieldset class="bab_item" id="bab-CL" data-legend="Textbook Title">
                    <legend class="hidden">Textbook Title</legend>
                    <img src="images/Orgo.jpg" alt="" height="160" width="160">
                    <label for="Instructor">Instructor</label>
                    <label for="Semester">Semester</label>
                    <p></p>
                    <label for="Condition">Condition</label>
                    <label for="Price">Price</label>
                    <p></p>
                    <label for="qtyCL">ISBN</label>
                    <input type="checkbox" name="check" value="check">Buy it!
                </fieldset>
                <fieldset class="bab_item" id="bab-S" data-legend="Textbook Title">
                    <legend class="hidden">Textbook Title</legend>
                    <img src="images/Orgo2.jpg" alt="" height="160" width="160">
                    <label for="Instructor">Instructor</label>
                    <label for="Semester">Semester</label>
                    <p></p>
                    <label for="Condition">Condition</label>
                    <label for="Price">Price</label>
                    <p></p>
                    <label for="qtyCL">ISBN</label>
                    <input type="hidden" name="cost_Sunflowers" value="3">
                    <input type="hidden" name="image_Sunflowers" value="160_sunflower_146748795">
                    <input type="checkbox" name="check" value="check">Buy it!
                </fieldset>
                <fieldset class="bab_item" id="bab-I" data-legend="Textbook Title">
                    <legend class="hidden">Textbook Title</legend>
                    <img src="images/Orgo3.jpg" alt="" height="160" width="160">
                    <label for="Instructor">Instructor</label>
                    <label for="Semester">Semester</label>
                    <p></p>
                    <label for="Condition">Condition</label>
                    <label for="Price">Price</label>
                    <p></p>
                    <label for="qtyCL">ISBN</label>
                    <input type="hidden" name="cost_Iris" value="2">
                    <input type="hidden" name="image_Iris" value="160_iris_purple_121549009">
                    <input type="checkbox" name="check" value="check">Buy it!
                </fieldset>
                <fieldset class="bab_item" id="bab-PL" data-legend="Textbook Title">
                    <legend class="hidden">Textbook Title</legend>
                    <img src="images/Orgo4.jpg" alt="" height="160" width="160">
                    <label for="Instructor">Instructor</label>
                    <label for="Semester">Semester</label>
                    <p></p>
                    <label for="Condition">Condition</label>
                    <label for="Price">Price</label>
                    <p></p>
                    <label for="qtyCL">ISBN</label>
                    <input type="checkbox" name="check" value="check">Buy it!
                </fieldset>
                <fieldset class="bab_item" id="bab-DN" data-legend="Textbook Title">
                    <legend class="hidden">Textbook Title</legend>
                    <img src="images/Orgo5.jpg" alt="" height="160" width="160">
                    <label for="Instructor">Instructor</label>
                    <label for="Semester">Semester</label>
                    <p></p>
                    <label for="Condition">Condition</label>
                    <label for="Price">Price</label>
                    <p></p>
                    <label for="qtyCL">ISBN</label>
                    <input type="checkbox" name="check" value="check">Buy it!
                </fieldset>
                <fieldset class="bab_item" id="bab-GD" data-legend="Textbook Title">
                    <legend class="hidden">Textbook Title</legend>
                    <img src="images/Orgo6.jpg" alt="" height="160" width="160">
                    <p>Instructor &nbsp;Spring 2015</p>
                    <label for="Instructor">Instructor</label>
                    <label for="Semester">Semester</label>
                    <p></p>
                    <label for="Condition">Condition</label>
                    <label for="Price">Price</label>
                    <p></p>
                    <label for="qtyCL">ISBN</label>
                    <input type="checkbox" name="check" value="check">Buy it!
                </fieldset>

                <div id="totals">
                    <input class="btn checkout" value="Add to Basket" type="submit" name="bouquet">
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