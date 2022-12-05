<?php

include("./database/connect.php");

// Carousel
$query = "SELECT * FROM carousel";
$result = mysqli_query($conn, $query);

// Clients
$client = "SELECT * FROM client";
$clientquery = mysqli_query($conn, $client);

// Project
$project = "SELECT * FROM project";
$projectquery = mysqli_query($conn, $project);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>JAM Solutions Tanzania</title>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name='robots' content='max-image-preview:large' />
  <meta content="JamSolutions,jamsolutions,JamSolutions,JamSolution.it,Tanzania,Ict Tanzania,tanzania,tansania,Computer Tanzania,software Tanzania, websites Tanzania, application Tanzania, Mobile applications Tanzania,institute Tanzania,Nuru Yakubu,Gilbert Herman, Dar es salaam,Tanzania,Mikocheni,Africa, Club 101, Best IT, Security,Network, Computer,online exam, SoftNet Partners, Cisco, Microsoft, Server, Huawei, VMware, Geofrey Ritte,Government,website,Tanzania,Portal,Tourism,investment,online service , Tovuti,serikali,Tanzania,Portal,utalii,uwekeaji,huduma mtandao,jamhuri, HID,Vodacom ekyc,michezo ya watoto wa wadogo, tanzania passport, cisco ise features and benefits, cisco s100v, top 100 mid sized Compannies tanzania, immigration tanzania new passport, cisco appliance, call center electronic solutions,electronics devices Tanzania,Hotel bookings & Accommodation Tanzania,Train Spare Parts:,Catering Services,Regali Aziendali, Gadget Promozionali, Articoli Pubblicitari gadget,gadget
        promozionali,oggettistica pubblicitaria,oggettistica regali aziendali,business
        promotional items,imprinted promotional products,logo merchandise,promotional
        items,corporate gift s,gadgets,business gifts,promotional gifts,business
        promotional items,pubblicit,regali aziendali,articoli promozionali,idee
        promozionali,shop,promotional,gift,catalogo,incentivi,shopping,fazzolettini,abbigliamento,busteplastica,palloni,Tshirt,radio,elettronica,pelletteria,
        agende,oro argento,preziosi,accessori,portachiavi,penne,accendini,borse,
        valigeria,ufficio,orologi,ombrelli,ombrelloni,misure metriche,blocchi
        memo,rubriche,calendari,calendari da tavolo,arti grafiche,campagne
        pubblicitarie,cartelli pubblicitari,cartelloni pubblicitari,cartellonistica,cartellonistica
        pubblicitaria,cataloghi comunicazione,comunicazione pubblicitaria,web,depliant,depliants,design,distribuzione
        oggettistica,totem,espositori,espositori pubblicitari,etichette,etichette
        adesive,eventi,grafica,grafica 3d,grafica digitale,grafica pubblicitaria,grafici,grafici
        pubblicitari,grafico pubblicitaria,immagine coordinata,immagine pubblicitaria,Tourist and Camping Activities,Tourist and Camping Activities. Tanzania,Tailoring, Fashion and Modelling Tanzania,medical laboratory equipment Tanzania,medical supply products Tanzania,health care supplies companies Tanzania,medical equipment supply companyTanzania,medical laboratory supplies Tanzania,best health devices Tanzania,medical care supplies Tanzania,health medical equipment Tanzania,medical supplies supplier Tanzania,quality medical equipment Tanzania,hospital devices Tanzania,dental medical supplies Tanzania,best medical devices Tanzania,the medical supply Tanzania,medic medical supplies,medical medical supplies,medical supplies suppliers,pro medical equipment,hospital medical devices,best care medical supply,medical service equipment,dental medical equipment,poverty reduction, education, agriculture, mining, tourism, trade, industries, health, poverty reduction, water environment, women development, private sector development, science and technology" name="keywords">
   <meta name="description" content="Today’s world operate in the integration-of-things that require a very strong ICT software and hardware. At JAM Solutions we have both the best ICT software and hardware solutions perfect for your daily business operations."/>
