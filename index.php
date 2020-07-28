<Doctype html>
    <html>
        <head>
            <?php wp_head(); ?>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
            <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/designsystem.css">            
            <script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
            <script src="<?php echo get_template_directory_uri(); ?>/js/html2canvas.min.js"></script>
            <script src="<?php echo get_template_directory_uri(); ?>/js/chance.min.js"></script>
            <link rel="stylesheet" id="site-css" href="<?php echo get_template_directory_uri(); ?>/css/whitehouse.css" type="text/css" media="all">
            <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css">
        </head>

        <body>

  

            <!--Menu-->
            <header class="header header--show ">
	<div class="header__container">
		<div class="header__inner">
			<button type="button" class="header__hamburger action">
				<b class="svg svg--hamburger"><div class="container" onclick="myFunction(this)">
                    <div class="bar1"></div>
                    <div class="bar2"></div>
                    <div class="bar3"></div>
                    </div>
                </b>			
            </button>
			<div class="header__wrap">
				<div class="header__logo orange logo">
					<a href="#">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg">
						<strong>NAKAMAcorp</strong>
					</a>
				</div>

				<nav class="nav nav--primary header__nav ">
                    <ul class="nav__menu nav__menu--depth0 menu">
                    <li class="nav__menu-item nav__menu-item--depth0 menu-item menu-item-type-post_type menu-item-object-issue menu-item-692"><a href="#" class="nav__link">Accueil</a></li>
                    <li class="nav__menu-item nav__menu-item--depth0 menu-item menu-item-type-post_type menu-item-object-issue menu-item-693"><a href="#" class="nav__link">Geek Planète</a></li>
                    <li class="nav__menu-item nav__menu-item--depth0 menu-item menu-item-type-post_type menu-item-object-issue menu-item-16229"><a href="#" class="nav__link">League of Gamers</a></li>
                    <li class="nav__menu-item nav__menu-item--depth0 menu-item menu-item-type-post_type menu-item-object-issue menu-item-16236"><a href="#" class="nav__link">Boutique</a></li>
                    <li class="nav__menu-item nav__menu-item--depth0 menu-item menu-item-type-custom menu-item-object-custom menu-item-227001"><a href="#" class="nav__link">F.A.Q</a></li>
                    </ul>
                </nav>			
                </div>
			
		</div>
    </div>



   
