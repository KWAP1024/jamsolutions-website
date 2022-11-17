<?php
include('./head.php');
?>

<body>

  <?php
  include('./navbar.php');
  ?>


  <?php
  include('./sidebar.php');
  ?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Carousel Card -->
            <div class="col-xxl-4 col-md-3">
              <a href="./carousel.php">
                <div class="card info-card sales-card">
                  <div class="card-body">
                    <h5 class="card-title">Carousel </h5>
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="ri-camera-switch-line"></i>
                      </div>
                      <div class="ps-3">
                        <h6>145</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <!-- Client Card -->
            <div class="col-xxl-4 col-md-3">
              <a href="./client.php">
                <div class="card info-card sales-card">
                  <div class="card-body">
                    <h5 class="card-title">Client </h5>
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="ri-admin-line"></i>
                      </div>
                      <div class="ps-3">
                        <h6>145</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <!-- Team Card -->
            <div class="col-xxl-4 col-md-3">
              <a href="./team.php">
                <div class="card info-card sales-card">
                  <div class="card-body">
                    <h5 class="card-title">Team </h5>
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="ri-team-line"></i>
                      </div>
                      <div class="ps-3">
                        <h6>145</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>

            <!-- Project Card -->
            <div class="col-xxl-4 col-md-3">
              <a href="./project.php">
                <div class="card info-card sales-card">
                  <div class="card-body">
                    <h5 class="card-title">Project </h5>
                    <div class="d-flex align-items-center">
                      <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                        <i class="ri-book-2-line"></i>
                      </div>
                      <div class="ps-3">
                        <h6>145</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            </div>





          </div>
        </div>

      </div>
    </section>

  </main>
  <?php
  include('./footer.php');
  ?>