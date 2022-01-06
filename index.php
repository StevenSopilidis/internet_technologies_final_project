<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<title>WORLD OF MUSIC</title>
		<link rel="shortcut icon" type="image/jpg" href="./public/images/favicon.png">
        <link rel="stylesheet" href="./public/css/style2.css">
</head>
<body>
    <div class="dropdown">
        <nav>
            <a href="index.php"><img class="logo" src="./public/images/logo2.jpg" alt="tpt"></a>
            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="#">MUSIC BANDS</a>
                    <ul>
                        <li><a href="pf.html" target="new">Pink Floyd</a></li>
                        <li><a href="queen.html" target="new">Queen</a></li>
                        <li><a href="metallica.html" target="new">Metallica</a></li>
                    </ul>
                </li>
                <li><a href="#">SOCIAL MEDIA</a>
                    <ul>
                        <li><a href="#">Pink Floyd</a>
							<ul>
                                <li><a href="https://www.instagram.com/pinkfloyd/?hl=el" target="new">Instagram</a></li>
                                <li><a href="https://www.facebook.com/pinkfloyd" target="new">Facebook</a></li>
                                <li><a href="https://twitter.com/pinkfloyd?lang=el" target="new">Twitter</a></li>
                            </ul></li>
                        <li><a href="#">Queen</a>
							<ul>
								<li><a href="https://www.instagram.com/officialqueenmusic/?hl=el" target="new">Instagram</a></li>
								<li><a href="https://www.facebook.com/Queen" target="new">Facebook</a></li>
								<li><a href="https://twitter.com/queenwillrock?lang=el" target="new">Twitter</a></li>
							</ul>
						</li>
                        <li><a href="#">Metallica</a>
                            <ul>
                                <li><a href="https://www.instagram.com/metallica/?hl=el" target="new">Instagram</a></li>
                                <li><a href="https://www.facebook.com/Metallica" target="new">Facebook</a></li>
                                <li><a href="https://twitter.com/metallica?lang=el" target="new">Twitter</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="#">MORE</a>
					<ul>
                        <li><a href="#" target="new">Videos</a></li>
                        <li><a href="#" target="new">Tours</a></li>
					</ul>
				</li>

                <li><a href="#">ABOUT US</a></li>
            </ul>
        </nav>
    </div>

    <?php
        include "./Backend/Utils/Dbconnection.php";
        $conn = new DbConnection();

    ?>

</body>
</html>
