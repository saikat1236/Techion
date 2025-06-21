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
            <h1>Case Studies</h1>
            <div class="space28"></div>
            <a href="index">Home <i class="fa-solid fa-angle-right"></i> <span>Case Studies</span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--===== HERO AREA ENDS =======-->

  <!--===== CASE AREA STARTS =======-->
  <div class="case-inner-area sp1">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-6">
          <div class="case-slider-boxarea">
            <div class="img1 image-anime">
              <img src="/img/all-images/case/case-img1.png" alt="">
            </div>
            <div class="content-area">
              <p>#CloudFlex Solution</p>
              <div class="space16"></div>
              <a href="case-single">Upgrading IT for Financial Secure</a>
              <div class="arrow">
                <a href="case-single"><i class="fa-solid fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-md-6">
          <div class="case-slider-boxarea">
            <div class="img1 image-anime">
              <img src="/img/all-images/case/case-img2.png" alt="">
            </div>
            <div class="content-area">
              <p>#CloudFlex Solution</p>
              <div class="space16"></div>
              <a href="case-single">Scaling IT for EcoSolutions</a>
              <div class="arrow">
                <a href="case-single"><i class="fa-solid fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="case-slider-boxarea">
            <div class="img1 image-anime">
              <img src="/img/all-images/case/case-img3.png" alt="">
            </div>
            <div class="content-area">
              <p>#CloudFlex Solution</p>
              <div class="space16"></div>
              <a href="case-single">Optimizing IT For Solutions</a>
              <div class="arrow">
                <a href="case-single"><i class="fa-solid fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-md-6">
          <div class="case-slider-boxarea">
            <div class="img1 image-anime">
              <img src="/img/all-images/case/case-img9.png" alt="">
            </div>
            <div class="content-area">
              <p>#CloudFlex Solution</p>
              <div class="space16"></div>
              <a href="case-single">Stories: IT Solutions At Work</a>
              <div class="arrow">
                <a href="case-single"><i class="fa-solid fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-md-6">
          <div class="case-slider-boxarea">
            <div class="img1 image-anime">
              <img src="/img/all-images/case/case-img10.png" alt="">
            </div>
            <div class="content-area">
              <p>#ProvenITResults</p>
              <div class="space16"></div>
              <a href="case-single">IT Solutions Driving Success</a>
              <div class="arrow">
                <a href="case-single"><i class="fa-solid fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-md-6">
          <div class="case-slider-boxarea">
            <div class="img1 image-anime">
              <img src="/img/all-images/case/case-img11.png" alt="">
            </div>
            <div class="content-area">
              <p>#TechDrivenSuccess</p>
              <div class="space16"></div>
              <a href="case-single">Real Solutions, Real Impact</a>
              <div class="arrow">
                <a href="case-single"><i class="fa-solid fa-arrow-right"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="space30"></div>
          <div class="pagination-area">
            <nav aria-label="Page navigation example">
              <ul class="pagination">
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Previous">
                    <i class="fa-solid fa-angle-left"></i>
                  </a>
                </li>
                <li class="page-item"><a class="page-link active" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">...</a></li>
                <li class="page-item"><a class="page-link" href="#">12</a></li>
                <li class="page-item">
                  <a class="page-link m-0" href="#" aria-label="Next">
                    <i class="fa-solid fa-angle-right"></i>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--===== CASE AREA ENDS =======-->

  <?= $this->element("cta") ?>

  <?= $this->element("footer") ?>

  <?= $this->element("footer_scripts") ?>

</body>

</html>