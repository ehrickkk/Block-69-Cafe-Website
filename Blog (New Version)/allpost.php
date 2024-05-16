<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="icons/newlogo-light.png">
    <link href="https://fonts.googleapis.com/css2?family=Yeseva+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="styles/blog - all post.css">

    <title>Blog: All Content</title>
</head>
<body>
<!--START: HEADER-->
    <nav>
        <ul>
            <img src="Icons/newlogo.png" onclick="window.location.href='home.html'"
            style="cursor: pointer;" alt="">
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fa fa-bars"></i>
            </label>
            <!-- <li><a class="viewing">HOME</a></li> -->
            <li><a href="/Menu.Caday/menu.html">MENU</a></li>
            <li><a href="/BLOG.LOR/BLOG.html">BLOG</a></li>
            <li><a href="explore.html">EXPLORE</a></li>
            <li><a href="/AboutUs/about.html">ABOUT US</a></li>
        </ul>
        <div class="buttons">
            <button id="Sign-in">Sign in</button>
            <button id="Location"><a href="https://www.google.com/maps/place/Block+69+Cafe/@14.5460872,121.0606355,17z/data=!3m1!4b1!4m6!3m5!1s0x3397c9fe4b30bff5:0x2955bb3403b20118!8m2!3d14.546082!4d121.0632104!16s%2Fg%2F11tcfrxnrq?entry=ttu">Location</a></button>
        </div>
    </nav>
<!--END  : HEADER-->

<!--START: BLOG CONTENT-->
<div class="BlogMainContainer">
    <div class="BlogDivider">
        <div class="TextContainer blog">
            <h1>Blog: All Content</h1>
        </div>
        <div class="ButtonContainer">
            <button onclick="window.open('Blog - All Post.html', '_blank')">SEE ALL</button>
        </div>
        <hr>
    </div>
    
    <div class="BlogContainer">
        <div class="blog">
            <img src="images (blog)/1_workshop.png" alt="">
            <h2>Cafe’s First Workshop: Polymer</h2>
            <button onclick="window.open('indivblog1.html', '_blank')">Read More</button>
        </div>
        <div class="blog">
            <img src="images (blog)/2_boardgames.jpg" alt="">
            <h2>Block 69 Cafe: Board Games</h2>
            <button onclick="window.open('indivblog2.html', '_blank')">Read More</button>
        </div>
        <div class="blog">
            <img src="images (blog)/3_newfeatures.png">
            <h2>Block 69 Cafe: New Features</h2>
            <button onclick="window.open('indivblog3.html', '_blank')">Read More</button>
        </div>
    </div>         
    
    <div class="BlogContainer">
        <div class="blog">
            <img src="images (blog)/1_workshop.png" alt="">
            <h2>Cafe’s First Workshop: Polymer</h2>
            <button onclick="window.open('indivblog1.html', '_blank')">Read More</button>
        </div>
        <div class="blog">
            <img src="images (blog)/2_boardgames.jpg" alt="">
            <h2>Block 69 Cafe: Board Games</h2>
            <button onclick="window.open('indivblog2.html', '_blank')">Read More</button>
        </div>
        <div class="blog">
            <img src="images (blog)/3_newfeatures.png">
            <h2>Block 69 Cafe: New Features</h2>
            <button onclick="window.open('indivblog3.html', '_blank')">Read More</button>
        </div>
    </div>    
</div>
<!--END: BLOG CONTENT-->



</body>
</html>