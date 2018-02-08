<!DOCTYPE html>
<html lang="en">
<!--

Hw1 : HTML & CSS
History of Video Game Graphics

-->

<!-- This is the head -->
<!-- All styles and javascript go inside the head -->
    <head>
        <meta charset="utf-8" />
        <title> History of Video Game Graphics </title>
        <style>
            @import url('https://fonts.googleapis.com/css?family=Lobster');
            @import url('https://fonts.googleapis.com/css?family=Anton');
        </style>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
    </head>
<!-- closing head -->

    <!-- This is the body -->
    <!-- This is where we place the content of our website -->
    <body>
        
        <header>
            <h1> History of Video Game Graphics </h1>
            <br/>
        </header>
        
        <nav>
            <hr>
            <select onchange="la(this.value)">
                <option disabled selected>Where to?</option>
                <option value="index.php">Home</option>
                <option value="beginnings.html">Beginnings</option>
                <option value="2d.html">2D Graphics</option>
                <option value="3d.html">3D Graphics</option>
            </select>
            
            <script>
                function la(src){
                    window.location=src;
                }
            </script>

        </nav>
        
        <br /><br />
        
        <main>
                
                <div id="welcomeText">
                    <figure id="banner">
                        <img src="img/banner1.jpg" alt="banner" />
                    </figure>

                    <br/>
                    <p>This website will outline the advancements in computer graphics from its begginings in the 1950's till its most recent state.</p>
                    <p>We will cover the the major advances in technology and their affects in the industry.</p>
                    <p>We will also cover the more popular and best selling consoles of each generations and their individual features.</p>
                    <br /> <br /> <br />
                    
                    <h2><strong>Let's Start!</strong></h2><br />
                    <a href="beginnings.html">Beginnings--></a></br/></br>
                </div>
                
        </main>

        <!-- This is the footer -->
        <!-- The footer goes inside the body but not always -->
        <footer>
            
            <br/><br/>
            <hr>
            CST336 - Internet Programming. 2018&copy; Abatol <br />
            <p><strong>Disclaimer:</strong> The information in this webpage is used for academic purpose only.</p>
            <p><img src="https://www.prepsportswear.com/media/images/college_logos/300x300/1749151_mktg_logo.png" alt="logo"/></p>
            
            <audio autoplay loop>
                <source src="bgm.mp3">
            </audio>
            
        </footer>
        <!-- closing footer -->
        
    </body>
    <!-- closing body -->

</html>