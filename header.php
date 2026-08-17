<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freelancer Portfolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" 
    integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php wp_head(); ?>
</head>
<body>
    <header class="header">
        <div class="container">
            <div class="header-nav">
                <a href="#" class="logo">Kelvin</a>
                
                <nav id="nav" class="nav">
                    <ul class="nav-lists">
                        <li class="nav-item"><a href="#" class="nav-link active">Home</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Works</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Services</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">About</a></li>
                        <li class="nav-item"><a href="#" class="nav-link">Contact</a></li>
                    </ul>
                    <button id="nav-btn" class="nav-button"><img id="nav-btn-img" src="<?php echo get_template_directory_uri(); ?>/img/icons/nav-open.svg" alt="Nav button"></button>
                </nav>
            </div>
            <div class="header-row">
                <div class="header-content"  data-aos="fade-up">
                    <h1 class="heading">Kelvin Kramer <br> <span>Designer & Developer</span></h1>
                    <p>I’m a portrait, fashion and lifestyle photographer living In New York City. During my thirteen year tenure here.</p>
                </div>
                <div class="header-image" data-aos="fade-left">

                    <picture>
                        
                        <source media="(max-width:799px)" srcset="<?php echo get_template_directory_uri(); ?>/img/header/hero02.png">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/header/hero.png" alt="">
                    </picture>


                    
                </div>
            </div>
        </div>
    </header>