<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="{{ asset('css/index.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet"/>
    @yield('css-imports')
    <title>Premier University, Chittagong</title>
  </head>
  <style>
  </style>
  <body>
  <header>
    <nav id='navbar'>
    <div class="logo"><a href="index.html">Premier University </a></div>
    <div id="head-mobile"></div>
    <div class="button"></div>
    <ul>
    <li class='active'><a href='#'>Home</a></li>
    <li><a href='#'>About</a></li>
    <li><a href='#'>Academics</a>
    <ul>
        <li><a href='#'>Product 1</a>
            <ul>
                <li><a href='#'>Sub Product</a></li>
                <li><a href='#'>Sub Product</a></li>
            </ul>
        </li>
        <li><a href='#'>Product 2</a>
            <ul>
                <li><a href='#'>Sub Product</a></li>
                <li><a href='#'>Sub Product</a></li>
            </ul>
        </li>
    </ul>
    </li>
    <li><a href='#'>Admission</a></li>
    <li><a href='#'>Library</a></li>
    <li><a href='#'>Publications</a></li>
    <li><a href='#'>Career</a></li>
    <li><a href='#'>Contact</a></li>
    <li><a href='/login'>Login</a></li>

    </ul>
    </nav>
    </header>
    @yield('content')
    <span style="margin-left:200px">
      <!-- Server ip address: {{gethostbyname(gethostname())}} -->
    </span>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ asset('js/index.js') }}"></script>
  </body>
</html>