</header>

            <!--End Menu-->

            <!-- Head-->
            <section id="heading" class="container-fluid ">
                <div class="jumbotron text-center " style="background-image:url(<?php echo get_template_directory_uri(); ?>/img/head.jpg); height: 614px;">
                    
                </div>
            </section>
            <!-- End Head-->

            <!-- Arene-->

            <div class="col-md-2 container btn-arene">
                <img src="<?php echo get_template_directory_uri(); ?>/img/btn-arene.svg" alt="héros de la communauté Otaku au Bénin">
            </div>

            <section id="arene-heros" class="container text-center">
                
                <h4>Arène des champions</h4>
                <div class="row justify-content-center">
                    <div class="col-md-2">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/arene.svg" alt="héros de la communauté Otaku au Bénin">
                        <p>Champion <br> Culture Geek</p>
                    </div>
                    <div class="col-md-2">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/arene.svg" alt="héros de la communauté Otaku au Bénin">
                        <p>Champion <br> Culture FIFA</p>
                    </div>
                    <div class="col-md-2">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/arene.svg" alt="héros de la communauté Otaku au Bénin">
                        <p>Champion <br> Culture PES</p>
                    </div>
                    <div class="col-md-2">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/arene.svg" alt="héros de la communauté Otaku au Bénin">
                        <p>Champion <br> Culture Tekken</p>
                    </div>
                    <div class="col-md-2">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/arene.svg" alt="héros de la communauté Otaku au Bénin">
                        <p>Champion <br> Culture MK</p>
                    </div>
                </div>
                <a>
                    <div class="button2">
                        Voir l'arène              

                    </div>

                </a>

            </section>
            <!--End Arene-->


            <!-- Weare-->

            <section id="weare" class="container-fluid text-center">
                <div class="orange-divider"></div>
            
                <div class="heading">
                    <h2>We Are</h2>
                </div>
                <div class="container">
                    <div class="row ">
                        <div class="col-md-8">
                            <div class="card">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/weare.png" class="card-img-top" alt="Communauté de geek otaku au Bénin">
                            <div class="card-body text-left">
                                <h5 class="card-title orange">Qui sommes-nous ?</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eu nunc eleifend gravida tristique. Tristique metus, ultricies a facilisis elementum gravida. Ultricies quis rhoncus, sit purus sem posuere auctor ut. Ullamcorper tempor ullamcorper ut sit. Egestas quis sem ut in vulputate tristique id. Est rutrum vitae diam pellentesque hac lacus ut nibh. Nullam nec eget molestie mus lectus nisl. Vestibulum aliquet magna nullam cras scelerisque euismod.
                                </p>
                                <a href="#"><div class="button1">
                                Découvrir l'équipe
                                </div>
                                </a>
                            </div>
                            
                            </div>
                        </div>

                        <div class="col-md-4 tweeter text-left">
                            <div><img src="<?php echo get_template_directory_uri(); ?>/img/twitterwr.svg">@Nakamacorp</div><br>
                            <p>
                            <i>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc eu nunc eleifend gravida tristique. Tristique metus, ultricies a facilisis elementum gravida 
                            </i> 
                            </p>
                            <span>https://t.co/SkdFuuDBV5</span><br> <br>
                            <div>07/25/2019 7:30 am</div>

                        </div>
                    </div>
                </div>

                

            </section>
            <!--End Weare-->

            <!--Actualité-->
            <section id="actu" class="container">
                
                <div class="row justify-content-center">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/actu.png" class="responsive effect1">
                </div>

                
                <div class="orange-divider"></div>
                <div class="heading">
                    <h2>Actualités</h2>
                </div>

                <div class="card-deck">
                    
                    <div class="card">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/article-image-1.jpg" class="card-img-top effect1" alt="...">
                        <div class="card-body">
                        <h5 class="card-title orange">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        <a href="#">
                            <div class="button1">
                                Lire la suite
                            </div>
                        </a>
                        </div>
                    </div>
                    <div class="card">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/article-image-1.jpg" class="card-img-top effect1" alt="...">
                        <div class="card-body">
                        <h5 class="card-title orange">Card title</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        <a href="#">
                            <div class="button1">
                                Lire la suite
                            </div>
                        </a>
                        </div>
                    </div>
                    <div class="card">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/article-image-1.jpg" class="card-img-top effect1" alt="...">
                        <div class="card-body">
                        <h5 class="card-title orange">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        <a href="#">
                            <div class="button1">
                                Lire la suite
                            </div>
                        </a>
                        </div>
                    </div>
                </div>

                 <div class="card-deck">
                    <div class="card">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/article-image-1.jpg" class="card-img-top effect1" alt="...">
                        <div class="card-body">
                        <h5 class="card-title orange">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        <a href="#">
                            <div class="button1">
                                Lire la suite
                            </div>
                        </a>
                        </div>
                    </div>
                    <div class="card">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/article-image-1.jpg" class="card-img-top effect1" alt="...">
                        <div class="card-body">
                        <h5 class="card-title orange">Card title</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        <a href="#">
                            <div class="button1">
                                Lire la suite
                            </div>
                        </a>
                        </div>
                    </div>
                    <div class="card">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/article-image-1.jpg" class="card-img-top effect1" alt="...">
                        <div class="card-body">
                        <h5 class="card-title orange">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        <a href="#">
                            <div class="button1">
                                Lire la suite
                            </div>
                        </a>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <a href="#">
                            <div class="button2">
                                Lire tous les articles
                            </div>
                    </a>
                </div>

            </section>
            <!--Actu-->

            <!--Partenaires-->

            <section id="arene-heros" class="container text-center">
                
                <div class="orange-divider"></div>
                <div class="heading">
                    <h2>Partenaires</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-2">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/logoisocelfinal.png" alt="héros de la communauté Otaku au Bénin">
                    </div>
                    <div class="col-md-2">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/Epitech 1.png" alt="héros de la communauté Otaku au Bénin">
                    </div>
                    <div class="col-md-2">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/itnum1.png" alt="héros de la communauté Otaku au Bénin">
                    </div>
                    <div class="col-md-2">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/itnum1.png" alt="héros de la communauté Otaku au Bénin">
                    </div>
                    <div class="col-md-2">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/229gamers.jpeg" alt="héros de la communauté Otaku au Bénin">
                    </div>
                </div>
            </section>
            <section id="partners">            
                <div class="heading">                
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <form>
                            
                            <label>S'abonner à notre newsletter</label><br>
                            <div class="row justify-content-center" >
                                <input type="email" placeholder="Votre adresse mail">
                                <button class="action" id="denden" type="submit"></button>

                            </div>
                        </form>
                    </div>

                </div>
            </section>
            <!--End Partenaires-->

            <!-- Footer-->
                <section id="footer" class="container-fluid">
                    <div class="col-xs-8 col-md-4 logo">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/logolight.svg" alt="Nakamacorp">
                    </div>
                    <div class="foot-divider"></div>
                    <div class="text-center"><p>© 2019 Nakama corp |<a href="dribbble.com/freuxy"> Designed by @freuxy with love </a>| Privacy Policy | Site Map</p></div>


                </section>

                <section id="rs" class="container-fluid text-center">
                    <div class="col-md-8">
                        <a><img src="<?php echo get_template_directory_uri(); ?>/img/tw.svg" alt="Nakamacorp/twitter"></a>
                        <a><img src="<?php echo get_template_directory_uri(); ?>/img/fb.svg" alt="Nakamacorp/facebook"></a>
                        <a><img src="<?php echo get_template_directory_uri(); ?>/img/ins.svg" alt="Nakamacorp/Instagram"></a>
                        <a><img src="<?php echo get_template_directory_uri(); ?>/img/mail.svg" alt="Nakamacorp/Email"></a>
                    </div>
                </section>
            <!--End footer -->

            <script>
                function myFunction(x) {
                x.classList.toggle("change");
                }
            </script>




             <!-- <div class="popover popover--hamburger popover--open" role="dialog" aria-modal="true">
	<div class="popover__bar">
		<button type="button" class="popover__hamburger-toggle">
			<img class="popover__hamburger-toggle-close" src="https://www.whitehouse.gov/wp-content/themes/whitehouse/assets/img/close.svg" alt="Close Menu" width="20" height="20">
			<img class="popover__hamburger-toggle-open" src="https://www.whitehouse.gov/wp-content/themes/whitehouse/assets/img/hamburger.svg" alt="Open Menu" width="28" height="20">
		</button>

		<button type="button" class="popover__search-toggle">
			<img class="popover__search-toggle-close" src="https://www.whitehouse.gov/wp-content/themes/whitehouse/assets/img/close.svg" alt="Close Search" width="20" height="20">
			<img class="popover__search-toggle-open" src="https://www.whitehouse.gov/wp-content/themes/whitehouse/assets/img/search.svg" alt="Open Search" width="20" height="20">
		</button>
	</div>

	<div class="popover__content">
		<div class="popover__hamburger">
			<div class="popover__nav">
				<nav class="nav nav--popover"><ul class="nav__menu nav__menu--depth0 menu"><li class="nav__menu-item nav__menu-item--depth0 nav__menu-item--has-submenu menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children nav__menu-item--has-menu-5 menu-item-658" data-index="0"><a href="https://www.whitehouse.gov/news/" class="nav__link">News</a>