<meta name="robots" content="index,follow,max-snippet:-1, max-video-preview:-1, max-image-preview:large"/>
<meta name="googlebot" content="index,follow" />
<meta name="googlebot-news" content="index,follow" />
<meta name="slurp" content="index,follow" />
<meta name="msnbot" content="index,follow" />
<link rel="canonical" href="https://jamsolutions.co.tz/" />
<meta property="og:type" content="website" />
<meta property="og:title" content="BestSoftware Solutions In TANZANIA - JamSolutions" />
<meta property="og:description" content="JamSolutions is a medical equipment supplier across TANZANIA. We provide new technology to our clients, advancing health care in the markets we serve." />
<meta property="og:url" content="https://JamSolutions.co.tz/" />
<meta property="og:site_name" content="JamSolutions Tanzania" />
<meta property="og:updated_time" content="2022-08-02T05:58:41+00:00" />
<meta property="video:duration" content="20" />
<meta property="ya:ovs:upload_date" content="2022-09-08" />
<meta property="ya:ovs:allow_embed" content="true" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="BestSoftware Solutions Supplier In TANZANIA - JamSolutions" />
<meta name="twitter:description" content="JAM Solutions Co Ltd is a consulting firm that was incorporated in January 2013. Our existence is highly motivated by the quest to serve our clients with all business solutions under the same roof. We are very aware how the running of business operations could be hectic especially if you have to deal with different government institutions and offices as well as suppliers." />
<meta name="twitter:label1" content="Written by" />
<meta name="twitter:data1" content="admin" />
<meta name="twitter:label2" content="Time to read" />
<meta name="twitter:data2" content="25 minutes" />
<meta name="author" content="JAM Solution" />
  <!-- Favicons -->
  <link href="assets/img/favicon.ico" rel="icon">
  <link href="assets/img/favicon.ico" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.css" rel="stylesheet" />
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope-fill"></i><a href="mailto:contact@example.co.tz">info@jamsolutions.co.tz</a>
        <i class="bi bi-phone-fill phone-icon"></i> +255 755 530 328
      </div>
      <div class="social-links d-none d-md-block">
        <a target="_blank" href="https://twitter.com/SolutionsJam" class="twitter"><i class="bi bi-twitter"></i></a>
        <a target="_blank" href="https://www.instagram.com/jam_solutions_ltd/" class="instagram"><i class="bi bi-instagram"></i></a>
        <a target="_blank" href="https://www.linkedin.com/in/jam-solutions-91a270257/" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto">
        <!-- <h1><a href="index.php">Mamba</a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <!--<li><a class="nav-link scrollto" href="#portfolio">Projects</a></li>-->
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <!--<i class="bi bi-list mobile-nav-toggle"></i>-->
      </nav><!-- .navbar -->

    </div>
  </header>


  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <?php
        while ($ret = mysqli_fetch_array($result)) {
          $bigtext = $ret['bigtext'];
          $explaintext = $ret['explaintext'];
          $photo = $ret['photo'];
        ?>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active" style="background-image: url('./admin/v1/carousel/<?php echo $photo ?>');">
              <div class="carousel-container">
                <div class="carousel-content container">
                  <h2 class="animate__animated animate__fadeInDown"><span><?php echo $bigtext; ?></span></h2>
                  <p class="animate__animated animate__fadeInUp"><?php echo $explaintext ?></p>
                </div>
              </div>
            </div>
          </div>
        <?php
        }
        ?>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <!-- <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span> -->
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <!-- <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span> -->
        </a>

      </div>
    </div>
  </section>

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row no-gutters">
          <div class="col-lg-6 video-box">
            <img src="assets/img/mixed-programers-team-working-group-project-multiple-screens-showing-running-code-it-startup-office-coder-pointing-pencil-computer-screen-with-software-compiling-code (3).jpg" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center about-content">

            <div class="section-title">
              <h2>About Us</h2>
              <p>JAM Solutions Co Ltd is a consulting firm that was incorporated in January 2013. Our existence is highly motivated by the quest to serve our clients with all business solutions under the same roof. We are very aware how the running of business operations could be hectic especially if you have to deal with different government institutions and offices as well as suppliers.</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="">Mission</a></h4>
              <p class="description">To be the leading general supply solution provider particularly in ICT, hospitality...</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="">Vission</a></h4>
              <p class="description">To be the most preferred consulting firm in Tanzania and at international level at large.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ======= Counts Section ======= -->
    <section class="counts section-bg">
      <div class="container">
        <div class="row">
          <div class="section-title">
            <h2>CORE VALUES</h2>
          </div>
          <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up">
            <div class="count-box">
              <i class="bi bi-simple-smile" style="color: #20b38e;"></i>
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <strong>
                <p>Quality</p>
              </strong>
              <p>Expect nothing but quality and competitive
                services when you decide to work with us.</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="200">
            <div class="count-box">
              <i class="bi bi-document-folder" style="color: #c042ff;"></i>
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <strong>
                <p>Integrity</p>
              </strong>
              <p>Our staff are loyal and practice at utmost integrity
                to assist the growth of your business.</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="400">
            <div class="count-box">
              <i class="bi bi-live-support" style="color: #46d1ff;"></i>
              <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
              <strong>
                <p>Customer
                  Focus</p>
              </strong>
              <p>You need only a one-call for us to access you. With us, you are saved.</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="600">
            <div class="count-box">
              <i class="bi bi-users-alt-5" style="color: #ffb459;"></i>
              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
              <strong>
                <p>Guarantee
                  Satisfication</p>
              </strong>
              <p>We live by satisfy our customers so as to attain
                mutual beneficial relationships.</p>
            </div>
          </div>
          
        </div>
      </div>
    </section>

    <section id="services" class="services">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Our Services</h2>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
            <div class="icon"><i class="bi bi-chat-left-dots"></i></div>
            <h4 class="title"><a href="">ICT Solutions</a></h4>
            <p class="description">Today’s world operate in the integration-of-things that require a very strong ICT
              software and hardware. At JAM Solutions we have both the best ICT software and
              hardware solutions perfect for your daily business operations.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="bi bi-bounding-box"></i></div>
            <h4 class="title"><a href="">Hotel bookings & Accommodation</a></h4>
            <p class="description">We know how tiresome is to looking for proper accommodation at affordable
              costs and amenities that you want. With our assistance we can help you to access
              and secure any accommodation solution while you continue handling other
              stuffs.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="bi bi-globe"></i></div>
            <h4 class="title"><a href="">Train Spare Parts:</a></h4>
            <p class="description">JAM Solutions is also a renowned and reliable supplier of a
              various range of railroad equipment as well as high-quality
              components for all types of locomotives, rail wagon, and
              rolling stock maintenance machines.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class="bi bi-broadcast"></i></div>
            <h4 class="title"><a href="">Catering Services</a></h4>
            <p class="description">We know how hectic is to prepare and coordinate the whole event by
              yourself especially when it comes to choose a perfect catering vendor to
              suite your needs. We have a reasonable list of remarkable catering vendors
              in our inventory to serve your event and make everyone invited satisfied
              with meals and drinks served.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
            <div class="icon"><i class="bi bi-brightness-high"></i></div>
            <h4 class="title"><a href="">Tourist and Camping Activities.</a></h4>
            <p class="description">Have any trouble to access to tourist activities or camping in any desired
              destination across Tanzania? Relax, JAM Solutions is your only solution
              provider. We have a rich inventory of tourist guides and activities as well as
              camping.</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
            <div class="icon"><i class="bi bi-calendar2-week"></i></div>
            <h4 class="title"><a href="">Tailoring, Fashion and Modelling</a></h4>
            <p class="description">Fashion design and modelling. Tanzanian economy is among the top ten
              ones in terms of growth across the African continent. With the growth of
              economy, the entertainment industries grow as well. Among them is fashion
              design and modelling. We have experience in creating crowd-pulling
              modelling and fashion events across the country.</p>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->


    <div id="carouselMultiItemExample" class="carousel slide carousel-dark text-center" data-mdb-ride="carousel">
      <!-- Controls -->
      <div class="d-flex justify-content-center mb-4">
        <div class="section-title">
          <h2>Our Clients</h2>
        </div>
      </div>

      <div class="carousel-inner py-4">
        <!-- Single item -->
        <div class="carousel-item active">
          <div class="container">
            <div class="row">

              <?php
              while ($retclient = mysqli_fetch_array($clientquery)) {
                $name = $retclient['name'];
                $photoclient = $retclient['photo'];
              ?>

                <div class="col-lg-4 d-none d-lg-block">
                  <div class="card" style="align-items: center;">
                    <img style="width: 80%; height: 200px;" src="./admin/v1/client/<?php echo $photoclient ?>" class="card-img-top" alt="<?php echo $name . "'s Photo" ?>" />
                    <div class="card-body">
                      <h5 class="card-title"><?php echo $name ?></h5>
                    </div>
                  </div>
                </div>

              <?php
              }
              ?>
            </div>
          </div>
        </div>

      </div>
      <!-- Inner -->
    </div>

    <section class="about-lists">
      <div class="container">
        <div class="section-title">
          <h2>WHY US</h2>
        </div>
      </div>
      <div class="row no-gutters">

        <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up">
          <span>01</span>
          <h4>Consulting</h4>
          <p>We are a one-stop consulting firm with different solutions for your business needs.</p>
        </div>

        <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="100">
          <span>02</span>
          <h4>Skilled and Experienced</h4>
          <p>We have got skilled and experience staff to serve you and available 24/7 hours for operations.</p>
        </div>

        <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="200">
          <span>03</span>
          <h4> Quality Service and Products</h4>
          <p>We believe in offering quality services and products that exceed customer expectations.</p>
        </div>

        <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="300">
          <span>04</span>
          <h4>Customer's satisfication</h4>
          <p>Our services and products are customized to meet customer satisfactions.</p>
        </div>

        <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="400">
          <span>05</span>
          <h4>Skilled software engineers</h4>
          <p>We have highly skilled engineers with excellent technical knowledge and experience in using latest softwares</p>
        </div>

        <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="500">
          <span>06</span>
          <h4>Years of experience</h4>
          <p>In more than 16 years of IT outsourcing, we have gained experience in a wide spectrum of technologies, industries, and application types.</p>
        </div>

      </div>

      </div>
    </section>

    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Our Team</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem.</p> -->
        </div>

        <div class="row">

          <!-- <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up">
            <div class="member">
              <div class="pic"><img src="assets/img/team/person1.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>John Machonchoryo</h4>
                <span>Chief Executive Officer</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div> -->

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="pic"><img src="assets/img/team/person1.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Adam Juma</h4>
                <span>Accountant</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="pic"><img src="assets/img/team/kwayu.jpg" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Kwayu Mmari</h4>
                <span>Full Stack Developer</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="pic"><img src="assets/img/team/rugg.jfif" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Jaston Jaston</h4>
                <span>Full Stack Developer</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>



        </div>

      </div>
    </section>



    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact Us</h2>
        </div>

        <div class="row">

          <div class="col-lg-6 d-flex" data-aos="fade-up">
            <div class="info-box">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>Classic Mall, Kibao cha shule, Dar es Salaam Tanzania</p>
            </div>
          </div>

          <div class="col-lg-3 d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="info-box">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>info@jamsolutions.co.tz<br>support@jamsolutions.co.tz</p>
            </div>
          </div>

          <div class="col-lg-3 d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="info-box ">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>+255 755 530 328 /<br>+255 714 932 225</p>
            </div>
          </div>

          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-lg-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-lg-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section>

  </main>


  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>JAM Solutions</h3>
            <p style="color: white">
              Classic Mall, Kibao cha shule, Dar es Salaam Tanzania<br><br>
              <strong>Phone:</strong> +255 755 530 328 / +255 714 932 225+<br>
              <strong>Email:</strong> info@jamsolutions.co.tz<br>
            </p>
            <div class="social-links mt-3">
              <a target="_blank" href="https://twitter.com/SolutionsJam" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a target="_blank" href="https://www.instagram.com/jam_solutions_ltd/" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a target="_blank" href="https://www.linkedin.com/in/jam-solutions-91a270257/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Write us your email to not miss our recent posts</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" disabled value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>JAM Solutions</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed and Maintained by <a href="">JAM Solutions</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <!-- MDB -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.0/mdb.min.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
