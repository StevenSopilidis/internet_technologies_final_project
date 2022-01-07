<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contest</title>
	<link rel="shortcut icon" type="image/jpg" href="./public/images/favicon.png">
    <link rel="stylesheet" href="./public/css/style2.css">
    <link rel="stylesheet" href="./public/css/formstyles.css">
</head>
<body>
    <div class="dropdown">
        <nav>
            <a href="index.html"><img class="logo" src="./public/images/logo2.jpg" alt="tpt"></a>
            <ul>
                <li><a href="index.html">HOME</a></li>
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

use function PHPSTORM_META\type;

if(!array_key_exists("winner1", $_GET) || !array_key_exists("winner2", $_GET) || !array_key_exists("born2003", $_GET))
        {
            header("Location: http://localhost/first_semester_project");
        }
        echo "<h3 style='color: #ffffff; font-family: sans-serif;'>Winner1: $_GET[winner1]</h3>";
        echo "<h3 style='color: #ffffff; font-family: sans-serif;'>Winner2: $_GET[winner2]</h3>";
        $born2003 = explode(",", $_GET["born2003"]);
        echo "<br>";
        echo "<h3 style='color: #ffffff; font-family: sans-serif;'>Contestants born in 2003: </h3>";
        for ($i=0; $i < count($born2003); $i++) { 
            $count = $i + 1;
            echo "<p style='color: #ffffff; font-family: sans-serif;'>$count) $born2003[$i]</p>";
        }
        
    ?>
</body>
</html>