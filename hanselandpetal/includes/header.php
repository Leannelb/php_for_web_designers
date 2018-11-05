<?php
$siteRoot = '/hanselandpetal'; 
//date_default_timezone_set('Europe/Malta');//this is here as whilst in dev mode the root is 'localhost' once deployed the root will then be in 
?>
<!-- Header aka nav section is called via require as without it, the page is useless  -->
<!-- Convert all the links inside the include file as links relative to root, therefore starting with a / -->
<!-- Convert to site root relative links, therefore starting with a / and including a full route-->
<!-- This works fine if using a virtual host OR the top level of your remote server, -->
<!-- However, if your testing folder is in a subfolder of the web servers root folder you need to adopt a differnt approach
 Because I'm working on an apache server the site root is actually localhost, NOT hanselandpetal.
 Therefore for the links to route correctly to the right places, hanselandpetal must be part of the route-->
<!-- One thing I could do is add hanselandpetal to ever link i.e. /hanselandpetal/ probelm arises when uploading to the remote server then
you have ot go back and take this out from everwhere, the solution is then to make a var at the top of the php include file holding this 
route which, when transferred to the server then can be deleted like this: locally: $siteRoot = '/hanselandpetal';  then on upload $siteRoot = ''; and then it works  
General Directories Information:
Can define any route in a file system via the full path

i.e
 -->

 <div id="header" role="banner">
        <h1 id="logo"><a href="exercises/ch02/02_01/hanselandpetal/index.php"><img src="/exercises/ch02/02_01/hanselandpetal/logo.png" alt="Hansel and Petal" height="124" width="207"></a></h1>
        <div class="inner">
            <ul id="quick_links" class="reset menu">
                <li><a href="#">My Account</a></li>
                <li><a href="order.php">View My Order</a></li>
                <li><a href="#">Customer Service</a></li>
            </ul>
            <form action="#" method="get" id="quick_search" role="search">
                <input id="quickSearch" class="text white" placeholder="Find the perfect flowers or plants…" type="search">
                <span class="btn_icon icon_search">
                <input value="Search" type="submit">
                </span>
            </form>
            <p id="offer">FREE Shipping on orders over $75.00!</p>
        </div>
    </div>
    <div id="nav_main" role="navigation" class="reset menu pull_out">
        <ul>
            <li> <a href="arrangements.php" class="parent"><span>Hello</span></a>
                <div>
                    <ul>
                        <li> <a href="#">Our Most Popular Flowers</a>
                            <ul>
                                <li><a href="#">Daisies</a></li>
                                <li><a href="#">Tulips</a></li>
                                <li><a href="#">Roses</a></li>
                                <li><a href="#">Lilies</a></li>
                                <li><a href="#">Irises</a></li>
                                <li><a href="#">Mums</a></li>
                                <li><a href="#">Carnations</a></li>
                            </ul>
                        </li>
                        <li> <a href="#">Tropicals</a>
                            <ul>
                                <li><a href="#">Gingers</a></li>
                                <li><a href="#">Heliconias</a></li>
                                <li><a href="#">Tuberose</a></li>
                                <li><a href="#">Ferns</a></li>
                            </ul>
                        </li>
                        <li> <a href="#">Orchids</a>
                            <ul>
                                <li><a href="#">Phalaenopsis</a></li>
                                <li><a href="#">Dendrobium</a></li>
                                <li><a href="#">Oncidium</a></li>
                                <li><a href="#">Cattleya</a></li>
                                <li><a href="#">Cymbidium</a></li>
                            </ul>
                        </li>
                        <li> <a href="mixed/mixed.php">Mixed Arrangements</a>
                            <ul>
                                <li><a href="#">Spring Pastels</a></li>
                                <li><a href="#">Autumn Warmth</a></li>
                                <li><a href="#">Red, White, &amp; Blue</a></li>
                                <li><a href="#">All White</a></li>
                                <li><a href="mixed/roses.php">Mixed Roses</a></li>
                                <li><a href="#">Mixed Irises</a></li>
                                <li><a href="#">Daisies &amp; More Daisies</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </li>
            <li><a href="#"><span>Live Plants</span></a></li>
            <li><a href="bouquet.php"><span>Build-a-Bouquet</span></a></li>
            <li><a href="#"><span>Special Events</span></a></li>
            <li> <a href="#" class="parent"><span>Care Tips</span></a>
                <div class="single_column">
                    <ul>
                        <li><a href="#">Caring for Mixed Bouquets</a></li>
                        <li><a href="#">Caring for Roses</a></li>
                        <li><a href="#">Caring for Tropical Flowers</a></li>
                        <li><a href="#">Caring for House Plants</a></li>
                        <li><a href="care/orchids.php">Caring for Orchids</a></li>
                    </ul>
                </div>
            </li>
            <li><a href="#"><span>Eco-Conscious</span></a></li>
            <li><a href="designers.php"><span>Our Designers</span></a></li>
        </ul>
    </div>