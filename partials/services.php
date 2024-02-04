<?php 
    $services = [
        [
            'icon' => 'lni lni-capsule',
            'title' => 'Refreshing Design',
            'description' => 'Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy
            eirmod tempor ividunt labor dolore magna.'
        ],
        [
            'icon' => 'lni lni-bootstrap',
            'title' => 'Solid Bootstrap 5',
            'description' => 'Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy
            eirmod tempor ividunt labor dolore magna.'
        ],
        [
            'icon' => 'lni lni-shortcode',
            'title' => '100+ Components',
            'description' => 'Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy
            eirmod tempor ividunt labor dolore magna.'
        ],
        [
            'icon' => 'lni lni-dashboard',
            'title' => 'Speed Optimized',
            'description' => 'Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy
            eirmod tempor ividunt labor dolore magna.'
        ]/*,
        [
            'icon' => 'lni lni-bootstrap',
            'title' => 'Solid Bootstrap 5',
            'description' => 'Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy
            eirmod tempor ividunt labor dolore magna.'
        ],
        [
            'icon' => 'lni lni-capsule',
            'title' => 'Refreshing Design',
            'description' => 'Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy
            eirmod tempor ividunt labor dolore magna.'
        ]*/
    ];

    function print_service(array $data){
        return vsprintf('
        <div class="col-lg-4 col-md-6">
            <div class="single-services">
                <div class="service-icon">
                    <i class="%s"></i>
                </div>
                <div class="service-content">
                    <h4>%s</h4>
                    <p>%s</p>
                </div>
            </div>
        </div>
        ',[
            $data['icon'],
            $data['title'],
            $data['description']
        ]);
    }
?>
<!-- ===== service-area start ===== -->
<section id="services" class="services-area services-eight">
    <!--======  Start Section Title Five ======-->
    <div class="section-title-five">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="content">
              <h6>Services</h6>
              <h2 class="fw-bold">Our Best Services</h2>
              <p>
                There are many variations of passages of Lorem Ipsum available,
                but the majority have suffered alteration in some form.
              </p>
            </div>
          </div>
        </div>
        <!-- row -->
      </div>
      <!-- container -->
    </div>
    <!--======  End Section Title Five ======-->
    <div class="container">
        <div class="row">
            <?php foreach($services as $service){ ?>
                <?= print_service($service); ?>
            <?php } ?>
            <!--
            <div class="col-lg-4 col-md-6">
            <div class="single-services">
                <div class="service-icon">
                <i class="lni lni-layers"></i>
                </div>
                <div class="service-content">
                <h4>Fully Customizable</h4>
                <p>
                    Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy
                    eirmod tempor ividunt labor dolore magna.
                </p>
                </div>
            </div>
            </div>
            <div class="col-lg-4 col-md-6">
            <div class="single-services">
                <div class="service-icon">
                <i class="lni lni-reload"></i>
                </div>
                <div class="service-content">
                <h4>Regular Updates</h4>
                <p>
                    Lorem ipsum dolor sit amet, adipscing elitr, sed diam nonumy
                    eirmod tempor ividunt labor dolore magna.
                </p>
                </div>
            </div>
            </div>
            -->
        </div>
    </div>
</section>