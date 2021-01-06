<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
    crossorigin="anonymous"></script>
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/style.css" />
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); echo '?' . filemtime( get_stylesheet_directory() . '/style.css'); ?>" type="text/css" />
  <script type="text/javascript" src="http://code.jquery.com/jquery-3.1.0.min.js"></script>
  <title>my_portfolio</title>
</head>

<body>
  <!--header-->
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
      <button class="navbar-toggler bg-white" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
      <ul class="d-flex p-0 col-12 m-0">
        <li class="nav-item col-12 col-md-2 p-0 mr-3">
          <a class="nav-link d-inline-block text-white" href="#1">ホーム</a>
        </li>
        <li class="nav-item col-12 col-md-2 p-0 mr-3">
          <a class="nav-link d-inline-block text-white" href="#2">私について</a>
        </li>
        <li class="nav-item col-12 col-md-2 p-0 mr-3">
          <a class="nav-link d-inline-block text-white" href="#3">サービス</a>
        </li>
        <li class="nav-item col-12 col-md-2 p-0 mr-3">
          <a class="nav-link d-inline-block text-white" href="#4">制作実績</a>
        </li>
        <li class="nav-item col-12 col-md-2 p-0">
          <a class="nav-link d-inline-block text-white" href="#5">お問い合わせ</a>
        </li>
      </ul>
    </div>  
    </nav>
    <!--title-->
    <div class="title" id="1">
      <h1 class="text-white position-absolute text-center col-12" style="top: 0; right: 0; bottom: 0; left: 0; margin: auto;  height: 100px; font-size: 50px;">KENTO <br> - Web Engineer -</h1>
    </div>
  </header>

<!--私について-->
<main>
  <div class="about bg-light text-center" id="2">
    <h2 class="text-dark" style="font-weight: bolder; font-size: 3rem; padding: 100px 0 50px 0">私について</h2>
    <img style="border-radius: 50%; height: 250px; width: 250px;" src="<?php echo get_template_directory_uri(); ?>/img/kento.png" alt="プロフィール">
    <div class="profile mt-5 text-secondary col-12 m-auto" style="width: 770px;">
      <h3 class="mt-5 mb-4" style="font-size: 2rem">プロフィール</h3>
      <p class="text-left pb-5" style="font-size: 1.2rem">
        ご訪問いただき、ありがとうございます。 WEBエンジニアとして活動しております、けんと(中田健登)と申します。現在、Webサイト制作を中心に行っております。常に納期を守ることはもちろん、丁寧なコミュニケーションを心がけています。最後まで責任を持って作業を進めていきます。
      </p>
    </div>
  </div>
  <!--サービス-->
  <div id="3">
  <h2 class="text-dark text-center" style="font-weight: bolder; font-size: 3rem; padding: 100px 0 50px 0;">サービス</h2>
  <div class="service mt-5 d-flex col-12 col-md-10 m-auto" style="flex-wrap: wrap; width: 1200px;">
    <div class="coding col-12 col-md-6 d-flex" style="flex-wrap: wrap;">
      <img style="height: 100px; width: 100px;" src="<?php echo get_template_directory_uri(); ?>/img/program.svg" alt="コーディング">
      <div class="my_service mt-4 pb-5">
        <p class="text-secondary" style="font-size: 2rem">
          コーディング
        </p>
        <p class="text-secondary" style="font-size: 1.2rem;">
          シンプルな構成のLP（ランディングページ）を製作いたします。HTML,CSS,jQueryなどをつかった動的なwebデザインが可能です。
        </p>
      </div>
    </div>     
    <div class="responsive col-12 col-md-6 d-flex">
      <img style="height: 100px; width: 100px;" src="<?php echo get_template_directory_uri(); ?>/img/iphone.svg" alt="レスポンシブ">
      <div class="my_service mt-5 pb-5">
        <p class="text-secondary" style="font-size: 2rem">
          レスポンシブ化
        </p>
        <p class="text-secondary" style="font-size: 1.2rem;">
          レスポンシブ化とは、複数の異なる画面幅にたいして柔軟に対応し、美しくページレイアウトを表示させる技術です。近年はスマートフォン対応の重要性が増しているため、モバイルファーストなデザインが求められています。
        </p>
      </div>
    </div> 
  </div>
  </div>

  <!--制作実績-->
  <div class="bg-light">
    <h2 class="text-dark text-center" id="4" style="font-weight: bolder; font-size: 3rem; padding: 100px 0 50px 0;">制作実績</h2>
    <h3 class="text-secondary text-center" style="font-weight: bolder; font-size: 2rem; padding: 50px 0 50px 0;">模写サイト</h3>
    <div class="card-deck col-12 col-md-10 m-auto" style="width: 1300px;">
      <div class="card mt-5 mb-5">
        <a class="text-secondary" href="https://drive.google.com/file/d/1ElmXEJGEO_J2rpq8ckSSRw1xlNfX77Lf/view?usp=sharing">
        <img style="height: 500px; width: 100%;" src="<?php echo get_template_directory_uri(); ?>/img/kento02.png" alt="">
        <div class="card-body">
          <h5 class="card-title text-center text-secondary" style="font-size: 1.2rem;">マハーバーラタ様サイト模写</h5>
          </a>
        </div>
      </div>
      <div class="card mt-5 mb-5">
        <a class="text-secondary" href="https://drive.google.com/file/d/1YuqIKnFq2EJ-BX-GV15Cu1GGkAgVNVPo/view?usp=sharing">
          <img style="height: 500px; width: 100%;" src="<?php echo get_template_directory_uri(); ?>/img/kento04.png" alt="">
        <div class="card-body">
          <h5 class="card-title text-center text-secondary" style="font-size: 1.2rem;">Airbnb様サイト模写</h5>
           </a>
        </div>
      </div>
    </div>
  </div>

  <!--お問い合わせ-->
  <h2 class="text-dark text-center" id="5" style="font-weight: bolder; font-size: 3rem; padding: 100px 0 50px 0;"><?php the_title(); ?></h2>
  <div class="contact col-12 col-md-10 m-auto" style="width: 1200px;">

<?php the_content(); ?>

  </div>
</main>
   <!--footer-->
   <footer>

    <div class="bg-dark p-4">
      <div class="container text-center" style="margin: 0 auto;">
        <small class="text-white">
          Copyright@2021 Nakata Kento, All Rights Reserved.
        </small>
      </div>
    </div>
  </footer>
  <?php wp_footer(); ?>

  <!--javascript読み込み-->
  <script>
      $(function(){
        // #で始まるリンクをクリックしたら実行されます
        $('a[href^="#"]').click(function() {
          // スクロールの速度
          var speed = 500; // ミリ秒で記述
          var href= $(this).attr("href");
          var target = $(href == "#" || href == "" ? 'html' : href);
          var position = target.offset().top;
          $('body,html').animate({scrollTop:position}, speed, 'swing');
          return false;
        });
      });
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>