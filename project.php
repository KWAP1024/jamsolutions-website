<!-- ======= Our Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="section-title">
          <h2>Our Projects</h2>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-website">Websites</li>
              <li data-filter=".filter-webapp">Web Apps</li>
              <li data-filter=".filter-mobileapp">Mobile Apps</li>
              <li data-filter=".filter-networking">Networking</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">

          <?php
          while ($ret = mysqli_fetch_array($projectquery)) {
            $bighead = $ret['bighead'];
            $smallhead = $ret['smallhead'];
            $photo = $ret['photo'];
            $category = $ret['category'];
          ?>

            <div class="col-lg-4 col-md-6 portfolio-item filter-<?php echo $category ?>">
              <div class="portfolio-wrap">
                <img style="width: 10cm; height: 7cm;" src="./admin/v1/project/<?php echo $photo ?>" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4><?php echo $bighead ?></h4>
                  <p><?php echo $smallhead ?></p>
                  <div class="portfolio-links">
                    <a href="./admin/v1/project/<?php echo $photo ?>" data-gallery="portfolioGallery" class="portfolio-lightbox" title="<?php echo $bighead ?>"><i class="bi bi-plus"></i></a>
                    <!-- <a href="portfolio-details.php" title="More Details"><i class="bi bi-link"></i></a> -->
                    <a href="" title="More Details"><i class="bi bi-link"></i></a>
                  </div>
                </div>
              </div>
            </div>

          <?php
          }
          ?>

        </div>

      </div>
    </section>