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
    @include('includes.navbar')
  </header>
  <main>
  <div class="container-xl">
      <div class="row">
        <div id="my_content">
          <h1>About Laravel!</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda ducimus fuga, obcaecati officiis eius hic. Ex, vitae voluptates, optio eveniet atque dolorem consequatur aperiam soluta eos possimus unde debitis voluptas sunt quas. Iusto, minus enim quas consequatur beatae facere molestias quia tempore velit rem minima in, quidem labore corrupti? Eius.</p>
          <!-- buttons -->
          <div style="margin-top: 1.5rem;">
            <span class="btn2">
              <a href="" style="color: white;">GET STARTED</a>
            </span>
            <span class="btn">
              <a href="">WATCH LARACAST</a>
            </span>
          </div>
        </div>
      </div>
    </div>
    <!-- basic layout dump -->
    @include('includes.homepage')
  </main>
  
</body>
</html>