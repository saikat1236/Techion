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
            <h1>404 Error</h1>
            <div class="space28"></div>
            <a href="index">Home <i class="fa-solid fa-angle-right"></i> <span>404 Error</span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--===== HERO AREA ENDS =======-->

  <!--===== OTHERS AREA STARTS =======-->
  <div class="error-section-area sp1">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 m-auto">
          <div class="images-conten-area">
            <div class="img1 image-anime reveal">
              <img src="/img/all-images/others/error.png" alt="">
            </div>
            <div class="space40"></div>
            <div class="heading2 text-center">
              <h2>Oops!! Page Not Found</h2>
              <div class="space24"></div>
              <p>While you're here, why not check out some of our top-notch web hosting <br class="d-lg-block d-none"> services? Whether you're just starting a new website or looking to upgrade <br class="d-lg-block d-none"> your current hosting, we offer solutions tailored to your needs.</p>
              <div class="space32"></div>
              <div class="btn-area1">
                <a href="index" class="vl-btn2">Back To Home Page <i class="fa-solid fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--===== OTHERS AREA ENDS =======-->

  <?= $this->element("cta") ?>

  <?= $this->element("footer") ?>

  <?= $this->element("footer_scripts") ?>

</body>

</html>