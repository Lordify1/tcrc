<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    {{-- bootstrap css  --}}
    <link rel="stylesheet" href="/css/bootstrap.css">
    {{-- font awesome  --}}
    <link rel="stylesheet" href="/css/all.min.css">
    {{-- tcrc css  --}}
    <link rel="stylesheet" href="/css/tcrc.css">
    {{-- owl carousel  --}}
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
</head>
<body class="tbgcolor">
  
    {{-- header section start  --}}
    <nav class="navbar navbar-expand-md navbar-dark bg-dark t5vh">
        <div class="container-fluid">
          <div class="col">
            <a class="navbar-brand" href="#">TCRC</a>
          </div>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
              <li class="nav-item">
                <a class="nav-link" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Sermons</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Testimonies</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Calendar</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fa fa-pay"></i>Donation</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    {{-- header section end  --}}


    {{-- content area start --}}

      <main class="container-fluid" style="min-height: 90vh">
        @yield('content')
      </main>

    {{-- content area end --}}


    {{-- footer section start  --}}

  <section class="footer_section t10vh user_footer d-flex align-items-center justify-content-center bg-dark">
    <div class="container">
      <p class="text-white">
        &copy; <a href="#" class="text-decoration-none">TCRC</a>
        <span>{{date("Y")}}</span>
      </p>
    </div>
  </section>

    {{-- footer section end --}}


    {{-- scripts  --}}
    <script src="/js/bootstrap.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    {{-- <script src="/js/color-modes.js"></script> --}}
    <script src="/js/all.min.js"></script>
    {{-- scripts  --}}


</body>
</html>