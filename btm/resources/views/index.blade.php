<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Btm - Distribuidora</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!-- <link href="assets/img/favicon.png" rel="icon"> -->
  <!-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
    <div class="container d-flex">
      <div class="contact-info mr-auto">
        <!-- <i class="icofont-envelope"></i> <a href="mailto:contact@example.com">contact@example.com</a>
        <i class="icofont-phone"></i> +1 5589 55488 55 -->
      </div>
      <div class="social-links">

        <a class="twitter"><i class="icofont-phone"></i> {{$telefone}} </a>
        <a target="__blanck" href="#" class="facebook"><i class="icofont-whatsapp"></i> {{$whatsapp}}</a>
        <a href="mailto:{{$email}}" class="facebook"><i class="icofont-envelope"></i> {{$email}} </a>
        <a target="__blanck" href="{{$instagram}}" class="instagram"><i class="icofont-instagram"></i></a>
        <a target="__blanck" href="{{$facebook}}" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" data-toggle="modal" data-target="#construcao" class="facebook" style="color: rgb(241, 248, 12);">{{$boleto}}</a>

      </div>
    </div>
  </div>
  <!-- ======= END TOP BAR ======= -->

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <!-- <h1 class="logo mr-auto"><a href="index.html">Btm<span>.</span></a></h1> -->
      <!-- Uncomment below if you prefer to use an image logo -->
      <a href="index.html" class="logo mr-auto">
        <img src="{{Storage::url($logo1)}}"  alt="">
      </a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li ><a href="#section1">{{$logo2}}</a> </li>
          <!-- <li><a href="#section1">NOSSA HISTÓRIA</a></li> -->
          <li><a href="" data-toggle="modal" data-target="#construcao">{{$logo3}}</a></li>
          <li><a href="#parceiros">{{$logo4}}</a></li>
          <li><a href="#layout-web2">{{$logo5}}</a></li>
          <!-- <li class="drop-down"><a href=""></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="drop-down"><a href="#">Deep Drop Down</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> -->
          <!-- <li><a href="#contact">Contact</a></li> -->

        </ul>
      </nav><!-- .nav-menu -->

    </div>

  </header>
  <!-- End Header -->

  <!-- INICIO -->
  <section id="hero" class="hero d-flex align-items-center" style="padding: 0px; background: url({{Storage::url($slide2)}}) top left">
    <div class="container">
      <div class="row">

        <div class="div-img1 col-md-12">
          <h1 id="txt-mobile1" data-aos="fade-up" class="aos-init aos-animate">
            {{$slide4}} <b> {{$slide5}} <br> {{$slide6}} </b> {{$slide7}} <span> {{$slide8}} </span>
          </h1>
        </div>

        <div class="div-img2 col-lg-6 col-md-6 col-sm-6 d-flex flex-column justify-content-center">

          <h1 id="txt-web1" data-aos="fade-up" class="aos-init aos-animate">
            {{$slide4}} <b> {{$slide5}} <br> {{$slide6}} </b> {{$slide7}} <span> {{$slide8}} </span>
          </h1>

          <img id="img2" src="{{Storage::url($slide1)}}" class="img-fluid" alt="">
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6 col-12 hero-img aos-init aos-animate" data-aos="zoom-out" data-aos-delay="200">
          <img id="img1" src="{{Storage::url($slide3)}}" class="img-fluid" alt="">
        </div>

      </div>
    </div>
  </section>
  <!-- FIM INICIO -->

  <!-- ======= IMG INICIO ======= -->
    <!-- <section id="hero" class="d-flex align-items-center"> -->
    <!-- 
        <div class="container" data-aos="zoom-out" data-aos-delay="100">
          <h1>Welcome to <span>BizLand</spa>
          </h1>
          <h2>We are team of talented designers making websites with Bootstrap</h2>
          <div class="d-flex">
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Watch Video <i class="icofont-play-alt-2"></i></a>
        </div> -->
    <!-- </section> -->
  <!-- FIM IMG INICIO -->

  <main id="main">

    <!-- MODAL -->
    <div class="modal fade" id="construcao" tabindex="-1" aria-labelledby="construcaoLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <!-- <span aria-hidden="true">&times;</span> -->
            </button>
          </div>
          <div class="modal-body" style="text-align: center;">
            <h1>EM CONSTRUÇÃO</h1>
          </div>
          <div class="modal-footer" > 
            <button style="margin: auto;" type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
          </div>
        </div>
      </div>
    </div>
    <!-- MODAL -->

    <!-- ======= RODAPÉ SLIDE ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container">

        <div class="row">

        <div class="section-icons1 col-md-12 col-lg-4 d-flex align-items-stretch mb-3 mb-lg-0">
      
            <div class="col-lg-3">
              <div class="icon" style="text-align: center;">
                <img class="icones-svg"  src="{{Storage::url($rodapeslide1)}}" alt="">
                <!-- <svg class="icones-svg" fill="rgb(255,255,255)" viewBox="0 -16 512 512"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="m266 390c0 5.523438-4.476562 10-10 10s-10-4.476562-10-10 4.476562-10 10-10 10 4.476562 10 10zm0 0" />
                  <path
                    d="m479 300c0-33.085938-26.914062-60-60-60s-60 26.914062-60 60 26.914062 60 60 60 60-26.914062 60-60zm-60 40c-22.054688 0-40-17.945312-40-40s17.945312-40 40-40 40 17.945312 40 40-17.945312 40-40 40zm0 0" />
                  <path
                    d="m419 360c-25.199219 0-50.328125 10.460938-67.445312 27.421875-22.53125-29.609375-57.273438-47.421875-95.554688-47.421875-36.660156 0-72.183594 16.726562-95.550781 47.421875-17.121094-16.957031-42.246094-27.421875-67.449219-27.421875-50.410156 0-93 41.214844-93 90v20c0 5.523438 4.476562 10 10 10h492c5.523438 0 10-4.476562 10-10v-20c0-48.785156-42.589844-90-93-90zm-399 90c0-37.945312 33.429688-70 73-70 21.652344 0 43.125 9.59375 56.417969 24.84375-8.789063 16.976562-13.417969 35.898438-13.417969 55.15625h-116zm236-90c55.644531 0 100 45.148438 100 100h-200c0-55.582031 45.261719-100 100-100zm236 100h-116c0-19.257812-4.628906-38.179688-13.417969-55.15625 13.292969-15.25 34.765625-24.84375 56.417969-24.84375 39.570312 0 73 32.054688 73 70zm0 0" />
                  <path
                    d="m153 300c0-33.085938-26.914062-60-60-60s-60 26.914062-60 60 26.914062 60 60 60 60-26.914062 60-60zm-60 40c-22.054688 0-40-17.945312-40-40s17.945312-40 40-40 40 17.945312 40 40-17.945312 40-40 40zm0 0" />
                  <path
                    d="m336 260c0-44.113281-35.886719-80-80-80s-80 35.886719-80 80 35.886719 80 80 80 80-35.886719 80-80zm-80 60c-33.085938 0-60-26.914062-60-60s26.914062-60 60-60 60 26.914062 60 60-26.914062 60-60 60zm0 0" />
                  <path
                    d="m335.140625 58.160156c-1.175781-3.621094-4.304687-6.257812-8.074219-6.804687l-43.132812-6.261719-19.3125-39.484375c-1.675782-3.433594-5.160156-5.609375-8.980469-5.609375s-7.304687 2.175781-8.984375 5.605469l-19.308594 39.488281-43.132812 6.257812c-3.769532.546876-6.898438 3.1875-8.074219 6.808594s-.195313 7.59375 2.53125 10.25l31.234375 30.441406-7.371094 42.988282c-.644531 3.75.898438 7.542968 3.980469 9.777344 3.0625 2.226562 7.140625 2.542968 10.53125.761718l38.59375-20.292968 38.609375 20.292968c3.367188 1.773438 7.449219 1.476563 10.53125-.761718 3.078125-2.238282 4.621094-6.027344 3.976562-9.78125l-7.378906-42.984376 31.230469-30.441406c2.726563-2.65625 3.707031-6.628906 2.53125-10.25zm-51.492187 30.039063c-2.355469 2.296875-3.433594 5.609375-2.875 8.851562l4.839843 28.199219-25.320312-13.3125c-2.914063-1.53125-6.394531-1.53125-9.308594 0l-25.3125 13.3125 4.835937-28.199219c.554688-3.246093-.523437-6.554687-2.878906-8.851562l-20.484375-19.964844 28.300781-4.109375c3.273438-.472656 6.097657-2.535156 7.546876-5.503906l12.648437-25.859375 12.644531 25.859375c1.453125 2.972656 4.277344 5.03125 7.546875 5.503906l28.304688 4.109375zm0 0" />
                  <path
                    d="m484.609375 133.109375c-1.175781-3.621094-4.304687-6.257813-8.074219-6.804687l-29.222656-4.246094-13.066406-26.484375c-1.683594-3.414063-5.15625-5.574219-8.964844-5.574219 0 0 0 0-.003906 0-3.804688 0-7.28125 2.160156-8.964844 5.574219l-13.074219 26.484375-29.226562 4.246094c-3.765625.546874-6.894531 3.183593-8.070313 6.804687-1.179687 3.621094-.199218 7.59375 2.527344 10.25l21.144531 20.621094-4.992187 29.101562c-.640625 3.75.898437 7.539063 3.980468 9.777344 3.078126 2.238281 7.160157 2.535156 10.527344.765625l26.148438-13.738281 26.140625 13.738281c3.367187 1.769531 7.453125 1.472656 10.53125-.765625 3.078125-2.234375 4.617187-6.027344 3.976562-9.777344l-4.992187-29.101562 21.148437-20.621094c2.726563-2.65625 3.703125-6.628906 2.527344-10.25zm-41.398437 20.222656c-2.359376 2.296875-3.433594 5.605469-2.875 8.847657l2.453124 14.3125-12.855468-6.753907c-2.914063-1.53125-6.394532-1.53125-9.304688 0l-12.867187 6.757813 2.457031-14.316406c.554688-3.242188-.519531-6.550782-2.875-8.847657l-10.40625-10.148437 14.378906-2.085938c3.257813-.472656 6.074219-2.519531 7.53125-5.46875l6.429688-13.027344 6.425781 13.023438c1.457031 2.953125 4.273437 5 7.53125 5.472656l14.378906 2.085938zm0 0" />
                  <path
                    d="m144.609375 133.109375c-1.175781-3.621094-4.304687-6.257813-8.074219-6.804687l-29.222656-4.246094-13.066406-26.484375c-1.683594-3.414063-5.15625-5.574219-8.964844-5.574219s-7.285156 2.160156-8.96875 5.574219l-13.074219 26.484375-29.226562 4.246094c-3.765625.546874-6.894531 3.183593-8.070313 6.804687-1.179687 3.621094-.199218 7.59375 2.527344 10.25l21.144531 20.621094-4.988281 29.101562c-.644531 3.75.898438 7.539063 3.976562 9.777344 3.078126 2.238281 7.160157 2.535156 10.53125.765625l26.144532-13.738281 26.140625 13.738281c3.390625 1.78125 7.46875 1.460938 10.53125-.765625 3.078125-2.234375 4.621093-6.027344 3.976562-9.777344l-4.992187-29.101562 21.148437-20.621094c2.726563-2.65625 3.703125-6.628906 2.527344-10.25zm-41.402344 20.222656c-2.355469 2.296875-3.429687 5.605469-2.875 8.847657l2.457031 14.3125-12.859374-6.753907c-2.910157-1.53125-6.390626-1.53125-9.300782 0l-12.871094 6.757813 2.457032-14.316406c.558594-3.242188-.519532-6.550782-2.875-8.847657l-10.40625-10.148437 14.382812-2.085938c3.253906-.472656 6.070313-2.519531 7.527344-5.46875l6.429688-13.027344 6.425781 13.023438c1.457031 2.953125 4.273437 5 7.53125 5.472656l14.378906 2.085938zm0 0" />
                  <path
                    d="m299.820312 393.09375c-4.617187-3.035156-10.816406-1.75-13.847656 2.867188-3.035156 4.613281-1.75 10.8125 2.867188 13.847656 9.246094 6.074218 16.636718 14.542968 21.371094 24.488281 2.367187 4.980469 8.328124 7.109375 13.324218 4.730469 4.988282-2.371094 7.105469-8.339844 4.734375-13.324219-6.304687-13.25-16.144531-24.527344-28.449219-32.609375zm0 0" />
                </svg> -->
              </div>

            </div>
            <div class="col-lg-10 ropae-slide">
              <h4 class="title" style="color: #fff;"> {{$rodapeslide4}} </h4>
            </div>

          </div>

          <div class="section-icons1 col-md-12 col-lg-4 d-flex align-items-stretch mb-3 mb-lg-0" >

            <div class="col-lg-3">
              <div class="icon" style="text-align: center;">
                <img  class="icones-svg" src="{{Storage::url($rodapeslide2)}}" alt="">
                <!-- <svg class="icones-svg" fill="rgb(255,255,255)" viewBox="0 0 496 496"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="m396.945312 288h-297.890624l-32 64h28.945312v144h304v-144h28.945312zm-9.890624 16 16 32h-126.109376l-16-32zm-278.109376 0h126.109376l-16 32h-126.109376zm275.054688 176h-128v-56h-16v56h-128v-128h116.945312l11.054688-22.113281v70.113281h16v-70.113281l11.054688 22.113281h116.945312zm0 0" />
                  <path d="m128 416h48v16h-48zm0 0" />
                  <path d="m128 448h48v16h-48zm0 0" />
                  <path d="m192 448h16v16h-16zm0 0" />
                  <path
                    d="m211.054688 130.113281 36.945312-9.417969 36.945312 9.410157 2.894532-39.671875 19.625-33.523438-34.710938-15.023437-24.753906-30.605469-24.761719 30.605469-34.710937 15.023437 19.625 33.523438zm22.152343-75.113281 14.792969-18.28125 14.792969 18.289062 21.742187 9.417969-12.375 21.140625-1.777344 24.328125-22.382812-5.703125-22.382812 5.695313-1.777344-24.328125-12.375-21.144532zm0 0" />
                  <path
                    d="m87.839844 146.441406 11.625-19.847656-20.59375-8.921875-14.871094-18.390625-14.871094 18.382812-20.59375 8.921876 11.625 19.847656 1.71875 23.671875 22.121094-5.625 22.128906 5.632812zm-15.679688-4.882812-.609375 8.328125-7.550781-1.917969-7.542969 1.917969-.617187-8.328125-4.375-7.480469 7.625-3.300781 4.910156-6.058594 4.902344 6.066406 7.625 3.304688zm0 0" />
                  <path
                    d="m455.839844 146.441406 11.625-19.847656-20.59375-8.921875-14.871094-18.390625-14.871094 18.382812-20.59375 8.921876 11.625 19.847656 1.71875 23.671875 22.121094-5.625 22.128906 5.632812zm-15.679688-4.882812-.609375 8.328125-7.550781-1.917969-7.542969 1.917969-.609375-8.328125-4.375-7.480469 7.625-3.300781 4.902344-6.058594 4.902344 6.066406 7.625 3.304688zm0 0" />
                  <path
                    d="m99.558594 190.65625c15.234375 10.160156 28.769531 22.558594 40.203125 36.863281l31.6875 39.59375-6.554688-52.417969c-3.421875-27.367187-18.039062-52.558593-40.101562-69.101562l-7.664063-5.746094-23.449218 46.886719zm23.058594-26c13.527343 12.800781 22.703124 29.839844 25.847656 48.273438-10.105469-11.867188-21.570313-22.441407-34.207032-31.554688zm0 0" />
                  <path
                    d="m331.105469 214.695312-6.554688 52.417969 31.6875-39.601562c11.441407-14.304688 24.96875-26.703125 40.203125-36.863281l5.871094-3.921876-23.449219-46.886718-7.664062 5.761718c-22.054688 16.542969-36.679688 41.726563-40.09375 69.09375zm50.636719-33.320312c-12.636719 9.113281-24.109376 19.679688-34.207032 31.554688 3.152344-18.433594 12.320313-35.472657 25.847656-48.273438zm0 0" />
                  <path
                    d="m280 272h16v-33.519531c0-38.425781 13.542969-75.832031 38.152344-105.359375l-12.296875-10.242188c-26.992188 32.394532-41.855469 73.449219-41.855469 115.601563zm0 0" />
                  <path d="m336 96h16v16h-16zm0 0" />
                  <path d="m360 64h16v16h-16zm0 0" />
                  <path
                    d="m200 272h16v-33.519531c0-42.160157-14.863281-83.207031-41.847656-115.601563l-12.296875 10.242188c24.601562 29.527344 38.144531 66.933594 38.144531 105.359375zm0 0" />
                  <path d="m144 96h16v16h-16zm0 0" />
                  <path d="m120 64h16v16h-16zm0 0" />
                  <path d="m240 136h16v16h-16zm0 0" />
                  <path d="m240 168h16v104h-16zm0 0" />
                  <path d="m464 216h16v16h-16zm0 0" />
                  <path d="m464 248h16v16h-16zm0 0" />
                  <path d="m480 232h16v16h-16zm0 0" />
                  <path d="m448 232h16v16h-16zm0 0" />
                  <path d="m440 0h16v16h-16zm0 0" />
                  <path d="m440 32h16v16h-16zm0 0" />
                  <path d="m456 16h16v16h-16zm0 0" />
                  <path d="m424 16h16v16h-16zm0 0" />
                  <path d="m16 248h16v16h-16zm0 0" />
                  <path d="m16 280h16v16h-16zm0 0" />
                  <path d="m32 264h16v16h-16zm0 0" />
                  <path d="m0 264h16v16h-16zm0 0" />
                  <path d="m16 0h16v16h-16zm0 0" />
                  <path d="m16 32h16v16h-16zm0 0" />
                  <path d="m32 16h16v16h-16zm0 0" />
                  <path d="m0 16h16v16h-16zm0 0" />
                </svg> -->
              </div>
            </div>
            <div class="col-lg-10 ropae-slide">
              <h4 class="title" style="color: #fff;"> {{$rodapeslide5}} </h4>
            </div>

          </div>

          <div class="section-icons2 col-md-12 col-lg-4 d-flex align-items-stretch mb-3 mb-lg-0" >

            <div class="col-lg-3">
              <div class="icon" style="text-align: center;">
                <img  class="icones-svg" src="{{Storage::url($rodapeslide3)}}" alt="">
                <!-- <svg class="icones-svg" fill="rgb(255,255,255)" viewBox="0 -57 512 512"
                  xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="m506.8125 95.679688-172-94.445313c-2.996094-1.644531-6.628906-1.644531-9.625 0l-64.679688 35.515625c-1.460937.40625-2.824218 1.152344-3.980468 2.183594l-103.339844 56.746094c-3.199219 1.757812-5.1875 5.117187-5.1875 8.765624v20.445313h-115.375c-5.523438 0-10 4.480469-10 10 0 5.523437 4.476562 10 10 10h115.375v36h-57.332031c-5.523438 0-10 4.480469-10 10 0 5.523437 4.476562 10 10 10h57.332031v52h-84c-5.523438 0-10 4.480469-10 10 0 5.523437 4.476562 10 10 10h84v20.449219c0 3.648437 1.988281 7.007812 5.1875 8.765625l172 94.445312c1.5.824219 3.15625 1.234375 4.8125 1.234375s3.3125-.410156 4.8125-1.234375l172-94.445312c3.199219-1.757813 5.1875-5.117188 5.1875-8.765625v-44.78125c0-5.519532-4.476562-10-10-10s-10 4.480468-10 10v38.863281l-152 83.464844v-166.078125l48.339844-26.542969v42.125c0 3.539063 1.867187 6.8125 4.910156 8.609375 1.566406.925781 3.328125 1.390625 5.089844 1.390625 1.65625 0 3.316406-.410156 4.820312-1.238281l36.859375-20.285156c3.191407-1.757813 5.175781-5.113282 5.175781-8.761719v-53.058594l46.804688-25.699219v47.210938c0 5.523437 4.476562 10 10 10s10-4.476563 10-10v-64.113282c0-3.648437-1.988281-7.007812-5.1875-8.765624zm-186.8125 275.207031-152-83.464844v-166.074219l152 83.460938zm10-183.402344-151.222656-83.039063 47.527344-26.097656 151.226562 83.039063zm68.308594-37.507813-151.226563-83.039062 16.394531-9 151.222657 83.039062zm26.886718 44.21875-16.855468 9.277344v-36.1875l16.855468-9.257812zm10.28125-64.628906-151.222656-83.039062 45.746094-25.117188 151.222656 83.035156zm0 0" />
                  <path
                    d="m502 198.5625c-2.628906 0-5.210938 1.058594-7.070312 2.929688-1.859376 1.859374-2.929688 4.429687-2.929688 7.070312 0 2.628906 1.070312 5.210938 2.929688 7.070312 1.859374 1.859376 4.441406 2.929688 7.070312 2.929688s5.210938-1.070312 7.070312-2.929688c1.859376-1.859374 2.929688-4.441406 2.929688-7.070312 0-2.640625-1.070312-5.210938-2.929688-7.070312-1.859374-1.871094-4.441406-2.929688-7.070312-2.929688zm0 0" />
                  <path
                    d="m24.332031 252.890625h-14.332031c-5.523438 0-10 4.480469-10 10 0 5.523437 4.476562 10 10 10h14.332031c5.523438 0 10-4.476563 10-10 0-5.519531-4.476562-10-10-10zm0 0" />
                  <path
                    d="m60.671875 190.890625c0-2.628906-1.070313-5.207031-2.933594-7.066406-1.859375-1.863281-4.4375-2.933594-7.066406-2.933594-2.632813 0-5.210937 1.070313-7.070313 2.933594-1.871093 1.859375-2.929687 4.4375-2.929687 7.066406 0 2.632813 1.058594 5.210937 2.929687 7.070313 1.859376 1.859374 4.4375 2.929687 7.070313 2.929687 2.628906 0 5.207031-1.066406 7.066406-2.929687 1.863281-1.859376 2.933594-4.4375 2.933594-7.070313zm0 0" />
                </svg> -->
              </div>
            </div>
            <div class="col-lg-10 ropae-slide">
              <h4 class="title" style="color: #fff;"> {{$rodapeslide6}} </h4>
            </div>

          </div>

          <!-- <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" style=" border-right: solid white 1px;">
            <div class="col-lg-3">
              <div class="icon"><img  src="assets/img/surpresa.png" alt=""></div>
            </div>
            <div class="col-lg-11">
              <h4 class="title"><a href="">Qualidade e variedade em nossos produtos.</a></h4>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" >
            <div class="col-lg-3">
              <div class="icon"><img src="assets/img/caixa.png" alt=""></div>
            </div>
            <div class="col-lg-10">
              <h4 class="title"><a href="">Rapidez na entrega em todo o brasil</a></h4>
            </div>
          </div> -->

          <!-- <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" style="margin: auto;">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" style="margin: auto;">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Magni Dolores</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div> -->


        </div>

      </div>
    </section>
    <!-- FIM RODAPÉ SLIDE  -->

    <!-- ======= BEM VINDO  ======= -->
    <section id="section1" class="about">
      <div class="container" data-aos="fade-up">

        <!-- <div class="section-title">
          <h2>About</h2>
          <h3>Find Out More <span>About Us</span></h3>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div> -->

        <div class="row">
          <div class="col-lg-6" data-aos="zoom-out" data-aos-delay="100">
            <img src="{{Storage::url($menu1)}}" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up"
            data-aos-delay="100">
            <h3 style="text-transform: uppercase; padding-left: 25px;">
              {{$menu2}} <br>
              <span style="color: rgb(66, 164, 177);"> {{$menu3}} </h3></span>
            </h3>
            <!-- <p class="font-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p> -->
            <!-- <ul>
              <li>
                <i class="bx bx-store-alt"></i>
                <div>
                  <h5>Ullamco laboris nisi ut aliquip consequat</h5>
                  <p>Magni facilis facilis repellendus cum excepturi quaerat praesentium libre trade</p>
                </div>
              </li>
              <li>
                <i class="bx bx-images"></i>
                <div>
                  <h5>Magnam soluta odio exercitationem reprehenderi</h5>
                  <p>Quo totam dolorum at pariatur aut distinctio dolorum laudantium illo direna pasata redi</p>
                </div>
              </li>
            </ul> -->
            <p style="padding-left: 25px;">
              {{$menu4}}
            </p>
            <button type="button" class="btn  btn-inicio"> {{$menu5}} </button>
          </div>
        </div>

      </div>
    </section>
    <!-- FIM BEM VINDO  -->



    <!-- CARROSEL PARCEIROS WEB -->
    <section class="about layout-web" id="parceiros" style="background-color: rgb(221, 221, 221);">
      <div class="container aos-init aos-animate" data-aos="fade-up" >
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"
          style="margin-top:  25px; margin-bottom: 25px;">

          <ol class="carousel-indicators" style="bottom: -60px;">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"
              style="background-color: rgb(0, 0, 0)"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1" style="background-color: rgb(0, 0, 0)">
            </li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2" style="background-color: rgb(0, 0, 0)">
            </li>
          </ol>

          <div class="carousel-inner">
            <h1 style="margin-bottom: 40px; text-align: center; color: #000000; text-transform: uppercase; ">
              {{$associados13}} <span style="font-weight: bold;">{{$associados14}}</span>
            </h1>

            <div class="carousel-item active">
              <div class="card-deck" style="margin: auto 0; ">
                <div class="card" style="border: none; padding-top: 15px; background-color: unset">
                  <img style="max-width: 200px;" src="{{Storage::url($associados1)}}" class="card-img-top" alt="...">
                </div>
                <div class="card" style="border: none; padding-top: 15px;  background-color: unset">
                  <img style="max-width: 200px;" src="{{Storage::url($associados2)}}" class="card-img-top" alt="...">

                </div>
                <div class="card" style="border: none; padding-top: 15px;  background-color: unset">
                  <img style="max-width: 200px;" src="{{Storage::url($associados3)}}" class="card-img-top" alt="...">
                </div>

                <div class="card" style="border: none; padding-top: 15px;  background-color: unset">
                  <img style="max-width: 200px;" src="{{Storage::url($associados4)}}" class="card-img-top " alt="...">
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="card-deck" style="margin: auto 0; ">
                <div class="card" style="border: none; padding-top: 15px;  background-color: unset">
                  <img style="max-width: 200px;" src="{{Storage::url($associados5)}}" class="card-img-top" alt="...">
                </div>
                <div class="card" style="border: none; padding-top: 15px;  background-color: unset">
                  <img style="max-width: 200px;" src="{{Storage::url($associados6)}}" class="card-img-top" alt="...">

                </div>
                <div class="card" style="border: none; padding-top: 15px;  background-color: unset">
                  <img style="max-width: 200px;" src="{{Storage::url($associados7)}}" class="card-img-top" alt="...">
                </div>

                <div class="card" style="border: none; padding-top: 15px;  background-color: unset">
                  <img style="max-width: 200px;" src="{{Storage::url($associados8)}}" class="card-img-top " alt="...">
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="card-deck" style="margin: auto 0; ">
                <div class="card" style="border: none; padding-top: 15px;  background-color: unset">
                  <img style="max-width: 200px;" src="{{Storage::url($associados9)}}" class="card-img-top" alt="...">
                </div>
                <div class="card" style="border: none; padding-top: 15px;  background-color: unset">
                  <img style="max-width: 200px;" src="{{Storage::url($associados10)}}" class="card-img-top" alt="...">

                </div>
                <div class="card" style="border: none; padding-top: 15px;  background-color: unset">
                  <img style="max-width: 200px;" src="{{Storage::url($associados11)}}" class="card-img-top" alt="...">
                </div>

                <div class="card" style="border: none; padding-top: 15px;  background-color: unset">
                  <img style="max-width: 200px;" src="{{Storage::url($associados12)}}" class="card-img-top " alt="...">
                </div>
              </div>
            </div>

          </div>
          <!-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a> -->
        </div>
      </div>
    </section>
    <!-- FIM CARROSEL PARCEIROS WEB -->

    <!-- CARROSEL PARCEIROS MOBILE -->
    <section class="about layout-mobile-pacreiros"  id="parceiros" style="background-color: rgb(221, 221, 221);">
      <div class="container aos-init aos-animate" data-aos="fade-up">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"
          style="margin-top:  25px; margin-bottom: 50px;">

          <ol class="carousel-indicators" style="bottom: -60px;">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"
              style="background-color: rgb(0, 0, 0)"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1" style="background-color: rgb(0, 0, 0)">
            </li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2" style="background-color: rgb(0, 0, 0)">
            </li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3" style="background-color: rgb(0, 0, 0)">
            </li>
          </ol>

          <div class="carousel-inner">
            <h1 style="margin-bottom: 40px; text-align: center; color: #000000; text-transform: uppercase; ">
              {{$associados13}} <span style="font-weight: bold;">{{$associados14}}</span>
            </h1>

            <div class="carousel-item active">
              <div class="card-deck" style="margin: auto 0; ">
                <div class="card" style="border: none; padding-top: 15px; background-color: unset">
                  <img style="max-width: 200px; margin: auto;" src="{{Storage::url($associados1)}}"
                    class="card-img-top" alt="...">
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="card-deck" style="margin: auto 0; ">
                <div class="card" style="border: none; padding-top: 15px;  background-color: unset">
                  <img style="max-width: 200px; margin: auto;" src="{{Storage::url($associados2)}}"
                    class="card-img-top" alt="...">

                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="card-deck" style="margin: auto 0; ">
                <div class="card" style="border: none; padding-top: 15px;  background-color: unset">
                  <img style="max-width: 200px; margin: auto;" src="{{Storage::url($associados3)}}"
                    class="card-img-top" alt="...">
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="card-deck" style="margin: auto 0; ">

                <div class="card" style="border: none; padding-top: 15px;  background-color: unset">
                  <img style="max-width: 200px; margin: auto;" src="{{Storage::url($associados4)}}"
                    class="card-img-top " alt="...">
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="card-deck" style="margin: auto 0; ">

                <div class="card" style="border: none; padding-top: 15px;  background-color: unset">
                  <img style="max-width: 200px; margin: auto;" src="{{Storage::url($associados5)}}"
                    class="card-img-top " alt="...">
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="card-deck" style="margin: auto 0; ">

                <div class="card" style="border: none; padding-top: 15px;  background-color: unset">
                  <img style="max-width: 200px; margin: auto;" src="{{Storage::url($associados6)}}"
                    class="card-img-top " alt="...">
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="card-deck" style="margin: auto 0; ">

                <div class="card" style="border: none; padding-top: 15px;  background-color: unset">
                  <img style="max-width: 200px; margin: auto;" src="{{Storage::url($associados7)}}"
                    class="card-img-top " alt="...">
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="card-deck" style="margin: auto 0; ">

                <div class="card" style="border: none; padding-top: 15px;  background-color: unset">
                  <img style="max-width: 200px; margin: auto;" src="{{Storage::url($associados8)}}"
                    class="card-img-top " alt="...">
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="card-deck" style="margin: auto 0; ">

                <div class="card" style="border: none; padding-top: 15px;  background-color: unset">
                  <img style="max-width: 200px; margin: auto;" src="{{Storage::url($associados9)}}"
                    class="card-img-top " alt="...">
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="card-deck" style="margin: auto 0; ">

                <div class="card" style="border: none; padding-top: 15px;  background-color: unset">
                  <img style="max-width: 200px; margin: auto;" src="{{Storage::url($associados10)}}"
                    class="card-img-top " alt="...">
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="card-deck" style="margin: auto 0; ">

                <div class="card" style="border: none; padding-top: 15px;  background-color: unset">
                  <img style="max-width: 200px; margin: auto;" src="{{Storage::url($associados11)}}"
                    class="card-img-top " alt="...">
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="card-deck" style="margin: auto 0; ">

                <div class="card" style="border: none; padding-top: 15px;  background-color: unset">
                  <img style="max-width: 200px; margin: auto;" src="{{Storage::url($associados12)}}"
                    class="card-img-top " alt="...">
                </div>
              </div>
            </div>

            <!-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a> -->

          </div>

        </div>
      </div>
    </section>
    <!-- FIM CARROSEL PARCEIROS MOBILE -->



    <!-- ======= RECEITA ======= -->
    <section id="receita" class="about">
      <div class="container" data-aos="fade-up">

        <h1 style="margin-bottom: 40px; text-align: center; color: #000000; text-transform: uppercase; ">
        {{$receita1}} <span style="font-weight: bold;"> {{$receita2}} </span>
        </h1>

        <!-- <div class="section-title">
          <h2>About</h2>
          <h3>Find Out More <span>About Us</span></h3>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div> -->

        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12" data-aos="zoom-out" data-aos-delay="100" style="text-align: center; margin-top: 30px;">
            <img src="{{Storage::url($receita9)}}" style="margin: auto;" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 pt-4 pt-lg-0 content d-flex flex-column justify-content-center" data-aos="fade-up"
            data-aos-delay="100">
            <h3 style="text-transform: uppercase; padding-left: 25px;"> {{$receita3}}
              <span style="color: rgb(66, 164, 177);"> {{$receita4}} </h3></span>
            </h3>
            
            <!-- 
              <p class="font-italic">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua.
              </p>
              <ul>
                <li>
                  <i class="bx bx-store-alt"></i>
                  <div>
                    <h5>Ullamco laboris nisi ut aliquip consequat</h5>
                    <p>Magni facilis facilis repellendus cum excepturi quaerat praesentium libre trade</p>
                  </div>
                </li>
                <li>
                  <i class="bx bx-images"></i>
                  <div>
                    <h5>Magnam soluta odio exercitationem reprehenderi</h5>
                    <p>Quo totam dolorum at pariatur aut distinctio dolorum laudantium illo direna pasata redi</p>
                  </div>
                </li>
              </ul>
            -->

            <p style="padding-left: 25px;">
              {{$receita5}}
            </p>
            <h5 class="titulo-receita">{{$receita6}}</h5>
            <h5 class="titulo-receita">{{$receita7}}</h5>
            <button type="button" class="btn btn-receita">{{$receita8}}</button>

          </div>


        </div>

      </div>
    </section>
    <!-- FIM RECEITA -->



    <!-- CARROSEL SOCIAL WEB-->
    <section class="about layout-web2" style="background-color: rgb(197, 228, 233);">
      <div class="container aos-init aos-animate" data-aos="fade-up">
        <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel"
          style="margin-bottom: 25px; margin-top: 25px;">

          <ol class="carousel-indicators" style="bottom: -55px;">
            <li data-target="#carouselExampleIndicators2" data-slide-to="0" style="background-color: rgb(0, 0, 0);"
              class="active">
            </li>
            <li data-target="#carouselExampleIndicators2" data-slide-to="1" style="background-color: rgb(0, 0, 0);">
            </li>
            <li data-target="#carouselExampleIndicators2" data-slide-to="2" style="background-color: rgb(0, 0, 0);">
            </li>
          </ol>

          <div class="carousel-inner">

            <h1 style="margin-bottom: 40px; text-align: center; color: #000000; text-transform: uppercase; ">
              Feed do <span style="font-weight: bold;">Instagram</span>
            </h1>

            <div class="carousel-item active">
              <div class="card-deck" style="margin: auto 0; ">
                <div class="card" style="border: none; padding-top: 15px;">
                  <img style="max-width: 350px; " src="assets/img/insta1.png" class="card-img-top" alt="...">
                </div>
                <div class="card" style="border: none; padding-top: 15px;">
                  <img style="max-width: 350px;" src="assets/img/insta2.png" class="card-img-top" alt="...">

                </div>
                <div class="card" style="border: none; padding-top: 15px;">
                  <img style="max-width: 350px;" src="assets/img/insta3.png" class="card-img-top" alt="...">
                </div>

              </div>
            </div>

            <div class="carousel-item">
              <div class="card-deck" style="margin: auto 0; ">
                <div class="card" style="border: none; padding-top: 15px;">
                  <img style="max-width: 350px; " src="assets/img/insta1.png" class="card-img-top" alt="...">
                </div>
                <div class="card" style="border: none; padding-top: 15px;">
                  <img style="max-width: 350px;" src="assets/img/insta2.png" class="card-img-top" alt="...">

                </div>
                <div class="card" style="border: none; padding-top: 15px;">
                  <img style="max-width: 350px;" src="assets/img/insta3.png" class="card-img-top" alt="...">
                </div>

              </div>
            </div>

            <div class="carousel-item">
              <div class="card-deck" style="margin: auto 0; ">
                <div class="card" style="border: none; padding-top: 15px;">
                  <img style="max-width: 350px; " src="assets/img/insta1.png" class="card-img-top" alt="...">
                </div>
                <div class="card" style="border: none; padding-top: 15px;">
                  <img style="max-width: 350px;" src="assets/img/insta2.png" class="card-img-top" alt="...">

                </div>
                <div class="card" style="border: none; padding-top: 15px;">
                  <img style="max-width: 350px;" src="assets/img/insta3.png" class="card-img-top" alt="...">
                </div>

              </div>
            </div>
          </div>
          <!-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a> -->
        </div>
      </div>
    </section>
    <!-- FIM CARROSEL SOCIAL WEB -->

    <!-- CARROSEL SOCIAL MOBILE -->
    <section class="about layout-mobile-social" style="background-color: rgb(197, 228, 233);">
      <div class="container aos-init aos-animate" data-aos="fade-up">
        <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel"
          style="margin-bottom: 45px; margin-top: 25px;">

          <ol class="carousel-indicators" style="bottom: -55px;">
            <li data-target="#carouselExampleIndicators2" data-slide-to="0" style="background-color: rgb(0, 0, 0);"
              class="active">
            </li>
            <li data-target="#carouselExampleIndicators2" data-slide-to="1" style="background-color: rgb(0, 0, 0);">
            </li>
            <li data-target="#carouselExampleIndicators2" data-slide-to="2" style="background-color: rgb(0, 0, 0);">
            </li>
          </ol>

          <div class="carousel-inner">

            <h1 style="margin-bottom: 40px; text-align: center; color: #000000; text-transform: uppercase; ">
              Feed do <span style="font-weight: bold;">Instagram</span>
            </h1>

            <div class="carousel-item active">
              <div class="card-deck" style="margin: auto 0; ">
                <div class="card" style="border: none; padding-top: 15px;">
                  <img style="max-width: 350px; margin: auto;" src="assets/img/insta1.png" class="card-img-top"
                    alt="...">
                </div>
              </div>
            </div>

            <div class="carousel-item">
              <div class="card-deck" style="margin: auto 0; ">
                <div class="card" style="border: none; padding-top: 15px;">
                  <img style="max-width: 350px; margin: auto;" src="assets/img/insta2.png" class="card-img-top"
                    alt="...">
                </div>

              </div>
            </div>

            <div class="carousel-item">
              <div class="card-deck" style="margin: auto 0; ">
                <div class="card" style="border: none; padding-top: 15px;">
                  <img style="max-width: 350px; margin: auto;" src="assets/img/insta3.png" class="card-img-top"
                    alt="...">
                </div>

              </div>
            </div>
          </div>
          <!-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a> -->
        </div>
      </div>
    </section>
    <!-- FIM CARROSEL SOCIAL MOBILE -->




    <!-- ======= Skills Section ======= -->
    <!-- <section id="skills" class="skills">
      <div class="container" data-aos="fade-up">

        <div class="row skills-content">

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">HTML <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">CSS <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">JavaScript <i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill">PHP <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">WordPress/CMS <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Photoshop <i class="val">55%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section> -->
    <!-- End Skills Section -->

    <!-- ======= Counts Section ======= -->
    <!-- <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="icofont-simple-smile"></i>
              <span data-toggle="counter-up">232</span>
              <p>Happy Clients</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="icofont-document-folder"></i>
              <span data-toggle="counter-up">521</span>
              <p>Projects</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="icofont-live-support"></i>
              <span data-toggle="counter-up">1,463</span>
              <p>Hours Of Support</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="icofont-users-alt-5"></i>
              <span data-toggle="counter-up">15</span>
              <p>Hard Workers</p>
            </div>
          </div>

        </div>

      </div>
    </section> -->
    <!-- End Counts Section -->

    <!-- ======= Testimonials Section ======= -->
    <!-- <section id="testimonials" class="testimonials">
      <div class="container" data-aos="zoom-in">

        <div class="owl-carousel testimonials-carousel">

          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
            <h3>Saul Goodman</h3>
            <h4>Ceo &amp; Founder</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
            <h3>Sara Wilsson</h3>
            <h4>Designer</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
            <h3>Jena Karlis</h3>
            <h4>Store Owner</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
            <h3>Matt Brandon</h3>
            <h4>Freelancer</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

          <div class="testimonial-item">
            <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
            <h3>John Larson</h3>
            <h4>Entrepreneur</h4>
            <p>
              <i class="bx bxs-quote-alt-left quote-icon-left"></i>
              Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
              <i class="bx bxs-quote-alt-right quote-icon-right"></i>
            </p>
          </div>

        </div>

      </div>
    </section> -->
    <!-- End Testimonials Section -->

    <!-- ======= Clients Section ======= -->
    <!-- <section id="clients" class="clients section-bg">
      <div class="container" data-aos="zoom-in">

        <div class="row">

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
          </div>

          <div class="col-lg-2 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
          </div>

        </div>

      </div>
    </section> -->
    <!-- End Clients Section -->

    <!-- ======= Services Section ======= -->
    <!-- <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <h3>Check our <span>Services</span></h3>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="">Lorem Ipsum</a></h4>
              <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4><a href="">Sed ut perspiciatis</a></h4>
              <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4><a href="">Magni Dolores</a></h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4><a href="">Nemo Enim</a></h4>
              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-slideshow"></i></div>
              <h4><a href="">Dele cardo</a></h4>
              <p>Quis consequatur saepe eligendi voluptatem consequatur dolor consequuntur</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-arch"></i></div>
              <h4><a href="">Divera don</a></h4>
              <p>Modi nostrum vel laborum. Porro fugit error sit minus sapiente sit aspernatur</p>
            </div>
          </div>

        </div>

      </div>
    </section> -->
    <!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <!-- <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Portfolio</h2>
          <h3>Check our <span>Portfolio</span></h3>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 1</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-1.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-2.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 2</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-3.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 2</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-4.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 2</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-5.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>App 3</h4>
              <p>App</p>
              <a href="assets/img/portfolio/portfolio-6.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 1</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-7.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Card 3</h4>
              <p>Card</p>
              <a href="assets/img/portfolio/portfolio-8.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4>Web 3</h4>
              <p>Web</p>
              <a href="assets/img/portfolio/portfolio-9.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section> -->
    <!-- End Portfolio Section -->

    <!-- ======= Team Section ======= -->
    <!-- <section id="team" class="team section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Team</h2>
          <h3>Our Hardworking <span>Team</span></h3>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
            <div class="member">
              <div class="member-img">
                <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section> -->
    <!-- End Team Section -->

    <!-- ======= Pricing Section ======= -->
    <!-- <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Pricing</h2>
          <h3>Check our <span>Pricing</span></h3>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="box">
              <h3>Free</h3>
              <h4><sup>$</sup>0<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li class="na">Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
            <div class="box featured">
              <h3>Business</h3>
              <h4><sup>$</sup>19<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li class="na">Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="box">
              <h3>Developer</h3>
              <h4><sup>$</sup>29<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
            <div class="box">
              <span class="advanced">Advanced</span>
              <h3>Ultimate</h3>
              <h4><sup>$</sup>49<span> / month</span></h4>
              <ul>
                <li>Aida dere</li>
                <li>Nec feugiat nisl</li>
                <li>Nulla at volutpat dola</li>
                <li>Pharetra massa</li>
                <li>Massa ultricies mi</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Buy Now</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section> -->
    <!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <!-- <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>F.A.Q</h2>
          <h3>Frequently Asked <span>Questions</span></h3>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <ul class="faq-list" data-aos="fade-up" data-aos-delay="100">

          <li>
            <a data-toggle="collapse" class="" href="#faq1">Non consectetur a erat nam at lectus urna duis? <i class="icofont-simple-up"></i></a>
            <div id="faq1" class="collapse show" data-parent=".faq-list">
              <p>
                Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq2" class="collapsed">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque? <i class="icofont-simple-up"></i></a>
            <div id="faq2" class="collapse" data-parent=".faq-list">
              <p>
                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq3" class="collapsed">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi? <i class="icofont-simple-up"></i></a>
            <div id="faq3" class="collapse" data-parent=".faq-list">
              <p>
                Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq4" class="collapsed">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla? <i class="icofont-simple-up"></i></a>
            <div id="faq4" class="collapse" data-parent=".faq-list">
              <p>
                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq5" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="icofont-simple-up"></i></a>
            <div id="faq5" class="collapse" data-parent=".faq-list">
              <p>
                Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
              </p>
            </div>
          </li>

          <li>
            <a data-toggle="collapse" href="#faq6" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="icofont-simple-up"></i></a>
            <div id="faq6" class="collapse" data-parent=".faq-list">
              <p>
                Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
              </p>
            </div>
          </li>

        </ul>

      </div>
    </section> -->
    <!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Section ======= -->
    <!-- <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
          <h3><span>Contact Us</span></h3>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>A108 Adam Street, New York, NY 535022</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>contact@example.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>+1 5589 55488 55</p>
            </div>
          </div>

        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">

          <div class="col-lg-6 ">
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section> -->
    <!-- End Contact Section -->

  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <!-- 
    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Join Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div> -->

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-contact" style="text-align: center;">
            <img src="{{Storage::url($footer13)}}" style="width: 200px;" alt="">
            <div class="social-links mt-3">
              <a href="{{$footer1}}" class="facebook"><i style="font-size: 30px;" class="bx bxl-facebook"></i></a>
              <a href="{{$footer2}}" class="instagram"><i style="font-size: 30px;" class="bx bxl-instagram"></i></a>
              <a href="{{$footer3}}" class="twitter"><i style="font-size: 30px;" class="bx bxl-twitter"></i></a>
              <a href="{{$footer4}}" class="google-plus"><i style="font-size: 30px;" class="bx bxl-skype"></i></a>
              <a href="{{$footer5}}" class="linkedin"><i style="font-size: 30px;" class="bx bxl-linkedin"></i></a>
              <a href="{{$footer6}}" class="linkedin"><i style="font-size: 30px;" class="bx bxl-youtube"></i></a>

            </div>
            <!-- <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p> -->
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <div class="descircao-contato">
              <p> {{$footer7}} </p>
              <p> {{$footer8}} <br>
              {{$footer9}} </p>
              <p> {{$footer10}} <br>
              {{$footer11}} <br>
              {{$footer12}}</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-12 footer-links">
            <form>
              <div class="form-group">
                <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" type="text"
                  placeholder="Nome">
              </div>
              <div class="form-group">
                <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" type="email"
                  placeholder="E-mail">
              </div>
              <div class="form-group">
                <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Mensagem"
                  rows="3"></textarea>
              </div>
              <div class="submit-form">
                <button type="submit" class="btn btn-form">Enviar</button>
              </div>
            </form>
          </div>

          <!-- <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div> -->

          <!-- <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div> -->

        </div>
      </div>
    </div>

    <!-- <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>BizLand</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div> -->
  </footer>
  <!-- End Footer -->

  <!-- <div id="preloader"></div>
  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a> -->

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>