<ul class="nav__menu nav__menu--depth1 sub-menu"><li class="nav__menu-item nav__menu-item--depth1 nav__menu-item--back"><button class="nav__link" tabindex="-1">News</button></li>
	<li class="nav__menu-item nav__menu-item--depth1 menu-item menu-item-type-post_type menu-item-object-page menu-item-152066"><a href="https://www.whitehouse.gov/remarks/" class="nav__link" tabindex="-1">Remarks</a></li>
	<li class="nav__menu-item nav__menu-item--depth1 menu-item menu-item-type-post_type_archive menu-item-object-briefing-statement menu-item-105680"><a href="https://www.whitehouse.gov/briefings-statements/" class="nav__link" tabindex="-1">Briefings &amp; Statements</a></li>
	<li class="nav__menu-item nav__menu-item--depth1 menu-item menu-item-type-post_type_archive menu-item-object-presidential-action menu-item-105687"><a href="https://www.whitehouse.gov/presidential-actions/" class="nav__link" tabindex="-1">Presidential Actions</a></li>
	<li class="nav__menu-item nav__menu-item--depth1 menu-item menu-item-type-post_type menu-item-object-page menu-item-105701"><a href="https://www.whitehouse.gov/articles/" class="nav__link" tabindex="-1">Articles</a></li>
	<li class="nav__menu-item nav__menu-item--depth1 menu-item menu-item-type-post_type menu-item-object-page menu-item-105694"><a href="https://www.whitehouse.gov/news/" class="nav__link" tabindex="-1">All News</a></li>
