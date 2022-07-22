!<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/custom.css">
</head>
  <body class="body-bg">

  <!-- navbar here -->

 
<nav class="navbar navbar-expand-lg navbar-light bg-light no-margin-top">
  <div class="container">
    <a class="navbar-brand" href="#">Ps-Posty</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Dashboard</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Post</a>
        </li>
      </ul>

      <ul class="navbar-nav  d-flex">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Murtaza Don</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Login</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="{{route('register')}}">Register</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Logout</a>
        </li>

      </ul>

      
    </div>
  </div>
</nav>
 

  <!-- navbar here -->

      
  @yield('content')
       
 
      <!-- Option 1: Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>