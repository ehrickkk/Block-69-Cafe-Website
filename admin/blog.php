<?php 

session_start();
include_once('partials/header.php');

?>

<link rel="stylesheet" href="css/blog.css">
<script src="scripts/script.js" defer></script>

<!--START: SLIDER-->
        <section aria-label="Newest Photos">
            <div class="carousel" data-carousel>
                <!--HTML ENTITY-->
                <div class="container">
                    <button class="carousel-button prev" data-carousel-button = "prev">&#8249;</button>
                    <button class="carousel-button next" data-carousel-button = "next">&#8250;</button>
                        <ul data-slides>
                            <li class="slide" data-active>
                                <img src="images (slider)/0.jpg" alt="">
                            </li>
                            <li class="slide">
                                <img src="images (slider)/1.png" alt="">
                            </li>
                            <li class="slide">
                                <img src="images (slider)/2.png" alt="">
                            </li>
                            <li class="slide">
                                <img src="images (slider)/3.png" alt="">
                            </li>
                            <li class="slide">
                                <img src="images (slider)/4.jpg" alt="">
                            </li>
                            <li class="slide">
                                <img src="images (slider)/5.png" alt="">
                            </li>
                            <li class="slide">
                                <img src="images (slider)/6.jpg" alt="">
                            </li>
                            <li class="slide">
                                <img src="images (slider)/7.png" alt="">
                            </li>
                            <li class="slide">
                                <img src="images (slider)/8.jpg" alt="">
                            </li>
                            <li class="slide">
                                <img src="images (slider)/9.jpg" alt="">
                            </li>
                            <li class="slide">
                                <img src="images (slider)/10.jpg" alt="">
                            </li>
                            <li class="slide">
                                <img src="images (slider)/11.jpg" alt="">
                            </li>
                            <li class="slide">
                                <img src="images (slider)/12.jpg" alt="">
                            </li>
                            <li class="slide">
                                <img src="images (slider)/13.jpg" alt="">
                            </li>
                            <li class="slide">
                                <img src="images (slider)/14.jpg" alt="">
                            </li>
                        </ul>    
                </div>
            </div>
        </section>
<!--END: SLIDER-->


<!--START: BLOG CONTENT-->
    <div class="BlogMainContainer">
        <div class="BlogDivider">
            <div class="TextContainer blog">
                <h1>Recent Post</h1>
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