</ul>
</li>
<li class="nav__menu-item nav__menu-item--depth0 nav__menu-item--has-submenu menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children nav__menu-item--has-menu-6 menu-item-659" data-index="1"><a href="https://www.whitehouse.gov/issues/" class="nav__link">Issues</a>
<ul class="nav__menu nav__menu--depth1 sub-menu"><li class="nav__menu-item nav__menu-item--depth1 nav__menu-item--back"><button class="nav__link" tabindex="-1">Issues</button></li>
	<li class="nav__menu-item nav__menu-item--depth1 menu-item menu-item-type-post_type menu-item-object-issue menu-item-105708"><a href="https://www.whitehouse.gov/issues/education/" class="nav__link" tabindex="-1">Education</a></li>
	<li class="nav__menu-item nav__menu-item--depth1 menu-item menu-item-type-post_type menu-item-object-issue menu-item-105715"><a href="https://www.whitehouse.gov/issues/national-security-defense/" class="nav__link" tabindex="-1">National Security &amp; Defense</a></li>
	<li class="nav__menu-item nav__menu-item--depth1 menu-item menu-item-type-post_type menu-item-object-issue menu-item-105729"><a href="https://www.whitehouse.gov/issues/budget-spending/" class="nav__link" tabindex="-1">Budget &amp; Spending</a></li>
	<li class="nav__menu-item nav__menu-item--depth1 menu-item menu-item-type-post_type menu-item-object-issue menu-item-105722"><a href="https://www.whitehouse.gov/issues/immigration/" class="nav__link" tabindex="-1">Immigration</a></li>
	<li class="nav__menu-item nav__menu-item--depth1 menu-item menu-item-type-post_type menu-item-object-issue menu-item-105736"><a href="https://www.whitehouse.gov/issues/healthcare/" class="nav__link" tabindex="-1">Healthcare</a></li>
	<li class="nav__menu-item nav__menu-item--depth1 menu-item menu-item-type-post_type menu-item-object-page menu-item-105743"><a href="https://www.whitehouse.gov/issues/" class="nav__link" tabindex="-1">All Issues</a></li>
</ul>
</li>
<li class="nav__menu-item nav__menu-item--depth0 nav__menu-item--has-submenu menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children nav__menu-item--has-menu-6 menu-item-795" data-index="2"><a href="https://www.whitehouse.gov/the-trump-administration/" class="nav__link">The Administration</a>
<ul class="nav__menu nav__menu--depth1 sub-menu"><li class="nav__menu-item nav__menu-item--depth1 nav__menu-item--back"><button class="nav__link" tabindex="-1">The Administration</button></li>
	<li class="nav__menu-item nav__menu-item--depth1 menu-item menu-item-type-post_type menu-item-object-authors menu-item-105757"><a href="https://www.whitehouse.gov/people/donald-j-trump/" class="nav__link" tabindex="-1">President Donald J. Trump</a></li>
	<li class="nav__menu-item nav__menu-item--depth1 menu-item menu-item-type-post_type menu-item-object-authors menu-item-105764"><a href="https://www.whitehouse.gov/people/mike-pence/" class="nav__link" tabindex="-1">Vice President Michael R. Pence</a></li>
	<li class="nav__menu-item nav__menu-item--depth1 menu-item menu-item-type-post_type menu-item-object-authors menu-item-105750"><a href="https://www.whitehouse.gov/people/melania-trump/" class="nav__link" tabindex="-1">First Lady Melania Trump</a></li>
	<li class="nav__menu-item nav__menu-item--depth1 menu-item menu-item-type-post_type menu-item-object-authors menu-item-105771"><a href="https://www.whitehouse.gov/people/karen-pence/" class="nav__link" tabindex="-1">Second Lady Karen Pence</a></li>
	<li class="nav__menu-item nav__menu-item--depth1 menu-item menu-item-type-post_type menu-item-object-page menu-item-105778"><a href="https://www.whitehouse.gov/the-trump-administration/the-cabinet/" class="nav__link" tabindex="-1">The Cabinet</a></li>
	<li class="nav__menu-item nav__menu-item--depth1 menu-item menu-item-type-post_type menu-item-object-page menu-item-105785"><a href="https://www.whitehouse.gov/disclosures/" class="nav__link" tabindex="-1">Disclosures</a></li>
