<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    // Get the file modification time
    $cssVersion = filemtime('assets/css/steller.css');
    $jsVersion = filemtime('assets/js/steller.js');
    ?>

	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Steller landing page.">
    <meta name="author" content="Devcrud">
    <title><?= lang('Messages.home_title') ?></title>
    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap + Steller main styles -->
	<link rel="stylesheet" href="assets/css/steller.css?v=<?= $cssVersion ?>">

    <link rel="icon" type="image/x-icon" href="assets/imgs/favicon/favicon.ico">

    <!-- PNG favicons for various sizes -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/imgs/favicon/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/imgs/favicon/favicon-32x32.png">

    <!-- Apple Touch Icon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/imgs/favicon/apple-touch-icon.png">

    <!-- Android Chrome -->
    <link rel="icon" type="image/png" sizes="192x192" href="assets/imgs/favicon/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="512x512" href="assets/imgs/favicon/android-chrome-512x512.png">  
    <?= getenv("TRACKING_TAG") ?>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <!-- Page navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" data-spy="affix" data-offset-top="0">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="assets/imgs/logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link" href="#home"><?= lang('Messages.home') ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about"><?= lang('Messages.about') ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#service"><?= lang('Messages.skills') ?></a>
                    </li>                   
                    <li class="nav-item">
                        <a class="nav-link" href="#portfolio"><?= lang('Messages.portfolio') ?></a>
                    </li>
                    <!--
                    <li class="nav-item">
                        <a class="nav-link" href="#testmonial">Testmonial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#blog">Blog</a>
                    </li>
                    -->
                    <li class="nav-item">
                        <a class="nav-link" href="#contact"><?= lang('Messages.contact') ?></a>
                    </li>
                </ul>
            </div>
        </div>          
    </nav>
    <!-- End of page navibation -->

    <!-- Page Header -->
    <header class="header" id="home">
        <div class="container">
            <div class="infos">
                <h6 class="subtitle"><?= lang('Messages.hello_msg') ?></h6>
                <h6 class="title"><?= lang('Messages.name') . " " . lang('Messages.lastname') ?></h6>
                <p><?= lang('Messages.subtitle') ?></p>

                <div class="buttons pt-3">
                    <!--<button class="btn btn-primary rounded">HIRE ME</button>-->
                    <button class="btn btn-dark rounded" onclick="window.open('assets/cv/CV_Fouad_Amiri.pdf', '_blank');"><?= lang('Messages.download_cv') ?></button>
                </div>      

                <div class="socials mt-4">
                    <a class="social-item" href="https://www.linkedin.com/in/fouadami/" target="_blank"><i class="ti-linkedin"></i></a>
                    <a class="social-item" href="https://www.instagram.com/watdefox/" target="_blank"><i class="ti-instagram"></i></a>
                    <a class="social-item" href="https://github.com/ewalk" target="_blank"><i class="ti-github"></i></a>
                    <a class="social-item" href="https://x.com/fouadami" target="_blank"><i class="ti-twitter"></i></a>
                    <a class="social-item" href="mailto:fouad.amiri@gmail.com" target="_blank"><i class="ti-email"></i></a>
                </div>
            </div>              
            <div class="img-holder">
                <img src="assets/imgs/fouad.png" alt="">
            </div>      
        </div>  

        <!-- Header-widget -->
        <div class="widget">
            <div class="widget-item">
                <h2><?= lang('Messages.companies_num') ?></h2>
                <p><?= lang('Messages.companies_title') ?></p>
            </div>            
            <div class="widget-item">
                <h2><?= lang('Messages.products_num') ?></h2>
                <p><?= lang('Messages.products_title') ?></p>
            </div>
            <div class="widget-item">
                <h2><?= lang('Messages.features_num') ?></h2>
                <p><?= lang('Messages.features_title') ?></p>
            </div>
            <div class="widget-item">
                <h2><?= lang('Messages.users_num') ?></h2>
                <p><?= lang('Messages.users_title') ?></p>
            </div>
        </div>
    </header>
    <!-- End of Page Header -->
    
    <!-- About section -->
    <section id="about" class="section mt-3">
        <div class="container mt-5">
            <div class="row text-center text-md-left">
                <div class="col-md-3">
                    <img src="assets/imgs/avatar.jpg" alt="" class="img-thumbnail mb-4">
                </div>
                <div class="pl-md-4 col-md-9">
                    <h6 class="title"><?= lang('Messages.name') . " " . lang('Messages.lastname') ?></h6>
                    <p class="subtitle"><?= lang('Messages.subtitle_whoami') ?></p>
                    <p><?= lang("Messages.whoami_text")?></p>
                    <!--<button class="btn btn-primary rounded mt-3">DOWNLOAD CV</button>-->
                </div>
            </div>
        </div>
    </section>

    <!-- Service section -->
    <section id="service" class="section" style="padding-bottom:2.5rem;">
        <div class="container text-center">
            <h6 class="subtitle"><?= lang('Messages.service') ?></h6>
            <h6 class="section-title mb-4"><?= lang('Messages.services_title') ?></h6>
            <p class="mb-5 pb-4"><?= lang('Messages.services_intro') ?></p>

            <div class="row">
                <div class="col-sm-6 col-md-3 mb-4">
                    <div class="custom-card card border">
                        <div class="card-body">
                            <i class="icon ti-desktop"></i>
                            <h5><?= lang('Messages.service1') ?></h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 mb-4">
                    <div class="custom-card card border">
                        <div class="card-body">
                            <i class="icon ti-medall"></i>
                            <h5><?= lang('Messages.service3') ?></h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 mb-4">
                    <div class="custom-card card border">
                        <div class="card-body">
                            <i class="icon ti-control-play"></i>
                            <h5><?= lang('Messages.service2') ?></h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 mb-4">
                    <div class="custom-card card border">
                        <div class="card-body">
                            <i class="icon ti-stats-up"></i>
                            <h5><?= lang('Messages.service4') ?></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Sectoin -->
    <!-- Skills section -->
    <section class="section" style="padding-top:0rem;">
        <div class="container text-center">
            <h6 class="subtitle"><?= lang('Messages.skills') ?></h6>
            <h6 class="section-title mb-4"><?= lang('Messages.whyme') ?></h6>
            <p class="mb-5 pb-4"><?= lang("Messages.whyme_desc") ?></p>

            <div class="row text-left">
                <div class="col-sm-6">
                    <h6 class="mb-3"><?= lang('Messages.skill1') ?></h6>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span>90%</span></div>
                    </div>
                </div>    
                <div class="col-sm-6">
                    <h6 class="mb-3"><?= lang('Messages.skill2') ?></h6>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span>95%</span></div>
                    </div>
                </div>                
                <div class="col-sm-6">
                    <h6 class="mb-3"><?= lang('Messages.skill3') ?></h6>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span>90%</span></div>
                    </div>
                </div>   
                <div class="col-sm-6">
                    <h6 class="mb-3"><?= lang('Messages.skill4') ?></h6>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span>90%</span></div>
                    </div>
                </div>                
                <div class="col-sm-6">
                    <h6 class="mb-3"><?= lang('Messages.skill5') ?></h6>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span>89%</span></div>
                    </div>
                </div>                     
                <div class="col-sm-6">
                    <h6 class="mb-3"><?= lang('Messages.skill6') ?></h6>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span>83%</span></div>
                    </div>
                </div>                
                <div class="col-sm-6">
                    <h6 class="mb-3"><?= lang('Messages.skill7') ?></h6>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 90%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span>90%</span></div>
                    </div>
                </div>         
                <div class="col-sm-6">
                    <h6 class="mb-3"><?= lang('Messages.skill8') ?></h6>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 95%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span>90%</span></div>
                    </div>
                </div>                  
                <div class="col-sm-6">
                    <h6 class="mb-3"><?= lang('Messages.skill9') ?></h6>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 90%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span>90%</span></div>
                    </div>
                </div>                  
                <div class="col-sm-6">
                    <h6 class="mb-3"><?= lang('Messages.skill10') ?></h6>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 90%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span>90%</span></div>
                    </div>
                </div>                          
                <div class="col-sm-6">
                    <h6 class="mb-3"><?= lang('Messages.skill11') ?></h6>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 85%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span>90%</span></div>
                    </div>
                </div>    
                <div class="col-sm-6">
                    <h6 class="mb-3"><?= lang('Messages.skill12') ?></h6>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 85%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span>90%</span></div>
                    </div>
                </div>                    
                <div class="col-sm-6">
                    <h6 class="mb-3"><?= lang('Messages.skill13') ?></h6>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 80%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span>90%</span></div>
                    </div>
                </div>                     
                <div class="col-sm-6">
                    <h6 class="mb-3"><?= lang('Messages.skill14') ?></h6>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 80%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span>90%</span></div>
                    </div>
                </div>                                                                                                 
                <div class="col-sm-6">
                    <h6 class="mb-3"><?= lang('Messages.skill15') ?></h6>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span>90%</span></div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <h6 class="mb-3"><?= lang('Messages.skill16') ?></h6>
                    <div class="progress">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 75%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"><span>90%</span></div>
                    </div>
                </div>                                               
            </div>  
        </div>
    </section>
    <!-- End of Skills sections -->

    <!-- Portfolio section -->
    <section id="portfolio" class="section">
        <div class="container text-center">
            <h6 class="subtitle"><?= lang("Messages.portfolio_subtitle") ?></h6>
            <h6 class="section-title mb-4"><?= lang("Messages.portfolio_title") ?></h6>
            <p class="mb-5 pb-4"><?= lang("Messages.portfolio_text") ?></p>

            <div class="row">
                <div class="col-sm-4">
                    <div class="img-wrapper">
                        <img src="assets/imgs/mr90.jpg" alt="">
                        <div class="overlay">
                            <div class="overlay-infos">
                                <h5><?= lang("Messages.mr90_title") ?></h5>
                                <!--<a href="javascript:void(0)"><i class="ti-zoom-in"></i></a>-->
                                <a href="https://mr90.ir/" target="_blank"><i class="ti-link"></i></a>
                            </div>  
                        </div>
                    </div>
                    <div class="img-wrapper">
                        <img src="assets/imgs/lufthansa.jpg" alt="">
                        <div class="overlay">
                            <div class="overlay-infos">
                                <h5><?= lang("Messages.lufthansa_title") ?></h5>
                            </div>                              
                        </div>
                    </div>                        
                    <div class="img-wrapper">
                        <img src="assets/imgs/redbull.jpg" alt="">
                        <div class="overlay">
                            <div class="overlay-infos">
                                <h5><?= lang("Messages.redbull_title") ?></h5>
                            </div>                              
                        </div>
                    </div> 
                    <div class="img-wrapper">
                        <img src="assets/imgs/tetrapak.png" alt="">
                        <div class="overlay">
                            <div class="overlay-infos">
                                <h5><?= lang("Messages.tetra_title") ?></h5>
                            </div>                              
                        </div>
                    </div>                                                     
                </div>
                <div class="col-sm-4">
                    <div class="img-wrapper">
                        <img src="assets/imgs/cheetozia.png" alt="">
                        <div class="overlay">
                            <div class="overlay-infos">
                                <h5><?= lang("Messages.cheetozia_title") ?></h5>
                            </div>  
                        </div>
                    </div>                   
                    <div class="img-wrapper">
                        <img src="assets/imgs/gstar.jpg" alt="">
                        <div class="overlay">
                            <div class="overlay-infos">
                                <h5><?= lang("Messages.gstar_title") ?></h5>
                                <a href="https://g-star.com" target="_blank"><i class="ti-link"></i></a>
                            </div>                              
                        </div>
                    </div>    
                    <div class="img-wrapper">
                        <img src="assets/imgs/zula.jpg" alt="">
                        <div class="overlay">
                            <div class="overlay-infos">
                                <h5><?= lang("Messages.zula_title") ?></h5>
                                <a href="https://www.playzula.com/" target="_blank"><i class="ti-link"></i></a>
                            </div>                              
                        </div>
                    </div>                                   
                </div>
                <div class="col-sm-4">
                    <div class="img-wrapper">
                        <img src="assets/imgs/renault.jpg" alt="">
                        <div class="overlay">
                            <div class="overlay-infos">
                                <h5><?= lang("Messages.renault_title") ?></h5>
                            </div>  
                        </div>
                    </div>
                    <div class="img-wrapper">
                        <img src="assets/imgs/denksport.jpg" alt="">
                        <div class="overlay">
                            <div class="overlay-infos">
                                <h5><?= lang("Messages.denksport_title") ?></h5>
                                <a href="https://denksport.com" target="_blank"><i class="ti-link"></i></a>
                            </div>                              
                        </div>
                    </div>
                    <div class="img-wrapper">
                        <img src="assets/imgs/lgcooking.jpg" alt="">
                        <div class="overlay">
                            <div class="overlay-infos">
                                <h5><?= lang("Messages.lg_title") ?></h5>
                                <a href="https://www.lg.com/ir/kitchen-appliances" target="_blank"><i class="ti-link"></i></a>
                            </div>                              
                        </div>
                    </div>                    
                    <div class="img-wrapper">
                        <img src="assets/imgs/gorz2.jpg" alt="">
                        <div class="overlay">
                            <div class="overlay-infos">
                                <h5><?= lang("Messages.gorz_title") ?></h5>
                                <a href="https://gorz.ir" target="_blank"><i class="ti-link"></i></a>
                            </div>                              
                        </div>
                    </div>                                                                                   
                </div>
            </div>

        </div>
    </section>
    <!-- End of portfolio section -->

    <!-- Testmonial Section -->
