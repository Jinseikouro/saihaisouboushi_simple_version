<!doctype html>
<html lang="ja" data-bs-theme="light">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="assets/img/logo/saitama_logo_favicon.ico" type="image/ico">

    <!--Box Icons　アイコン-->
    <link rel="stylesheet" href="assets/fonts/boxicons/css/boxicons.css">

    <!--AOS Animations　スクロール-->
    <link rel="stylesheet" href="assets/vendor/node_modules/css/aos.css">

    <!--Google fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,400&family=Source+Serif+Pro:ital@0;1&display=swap" rel="stylesheet">

    <!--マスタースライダー-->
    <link rel="stylesheet" href="assets/vendor/masterslider/style/masterslider.css">
    <link rel="stylesheet" href="assets/vendor/masterslider/skins/black-1/style.css">

    <!-- スワイパースライダー -->
    <link rel="stylesheet" href="assets/vendor/node_modules/css/swiper-bundle.min.css">

    <!-- Main CSS -->
    <link href="assets/css/theme.css" rel="stylesheet">


    <title>saitama</title>
  </head>

  <body>
     <!--プリローダースピナー-->
     <div class="spinner-loader bg-primary text-white">
        <div class="spinner-grow" role="status">
        </div>
        <span class="small d-block ms-2">Loading...</span>
    </div>
    <!--begin:Header-->
    <header class="header-transparent sticky-fixed">

      <!--begin:navbar-->
      <nav class="navbar navbar-expand-lg fixed-top navbar-light navbar-link-white">
        <!--Navbar-fixed-background-->
        <div class="navbar-fixed-bg position-absolute"></div>
        <div class="container position-relative z-1">
          <!--begin:logo laravelパスbladeに修正-->
          <a class="navbar-brand" href="{{ route('user.welcome') }}">

            <img src="assets/img/logo/saitama_logo.png" alt="ロゴマーク" class="img-fluid navbar-brand-sticky">
            <img src="assets/img/logo/saitama_logo_white.png" alt="ロゴマーク" class="img-fluid navbar-brand-transparent">
          </a>
          <!--end:logo-->
          <!--begin:navbar-no-collapse-items-->
          <div class="d-flex align-items-center navbar-no-collapse-items order-lg-last">
            <!--Navbar toggler button-->
            <button class="navbar-toggler order-last" type="button" data-bs-toggle="collapse"
              data-bs-target="#mainNavbarTheme" aria-controls="mainNavbarTheme" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon">
                <i></i>
              </span>
            </button>
          </div>
          <!--end:navbar-no-collapse-items-->

          <!--begin:navbar-collapse-->
          <div class="collapse navbar-collapse" id="mainNavbarTheme">

            <!--begin:Navbar items-->
            <ul class="navbar-nav ms-auto">

                @if (Route::has('driver.login'))
                    @auth('drivers')
                        <li class="nav-item dropdown position-lg-static">
                            <a class="nav-link" href="{{ url('driver/dashboard') }}">ドライバー用ダッシュボード</a>
                        </li>
                    @else
                        <li class="nav-item dropdown position-lg-static">
                            <a class="nav-link" href="{{ route('driver.login') }}">ドライバーログイン</a>
                        </li>
                        @if (Route::has('driver.register'))
                            <li class="nav-item dropdown position-lg-static">
                                <a class="nav-link" href="{{ route('driver.register') }}">ドライバー登録</a>
                            </li>
                        @endif
                    @endauth
                @endif
                @if (Route::has('user.login'))
                    @auth('users')
                        <li class="nav-item dropdown position-lg-static">
                            <a class="nav-link" href="{{ url('/dashboard') }}">顧客用ダッシュボード</a>
                        </li>
                    @else
                        <li class="nav-item dropdown position-lg-static">
                            <a class="nav-link" href="{{ route('user.login') }}">顧客ログイン</a>
                        </li>
                        @if (Route::has('user.register'))
                            <li class="nav-item dropdown position-lg-static">
                                <a class="nav-link" href="{{ route('user.register') }}">顧客登録</a>
                            </li>
                        @endif
                    @endauth
                @endif



            </ul>
            <!--end:Navbar items-->

          </div>
          <!--end:navbar-collapse-->
        </div>

      </nav>
      <!--end:navbar-->
    </header>
    <!--end:header-->


    <!--begin:main content-->
    <main>
      <!--begin:main slider-->
      <div class="position-relative overflow-hidden" style="height: 500px;">
        <div class="ms-skin-black-1 master-slider" id="masterslider">
          <!--begin:slide-1-->
          <div class="ms-slide bg-dark" data-delay="3" data-fill-mode="fill">
            <img class="opacity-25" src="assets/vendor/masterslider/style/blank.gif" alt="メインイメージ" title=""
              data-src="assets/img/backgrounds/main_bg1.jpg" />

            <!--title-->
            <div class="ms-layer ms-title text-white" data-effect="front(800)" data-duration="1200" data-delay="600"
              data-ease="easeInOutCubic" data-hide-effect="top(long,false)" data-offset-x="0" data-offset-y="-40"
              data-origin="mc" data-position="center" data-masked="false">
              <div class="text-center">
                <p style="line-height: 1.5;">ワンストップで解決！<br> <font color="yellow">配送不可を</font>楽々連絡！
                </p>
              </div>
            </div>
          </div>
          <!--end:slide-1-->

          <!--begin:slide-2-->
          <div class="ms-slide bg-dark" data-delay="3" data-fill-mode="fill">
            <img class="opacity-25" src="assets/vendor/masterslider/style/blank.gif" alt="メインイメージ" title=""
              data-src="assets/img/backgrounds/main_bg2.jpg" />

            <!--title-->
            <div class="ms-layer ms-title text-white" data-effect="front(800)" data-duration="1200" data-delay="600"
              data-ease="easeInOutCubic" data-hide-effect="top(long,false)" data-offset-x="0" data-offset-y="-40"
              data-origin="mc" data-position="center" data-masked="false">
              <div class="text-center">
                <p style="line-height: 1.5;">再配達の手間がかからない<br> <font color="yellow">物流システム</font>です。
                </p>
              </div>
            </div>
          </div>
          <!--end:slide-2-->

          <!--begin:slide-3-->
          <div class="ms-slide bg-dark" data-delay="3" data-fill-mode="fill">
            <img class="opacity-25" src="assets/vendor/masterslider/style/blank.gif" alt="メインイメージ" title=""
              data-src="assets/img/backgrounds/main_bg3.jpg" />

            <!--title-->
            <div class="ms-layer ms-title text-white" data-effect="front(800)" data-duration="1200" data-delay="600"
              data-ease="easeInOutCubic" data-hide-effect="top(long,false)" data-offset-x="0" data-offset-y="-40"
              data-origin="mc" data-position="center" data-masked="false">
              <div class="text-center">
                <p style="line-height: 1.5;">配達前に不在情報がわかる<br> <font color="yellow">便利なアプリ</font>です。
                </p>
              </div>
            </div>
          </div>
          <!--end:slide-3-->
        </div>
      </div>
      <!--end:main slider-->

      <!--begin: features icons-->
      <!-- <section class="position-relative border-bottom" id="next"></section> -->
      <section class="position-relative" id="next">
        <div class="container py-2 py-lg-5">

          <div class="row justify-content-around">
            <!--begin:Feature column-->
            <div class="col-12 col-lg-4 mb-7 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
              <div class="text-center">
                <!--Icon-->
                <div class="mt-1 mb-1 position-relative display-3 fw-normal text-primary">
                  <img class="img-fluid position-relative col-6" src="assets/img/icons/delivery-truck.gif" alt="特徴１">
                </div>
                <h2 class="mb-3">効率いい再配達</h2>
              </div>
            </div>
            <!--end:Feature column-->

            <!--begin:Feature column-->
            <div class="col-12 col-lg-4 mb-7 mb-lg-0" data-aos="fade-up" data-aos-delay="150">
              <div class="text-center">
                <!--Icon-->
                <div class="mt-1 mb-1 position-relative display-3 fw-normal text-primary">
                  <img class="img-fluid position-relative col-6" src="assets/img/icons/shipping.gif" alt="特徴2">
                </div>
                <h2 class="mb-3">クイック</h2>
              </div>
            </div>
            <!--end:Feature column-->

            <!--begin:Feature column-->
            <div class="col-12 col-lg-4" data-aos="fade-up" data-aos-delay="200">
              <div class="text-center">
                <!--Icon-->
                <div class="mt-1 mb-1 position-relative display-3 fw-normal text-primary">
                  <img class="img-fluid position-relative col-6" src="assets/img/icons/system.gif" alt="特徴2">
                </div>
                <h2 class="mb-3">便利なシステム</h2>
              </div>
            </div>
            <!--end:Feature column-->
          </div>
        </div>
      </section>
      <!--end: features icons-->

      <!--begin: features image-->
      <section class="position-relative overflow-hidden">
        <div class="container py-9 py-lg-11 position-relative z-1">
          <div class="row align-items-center justify-content-between">
            <div class="order-last col-lg-6">

              <!--Section Heading-->
              <style>
                h2.mb-7 {
                  margin-left: 30px; /* お好みの余白サイズに変更してください */
                }
              </style>
              <div class="mb-7 display-5 position-relative z-1" data-aos="fade-right">
                <h2>埼玉県の配達システム</h2>
                <h5><br>✔　埼玉県民のより便利な生活のために頑張ります。</h5>
              </div>

            </div>
            <div class="col-lg-6 col-xl-5 col-md-10 me-lg-auto order-1 mb-7 mb-lg-0">
              <div class="position-relative" data-aos="fade-left" data-aos-delay="150">
                <div class="bg-warning position-absolute start-0 bottom-0 w-100 h-75 rounded-5"></div>

                <img src="assets/img/backgrounds/img_guide.png" alt="" class="img-fluid position-relative">
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--end: features image-->

      <!--begin:team section-->
      <section class="position-relative bg-body overflow-hidden">
        <div class="container py-9 py-lg-11 position-relative">
          <div class="row mb-7 align-items-end justify-content-between">
            <div class="col-lg-7 mb-4 mb-lg-0">
              <h2 class="mb-0 display-5" data-aos="fade-right">チームについて</h2>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-3 mb-4 mb-lg-0" data-aos="fade-up">
              <article class="card card-hover text-center hover-shadow-lg overflow-hidden border-0 rounded-3">
                <div class="overflow-hidden position-relative">
                  <!--Article image-->
                  <img src="assets/img/960x640/abo.jpg" alt="" class="img-fluid img-zoom">

                  <!--Article image divider-->
                  <svg class="position-absolute start-0 bottom-0 mb-n1" style="color:var(--bs-body-bg)"
                    preserveAspectRatio="none" width="100%" height="48" viewBox="0 0 1460 120" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M122 22.8261L0 0V120H1460V0L1338 22.8261C1217 44.1304 973 88.2609 730 88.2609C487 88.2609 243 44.1304 122 22.8261Z"
                      fill="currentColor"></path>
                  </svg>
                </div>
                <!--Content-body-->
                <div class="card-body pb-5 position-relative">
                  <h6 class="py-3 mb-0">Project Leader</h6>
                  <h5 class="py-3 mb-0">阿保 健太郎</h5>
                </div>

                <!--Article link-->
                <a href="#!" class="stretched-link"></a>
              </article>
            </div>
            <div class="col-lg-3 mb-4 mb-lg-0" data-aos="fade-up">
              <article class="card card-hover text-center hover-shadow-lg overflow-hidden border-0 rounded-3">
                <div class="overflow-hidden position-relative">
                  <!--Article image-->
                  <img src="assets/img/960x640/seo.jpg" alt="" class="img-fluid img-zoom">

                  <!--Article image divider-->
                  <svg class="position-absolute start-0 bottom-0 mb-n1" style="color:var(--bs-body-bg)"
                    preserveAspectRatio="none" width="100%" height="48" viewBox="0 0 1460 120" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M122 22.8261L0 0V120H1460V0L1338 22.8261C1217 44.1304 973 88.2609 730 88.2609C487 88.2609 243 44.1304 122 22.8261Z"
                      fill="currentColor"></path>
                  </svg>
                </div>
                <!--Content-body-->
                <div class="card-body pb-5 position-relative">
                  <h6 class="py-3 mb-0">Project Manager</h6>
                  <h5 class="py-3 mb-0">徐 東秀</h5>
                </div>

                <!--Article link-->
                <a href="#!" class="stretched-link"></a>
              </article>
            </div>
            <div class="col-lg-3 mb-4 mb-lg-0" data-aos="fade-up">
              <article class="card card-hover text-center hover-shadow-lg overflow-hidden border-0 rounded-3">
                <div class="overflow-hidden position-relative">
                  <!--Article image-->
                  <img src="assets/img/960x640/hirokawa.jpg" alt="" class="img-fluid img-zoom">

                  <!--Article image divider-->
                  <svg class="position-absolute start-0 bottom-0 mb-n1" style="color:var(--bs-body-bg)"
                    preserveAspectRatio="none" width="100%" height="48" viewBox="0 0 1460 120" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M122 22.8261L0 0V120H1460V0L1338 22.8261C1217 44.1304 973 88.2609 730 88.2609C487 88.2609 243 44.1304 122 22.8261Z"
                      fill="currentColor"></path>
                  </svg>
                </div>
                <!--Content-body-->
                <div class="card-body pb-5 position-relative">
                  <h6 class="py-3 mb-0">Project Leader</h6>
                  <h5 class="py-3 mb-0">広川 紀子</h5>
                </div>

                <!--Article link-->
                <a href="#!" class="stretched-link"></a>
              </article>
            </div>
            <div class="col-lg-3 mb-4 mb-lg-0" data-aos="fade-up">
              <article class="card card-hover text-center hover-shadow-lg overflow-hidden border-0 rounded-3">
                <div class="overflow-hidden position-relative">
                  <!--Article image-->
                  <img src="assets/img/960x640/yoshioka.jpg" alt="" class="img-fluid img-zoom">

                  <!--Article image divider-->
                  <svg class="position-absolute start-0 bottom-0 mb-n1" style="color:var(--bs-body-bg)"
                    preserveAspectRatio="none" width="100%" height="48" viewBox="0 0 1460 120" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M122 22.8261L0 0V120H1460V0L1338 22.8261C1217 44.1304 973 88.2609 730 88.2609C487 88.2609 243 44.1304 122 22.8261Z"
                      fill="currentColor"></path>
                  </svg>
                </div>
                <!--Content-body-->
                <div class="card-body pb-5 position-relative">
                  <h6 class="py-3 mb-0">Project Leader</h6>
                  <h5 class="py-3 mb-0">吉岡 瑞規</h5>
                </div>

                <!--Article link-->
                <a href="#!" class="stretched-link"></a>
              </article>
            </div>
          </div>
        </div>
      </section>
      <!--end:team section-->


      <!--Begin:school section-->
      <section class="position-relative overflow-hidden bg-body-tertiary">

        <!--begin:Divider wave shape-->
        <svg class="position-absolute start-0 bottom-0 w-100" style="color: var(--bs-primary);"
          preserveAspectRatio="none" width="100%" height="288" viewBox="0 0 1200 288" fill="none"
          xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" clip-rule="evenodd"
            d="M0 0L67 30C133 60 267 120 400 138C533 156 667 132 800 126C933 120 1067 132 1133 138L1200 144V288H1133C1067 288 933 288 800 288C667 288 533 288 400 288C267 288 133 288 67 288H0V0Z"
            fill="currentColor" />
        </svg>
        <!--end:Divider wave shape-->

        <div class="container position-relative z-1 py-9 py-lg-11">
          <div class="row mb-7 align-items-end justify-content-between">
            <!--begin: Section headings-->
            <div class="col-lg-7 mb-4 mb-lg-0">
              <!--Heading-->
              <h2 class="mb-2 display-5" data-aos="fade-right">学校について</h2>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-12 position-relative">
              <!--Begin:swiper slider-->
              <div class="swiper-container overflow-hidden shadow-lg rounded-3">
                <!--Begin:wrapper-->
                <div class="swiper-wrapper">

                  <!--Begin:slide-->
                  <div class="swiper-slide">
                    <div class="d-flex align-items-center flex-column bg-body overflow-hidden flex-lg-row">
                      <div class="col-lg-6 px-0 mb-4 mb-md-0">
                        <div class="position-relative">
                          <!--testimonial Image-->
                          <img src="assets/img/960x900/6.jpg" class="img-fluid" alt="">

                          <!--Testimonial image divider-->
                          <svg class="position-absolute d-none d-lg-block end-0 top-0 h-100 me-n1"
                            style="color:var(--bs-body-bg)" preserveAspectRatio="none" width="58" height="583"
                            viewBox="0 0 58 583" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M0 583L9.66667 534.417C19.3333 485.833 38.6667 388.667 39.7407 291.5C40.8148 194.333 23.6296 97.1667 15.037 48.5833L6.44444 -1.62125e-05H58V48.5833C58 97.1667 58 194.333 58 291.5C58 388.667 58 485.833 58 534.417V583H0Z"
                              fill="currentColor" />
                          </svg>

                          <!--Testimonial image small device divider-->
                          <svg class="position-absolute bottom-0 start-0 mb-n1 d-lg-none"
                            style="color:var(--bs-body-bg)" width="100%" height="48" preserveAspectRatio="none"
                            viewBox="0 0 1200 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M0 0L100 10.6667C200 21.3333 400 42.6667 600 43.8519C800 45.037 1000 26.0741 1100 16.5926L1200 7.11111V64H1100C1000 64 800 64 600 64C400 64 200 64 100 64H0L0 0Z"
                              fill="currentColor" />
                          </svg>

                        </div>
                      </div>
                      <div class="col-lg-6 mx-auto px-0">
                        <blockquote class="blockquote mb-0 px-4 py-5 py-lg-7">
                          <!-- Text -->
                          <p class="mb-5 fs-4 w-lg-75 mx-auto">
                            <font size="6"  face="ＭＳ Ｐゴシック,ＭＳ ゴシック" color="blue">このアプリケーションのメリット</font>
                            <ul>
                              <li>急な用事ができた際に、ドライバーさんに受取不可の通知ができる！</li>
                              <li>複数のは配送業者に一回で連絡できる！</li>
                              <li>受取不可連絡はボタン一つで簡単報告</li>
                              <li>家族や会社など複数人での運用も可能！</li>
                            </ul>
                          </p>
                        </blockquote>
                      </div>
                    </div>
                  </div>
                  <!--end:slide-->


          </div>
        </div>
      </section>
      <!--/end:school section-->
    </main>
    <!--end:main content-->



    <!--begin:Footer-->
    <footer id="footer" class="bg-dark footer position-relative" data-bs-theme="dark">
        <div class="container pt-9 pt-lg-9">
            <div class="row">
                <div class="col-md-12 col-lg-4 mb-5 h-100 me-auto">
                    <!--Title-->
                    <h2 class="display-6 text-white mb-0 position-relative">
                        re:配
                    </h2>
                </div>
                <div class="col-sm-4 col-lg-3 mb-5 mb-md-0 ms-auto h-100">
                    <!--Title-->
                    <h6 class="small mb-3 mb-lg-4 text-white-50">Site Map</h6>
                    <!--Nav-->
                    <ul class="nav flex-column mb-0">

                        @if (Route::has('driver.login'))
                    @auth('drivers')
                        <li class="nav-item dropdown position-lg-static">
                            <a class="nav-link" href="{{ url('driver/dashboard') }}">ドライバー用ダッシュボード</a>
                        </li>
                    @else
                        <li class="nav-item dropdown position-lg-static">
                            <a class="nav-link" href="{{ route('driver.login') }}">ドライバーログイン</a>
                        </li>
                        @if (Route::has('driver.register'))
                            <li class="nav-item dropdown position-lg-static">
                                <a class="nav-link" href="{{ route('driver.register') }}">ドライバー登録</a>
                            </li>
                        @endif
                    @endauth
                @endif
                @if (Route::has('user.login'))
                    @auth('users')
                        <li class="nav-item dropdown position-lg-static">
                            <a class="nav-link" href="{{ url('/dashboard') }}">顧客用ダッシュボード</a>
                        </li>
                    @else
                        <li class="nav-item dropdown position-lg-static">
                            <a class="nav-link" href="{{ route('user.login') }}">顧客ログイン</a>
                        </li>
                        @if (Route::has('user.register'))
                            <li class="nav-item dropdown position-lg-static">
                                <a class="nav-link" href="{{ route('user.register') }}">顧客登録</a>
                            </li>
                        @endif
                    @endauth
                @endif

                    </ul>
                </div>
                <!--/.Col-->
                <div class="col-sm-4 col-lg-3 mb-5 h-100">
                    <!--Title-->
                    <h6 class="small mb-3 mb-lg-4 text-white-50">Support</h6>
                    <!--Nav-->
                    <ul class="nav flex-column mb-0">
                        <a class="nav-link" href="{{ route('user.help-page') }}">ヘルプ</a>
                        <a class="nav-link" href="{{ route('user.privacy-page') }}">プライバシーポリシー</a>
                    </ul>
                </div>

            </div>
            <hr class="mb-5 mt-4 text-white">
        </div>
        <!-- / .container -->
        <div class="pb-5">
            <div class="container">
                <div class="row justify-content-md-between align-items-center">

                    <div class="col-sm-6 col-md-4 text-sm-end">
                        <span class="d-block lh-sm small text-white-50">Copyright © 2023 re:配 All Rights Reserved.

                        </span>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--end:Footer-->


    <!-- begin:Back to Top button -->
    <a href="#" class="toTop">
      <i class="bx bxs-up-arrow"></i>
    </a>

    <script src="assets/js/theme.bundle.min.js"></script>

    <!--Mastert Slider start (Include jquery before master slider js)-->
    <script src="assets/vendor/node_modules/js/jquery.min.js"></script>
    <script src="assets/vendor/masterslider/jquery.easing.min.js"></script>
    <script src="assets/vendor/masterslider/masterslider.min.js"></script>
    <script>
      var slider = new MasterSlider();
      slider.setup('masterslider', {
        width: 1140,
        height: 660,
        minHeight: 400,
        space: 0,
        start: 1,
        grabCursor: false,
        layout: "fullwidth",
        wheel: false,
        autoplay: true,
        instantStartLayers: true,
        loop: true,
        view: "basic",
        instantStartLayers: true,
      });
      slider.control('arrows');

    </script>


    <!--Swiper slider-->
    <script src="assets/vendor/node_modules/js/swiper-bundle.min.js"></script>

  </body>

</html>
