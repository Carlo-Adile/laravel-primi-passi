<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hello laravel</title>

  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
  <header>
    <nav id="my_navbar">
      <div class="container-xl debug">
        <div class="row">
          <!-- logo -->
          <div>
            <a href="" id="nav_logo">
              <img src="{{ asset('img/logomark.min.svg') }}" alt="">
              <img src="{{ asset('img/logotype.min.svg') }}" alt="">
            </a>
          </div>
          <!-- nav menu -->
          <div class="debug">
            <ul>
              <li><a href="/">HOME</a></li>
              <li><a href="/about">ABOUT</a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <main>
    <h1>Hello about!</h1>
  </main>
  
  
</body>
</html>