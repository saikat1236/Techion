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
        <div class="col-lg-8 m-auto">
          <div class="inner-header text-center heading1">
            <h1>Contact Us</h1>
            <div class="space28"></div>
            <a href="index">Home <i class="fa-solid fa-angle-right"></i> <span>Contact Us</span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--===== HERO AREA ENDS =======-->

  <!--===== CONTACT AREA STARTS =======-->
  <div class="contact-inner-area sp1">
    <div class="container">
      <div class="row">
        <div class="col-lg-10 m-auto">
          <div class="heading2 text-center">
            <h5><span><img src="/img/icons/sub-logo1.svg" alt=""></span>Have Questions? Reach Out!</h5>
            <div class="space20"></div>
            <h2>Let's Discuss Your IT Needs</h2>
          </div>
          <div class="space40"></div>
          <div class="row">
            <div class="col-lg-4 col-md-6">
              <div class="widget-contactbox">
                <div class="icons">
                  <img src="/img/icons/mail2.svg" alt="">
                </div>
                <div class="content">
                  <h4>Our Email</h4>
                  <a href="mailto:FeynHomisolut@gmail.com">FeynHomi@gmail.com</a>
                </div>
              </div>
              <div class="space30 d-lg-none d-block"></div>
            </div>

            <div class="col-lg-4 col-md-6">
              <div class="widget-contactbox">
                <div class="icons">
                  <img src="/img/icons/phn2.svg" alt="">
                </div>
                <div class="content">
                  <h4>Phone</h4>
                  <a href="tel:+11234567890">+91 9151890286</a>
                </div>
              </div>
              <div class="space30 d-lg-none d-block"></div>
            </div>

            <div class="col-lg-4 col-md-6">
              <div class="widget-contactbox">
                <div class="icons">
                  <img src="/img/icons/time2.svg" alt="">
                </div>
                <div class="content">
                  <h4>Schedule</h4>
                  <a href="mailto:FeynHomisolut@gmail.com">Sunday-Fri: 9 AM – 6 PM</a>
                </div>
              </div>
            </div>
          </div>
          <div class="space60"></div>
          <div class="row">
            <div class="col-lg-6">
              <div class="img1 reveal image-anime">
                <img src="/img/all-images/others/others-img2.png" alt="">
              </div>
            </div>

            <div class="col-lg-6">
              <div class="contact-author-boxarea">
                <h3>Get In Touch Now</h3>
                <div class="space8"></div>
                <?= $this->Form->create(null, [
                  'url' => ['controller' => 'Pages', 'action' => 'sendContactMail'],
                  'class' => '', // add custom class if needed
                ]) ?>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="input-area">
                      <?= $this->Form->control('first_name', ['label' => false, 'placeholder' => 'First Name*', 'required' => true]) ?>
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="input-area">
                      <?= $this->Form->control('last_name', ['label' => false, 'placeholder' => 'Last Name*', 'required' => true]) ?>
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="input-area">
                      <?= $this->Form->control('phone', ['type' => 'tel', 'label' => false, 'placeholder' => 'Phone Number*', 'required' => true]) ?>
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="input-area">
                      <?= $this->Form->control('email', ['type' => 'email', 'label' => false, 'placeholder' => 'Email Address*', 'required' => true]) ?>
                    </div>
                  </div>

                  <div class="col-lg-12">
                    <div class="input-area">
                      <?= $this->Form->control('service_type', ['label' => false, 'placeholder' => 'Service Type*', 'required' => true]) ?>
                    </div>
                  </div>

                  <div class="col-lg-12">
                    <div class="input-area">
                      <?= $this->Form->control('message', ['type' => 'textarea', 'label' => false, 'placeholder' => 'Your Message', 'required' => true]) ?>
                    </div>
                  </div>

                  <div class="col-lg-12">
                    <div class="space32"></div>
                    <div class="input-area">
                      <?= $this->Form->button(__('Get Started Now'), ['class' => 'vl-btn2', 'escape' => false]) ?>
                    </div>
                  </div>
                </div>
                <?= $this->Form->end() ?>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--===== CONTACT AREA ENDS =======-->

  <?= $this->element("cta") ?>

  <?= $this->element("footer") ?>

  <?= $this->element("footer_scripts") ?>

</body>

</html>