<!--
    <section id="testmonial" class="section">
        <div class="container text-center">
            <h6 class="subtitle">Testmonial</h6>
            <h6 class="section-title mb-4">What People Say About Me</h6>
            <p class="mb-5 pb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In alias dignissimos. <br> rerum commodi corrupti, temporibus non quam.</p>


            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="card testmonial-card border">
                            <div class="card-body">
                                <img src="assets/imgs/avatar-1.jpg" alt="">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam nostrum voluptates in enim vel amet?</p>
                                <h1 class="title">Emma Re</h1>
                                <h1 class="subtitle">Graphic Designer</h1>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card testmonial-card border">
                            <div class="card-body">
                                <img src="assets/imgs/avatar-2.jpg" alt="">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam nostrum voluptates in enim vel amet?</p>
                                <h1 class="title">James Bert</h1>
                                <h1 class="subtitle">Web Designer</h1>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card testmonial-card border">
                            <div class="card-body">
                                <img src="assets/imgs/avatar-3.jpg" alt="">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam nostrum voluptates in enim vel amet?</p>
                                <h1 class="title">Michael Abra</h1>
                                <h1 class="subtitle">Web Developer</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
-->    
    <!-- End of testmonial section -->

    <!-- Blog Section -->
     <!--
    <section id="blog" class="section">
        <div class="container text-center">
            <h6 class="subtitle">My Blogs</h6>
            <h6 class="section-title mb-4">Latest News</h6>
            <p class="mb-5 pb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In alias dignissimos. <br> rerum commodi corrupti, temporibus non quam.</p>

            <div class="row text-left">
                <div class="col-md-4">
                    <div class="card border mb-4">
                        <img src="assets/imgs/blog-1.jpg" alt="" class="card-img-top w-100">
                        <div class="card-body">
                            <h5 class="card-title">Designe for Everyone</h5>
                            <div class="post-details">
                                <a href="javascript:void(0)">Posted By: Admin</a>
                                <a href="javascript:void(0)"><i class="ti-thumb-up"></i> 456</a>
                                <a href="javascript:void(0)"><i class="ti-comment"></i> 123</a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut ad vel dolorum, iusto velit, minima? Voluptas nemo harum impedit nisi.</p>
                            <a href="javascript:void(0)">Read More..</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border mb-4">
                        <img src="assets/imgs/blog-2.jpg" alt="" class="card-img-top w-100">
                        <div class="card-body">
                            <h5 class="card-title">Web Layouts</h5>
                            <div class="post-details">
                                <a href="javascript:void(0)">Posted By: Admin</a>
                                <a href="javascript:void(0)"><i class="ti-thumb-up"></i> 456</a>
                                <a href="javascript:void(0)"><i class="ti-comment"></i> 123</a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut ad vel dolorum, iusto velit, minima? Voluptas nemo harum impedit nisi.</p>
                            <a href="javascript:void(0)">Read More..</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border mb-4">
                        <img src="assets/imgs/blog-3.jpg" alt="" class="card-img-top w-100">
                        <div class="card-body">
                            <h5 class="card-title">Bootstrap Framework</h5>
                            <div class="post-details">
                                <a href="javascript:void(0)">Posted By: Admin</a>
                                <a href="javascript:void(0)"><i class="ti-thumb-up"></i> 456</a>
                                <a href="javascript:void(0)"><i class="ti-comment"></i> 123</a>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut ad vel dolorum, iusto velit, minima? Voluptas nemo harum impedit nisi.</p>
                            <a href="javascript:void(0)">Read More..</a>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </section>
    -->
    <!-- Hire me section -->
     <!--
    <section class="bg-gray p-0 section">
        <div class="container">
            <div class="card bg-primary">
                <div class="card-body text-light">
                    <div class="row align-items-center">
                        <div class="col-sm-9 text-center text-sm-left">
                            <h5 class="mt-3">Hire Me For Your Project</h5>
                            <p class="mb-3">Accusantium labore nostrum similique quisquam.</p>
                        </div>
                        <div class="col-sm-3 text-center text-sm-right">
                            <button class="btn btn-light rounded">Hire Me!</button>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </section> 
    -->     
    <!-- End od Hire me section. -->

    <!-- Contact Section -->
    <section id="contact" class="position-relative section">
        <div class="container text-center">
            <h6 class="subtitle"><?= lang('Messages.contact') ?></h6>
            <h6 class="section-title mb-4"><?= lang('Messages.contact_title') ?></h6>
            <p class="mb-5 pb-4"><?= lang('Messages.contact_text') ?></p>

            <div class="contact text-left">
                <div class="form">
                    <!--<h6 class="subtitle">Available 24/7</h6>-->
                    <?php
                        if(!$is_email_sent) {
                    ?>
                        <h6 class="section-title mb-4"><?= lang('Messages.contact_title2') ?></h6>
                    <?php
                        }
                        else if($is_email_sent == 2) { //successful
                    ?>
                        <p style="color:#F85C70"><?= lang("Messages.not_sent") ?></p><p><?= lang("Messages.retry") ?></p>
                    <?php
                        }
                    ?>
                    <?php
                        if(!$is_email_sent || $is_email_sent == 2) {
                    ?>                    
                    <form action="<?= base_url() ?>" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp" placeholder="<?= lang("Messages.enter_name") ?>" required>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="<?= lang("Messages.enter_email") ?>" required>
                        </div>                        
                        <div class="form-group">
                            <textarea id="message_body" name="message_body" cols="30" rows="5" class="form-control" placeholder="<?= lang("Messages.enter_message") ?>"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block rounded w-lg"><?= lang("Messages.send_message") ?></button>
                    </form>
                    <?php
                        }
                        else if($is_email_sent == 1) { //successful
                    ?>
                            <p style="color:#20c997"><?= lang("Messages.sent") ?></p>
                    <?php
                        }
                    ?>
                </div>
                <div class="contact-infos">
                    <div class="item">
                        <i class="ti-location-pin"></i>
                        <div class="">
                            <h5><?= lang('Messages.location') ?></h5>
                            <p><?= lang('Messages.address') ?></p>
                        </div>                          
                    </div>
                    <div class="item">
                        <i class="ti-email"></i>
                        <div class="mb-0">
                            <h5><?= lang('Messages.email') ?></h5>
                            <p><?= getenv("EMAIL_ON_SITE") ?></p>
                        </div>
                    </div>
                </div>                  
            </div>
        </div>  
        <div id="map" class="map">
            <div></div>
            <!--<iframe src="https://snazzymaps.com/embed/61257"></iframe>-->
        </div>      
    </section>
    <!-- End of Contact Section -->

    <!-- Page Footer -->
    <footer class="page-footer">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <p>Copyright (c) <?= date("Y") ?> Devcrud</p>
                </div>
                <div class="col-sm-6">
                    <div class="socials">
                        <a class="social-item" href="https://www.linkedin.com/in/fouadami/" target="_blank"><i class="ti-linkedin"></i></a>
                        <a class="social-item" href="https://www.instagram.com/watdefox/" target="_blank"><i class="ti-instagram"></i></a>
                        <a class="social-item" href="https://github.com/ewalk" target="_blank"><i class="ti-github"></i></a>
                        <a class="social-item" href="https://x.com/fouadami" target="_blank"><i class="ti-twitter"></i></a>
                        <a class="social-item" href="mailto:fouad.amiri@gmail.com" target="_blank"><i class="ti-email"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer> 
    <!-- End of page footer -->
	
	<!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>
    <!-- bootstrap 3 affix -->
	<script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- steller js -->
    <script src="assets/js/steller.js?v=<?= $jsVersion ?>"></script>

</body>
</html>
