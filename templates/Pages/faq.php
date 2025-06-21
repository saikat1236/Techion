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
            <h1>FAQ Question</h1>
            <div class="space28"></div>
            <a href="index">Home <i class="fa-solid fa-angle-right"></i> <span>FAQ Question</span></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--===== HERO AREA ENDS =======-->

  <!--===== FAQ AREA STARTS =======-->
  <div class="faq-inner-section-area sp1">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 m-auto">
          <div class="heading2 text-center space-margin60">
            <h2>Frequently Asked Question</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="faq-widget-area">
            <ul class="nav nav-pills" id="pills-tab" role="tablist">
              <li class="nav-item" role="presentation">
                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">All</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Cyber Security</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Help Desk Solution</button>
              </li>

              <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-contact1-tab" data-bs-toggle="pill" data-bs-target="#pills-contact1" type="button" role="tab" aria-controls="pills-contact1" aria-selected="false">Software Development</button>
              </li>

              <li class="nav-item" role="presentation">
                <button class="nav-link" id="pills-contact2-tab" data-bs-toggle="pill" data-bs-target="#pills-contact2" type="button" role="tab" aria-controls="pills-contact2" aria-selected="false">Cloud Solution</button>
              </li>
              <li class="nav-item" role="presentation">
                <button class="nav-link m-0" id="pills-contact3-tab" data-bs-toggle="pill" data-bs-target="#pills-contact3" type="button" role="tab" aria-controls="pills-contact2" aria-selected="false">Data Protection</button>
              </li>
            </ul>
            <div class="space48"></div>
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                <div class="faq-section-area">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="accordian-area">
                        <div class="accordion" id="accordionExample">
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                What types of IT solutions do you offer?
                              </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                <p>We implement robust data backup and recovery solutions best protect your data and ensure business continuity in case of IT unexpected events. We provide regular updates and status .</p>
                              </div>
                            </div>
                          </div>
                          <div class="space20"></div>
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                What is your policy on data backup and recovery?
                              </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                <p>We implement robust data backup and recovery solutions best protect your data and ensure business continuity in case of IT unexpected events. We provide regular updates and status .</p>
                              </div>
                            </div>
                          </div>
                          <div class="space20"></div>
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                How can IT solutions benefit my business?
                              </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                <p>We implement robust data backup and recovery solutions best protect your data and ensure business continuity in case of IT unexpected events. We provide regular updates and status .</p>
                              </div>
                            </div>
                          </div>
                          <div class="space20"></div>
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                What industries do you specialize in?
                              </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                <p>We implement robust data backup and recovery solutions best protect your data and ensure business continuity in case of IT unexpected events. We provide regular updates and status .</p>
                              </div>
                            </div>
                          </div>
                          <div class="space20"></div>
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                What is the process for onboarding new client?
                              </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                              <div class="accordion-body">
                                <p>We implement robust data backup and recovery solutions best protect your data and ensure business continuity in case of IT unexpected events. We provide regular updates and status .</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-6">
                      <div class="accordian-area">
                        <div class="accordion" id="accordionExample2">
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                                How can I get in touch with your support team?
                              </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample2">
                              <div class="accordion-body">
                                <p>We implement robust data backup and recovery solutions best protect your data and ensure business continuity in case of IT unexpected events. We provide regular updates and status .</p>
                              </div>
                            </div>
                          </div>
                          <div class="space20"></div>
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                What kind of technology partners do you work with?
                              </button>
                            </h2>
                            <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample2">
                              <div class="accordion-body">
                                <p>We implement robust data backup and recovery solutions best protect your data and ensure business continuity in case of IT unexpected events. We provide regular updates and status .</p>
                              </div>
                            </div>
                          </div>
                          <div class="space20"></div>
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                Can I scale the services as my business grows?
                              </button>
                            </h2>
                            <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionExample2">
                              <div class="accordion-body">
                                <p>We implement robust data backup and recovery solutions best protect your data and ensure business continuity in case of IT unexpected events. We provide regular updates and status .</p>
                              </div>
                            </div>
                          </div>
                          <div class="space20"></div>
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                What types of payment plans do you offer?
                              </button>
                            </h2>
                            <div id="collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionExample2">
                              <div class="accordion-body">
                                <p>We implement robust data backup and recovery solutions best protect your data and ensure business continuity in case of IT unexpected events. We provide regular updates and status .</p>
                              </div>
                            </div>
                          </div>
                          <div class="space20"></div>
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                                What is your policy on data backup recovery?
                              </button>
                            </h2>
                            <div id="collapseTen" class="accordion-collapse collapse" data-bs-parent="#accordionExample2">
                              <div class="accordion-body">
                                <p>We implement robust data backup and recovery solutions best protect your data and ensure business continuity in case of IT unexpected events. We provide regular updates and status .</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
                <div class="faq-section-area">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="accordian-area">
                        <div class="accordion" id="accordionExample3">
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="true" aria-controls="collapseEleven">
                                What types of IT solutions do you offer?
                              </button>
                            </h2>
                            <div id="collapseEleven" class="accordion-collapse collapse show" data-bs-parent="#accordionExample3">
                              <div class="accordion-body">
                                <p>We implement robust data backup and recovery solutions best protect your data and ensure business continuity in case of IT unexpected events. We provide regular updates and status .</p>
                              </div>
                            </div>
                          </div>
                          <div class="space20"></div>
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                                What is your policy on data backup and recovery?
                              </button>
                            </h2>
                            <div id="collapseTwelve" class="accordion-collapse collapse" data-bs-parent="#accordionExample3">
                              <div class="accordion-body">
                                <p>We implement robust data backup and recovery solutions best protect your data and ensure business continuity in case of IT unexpected events. We provide regular updates and status .</p>
                              </div>
                            </div>
                          </div>
                          <div class="space20"></div>
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                                How can IT solutions benefit my business?
                              </button>
                            </h2>
                            <div id="collapseThirteen" class="accordion-collapse collapse" data-bs-parent="#accordionExample3">
                              <div class="accordion-body">
                                <p>We implement robust data backup and recovery solutions best protect your data and ensure business continuity in case of IT unexpected events. We provide regular updates and status .</p>
                              </div>
                            </div>
                          </div>
                          <div class="space20"></div>
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
                                What industries do you specialize in?
                              </button>
                            </h2>
                            <div id="collapseFourteen" class="accordion-collapse collapse" data-bs-parent="#accordionExample3">
                              <div class="accordion-body">
                                <p>We implement robust data backup and recovery solutions best protect your data and ensure business continuity in case of IT unexpected events. We provide regular updates and status .</p>
                              </div>
                            </div>
                          </div>
                          <div class="space20"></div>
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFifteen" aria-expanded="false" aria-controls="collapseFifteen">
                                What is the process for onboarding new client?
                              </button>
                            </h2>
                            <div id="collapseFifteen" class="accordion-collapse collapse" data-bs-parent="#accordionExample3">
                              <div class="accordion-body">
                                <p>We implement robust data backup and recovery solutions best protect your data and ensure business continuity in case of IT unexpected events. We provide regular updates and status .</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-6">
                      <div class="accordian-area">
                        <div class="accordion" id="accordionExample4">
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirtysix" aria-expanded="true" aria-controls="collapseThirtysix">
                                What types of IT solutions do you offer?
                              </button>
                            </h2>
                            <div id="collapseThirtysix" class="accordion-collapse collapse" data-bs-parent="#accordionExample4">
                              <div class="accordion-body">
                                <p>We implement robust data backup and recovery solutions best protect your data and ensure business continuity in case of IT unexpected events. We provide regular updates and status .</p>
                              </div>
                            </div>
                          </div>
                          <div class="space20"></div>
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirtyseven" aria-expanded="false" aria-controls="collapseThirtyseven">
                                What is your policy on data backup and recovery?
                              </button>
                            </h2>
                            <div id="collapseThirtyseven" class="accordion-collapse collapse" data-bs-parent="#accordionExample4">
                              <div class="accordion-body">
                                <p>We implement robust data backup and recovery solutions best protect your data and ensure business continuity in case of IT unexpected events. We provide regular updates and status .</p>
                              </div>
                            </div>
                          </div>
                          <div class="space20"></div>
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirtyeight" aria-expanded="false" aria-controls="collapseThirtyeight">
                                How can IT solutions benefit my business?
                              </button>
                            </h2>
                            <div id="collapseThirtyeight" class="accordion-collapse collapse" data-bs-parent="#accordionExample4">
                              <div class="accordion-body">
                                <p>We implement robust data backup and recovery solutions best protect your data and ensure business continuity in case of IT unexpected events. We provide regular updates and status .</p>
                              </div>
                            </div>
                          </div>
                          <div class="space20"></div>
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirtynine" aria-expanded="false" aria-controls="collapseThirtynine">
                                What industries do you specialize in?
                              </button>
                            </h2>
                            <div id="collapseThirtynine" class="accordion-collapse collapse" data-bs-parent="#accordionExample4">
                              <div class="accordion-body">
                                <p>We implement robust data backup and recovery solutions best protect your data and ensure business continuity in case of IT unexpected events. We provide regular updates and status .</p>
                              </div>
                            </div>
                          </div>
                          <div class="space20"></div>
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourty" aria-expanded="false" aria-controls="collapseFourty">
                                What is the process for onboarding new client?
                              </button>
                            </h2>
                            <div id="collapseFourty" class="accordion-collapse collapse" data-bs-parent="#accordionExample4">
                              <div class="accordion-body">
                                <p>We implement robust data backup and recovery solutions best protect your data and ensure business continuity in case of IT unexpected events. We provide regular updates and status .</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
                <div class="faq-section-area">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="accordian-area">
                        <div class="accordion" id="accordionExample5">
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSixteen" aria-expanded="true" aria-controls="collapseSixteen">
                                What types of IT solutions do you offer?
                              </button>
                            </h2>
                            <div id="collapseSixteen" class="accordion-collapse collapse show" data-bs-parent="#accordionExample5">
                              <div class="accordion-body">
                                <p>We implement robust data backup and recovery solutions best protect your data and ensure business continuity in case of IT unexpected events. We provide regular updates and status .</p>
                              </div>
                            </div>
                          </div>
                          <div class="space20"></div>
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeventeen" aria-expanded="false" aria-controls="collapseSeventeen">
                                What is your policy on data backup and recovery?
                              </button>
                            </h2>
                            <div id="collapseSeventeen" class="accordion-collapse collapse" data-bs-parent="#accordionExample5">
                              <div class="accordion-body">
                                <p>We implement robust data backup and recovery solutions best protect your data and ensure business continuity in case of IT unexpected events. We provide regular updates and status .</p>
                              </div>
                            </div>
                          </div>
                          <div class="space20"></div>
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEightteen" aria-expanded="false" aria-controls="collapseEightteen">
                                How can IT solutions benefit my business?
                              </button>
                            </h2>
                            <div id="collapseEightteen" class="accordion-collapse collapse" data-bs-parent="#accordionExample5">
                              <div class="accordion-body">
                                <p>We implement robust data backup and recovery solutions best protect your data and ensure business continuity in case of IT unexpected events. We provide regular updates and status .</p>
                              </div>
                            </div>
                          </div>
                          <div class="space20"></div>
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNineteen" aria-expanded="false" aria-controls="collapseNineteen">
                                What industries do you specialize in?
                              </button>
                            </h2>
                            <div id="collapseNineteen" class="accordion-collapse collapse" data-bs-parent="#accordionExample5">
                              <div class="accordion-body">
                                <p>We implement robust data backup and recovery solutions best protect your data and ensure business continuity in case of IT unexpected events. We provide regular updates and status .</p>
                              </div>
                            </div>
                          </div>
                          <div class="space20"></div>
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwenty" aria-expanded="false" aria-controls="collapseTwenty">
                                What is the process for onboarding new client?
                              </button>
                            </h2>
                            <div id="collapseTwenty" class="accordion-collapse collapse" data-bs-parent="#accordionExample5">
                              <div class="accordion-body">
                                <p>We implement robust data backup and recovery solutions best protect your data and ensure business continuity in case of IT unexpected events. We provide regular updates and status .</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-6">
                      <div class="accordian-area">
                        <div class="accordion" id="accordionExample6">
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourtyone" aria-expanded="true" aria-controls="collapseFourtyone">
                                What types of IT solutions do you offer?
                              </button>
                            </h2>
                            <div id="collapseFourtyone" class="accordion-collapse collapse" data-bs-parent="#accordionExample6">
                              <div class="accordion-body">
                                <p>We implement robust data backup and recovery solutions best protect your data and ensure business continuity in case of IT unexpected events. We provide regular updates and status .</p>
                              </div>
                            </div>
                          </div>
                          <div class="space20"></div>
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourtytwo" aria-expanded="false" aria-controls="collapseFourtytwo">
                                What is your policy on data backup and recovery?
                              </button>
                            </h2>
                            <div id="collapseFourtytwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample6">
                              <div class="accordion-body">
                                <p>We implement robust data backup and recovery solutions best protect your data and ensure business continuity in case of IT unexpected events. We provide regular updates and status .</p>
                              </div>
                            </div>
                          </div>
                          <div class="space20"></div>
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourtythree" aria-expanded="false" aria-controls="collapseFourtythree">
                                How can IT solutions benefit my business?
                              </button>
                            </h2>
                            <div id="collapseFourtythree" class="accordion-collapse collapse" data-bs-parent="#accordionExample6">
                              <div class="accordion-body">
                                <p>We implement robust data backup and recovery solutions best protect your data and ensure business continuity in case of IT unexpected events. We provide regular updates and status .</p>
                              </div>
                            </div>
                          </div>
                          <div class="space20"></div>
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourtyfour" aria-expanded="false" aria-controls="collapseFourtyfour">
                                What industries do you specialize in?
                              </button>
                            </h2>
                            <div id="collapseFourtyfour" class="accordion-collapse collapse" data-bs-parent="#accordionExample6">
                              <div class="accordion-body">
                                <p>We implement robust data backup and recovery solutions best protect your data and ensure business continuity in case of IT unexpected events. We provide regular updates and status .</p>
                              </div>
                            </div>
                          </div>
                          <div class="space20"></div>
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourtyfive" aria-expanded="false" aria-controls="collapseFourtyfive">
                                What is the process for onboarding new client?
                              </button>
                            </h2>
                            <div id="collapseFourtyfive" class="accordion-collapse collapse" data-bs-parent="#accordionExample6">
                              <div class="accordion-body">
                                <p>We implement robust data backup and recovery solutions best protect your data and ensure business continuity in case of IT unexpected events. We provide regular updates and status .</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="pills-contact1" role="tabpanel" aria-labelledby="pills-contact1-tab" tabindex="0">
                <div class="faq-section-area">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="accordian-area">
                        <div class="accordion" id="accordionExample7">
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwentyone" aria-expanded="true" aria-controls="collapseTwentyone">
                                What types of IT solutions do you offer?
                              </button>
                            </h2>
                            <div id="collapseTwentyone" class="accordion-collapse collapse show" data-bs-parent="#accordionExample7">
                              <div class="accordion-body">
                                <p>We implement robust data backup and recovery solutions best protect your data and ensure business continuity in case of IT unexpected events. We provide regular updates and status .</p>
                              </div>
                            </div>
                          </div>
                          <div class="space20"></div>
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwentytwo" aria-expanded="false" aria-controls="collapseTwentytwo">
                                What is your policy on data backup and recovery?
                              </button>
                            </h2>
                            <div id="collapseTwentytwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample7">
                              <div class="accordion-body">
                                <p>We implement robust data backup and recovery solutions best protect your data and ensure business continuity in case of IT unexpected events. We provide regular updates and status .</p>
                              </div>
                            </div>
                          </div>
                          <div class="space20"></div>
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwentythree" aria-expanded="false" aria-controls="collapseTwentythree">
                                How can IT solutions benefit my business?
                              </button>
                            </h2>
                            <div id="collapseTwentythree" class="accordion-collapse collapse" data-bs-parent="#accordionExample7">
                              <div class="accordion-body">
                                <p>We implement robust data backup and recovery solutions best protect your data and ensure business continuity in case of IT unexpected events. We provide regular updates and status .</p>
                              </div>
                            </div>
                          </div>
                          <div class="space20"></div>
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwentyfour" aria-expanded="false" aria-controls="collapseTwentyfour">
                                What industries do you specialize in?
                              </button>
                            </h2>
                            <div id="collapseTwentyfour" class="accordion-collapse collapse" data-bs-parent="#accordionExample7">
                              <div class="accordion-body">
                                <p>We implement robust data backup and recovery solutions best protect your data and ensure business continuity in case of IT unexpected events. We provide regular updates and status .</p>
                              </div>
                            </div>
                          </div>
                          <div class="space20"></div>
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwentyfive" aria-expanded="false" aria-controls="collapseTwentyfive">
                                What is the process for onboarding new client?
                              </button>
                            </h2>
                            <div id="collapseTwentyfive" class="accordion-collapse collapse" data-bs-parent="#accordionExample7">
                              <div class="accordion-body">
                                <p>We implement robust data backup and recovery solutions best protect your data and ensure business continuity in case of IT unexpected events. We provide regular updates and status .</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-6">
                      <div class="accordian-area">
                        <div class="accordion" id="accordionExample8">
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourtySix" aria-expanded="true" aria-controls="collapseFourtySix">
                                What types of IT solutions do you offer?
                              </button>
                            </h2>
                            <div id="collapseFourtySix" class="accordion-collapse collapse" data-bs-parent="#accordionExample8">
                              <div class="accordion-body">
                                <p>We implement robust data backup and recovery solutions best protect your data and ensure business continuity in case of IT unexpected events. We provide regular updates and status .</p>
                              </div>
                            </div>
                          </div>
                          <div class="space20"></div>
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourtySeven" aria-expanded="false" aria-controls="collapseFourtySeven">
                                What is your policy on data backup and recovery?
                              </button>
                            </h2>
                            <div id="collapseFourtySeven" class="accordion-collapse collapse" data-bs-parent="#accordionExample8">
                              <div class="accordion-body">
                                <p>We implement robust data backup and recovery solutions best protect your data and ensure business continuity in case of IT unexpected events. We provide regular updates and status .</p>
                              </div>
                            </div>
                          </div>
                          <div class="space20"></div>
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourtyEight" aria-expanded="false" aria-controls="collapseFourtyEight">
                                How can IT solutions benefit my business?
                              </button>
                            </h2>
                            <div id="collapseFourtyEight" class="accordion-collapse collapse" data-bs-parent="#accordionExample8">
                              <div class="accordion-body">
                                <p>We implement robust data backup and recovery solutions best protect your data and ensure business continuity in case of IT unexpected events. We provide regular updates and status .</p>
                              </div>
                            </div>
                          </div>
                          <div class="space20"></div>
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourtyNine" aria-expanded="false" aria-controls="collapseFourtyNine">
                                What industries do you specialize in?
                              </button>
                            </h2>
                            <div id="collapseFourtyNine" class="accordion-collapse collapse" data-bs-parent="#accordionExample8">
                              <div class="accordion-body">
                                <p>We implement robust data backup and recovery solutions best protect your data and ensure business continuity in case of IT unexpected events. We provide regular updates and status .</p>
                              </div>
                            </div>
                          </div>
                          <div class="space20"></div>
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourtyTen" aria-expanded="false" aria-controls="collapseFourtyTen">
                                What is the process for onboarding new client?
                              </button>
                            </h2>
                            <div id="collapseFourtyTen" class="accordion-collapse collapse" data-bs-parent="#accordionExample8">
                              <div class="accordion-body">
                                <p>We implement robust data backup and recovery solutions best protect your data and ensure business continuity in case of IT unexpected events. We provide regular updates and status .</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="pills-contact2" role="tabpanel" aria-labelledby="pills-contact2-tab" tabindex="0">
                <div class="faq-section-area">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="accordian-area">
                        <div class="accordion" id="accordionExample9">
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwentysix" aria-expanded="true" aria-controls="collapseTwentysix">
                                What types of IT solutions do you offer?
                              </button>
                            </h2>
                            <div id="collapseTwentysix" class="accordion-collapse collapse show" data-bs-parent="#accordionExample9">
                              <div class="accordion-body">
                                <p>We implement robust data backup and recovery solutions best protect your data and ensure business continuity in case of IT unexpected events. We provide regular updates and status .</p>
                              </div>
                            </div>
                          </div>
                          <div class="space20"></div>
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwentyseven" aria-expanded="false" aria-controls="collapseTwentyseven">
                                What is your policy on data backup and recovery?
                              </button>
                            </h2>
                            <div id="collapseTwentyseven" class="accordion-collapse collapse" data-bs-parent="#accordionExample9">
                              <div class="accordion-body">
                                <p>We implement robust data backup and recovery solutions best protect your data and ensure business continuity in case of IT unexpected events. We provide regular updates and status .</p>
                              </div>
                            </div>
                          </div>
                          <div class="space20"></div>
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwentyeight" aria-expanded="false" aria-controls="collapseTwentyeight">
                                How can IT solutions benefit my business?
                              </button>
                            </h2>
                            <div id="collapseTwentyeight" class="accordion-collapse collapse" data-bs-parent="#accordionExample9">
                              <div class="accordion-body">
                                <p>We implement robust data backup and recovery solutions best protect your data and ensure business continuity in case of IT unexpected events. We provide regular updates and status .</p>
                              </div>
                            </div>
                          </div>
                          <div class="space20"></div>
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwentynine" aria-expanded="false" aria-controls="collapseTwentynine">
                                What industries do you specialize in?
                              </button>
                            </h2>
                            <div id="collapseTwentynine" class="accordion-collapse collapse" data-bs-parent="#accordionExample9">
                              <div class="accordion-body">
                                <p>We implement robust data backup and recovery solutions best protect your data and ensure business continuity in case of IT unexpected events. We provide regular updates and status .</p>
                              </div>
                            </div>
                          </div>
                          <div class="space20"></div>
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirty" aria-expanded="false" aria-controls="collapseThirty">
                                What is the process for onboarding new client?
                              </button>
                            </h2>
                            <div id="collapseThirty" class="accordion-collapse collapse" data-bs-parent="#accordionExample9">
                              <div class="accordion-body">
                                <p>We implement robust data backup and recovery solutions best protect your data and ensure business continuity in case of IT unexpected events. We provide regular updates and status .</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-6">
                      <div class="accordian-area">
                        <div class="accordion" id="accordionExample10">
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirtyone" aria-expanded="true" aria-controls="collapseThirtyone">
                                What types of IT solutions do you offer?
                              </button>
                            </h2>
                            <div id="collapseThirtyone" class="accordion-collapse collapse" data-bs-parent="#accordionExample10">
                              <div class="accordion-body">
                                <p>We implement robust data backup and recovery solutions best protect your data and ensure business continuity in case of IT unexpected events. We provide regular updates and status .</p>
                              </div>
                            </div>
                          </div>
                          <div class="space20"></div>
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirtytwo" aria-expanded="false" aria-controls="collapseThirtytwo">
                                What is your policy on data backup and recovery?
                              </button>
                            </h2>
                            <div id="collapseThirtytwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample10">
                              <div class="accordion-body">
                                <p>We implement robust data backup and recovery solutions best protect your data and ensure business continuity in case of IT unexpected events. We provide regular updates and status .</p>
                              </div>
                            </div>
                          </div>
                          <div class="space20"></div>
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirtythree" aria-expanded="false" aria-controls="collapseThirtythree">
                                How can IT solutions benefit my business?
                              </button>
                            </h2>
                            <div id="collapseThirtythree" class="accordion-collapse collapse" data-bs-parent="#accordionExample10">
                              <div class="accordion-body">
                                <p>We implement robust data backup and recovery solutions best protect your data and ensure business continuity in case of IT unexpected events. We provide regular updates and status .</p>
                              </div>
                            </div>
                          </div>
                          <div class="space20"></div>
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirtyfour" aria-expanded="false" aria-controls="collapseThirtyfour">
                                What industries do you specialize in?
                              </button>
                            </h2>
                            <div id="collapseThirtyfour" class="accordion-collapse collapse" data-bs-parent="#accordionExample10">
                              <div class="accordion-body">
                                <p>We implement robust data backup and recovery solutions best protect your data and ensure business continuity in case of IT unexpected events. We provide regular updates and status .</p>
                              </div>
                            </div>
                          </div>
                          <div class="space20"></div>
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirtyfive" aria-expanded="false" aria-controls="collapseThirtyfive">
                                What is the process for onboarding new client?
                              </button>
                            </h2>
                            <div id="collapseThirtyfive" class="accordion-collapse collapse" data-bs-parent="#accordionExample10">
                              <div class="accordion-body">
                                <p>We implement robust data backup and recovery solutions best protect your data and ensure business continuity in case of IT unexpected events. We provide regular updates and status .</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="tab-pane fade" id="pills-contact3" role="tabpanel" aria-labelledby="pills-contact3-tab" tabindex="0">
                <div class="faq-section-area">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="accordian-area">
                        <div class="accordion" id="accordionExample11">
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                What types of IT solutions do you offer?
                              </button>
                            </h2>
                            <div id="collapse1" class="accordion-collapse collapse show" data-bs-parent="#accordionExample11">
                              <div class="accordion-body">
                                <p>We implement robust data backup and recovery solutions best protect your data and ensure business continuity in case of IT unexpected events. We provide regular updates and status .</p>
                              </div>
                            </div>
                          </div>
                          <div class="space20"></div>
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                What is your policy on data backup and recovery?
                              </button>
                            </h2>
                            <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#accordionExample11">
                              <div class="accordion-body">
                                <p>We implement robust data backup and recovery solutions best protect your data and ensure business continuity in case of IT unexpected events. We provide regular updates and status .</p>
                              </div>
                            </div>
                          </div>
                          <div class="space20"></div>
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                How can IT solutions benefit my business?
                              </button>
                            </h2>
                            <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#accordionExample11">
                              <div class="accordion-body">
                                <p>We implement robust data backup and recovery solutions best protect your data and ensure business continuity in case of IT unexpected events. We provide regular updates and status .</p>
                              </div>
                            </div>
                          </div>
                          <div class="space20"></div>
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                What industries do you specialize in?
                              </button>
                            </h2>
                            <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#accordionExample11">
                              <div class="accordion-body">
                                <p>We implement robust data backup and recovery solutions best protect your data and ensure business continuity in case of IT unexpected events. We provide regular updates and status .</p>
                              </div>
                            </div>
                          </div>
                          <div class="space20"></div>
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                What is the process for onboarding new client?
                              </button>
                            </h2>
                            <div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#accordionExample11">
                              <div class="accordion-body">
                                <p>We implement robust data backup and recovery solutions best protect your data and ensure business continuity in case of IT unexpected events. We provide regular updates and status .</p>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-6">
                      <div class="accordian-area">
                        <div class="accordion" id="accordionExample12">
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="true" aria-controls="collapse6">
                                What types of IT solutions do you offer?
                              </button>
                            </h2>
                            <div id="collapse6" class="accordion-collapse collapse" data-bs-parent="#accordionExample12">
                              <div class="accordion-body">
                                <p>We implement robust data backup and recovery solutions best protect your data and ensure business continuity in case of IT unexpected events. We provide regular updates and status .</p>
                              </div>
                            </div>
                          </div>
                          <div class="space20"></div>
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                What is your policy on data backup and recovery?
                              </button>
                            </h2>
                            <div id="collapse7" class="accordion-collapse collapse" data-bs-parent="#accordionExample12">
                              <div class="accordion-body">
                                <p>We implement robust data backup and recovery solutions best protect your data and ensure business continuity in case of IT unexpected events. We provide regular updates and status .</p>
                              </div>
                            </div>
                          </div>
                          <div class="space20"></div>
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                                How can IT solutions benefit my business?
                              </button>
                            </h2>
                            <div id="collapse8" class="accordion-collapse collapse" data-bs-parent="#accordionExample12">
                              <div class="accordion-body">
                                <p>We implement robust data backup and recovery solutions best protect your data and ensure business continuity in case of IT unexpected events. We provide regular updates and status .</p>
                              </div>
                            </div>
                          </div>
                          <div class="space20"></div>
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                                What industries do you specialize in?
                              </button>
                            </h2>
                            <div id="collapse9" class="accordion-collapse collapse" data-bs-parent="#accordionExample12">
                              <div class="accordion-body">
                                <p>We implement robust data backup and recovery solutions best protect your data and ensure business continuity in case of IT unexpected events. We provide regular updates and status .</p>
                              </div>
                            </div>
                          </div>
                          <div class="space20"></div>
                          <div class="accordion-item">
                            <h2 class="accordion-header">
                              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                                What is the process for onboarding new client?
                              </button>
                            </h2>
                            <div id="collapse10" class="accordion-collapse collapse" data-bs-parent="#accordionExample12">
                              <div class="accordion-body">
                                <p>We implement robust data backup and recovery solutions best protect your data and ensure business continuity in case of IT unexpected events. We provide regular updates and status .</p>
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
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--===== FAQ AREA ENDS =======-->

  <?= $this->element("cta") ?>

  <?= $this->element("footer") ?>

  <?= $this->element("footer_scripts") ?>

</body>

</html>