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
            <h1>App Development Solutions</h1>
            <div class="space28"></div>
            <a href="index">Home <i class="fa-solid fa-angle-right"></i> <span>App Development</span></a>
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
            <h3>Mobile App Development</h3>
            <div class="space20"></div>
            <p>Build powerful and intuitive mobile apps for Android and iOS platforms that engage your audience on the go. Our solutions combine cutting-edge technologies with user-centric design to create seamless mobile experiences.</p>
            <div class="space14"></div>
            <div class="row">
              <div class="col-lg-6 col-md-6">
                <ul class="list">
                  <li><img src="/img/icons/check1.svg" alt="">Native iOS Development (Swift)</li>
                  <li><img src="/img/icons/check1.svg" alt="">Native Android Development (Kotlin)</li>
                </ul>
              </div>

              <div class="col-lg-6 col-md-6">
                <ul class="list">
                  <li><img src="/img/icons/check1.svg" alt="">Cross-Platform (React Native, Flutter)</li>
                  <li><img src="/img/icons/check1.svg" alt="">Progressive Web Apps (PWA)</li>
                </ul>
              </div>
            </div>
            <div class="space32"></div>
            <div class="pera-box">
              <h4>End-to-End Mobile Solutions</h4>
              <div class="space12"></div>
              <p>From concept to deployment, we handle every aspect of mobile app development including UI/UX design, API integration, testing, and app store submission. Our apps are optimized for performance, security, and scalability across all device types.</p>
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
            <h3>Our Technology Stack</h3>
            <div class="space20"></div>
            <p>We leverage the best technologies to build high-performance mobile applications:</p>
            
            <div class="space14"></div>
            <div class="row">
              <div class="col-lg-6 col-md-6">
                <ul class="list">
                  <li><img src="/img/icons/check1.svg" alt="">Native: Swift (iOS), Kotlin (Android)</li>
                  <li><img src="/img/icons/check1.svg" alt="">Cross-Platform: React Native, Flutter</li>
                  <li><img src="/img/icons/check1.svg" alt="">Backend: Node.js, Firebase, GraphQL</li>
                </ul>
              </div>
              <div class="col-lg-6 col-md-6">
                <ul class="list">
                  <li><img src="/img/icons/check1.svg" alt="">UI Frameworks: SwiftUI, Jetpack Compose</li>
                  <li><img src="/img/icons/check1.svg" alt="">Testing: XCTest, Espresso, Detox</li>
                  <li><img src="/img/icons/check1.svg" alt="">CI/CD: Fastlane, Bitrise, GitHub Actions</li>
                </ul>
              </div>
            </div>
            
            <div class="space48"></div>
            <h3>Frequently Asked Questions</h3>
            <div class="space20"></div>
            <p>Common questions about our mobile app development process and capabilities:</p>

            <div class="faq-widget-area">
              <div class="accordion" id="accordionExample">
                <div class="space24"></div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Should we build native or cross-platform apps?
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>Native apps (Swift/Kotlin) offer best performance and access to all device features, ideal for complex applications. Cross-platform (React Native/Flutter) provides cost efficiency and faster development for apps with standard requirements. We'll recommend the best approach based on your needs.</p>
                    </div>
                  </div>
                </div>
                <div class="space24"></div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      What's included in your app maintenance?
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>Our maintenance packages include OS version updates, bug fixes, performance optimization, security patches, and feature enhancements. We also monitor crash reports and analytics to proactively improve your app.</p>
                    </div>
                  </div>
                </div>
                <div class="space24"></div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      How do you ensure app store approval?
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>We strictly follow Apple App Store and Google Play guidelines during development. Our submission process includes pre-review checks, proper metadata preparation, and test flight/beta testing to ensure smooth approval.</p>
                    </div>
                  </div>
                </div>
                <div class="space24"></div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                      Can you integrate with our existing systems?
                    </button>
                  </h2>
                  <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>Yes, we specialize in integrating mobile apps with existing ERP, CRM, payment gateways, and custom APIs. We ensure secure authentication and real-time data synchronization between your app and backend systems.</p>
                    </div>
                  </div>
                </div>
                <div class="space24"></div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                      What's your development timeline?
                    </button>
                  </h2>
                  <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>A basic MVP typically takes 8-12 weeks, while complex enterprise apps may require 4-6 months. We follow Agile methodology with 2-week sprints, delivering working prototypes early for feedback. Exact timelines depend on features and platform requirements.</p>
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
              <a href="app-development"><i class="fa-solid fa-arrow-right"></i></a>
            </div>
            <div class="space24"></div>
            <a href="app-development">Mobile App Development</a>
            <div class="space16"></div>
            <p>Custom native and cross-platform mobile applications for iOS and Android with seamless performance and engaging UX.</p>
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
              <a href="web-development"><i class="fa-solid fa-arrow-right"></i></a>
            </div>
            <div class="space24"></div>
            <a href="web-development">Enterprise Mobility</a>
            <div class="space16"></div>
            <p>Secure business apps for field workforce, sales teams, and operations with offline capabilities and backend integration.</p>
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
              <a href="app-development"><i class="fa-solid fa-arrow-right"></i></a>
            </div>
            <div class="space24"></div>
            <a href="app-development">UI/UX Design</a>
            <div class="space16"></div>
            <p>Beautiful, intuitive interfaces following Material Design and Human Interface Guidelines for superior user experience.</p>
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