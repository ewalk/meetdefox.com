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
    <link rel="stylesheet" href="<?= base_url() ?>assets/vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap + Steller main styles -->
	<link rel="stylesheet" href="<?= base_url() ?>assets/css/steller.css?v=<?= $cssVersion ?>">

    <link rel="icon" type="image/x-icon" href="assets/imgs/favicon/favicon.ico">

    <!-- PNG favicons for various sizes -->
    <link rel="icon" type="image/png" sizes="16x16" href="assets/imgs/favicon/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/imgs/favicon/favicon-32x32.png">

    <!-- Apple Touch Icon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/imgs/favicon/apple-touch-icon.png">

    <!-- Android Chrome -->
    <link rel="icon" type="image/png" sizes="192x192" href="assets/imgs/favicon/android-chrome-192x192.png">
    <link rel="icon" type="image/png" sizes="512x512" href="assets/imgs/favicon/android-chrome-512x512.png">  
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
                        <a class="nav-link" href="<?= base_url() ?>"><?= lang('Messages.home') ?></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>#blog"><?= lang('Messages.news') ?></a>
                    </li>
                </ul>
            </div>
        </div>          
    </nav>
    <!-- End of page navibation -->

    
    <!-- Service section -->
    <section id="service" class="section">
        <div class="container" style="padding-top:50px;">
            <?php if(lang('News.news' . $news_id . '_title') != 'News.news' . $news_id . '_title') { ?>
                <h6 class="section-title mb-4"><?= lang('News.news' . $news_id . '_title') ?></h6>
                <p class="mb-5 pb-4"><?= lang('News.news' . $news_id . '_body') ?></p>
            <?php } ?>
        </div>
    </section>
    <!-- End of Sectoin -->

    <!-- Contact Section -->
    <section id="contact" class="position-relative section">
        <div class="container text-center">
            <h6 class="subtitle"><?= lang('Messages.contact') ?></h6>
            <h6 class="section-title mb-4"><?= lang('Messages.contact_title') ?></h6>
            <p class="mb-5 pb-4"><?= lang('Messages.contact_text') ?></p>

            <div class="contact text-left">
                <div class="form">
                    <!--<h6 class="subtitle">Available 24/7</h6>-->
                    <h6 class="section-title mb-4"><?= lang('Messages.contact_title2') ?></h6>
                    <form>
                        <div class="form-group">
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
                        </div>
                        <div class="form-group">
                            <textarea name="contact-message" id="" cols="30" rows="5" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block rounded w-lg">Send Message</button>
                    </form>
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
                            <p>me@meetdefox.com</p>
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
