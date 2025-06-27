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
            <h1>Web Development Solutions</h1>
            <div class="space28"></div>
            <a href="index">Home <i class="fa-solid fa-angle-right"></i> <span>Web Development</span></a>
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
            <h3>Comprehensive Web Development</h3>
            <div class="space20"></div>
            <p>In today's digital-first world, your website is often the first point of contact with customers. Our Web Development Solutions leverage cutting-edge technologies across all major stacks to build responsive, scalable, and high-performance web applications tailored to your business needs.</p>
            <div class="space14"></div>
            <div class="row">
              <div class="col-lg-6 col-md-6">
                <ul class="list">
                  <li><img src="/img/icons/check1.svg" alt="">Frontend Development (React, Angular, Vue)</li>
                  <li><img src="/img/icons/check1.svg" alt="">Backend Systems (Node.js, Django, Laravel)</li>
                </ul>
              </div>

              <div class="col-lg-6 col-md-6">
                <ul class="list">
                  <li><img src="/img/icons/check1.svg" alt="">Database Solutions (MongoDB, PostgreSQL)</li>
                  <li><img src="/img/icons/check1.svg" alt="">DevOps & Cloud Deployment</li>
                </ul>
              </div>
            </div>
            <div class="space32"></div>
            <div class="pera-box">
              <h4>Full-Stack Development Expertise</h4>
              <div class="space12"></div>
              <p>Our team specializes in building modern web applications using industry-leading technologies. From single-page applications to complex enterprise systems, we implement robust architectures that scale with your business while maintaining optimal performance and security.</p>
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
            <p>We work with all major web development technologies to deliver the perfect solution for your requirements:</p>
            
            <div class="space14"></div>
            <div class="row">
              <div class="col-lg-6 col-md-6">
                <ul class="list">
                  <li><img src="/img/icons/check1.svg" alt="">Frontend: React.js, Angular, Vue.js, TypeScript</li>
                  <li><img src="/img/icons/check1.svg" alt="">Mobile: React Native, Flutter</li>
                  <li><img src="/img/icons/check1.svg" alt="">CSS Frameworks: Tailwind, Bootstrap, SASS</li>
                </ul>
              </div>
              <div class="col-lg-6 col-md-6">
                <ul class="list">
                  <li><img src="/img/icons/check1.svg" alt="">Backend: Node.js, Python (Django/Flask), PHP (Laravel)</li>
                  <li><img src="/img/icons/check1.svg" alt="">Databases: MongoDB, PostgreSQL, MySQL</li>
                  <li><img src="/img/icons/check1.svg" alt="">Cloud: AWS, Azure, Google Cloud</li>
                </ul>
              </div>
            </div>
            
            <div class="space48"></div>
            <h3>Frequently Asked Questions</h3>
            <div class="space20"></div>
            <p>Have questions about our web development services? Here are answers to some common inquiries about our process and capabilities.</p>

            <div class="faq-widget-area">
              <div class="accordion" id="accordionExample">
                <div class="space24"></div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Which technology stack is right for my project?
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>The ideal stack depends on your project requirements, scalability needs, and team expertise. We recommend React/Node.js for full-stack JavaScript applications, Django for content-heavy sites, and Laravel for robust e-commerce solutions. Our consultants will guide you through the selection process.</p>
                    </div>
                  </div>
                </div>
                <div class="space24"></div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Do you provide ongoing maintenance and support?
                    </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>Yes, we offer comprehensive maintenance packages including security updates, performance optimization, feature enhancements, and 24/7 monitoring. Our SLA guarantees response times based on issue severity.</p>
                    </div>
                  </div>
                </div>
                <div class="space24"></div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      How do you ensure website performance and SEO?
                    </button>
                  </h2>
                  <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>We implement performance best practices like code splitting, lazy loading, CDN integration, and image optimization. For SEO, we follow semantic HTML structure, proper meta tagging, server-side rendering where needed, and integrate with analytics platforms.</p>
                    </div>
                  </div>
                </div>
                <div class="space24"></div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                      Can you migrate my existing website to a new technology?
                    </button>
                  </h2>
                  <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>Absolutely. We specialize in legacy system modernization, whether you're moving from WordPress to a headless CMS, upgrading from jQuery to React, or transitioning from monolithic to microservices architecture. We ensure zero downtime during migration.</p>
                    </div>
                  </div>
                </div>
                <div class="space24"></div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                      What's your development process?
                    </button>
                  </h2>
                  <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p>We follow Agile methodology with 2-week sprints, daily standups, and continuous integration. Our process includes requirements analysis, UX wireframing, prototype development, testing, and iterative improvements with client feedback at each stage.</p>
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
              <a href="service-single"><i class="fa-solid fa-arrow-right"></i></a>
            </div>
            <div class="space24"></div>
            <a href="service-single">Web Development</a>
            <div class="space16"></div>
            <p>Custom web applications built with modern frameworks like React, Angular, and Vue.js, backed by robust Node.js or Python APIs.</p>
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
              <a href="service-single"><i class="fa-solid fa-arrow-right"></i></a>
            </div>
            <div class="space24"></div>
            <a href="service-single">Mobile App Development</a>
            <div class="space16"></div>
            <p>Cross-platform mobile apps using React Native and Flutter, or native iOS/Android development for premium performance.</p>
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
              <a href="service-single"><i class="fa-solid fa-arrow-right"></i></a>
            </div>
            <div class="space24"></div>
            <a href="service-single">E-Commerce Solutions</a>
            <div class="space16"></div>
            <p>Custom online stores with Shopify, WooCommerce, or headless commerce architectures using modern Jamstack approaches.</p>
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