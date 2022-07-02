<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>journeys story | dashboard </title>
  {{-- trix link --}}
  <link rel="stylesheet" type="text/css" href="/css/trix.css">
  <script type="text/javascript" src="/js/trix.js"></script>
  {{-- enf og trix link --}}
  <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/dashboard/">
  {{-- bootstrap css --}}
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  {{-- end of bootstrap css --}}
  {{-- font import --}}
  <link rel="stylesheet" type="text/css"
    href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@400;500;700&display=swap">
  {{-- end of font import --}}


  <!-- Custom styles for this template -->
  <link href="/css/dashboard.css" rel="stylesheet">

  <style>
    trix-toolbar {
      width: 100%
    }

    trix-editor,
    select {
      background-color: #f6f6f6;
      border: none;
      color: #0d0d0d;
      padding: 15px 32px;
      padding-bottom: 100px;
      text-align: left;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 5px;
      width: 85%;
      border: 2px solid #f6f6f6;
      -webkit-transition: all 0.5s ease-in-out;
      -moz-transition: all 0.5s ease-in-out;
      -ms-transition: all 0.5s ease-in-out;
      -o-transition: all 0.5s ease-in-out;
      transition: all 0.5s ease-in-out;
      -webkit-border-radius: 5px 5px 5px 5px;
      border-radius: 5px 5px 5px 5px;
    }

    trix-editor:focus,
    select:focus {
      background-color: #fff;
      border-bottom: 2px solid #5fbae9;
    }

    trix-editor:placeholder,
    select:placeholder {
      color: #cccccc;
    }

    trix-toolbar .trix-button-row {
      width: 86%;
    }


    trix-toolbar [data-trix-button-group="file-tools"] {
      display: none;
    }
  </style>
</head>

<body style="font-family: 'Inconsolata', 'monospace'">

  <div class="container-fluid">
    @include('dashboard.layouts.header')
    <div class="row">
      @include('dashboard.layouts.sidebar')

      <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        @yield('container')
      </main>
    </div>
  </div>


  <!-- JavaScript Bundle with Popper -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
    integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
  <script src="/js/dashboard.js"></script>

</body>

</html>
