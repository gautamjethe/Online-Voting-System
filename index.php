<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="theme-color" content="#FF4500">
    <title>Online Voting Platform</title>

    <link rel="icon" type="image/png" href="img/favicon.png" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>
<script type="module" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.esm.js"></script>
    <script src="js/bundle.js"></script>

    <div id="pageloader" class="pageloader"></div>
    <div id="infraloader" class="infraloader is-active"></div>    
    <section class="hero is-fullheight is-default is-bold">
    <nav x-data="initNavbar()" class="navbar is-fresh is-transparent no-shadow" role="navigation"
            aria-label="main navigation">
            <div class="container">
                <div class="navbar-brand">
                    <a class="navbar-item" href="#">
                        <img src="free-logo-a3qrwflcnn-8m7pfgqbk1.jpg" alt="" width="100%" height="200%">
                    </a>
        
                    
        
                    <div class="navbar-burger" @click="openMobileMenu()">
                        <span class="menu-toggle">
                            <span class="icon-box-toggle" :class="{
                                    'active': mobileOpen,
                                    '': !mobileOpen
                                }">
                                <span class="rotate">
                                    <i class="icon-line-top"></i>
                                    <i class="icon-line-center"></i>
                                    <i class="icon-line-bottom"></i>
                                </span>
                            </span>
                    </div>
                </div>
        
                <div id="navbar-menu" class="navbar-menu is-static" :class="{
                        'is-active': mobileOpen,
                        '': !mobileOpen
                    }">
        
                    <div class="navbar-start">
                        
                    </div>
        
                    <div class="navbar-end">
                        <a href="/general" class="navbar-item is-secondary">
                            General Secretary
                        </a>
                        <a href="/technical" class="navbar-item is-secondary">
                        Technical Secretary
                        </a>
                        <a href="/cultural" class="navbar-item is-secondary">
                            Cultural Secretary
                        </a>
                        <a href="/sports" class="navbar-item is-secondary">
                        Sports Secretary
                        </a>
                        <a href="/media" class="navbar-item is-secondary">
                            Media Secretary
                        </a>
                        <a href="/finance" class="navbar-item is-secondary">
                        Finance Secretary
                        </a>
                        
                        <a href="/general"class="navbar-item">
                            <span class="button signup-button rounded secondary-btn raised">
                                Login
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
        <nav x-data="initNavbar()"  x-on:scroll.window="scroll()" id="navbar-clone" class="navbar is-fresh is-transparent" role="navigation" aria-label="main navigation" :class="{
                'is-active': scrolled,
                '': !scrolled
            }">
            <div class="container">
                <div class="navbar-brand">
                    <a class="navbar-item" href="#">
                        <img src="free-logo-a3qrwflcnn-8m7pfgqbk1.jpg" alt="" width="112" height="28">
                    </a>
        
                    <a @click="openSidebar()" class="navbar-item is-hidden-desktop is-hidden-tablet">
                        <div id="menu-icon-wrapper" class="menu-icon-wrapper" style="visibility: visible;" :class="{
                                'open': $store.app.isSiderbarOpen,
                                '': !$store.app.isSiderbarOpen
                            }">
                            <svg width="1000px" height="1000px">
                                <path class="path1" d="M 300 400 L 700 400 C 900 400 900 750 600 850 A 400 400 0 0 1 200 200 L 800 800"></path>
                                <path class="path2" d="M 300 500 L 700 500"></path>
                                <path class="path3" d="M 700 600 L 300 600 C 100 600 100 200 400 150 A 400 380 0 1 1 200 800 L 800 200"></path>
                            </svg>
                            <button id="menu-icon-trigger" class="menu-icon-trigger"></button>
                        </div>
                    </a>
        
                    <div class="navbar-burger" @click="openMobileMenu()">
                        <span class="menu-toggle">
                            <span class="icon-box-toggle" :class="{
                                    'active': mobileOpen,
                                    '': !mobileOpen
                                }">
                                <span class="rotate">
                                    <i class="icon-line-top"></i>
                                    <i class="icon-line-center"></i>
                                    <i class="icon-line-bottom"></i>
                                </span>
                            </span>
                        </span>
                    </div>
                </div>
        
                <div id="cloned-navbar-menu" class="navbar-menu is-fixed" :class="{
                        'is-active': mobileOpen,
                        '': !mobileOpen
                    }">
        
                    <div class="navbar-start">
                        
                    </div>
        
                    <div class="navbar-end">
                    <a href="/general" class="navbar-item is-secondary">
                            General Secretary
                        </a>
                        <a href="/technical" class="navbar-item is-secondary">
                        Technical Secretary
                        </a>
                        <a href="/cultural" class="navbar-item is-secondary">
                            Cultural Secretary
                        </a>
                        <a href="/sports" class="navbar-item is-secondary">
                        Sports Secretary
                        </a>
                        <a href="/media" class="navbar-item is-secondary">
                            Media Secretary
                        </a>
                        <a href="/finance" class="navbar-item is-secondary">
                        Finance Secretary
                        </a>
                        <a href="/general"class="navbar-item">
                            <span class="button signup-button rounded secondary-btn raised">
                                Login
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </nav>
        <div class="hero-body">
            <div class="container">
                <div class="columns is-vcentered">
                    <div class="column is-5 is-offset-1 landing-caption">
                        <h1 class="title is-1 is-bold is-spaced">
                            Voting Platform
                        </h1>
                        <h2 class="subtitle is-5 is-muted">VOTE, it’s your right!</h2>
                        <div class="button-wrap">
                            <a href="/general" class="button cta is-rounded primary-btn raised">
                                Get Started
                            </a>
                            
                        </div>
                    </div>
                    <div class="column is-5">
                        <figure class="image is-4by3">
                            <img src="img/illustrations/worker.svg" alt="Description">
                        </figure>
                    </div>
    
                </div>
            </div>
        </div>
    
        
    </section>   
    <section class="section section-feature-grey is-medium">
        <div class="container">
            <div class="title-wrapper has-text-centered">
                <h2 class="title is-2">Great Power Comes </h2>
                <h3 class="subtitle is-5 is-muted">With great Responsability</h3>
                <div class="divider is-centered"></div>
            </div>
    
            <div class="content-wrapper">
                <div class="columns">
                    <div class="column is-one-third">
                        <div class="feature-card is-bordered has-text-centered is-feature-reveal">
                            <div class="card-title">
                                <h4>Online Elections</h4>
                            </div>
                            <div class="card-icon">
                                <img src="img/icons/web.svg">
                            </div>
                            <div class="card-text">
                                <p>Allows user to login from anywhere easily with any device.</p>
                            </div>
                            
                        </div>
                    </div>
                    <div class="column">
                        <div class="feature-card is-bordered has-text-centered is-feature-reveal">
                            <div class="card-title">
                                <h4>Automated Ballot Counts</h4>
                            </div>
                            <div class="card-icon">
                                <img src="img/icons/rocket.svg">
                            </div>
                            <div class="card-text">
                                <p>Count ranked ballots that you've already collected (using e.g., paper ballots or your own vote collection software).</p>
                            </div>
                            
                        </div>
                    </div>
                    <div class="column">
                        <div class="feature-card is-bordered has-text-centered is-feature-reveal">
                            <div class="card-title">
                                <h4>Easy to Set Up and Vote</h4>
                            </div>
                            <div class="card-icon">
                                <img src="img/icons/light-bulb.svg">
                            </div>
                            <div class="card-text">
                                <p>We make it super easy for you to set up an election and for your voters to cast their votes.</p>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>    
    <section class="section is-medium">
        <div class="container">
            <div class="title-wrapper has-text-centered">
                <h2 class="title is-2">Awesome Features</h2>
                <h3 class="subtitle is-5 is-muted">To make you super happy</h3>
                <div class="divider is-centered"></div>
            </div>
    
            <div class="columns is-vcentered side-feature mt-60">
                <div class="column is-4 is-offset-2">
                    <h3 class="title is-3 mb-10 is-title-reveal">Transparent Results</h3>
                    <p class="subtitle is-5 is-muted">Voters love the clear and transparent results Voting Platform will enable you to provide them with. At the end of your election, you'll get the raw ballots as well as a detailed report with counts automatically done for you. </p>
                </div>
                <div class="column is-5">
                    <img src="img/illustrations/features/feature-1.png" alt="">
                </div>
            </div>
    
            
          </div>
    </section>  
    <section class="section section-feature-grey is-medium">
        <div class="container">
    
            <div class="columns is-vcentered app-side">
                <div class="column is-5 is-offset-1">
                    <h3 class="title is-3 is-spaced is-title-reveal">An intuitive app</h3>
                    <p class="subtitle is-5 is-muted">Our voting pages are encrypted so your voters can enjoy complete security and privacy while voting.</p>
                </div>
                <div class="column is-10">
                    <div class="has-text-centered">
                        <img class="pushed-image" src="img/illustrations/mockups/app-mockup.png">
                    </div>
                </div>
            </div>
        </div>
    </section> 




<br>






<footer class="footer footer-dark">
        <div class="container">
            <div class="columns">
                <div class="column">
                    
                </div>
                <div class="column">
                    <div class="footer-column">
                        <div class="footer-header">
                            <h3>Services</h3>
                        </div>
                        <ul class="link-list">
                            <li><a href="/general">General Secretary</a></li>
                            <li><a href="/cultural">Cultural Secretary</a></li>
                            <li><a href="/technical">Technical Secretary</a></li>
                            <li><a href="/sports">Sports Secretary</a></li>
                            <li><a href="/media">Media Secretary</a></li>
                            <li><a href="/finance">Finance Secretary</a></li>
                        </ul>
                    </div>
                </div>
                
                
                <div class="column">
                    <div class="footer-column">
                        <div class="footer-header">
                            
                            <nav class="level is-mobile">
                                <div class="level-left">
                                    
                                </div>
                            </nav>
    
                            <a  >
                                <img src="img/logo/made-with-bulma.png" alt="Made with Bulma" width="128" height="24">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div x-data="initBackToTop()" x-on:scroll.window="scroll($event)" @click="goTop($event)" id="backtotop"><a href="javascript:" :class="{
        'visible': scrolled,
        '': !scrolled
    }"></a></div>    
        
        
    </div>
