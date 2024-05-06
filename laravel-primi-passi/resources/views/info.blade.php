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
          <h1>Important info!</h1>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda ducimus fuga, obcaecati officiis eius hic. Ex, vitae voluptates, optio eveniet atque dolorem consequatur aperiam soluta eos possimus unde debitis voluptas sunt quas. Iusto, minus enim quas consequatur beatae facere molestias quia tempore velit rem minima in, quidem labore corrupti? Eius.</p>
        </div>
      </div>
    </div>

    <!-- basic layout dump -->
    @include('includes.homepage')
  </main>
  
</body>
</html>