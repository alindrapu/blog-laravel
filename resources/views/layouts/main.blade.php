<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  {{-- My tyles --}}
  <link rel="stylesheet" href="/css/style.css">
  <!-- Bootstrap CSS -->
  {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> --}}

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

  <link rel="stylesheet" type="text/css"
    href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@400;500;700&display=swap">

  <!-- Vendor CSS Files -->
  <link href="/js/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/js/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/js/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/js/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/js/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


  <title>Journeys Story | {{ $title }}</title>
</head>

<body class="bg-dark text-light ms-gradient-bg"
  style="
        font-family: 'Inconsolata', 'monospace';
        background: '#00cea8';
        background: linear-gradient(90.13deg, #00cea8 1.9%, #bf61ff 97.5%);
        background: -webkit-linear-gradient(-90.13deg, #00cea8 1.9%, #bf61ff 97.5%);
        height: 100%;
        min-height: 100vh;
        ">
  @include('partials.navbar')
  <div class="container mt-4">
    @yield('container')
  </div>
  {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> --}}
  <script src="/js/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="/js/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/js/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/js/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="/js/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/js/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="/js/vendor/php-email-form/validate.js"></script>
  <script src="/js/main.js"></script>
</body>


</html>
