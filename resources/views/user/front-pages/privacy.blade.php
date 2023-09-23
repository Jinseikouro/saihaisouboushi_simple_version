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

      <!--begin:contents section-->
      <section class="position-relative bg-body overflow-hidden">
        <div class="container py-9 py-lg-11 position-relative">
          <div class="row mb-7 align-items-end justify-content-between">
            <div class="col-lg-7 mb-4 mb-lg-0">
              <h2 class="mb-0 display-5" data-aos="fade-right">プライバシーポリシー</h2>
            </div>
          </div>
          <h6>
            <p>私たちについて
            提案テキスト: 私たちのサイトは 埼玉コンテスト出品サイトです。</p>

            <p>コメント
            提案テキスト: 訪問者がこのサイトにコメントを残す際、コメントフォームに表示されているデータ、そしてスパム検出に役立てるための IP アドレスとブラウザーユーザーエージェント文字列を収集します。
            </p>
            メールアドレスから作成される匿名化された (「ハッシュ」とも呼ばれる) 文字列は、あなたが Gravatar サービスを使用中かどうか確認するため同サービスに提供されることがあります。同サービスのプライバシーポリシーは https://automattic.com/privacy/ にあります。コメントが承認されると、プロフィール画像がコメントとともに一般公開されます。

            <p>メディア
            提案テキスト: サイトに画像をアップロードする際、位置情報 (EXIF GPS) を含む画像をアップロードするべきではありません。サイトの訪問者は、サイトから画像をダウンロードして位置データを抽出することができます。
            </p>
            <p>Cookie
            提案テキスト: サイトにコメントを残す際、お名前、メールアドレス、サイトを Cookie に保存することにオプトインできます。これはあなたの便宜のためであり、他のコメントを残す際に詳細情報を再入力する手間を省きます。この Cookie は1年間保持されます。
            </p>
            ログインページを訪問すると、お使いのブラウザーが Cookie を受け入れられるかを判断するために一時 Cookie を設定します。この Cookie は個人データを含んでおらず、ブラウザーを閉じると廃棄されます。

            ログインの際さらに、ログイン情報と画面表示情報を保持するため、私たちはいくつかの Cookie を設定します。ログイン Cookie は2日間、画面表示オプション Cookie は1年間保持されます。「ログイン状態を保存する」を選択した場合、ログイン情報は2週間維持されます。ログアウトするとログイン Cookie は消去されます。

            もし投稿を編集または公開すると、さらなる Cookie がブラウザーに保存されます。この Cookie は個人データを含まず、単に変更した投稿の ID を示すものです。1日で有効期限が切れます。

            <p>他サイトからの埋め込みコンテンツ
            提案テキスト: このサイトの投稿には埋め込みコンテンツ (動画、画像、投稿など) が含まれます。他サイトからの埋め込みコンテンツは、訪問者がそのサイトを訪れた場合とまったく同じように振る舞います。
            </p>
            これらのサイトは、あなたのデータの収集、Cookie の使用、サードパーティによる追加トラッキングの埋め込み、埋め込みコンテンツとのやりとりの監視を行うことがあります。アカウントを使ってそのサイトにログイン中の場合、埋め込みコンテンツとのやりとりのトラッキングも含まれます。

            <p>あなたのデータの共有先
            提案テキスト: パスワードリセットをリクエストすると、IP アドレスがリセット用のメールに含まれます。
            </p>
            <p>データを保存する期間
            提案テキスト: あなたがコメントを残すと、コメントとそのメタデータが無期限に保持されます。これは、モデレーションキューにコメントを保持しておく代わりに、フォローアップのコメントを自動的に認識し承認できるようにするためです。

            このサイトに登録したユーザーがいる場合、その方がユーザープロフィールページで提供した個人情報を保存します。すべてのユーザーは自分の個人情報を表示、編集、削除することができます (ただしユーザー名は変更することができません)。サイト管理者もそれらの情報を表示、編集できます。
            </p>
            <p>データに対するあなたの権利
            提案テキスト: このサイトのアカウントを持っているか、サイトにコメントを残したことがある場合、私たちが保持するあなたについての個人データ (提供したすべてのデータを含む) をエクスポートファイルとして受け取るリクエストを行うことができます。また、個人データの消去リクエストを行うこともできます。これには、管理、法律、セキュリティ目的のために保持する義務があるデータは含まれません。
            </p>
            <p>どこにあなたのデータが送られるか
            提案テキスト: 訪問者によるコメントは、自動スパム検出サービスを通じて確認を行う場合があります。
            </p>
            </h6>
        </div>
      </section>
      <!--end:contents section-->

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

    <!-- Mastert Slider start (Include jquery before master slider js) -->
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