</ul>
</li>
<li class="nav__menu-item nav__menu-item--depth0 nav__menu-item--has-submenu menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children nav__menu-item--has-menu-6 menu-item-105792" data-index="3"><a href="#" class="nav__link">Executive Offices</a>
<ul class="nav__menu nav__menu--depth1 sub-menu"><li class="nav__menu-item nav__menu-item--depth1 nav__menu-item--back"><button class="nav__link" tabindex="-1">Executive Offices</button></li>
	<li class="nav__menu-item nav__menu-item--depth1 menu-item menu-item-type-post_type menu-item-object-eop-component menu-item-105806"><a href="https://www.whitehouse.gov/cea/" class="nav__link" tabindex="-1">Council of Economic Advisers</a></li>
	<li class="nav__menu-item nav__menu-item--depth1 menu-item menu-item-type-post_type menu-item-object-eop-component menu-item-105799"><a href="https://www.whitehouse.gov/ceq/" class="nav__link" tabindex="-1">Council on Environmental Quality</a></li>
	<li class="nav__menu-item nav__menu-item--depth1 menu-item menu-item-type-post_type menu-item-object-eop-component menu-item-105813"><a href="https://www.whitehouse.gov/nsc/" class="nav__link" tabindex="-1">National Security Council</a></li>
	<li class="nav__menu-item nav__menu-item--depth1 menu-item menu-item-type-post_type menu-item-object-eop-component menu-item-106142"><a href="https://www.whitehouse.gov/omb/" class="nav__link" tabindex="-1">Office of Management and Budget</a></li>
	<li class="nav__menu-item nav__menu-item--depth1 menu-item menu-item-type-post_type menu-item-object-eop-component menu-item-105827"><a href="https://www.whitehouse.gov/ondcp/" class="nav__link" tabindex="-1">Office of National Drug Control Policy</a></li>
	<li class="nav__menu-item nav__menu-item--depth1 menu-item menu-item-type-post_type menu-item-object-eop-component menu-item-105834"><a href="https://www.whitehouse.gov/ostp/" class="nav__link" tabindex="-1">Office of Science and Technology Policy</a></li>
</ul>
</li>
<li class="nav__menu-item nav__menu-item--depth0 nav__menu-item--has-submenu menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children nav__menu-item--has-menu-5 menu-item-1548" data-index="4"><a href="https://www.whitehouse.gov/about-the-white-house/" class="nav__link">About The White House</a>
<ul class="nav__menu nav__menu--depth1 sub-menu"><li class="nav__menu-item nav__menu-item--depth1 nav__menu-item--back"><button class="nav__link" tabindex="-1">About The White House</button></li>
	<li class="nav__menu-item nav__menu-item--depth1 menu-item menu-item-type-post_type menu-item-object-page menu-item-105848"><a href="https://www.whitehouse.gov/about-the-white-house/tours-events/" class="nav__link" tabindex="-1">Tours &amp; Events</a></li>
	<li class="nav__menu-item nav__menu-item--depth1 menu-item menu-item-type-post_type menu-item-object-page menu-item-105855"><a href="https://www.whitehouse.gov/about-the-white-house/presidents/" class="nav__link" tabindex="-1">Past Presidents</a></li>
	<li class="nav__menu-item nav__menu-item--depth1 menu-item menu-item-type-post_type menu-item-object-page menu-item-105862"><a href="https://www.whitehouse.gov/about-the-white-house/first-ladies/" class="nav__link" tabindex="-1">Past First Ladies</a></li>
	<li class="nav__menu-item nav__menu-item--depth1 nav__menu-item--has-submenu menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children nav__menu-item--has-menu-5 menu-item-105995"><a href="https://www.whitehouse.gov/about-the-white-house/the-grounds/" class="nav__link" tabindex="-1">The Grounds</a></li>
	<li class="nav__menu-item nav__menu-item--depth1 nav__menu-item--has-submenu menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children nav__menu-item--has-menu-7 menu-item-106079"><a href="https://www.whitehouse.gov/about-the-white-house/our-government/" class="nav__link" tabindex="-1">Our Government</a></li>
