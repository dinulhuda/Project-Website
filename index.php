<?php
    session_start();

    $_POST['type'] = "Guest";
    $_POST['username'] = "admin";
    $_POST['password'] = "1234";
	
	session_write_close();

    if(isset($_POST['Login']) && !empty($_POST['uname']) && !empty($_POST['pswd'])){
        if($_POST['uname'] == 'user' && $_POST['pswd'] == '1234'){
            $_POST['valid'] = true;
            $_POST['timeout'] = time();
            $_POST['username'] = 'admin';
        }
    }
?>


<!DOCTYPE html>
<html>

<head>
    <title>Assignment 2 CPT211</title>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!--header-->
    <div id="main" class="row">
        <header>
            <nav>
                <ul>
                    <li><img src="images/usm.png" alt="" class="logo"></li>
                    <li> <a href="#main">Home</a> </li>
                    <li> <a href="#intro">Introduction</a> </li>
                    <li> <a href="#numSys">Number Systems</a> </li>
                    <li> <a href="#compArith">Computer Arithmetic</a> </li>
                    <li> <a href="#about">About Us</a> </li>
                    <li> 
                        <?php 
						session_start();
						if(isset($_POST['uname'])) : ?>
                            <button>Hi, Admin<br><br><a href="logout.php">Logout</a></button>
                        
                        <?php else : ?>
                            <button onclick="document.getElementById('login').style.display='block'">
                            <img src="images/profile.png" class="profile" alt="login"><br>Hi, Guest</br></button>

                        <?php endif ?>
                    </li>
                </ul>
            </nav>
        </header>

        <div class="row">
            
            <div class="six">
                <video width="520" height="340" autoplay muted loop class="video">
                    <source src="video/The Power of Computer Science.mp4" type="video/mp4">
                </video> 
            </div>

            <div class="five">
                <div class="caption">
                    <h1>CST131 - Computer Organization</h1>
                    <p> Computer Organization introduces the structure and functional units of the computer that are responsible for 
                        storing and processing information. It focuses on the functioning of individual components, interaction between 
                        components, techniques and technologies used, various number systems and simple digital logic circuits.</p>
                </div>
            </div>

        </div>

        <div class="row">
            <input type="image" src="images/arrow-down.png" id="arrow-down" Title="See More">
        </div>
    </div>

    <!--Introduction-->
    <section>
        <div id="intro" class="row">
            
            <div id="slide1" class="slideshow-container">
                <div class="mySlides" style="background-image: url(images/intro.jpg); background-repeat: no-repeat; background-size: cover;">
                    <p class="headslide">INTRODUCTION TO<br>COMPUTER ORGANISATION</p>
                </div>
                <div class="mySlides fade">
                    <p>ARCHITECTURE AND ORGANISATION</p>
                    <p>->Architecture refers to the attributes of a computer that visible to the programmer.</p>
                    <p>->Organisation refers to how the architectural specification is realized/implimneted.</p>
                </div>
                 <div class="mySlides fade">
                    <p>STRUCTURE AND FUNCTION</p>
                    <p>->Structure is the way which components relate to each other</p>
                    <p>->Function is the operation of the individual component as part of the structure</p>
                </div>
                <div class="mySlides fade">
                    <p>MAIN COMPUTER STRUCTURE</p>
                        <ul ><li>Central Processing Unit (CPU)</li>
                            <li>Main Memory</li>
                            <li>I/O</li>
                            <li>System Interconnection</li>
                        </ul>
                </div>
                <div class="mySlides fade">
                    <p>MAIN CPU STRUCTURE</p>
                        <ul ><li>Arithmetic and Logic Unit (ALU)</li>
                            <li>Registers</li>
                            <li>Control Unit</li>
                            <li>Internal CPU Interconnection</li>
                        </ul>
                </div>
                <div class="mySlides fade">
                    <p>MAIN FUNCTIONS OF A COMPUTER</p>
                        <ul ><li>Data Movement</li>
                            <li>Data Storage</li>
                            <li>Control</li>
                            <li>Data Processing</li>
                        </ul>
                </div>
                <div class="mySlides fade">
                    <p>CLOUD COMPUTING</p>
                    <p>Internet-connected infrastructure</p>
                </div>
                <div class="mySlides fade">
                    <p>PERFORMANCE ASSESSMENT</p>
                    <p>Depends on instructure set, choice of implementation language, efficiency of the compiler and skill of the programming done.</p>
                </div>

                <!--Next/prev buttons-->
                <a class="prev" onclick="plusSlides(-1,slide1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1,slide1)">&#10095;</a>

            </div>

        </div>
    </section>

    <!--Number Systems-->
    <section>
        <div id="numSys" class="row">

            <div id="slide2" class="slideshow-container">
                <div class="mySlides" style="background-image: url(images/numsys.jpg); background-repeat: no-repeat; background-size: cover;">
                    <p class="headslide">NUMBER SYSTEMS</p>
                </div>
                <div class="mySlides fade">
                    <p>DECIMAL SYSTEMS</p>
                    <ul>
                        <li>Decimal systems is used with decimal digits: 0,1,2,3,4,5,6,7,8,9</li>
                        <li>A decimal system is a base or radix 10.</li>
                        <li>Example: 83 = (8 × 10¹) + (3 × 100)</li>
                    </ul>
                </div>
                <div class="mySlides fade">
                    <p>BINARY SYSTEM</p>
                    <ul>
                        <li>Binary system only consists of two digits, 0 and 1.</li>
                        <li>For larger numbers, each digit in a binary number has a value depending on its position (as in decimal system)</li>
                        <li>Example: 102 = (1 × 2¹) + (0 × 20) = 210</li>
                    </ul>
                </div>
                <div class="mySlides fade">
                    <p>CHARACTER CODE</p>
                    <ul>
                        <li>Character code defines how the bits in a stream of text are mapped to the characters they represent</li>
                        <li>The most common one is ASCII code, but there are also BCD code and 8-bit EBCDIC.</li>
                    </ul>
                </div>

                <!--Next/prev buttons-->
                <a class="prev" onclick="plusSlides(-1,slide2)">&#10094;</a>
                <a class="next" onclick="plusSlides(1,slide2)">&#10095;</a>

            </div>

        </div>
    </section>

    <!--Computer Arithmetic-->
    <section>
        <div id="compArith" class="row">

            <div id="slide3" class="slideshow-container">
                <div class="mySlides" style="background-image: url(images/comparith.png); background-repeat: no-repeat; background-size: cover;">
                    <p class="headslide">COMPUTER ARITHMETIC</p>
                </div>
                 <div class="mySlides fade">
                    <p>INTEGER REPRESENTATION</p>
                    <ul>
                        <li>Only have 0 & 1 to represent everything</li>
                        <li>Binary digit or a bit</li>
                        <li>No minus sign, no period</li>
                        <li>Two ways: Sign-Magnitude and Two’s compliment</li>
                    </ul>
                </div>
                <div class="mySlides fade">
                    <p>Two’s Compliment</p>
                    <ul>
                        <li>Most significant bit is sign bit</li>
                        <li>One representation of zero</li>
                        <li>Example: +0 = 00000000</li>
                    </ul>
                </div>
                <div class="mySlides fade">
                    <p>Addition and Subtraction</p>
                    <ul>
                        <li>Normal binary addition</li>
                        <li>Monitor sign bit for overflow <br>
                            Overflow rule: if two number added, and both positive or both negative,
                            overflow occurs if and only if result has opposite sign</li>
                        <li>Subtraction rule: take twos compliment of subtrahend and add to minuend</li>
                    </ul>
                </div>
                <div class="mySlides fade">
                    <p>Multiplication</p>
                    <ul>
                        <li>Work out partial product for each digit</li>
                        <li>Take care with place value (column)</li>
                        <li>Add partial products</li>
                    </ul>
                </div>
                <div class="mySlides fade">
                    <p>Multiplication</p>
                    <ul>
                        <li>How can this be more efficient?</li>
                        <li>Perform running addition on partial products</li>
                        <li>Save time on generation of partial products</li>
                        <li>example: For each 0 on multiplier, only a shift is required</li>
                    </ul>
                </div>
                <div class="mySlides fade">
                    <p>Division</p>
                    <ul>
                        <li>To deal with negative numbers</li>
                        <li>Convert the operands into unsigned values</li>
                        <li>Account for the signs by complementation where needed</li>
                    </ul>
                </div>

                <!--Next/prev buttons-->
                <a class="prev" onclick="plusSlides(-1,slide3)">&#10094;</a>
                <a class="next" onclick="plusSlides(1,slide3)">&#10095;</a>

            </div>

        </div>
    </section>

    <!--About-->
    <section>
        <div id="about" class="row">
            <div class="eleven">
                <h1 style="text-align: center; font-family: 'Lucida Sans'; padding-left:20px">About Us</h1>
            </div>
            <div class="four">
                <div class="flip-card-container">
                    <div class="flip-card">
                        <div class="flip-card-front">
                            <img src="images/adlifuddin.jpg" alt="adli" style="border-radius: 0.5rem;">
                        </div>
                        
                        <div class="flip-card-back">
                            <p>
                                Muhammad Adlifuddin Bin Zanizam <br><br> 141288
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="four">
                <div class="flip-card-container">
                    <div class="flip-card">
                        <div class="flip-card-front">
                            <img src="images/farhana.jpg" alt="farhana" style="border-radius: 0.5rem;">
                        </div>
                        
                        <div class="flip-card-back">
                            <p>
                                Farhana Zulaikha Binti Fadzli <br><br> 143949
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="three">
                <div class="flip-card-container">
                    <div class="flip-card">
                        <div class="flip-card-front">
                            <img src="images/dinul.jpg" alt="dinul" style="border-radius: 0.5rem;">
                        </div>
                        
                        <div class="flip-card-back">
                            <p>
                                Dinulhuda Nabilah Binti Ahmad Fuad <br><br> 143302
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="five">
                <div class="flip-card-container" style="margin-left:300px">
                    <div class="flip-card">
                        <div class="flip-card-front">
                            <img src="images/zamil.jpg" alt="izzati" style="border-radius: 0.5rem;">
                        </div>
                        
                        <div class="flip-card-back">
                            <p>
                                Zamil Haikal Bin Zamri <br><br> 141654
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="five">
                <div class="flip-card-container" style="margin-left:190px">
                    <div class="flip-card">
                        <div class="flip-card-front">
                         <img src="images/izzati.jpg" alt="izzati" style="border-radius: 0.5rem;">
                        </div>
                        
                        <div class="flip-card-back">
                            <p>
                                Nurul Izzati bt Roslin <br><br> 144098
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!--footer-->
    <div class="row">
        <footer>
            <p>Copyright © 2019 - Universiti Sains Malaysia</p>
        </footer>
    </div>

    <!--login form-->
    <div id="login" class="form">
  
        <form class="form-content animate" method="post">
                
            <div class="imgcontainer">
                <span onclick="document.getElementById('login').style.display='none'" class="close" title="Close PopUp">&times;</span>
                <img src="images/usm.png" alt="usm" class="box-logo">
                <h3 style="text-align:center">Identity Single Sign On</h3>
            </div>

            <div>
                <input type="text" placeholder="Username = admin" name="uname">
                <input type="password" placeholder="Password = 1234" name="pswd">        
                <input type="submit" name="" value="Login">
            </div>
            
        </form>
    
    </div>

    <script src="func.js"></script>
</body>
</html>