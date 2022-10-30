<html>
    <head>
        <title>Skateboard Unity</title>
        <meta charset="UTF-8">
        <meta name="author" content="Nicolas">
        <meta name="description" content="Ce site est sur le thème vaste du skate :)">
        <link rel="stylesheet" href="../css/default.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="../css/contact.css" type="text/css" media="screen" />
        <link rel="icon" type="image/x-icon" href="../src/pictures/skateIcon.ico">
    </head>
    <body>
        <header>
            <div id="headerMenu">
                <h2><a href="../index.html">Home</a></h2>
                <h2><a href="../html/news.html">News</a></h2>
                <div class="dropdownBox">
                    <h2 class="menuInfosBtn">More about us</h2>
                    <div class="menuInfos">
                        <h2><a class="moreInfos" href="../html/contact.html">Contact Us</a></h2>
                        <h2><a class="moreInfos" href="../html/media.html">Medias and Photos</a></h2>
                    </div>
                </div>
                <div class="socialLinks">
                    <a href="instagram.com">
                        <img id="insta" src="../src/pictures/instaIc.png" alt="Icon">
                    </a>
                    <a href="snapchat.com">
                        <img id="snap" src="../src/pictures/snapIc.png" alt="Icon">
                    </a>
                    <a href="twitter.com">
                        <img id="twitter" src="../src/pictures/twitterIc.png" alt="Icon">
                    </a>
                </div>
            </div>
        </header>
        	<?php
            echo('<div class="topPart"><h1 id="title"><u>'.$_POST["surname"].', you completed the form with the following informations:</u></h1><br/></div>');
            echo('<div class="infos">');
	        echo("Surname: ");
	        echo($_POST['surname']);
            echo("<br/>");
            echo("Name: ");
            echo($_POST['name']);
            echo("<br/>");
	        echo "Email: ";
	        echo($_POST['email']);
            echo("<br/>");
	        echo "Reason of contact: ";
	        echo($_POST['reason']);
            echo("<br/>");
	        echo "State of the demand: ";
	        echo($_POST['demand']);
            echo("<br/>");
	        echo "Description: ";
	        echo($_POST['box']);
            echo("<br/>");
            echo("</div>");
	        ?>
        <br/>
        <br/>
    </body>
    <footer>
        <br/>
        <br/>
        <p>2022, Blondeau Nicolas Groupe 1 - All rights reserved. <a href="../html/siteMap.html">Site Map</a></p>
    </footer>
</html>