</ul>
</li>
<li class="nav__menu-item nav__menu-item--depth0 nav__menu-item--has-submenu menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children nav__menu-item--has-menu-3 menu-item-5738" data-index="5"><a href="https://www.whitehouse.gov/get-involved/" class="nav__link">Get Involved</a>
<ul class="nav__menu nav__menu--depth1 sub-menu"><li class="nav__menu-item nav__menu-item--depth1 nav__menu-item--back"><button class="nav__link" tabindex="-1">Get Involved</button></li>
	<li class="nav__menu-item nav__menu-item--depth1 menu-item menu-item-type-post_type menu-item-object-page menu-item-105869"><a href="https://www.whitehouse.gov/get-involved/write-or-call/" class="nav__link" tabindex="-1">Write or Call the White House</a></li>
	<li class="nav__menu-item nav__menu-item--depth1 nav__menu-item--has-submenu menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children nav__menu-item--has-menu-3 menu-item-105876"><a href="https://www.whitehouse.gov/get-involved/internships/" class="nav__link" tabindex="-1">White House Internship Program</a></li>
	<li class="nav__menu-item nav__menu-item--depth1 nav__menu-item--has-submenu menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children nav__menu-item--has-menu-4 menu-item-105904"><a href="https://www.whitehouse.gov/get-involved/fellows/" class="nav__link" tabindex="-1">White House Fellows</a></li>
</ul>
</li>
<li class="nav__menu-item nav__menu-item--depth0 menu-item menu-item-type-post_type menu-item-object-page menu-item-105988" data-index="6"><a href="https://www.whitehouse.gov/contact/" class="nav__link">Contact</a></li>
<li class="nav__menu-item nav__menu-item--depth0 menu-item menu-item-type-post_type menu-item-object-page nav__menu-item--live menu-item-105974" data-index="7"><a href="https://www.whitehouse.gov/live/" class="nav__link"><span class="nav__menu-item-label">Live</span><span class="nav__menu-item-list"><span class="nav__menu-item-list-item"><strong>3:10 PM EDT</strong>: Vice President Pence Delivers Remarks to Employees on Opening Up America Again at Oberg Industries </span></span></a></li>
</ul></nav>			</div>
			<div class="popover__seal">
				<img height="435" width="435" src="https://www.whitehouse.gov/wp-content/themes/whitehouse/assets/img/presidential-crest-gray.svg" alt="Presidential Crest">
			</div>
		</div>

		<div class="popover__search">
			<form class="popover__search-form" action="https://www.whitehouse.gov/search/">
				<label class="visually-hidden" for="popover__search-input">
					Type Your Search
				</label>
				<input type="search" id="popover__search-input" class="popover__search-input" name="s" placeholder="Type Your Search..." autocomplete="off">
				<button type="submit" class="popover__search-submit"><span>Press enter to search</span></button>
			</form>
		</div>
	</div>
</div>
<script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","licenseKey":"9360826e15","applicationID":"81062031,484304241,484396381","transactionName":"MVNbZhQFXEAEVBBfWQgZeFESDV1dSlEWWVgSG0lTAQE=","queueTime":0,"applicationTime":339,"atts":"HRRYEFwfT04=","errorBeacon":"bam.nr-data.net","agent":""}</script> -->

            <?php wp_footer(); ?>
          
        </body>
    </html>