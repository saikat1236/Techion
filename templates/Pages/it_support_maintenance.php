<!DOCTYPE html>
<html lang="en">

<head>
  <?= $this->element("title_meta") ?>
  <?= $this->element("head_css") ?>
</head>

<body>

  <?= $this->element("loader") ?>
  <?= $this->element("header/navbar") ?>

  <!--===== HERO AREA STARTS =======-->
  <div class="inner-page-hero-area" style="background-image: url(/img/all-images/bg/hero-bg1.png); background-position: center; background-repeat: no-repeat; background-size: cover;">
    <img src="/img/elements/elements5.png" alt="" class="elements5">
    <img src="/img/elements/elements4.png" alt="" class="elements4">
    <img src="/img/elements/elements1.png" alt="" class="elements1 keyframe5">
    <img src="/img/elements/elements16.png" alt="" class="elements16">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 m-auto">
          <div class="inner-header text-center heading1">
            <h1>IT Support & Maintenance</h1>
            <div class="space28"></div>
            <a href="index">Home <i class="fa-solid fa-angle-right"></i> <span>IT Support</span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--===== HERO AREA ENDS =======-->

  <!--===== SERVICE SIDE AREA STARTS =======-->
  <div class="service-sidebar-area sp1">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 m-auto">
          <div class="service2-widget-sidebar" style="padding: 0 !important;">
            <div class="img1 reveal image-anime">
              <img src="/img/all-images/service/service-img2.png" alt="">
            </div>
            <div class="space32"></div>
            <h3>Comprehensive IT Support</h3>
            <div class="space20"></div>
            <p>Ensure smooth IT operations with our proactive maintenance, updates, and real-time support services. Our expert team provides round-the-clock monitoring and rapid response to keep your systems running optimally and prevent costly downtime.</p>
            <div class="space14"></div>
            <div class="row">
              <div class="col-lg-6 col-md-6">
                <ul class="list">
                  <li><img src="/img/icons/check1.svg" alt="">24/7 Helpdesk Support</li>
                  <li><img src="/img/icons/check1.svg" alt="">Network Monitoring</li>
                </ul>
              </div>

              <div class="col-lg-6 col-md-6">
                <ul class="list">
                  <li><img src="/img/icons/check1.svg" alt="">System Updates & Patches</li>
                  <li><img src="/img/icons/check1.svg" alt="">Hardware Maintenance</li>
                </ul>
              </div>
            </div>
            <div class="space32"></div>
            <div class="pera-box">
              <h4>Proactive IT Maintenance</h4>
              <div class="space12"></div>
              <p>We don't just fix problems - we prevent them. Our proactive maintenance approach includes regular system health checks, performance optimization, security updates, and capacity planning to ensure your IT infrastructure remains reliable, secure, and scalable.</p>
            </div>
            <div class="space18"></div>
            <div class="row">
              <div class="col-lg-6 col-md-6">
                <div class="space30"></div>
                <div class="img1 reveal image-anime">
                  <img src="/img/all-images/service/service-img3.png" alt="">
                </div>
              </div>
              <div class="col-lg-6 col-md-6">
                <div class="space30"></div>
                <div class="img1 reveal image-anime">
                  <img src="/img/all-images/service/service-img4.png" alt="">
                </div>
              </div>
            </div>
            <div class="space32"></div>
            <h3>Our IT Support Services</h3>
            <div class="space20"></div>
            <p>We provide comprehensive IT support solutions tailored to your business needs:</p>
            
            <div class="space14"></div>
            <div class="row">
              <div class="col-lg-6 col-md-6">
                <ul class="list">
                  <li><img src="/img/icons/check1.svg" alt="">Remote & On-Site Technical Support</li>
                  <li><img src="/img/icons/check1.svg" alt="">Server Management & Maintenance</li>
                  <li><img src="/img/icons/check1.svg" alt="">Cloud Services Support</li>
                </ul>
              </div>
              <div class="col-lg-6 col-md-6">
                <ul class="list">
                  <li><img src="/img/icons/check1.svg" alt="">Data Backup & Disaster Recovery</li>
                  <li><img src="/img/icons/check1.svg" alt="">Security Monitoring & Updates</li>
                  <li><img src="/img/icons/check1.svg" alt="">IT Infrastructure Consulting</li>
                </ul>
              </div>
            </div>
            
            <div class="space48"></div>
            <h3>Frequently Asked Questions</h3>
            <div class="space20"></div>
            <p>Common questions about our IT support and maintenance services:</p>

            <div class="faq-widget-area">
              <div class="accordion" id="accordionExample">
                <div class="space24"></div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      What's included in your standard support package?
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>Our standard package includes 24/7 monitoring, helpdesk support, regular system maintenance, security updates, performance optimization, and emergency response. We also provide monthly health reports and recommendations for improvements.</p>
                    </div>
                  </div>
                </div>
                <div class="space24"></div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      How quickly do you respond to support requests?
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>We guarantee response within 1 hour for critical issues (24/7), 4 hours for high priority issues, and 8 hours for standard requests. Our average response time is under 30 minutes for critical system alerts monitored through our NOC.</p>
                    </div>
                  </div>
                </div>
                <div class="space24"></div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Do you provide support for both hardware and software?
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>Yes, we offer comprehensive support covering both hardware and software. This includes troubleshooting, repairs, replacements (for hardware under warranty), driver updates, OS support, application support, and integration assistance.</p>
                    </div>
                  </div>
                </div>
                <div class="space24"></div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                      How do you handle security updates and patches?
                    </button>
                  </h2>
                  <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>We implement a structured patch management process that includes testing updates in a staging environment, scheduling deployments during low-usage periods, and verifying successful implementation. Critical security patches are applied immediately with appropriate safeguards.</p>
                    </div>
                  </div>
                </div>
                <div class="space24"></div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                      Can you support our existing IT infrastructure?
                    </button>
                  </h2>
                  <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>Absolutely. We begin with a comprehensive audit of your current infrastructure to understand your systems, then tailor our support services accordingly. We're experienced with diverse environments including Windows, Linux, Mac, and hybrid cloud setups.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--===== SERVICE SIDE AREA STARTS =======-->

  <!--===== SERVICE AREA STARTS =======-->
  <div class="service1-section-area sp2" style="background-image: url(/img/all-images/bg/service-bg1.png); background-position: center; background-repeat: no-repeat; background-size: cover;">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 m-auto">
          <div class="heading2 text-center space-margin60">
            <h2>View More Services</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="800">
          <div class="service1-boxarea">
            <div class="icons">
              <img src="/img/icons/service-icon1.svg" alt="">
            </div>
            <div class="arrow">
              <a href="it-support-maintenance"><i class="fa-solid fa-arrow-right"></i></a>
            </div>
            <div class="space24"></div>
            <a href="it-support-maintenance">IT Support & Maintenance</a>
            <div class="space16"></div>
            <p>Comprehensive IT support services including helpdesk, system maintenance, and infrastructure management.</p>
            <div class="space24"></div>
            <h5>01</h5>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="900">
          <div class="service1-boxarea">
            <div class="icons">
              <img src="/img/icons/service-icon2.svg" alt="">
            </div>
            <div class="arrow">
              <a href="it-support-maintenance"><i class="fa-solid fa-arrow-right"></i></a>
            </div>
            <div class="space24"></div>
            <a href="it-support-maintenance">Managed IT Services</a>
            <div class="space16"></div>
            <p>Proactive, outsourced IT management for businesses seeking comprehensive technology support.</p>
            <div class="space24"></div>
            <h5>02</h5>
          </div>
        </div>

        <div class="col-lg-4 col-md-6" data-aos="zoom-in" data-aos-duration="1000">
          <div class="service1-boxarea">
            <div class="icons">
              <img src="/img/icons/service-icon3.svg" alt="">
            </div>
            <div class="arrow">
              <a href="#"><i class="fa-solid fa-arrow-right"></i></a>
            </div>
            <div class="space24"></div>
            <a href="#">Network Security</a>
            <div class="space16"></div>
            <p>Advanced security solutions including firewall management, threat detection, and vulnerability assessments.</p>
            <div class="space24"></div>
            <h5>03</h5>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--===== SERVICE AREA ENDS =======-->

  <?= $this->element("cta") ?>
  <?= $this->element("footer") ?>
  <?= $this->element("footer_scripts") ?>

</body>
</html>