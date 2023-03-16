<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @stack('css')
  <title>@yield('title')</title>
</head>

<body>
  <section class="container">
    <header>
      <x-navbar />
    </header>
    <nav class="activitiesBx">
      <ul class="activities">
        <li class="list">
          <a href="" class="link">
            <span class="icon"></span>
            <span class="title"></span>
          </a>
        </li>
        <li class="list">
          <a href="" class="link">
            <span class="icon"></span>
            <span class="title"></span>
          </a>
        </li>
        <li class="list">
          <a href="" class="link">
            <span class="icon"></span>
            <span class="title"></span>
          </a>
        </li>
        <li class="list">
          <a href="" class="link">
            <span class="icon"></span>
            <span class="title"></span>
          </a>
        </li>
        <li class="list">
          <a href="" class="link">
            <span class="icon"></span>
            <span class="title"></span>
          </a>
        </li>
        <li class="list">
          <a href="" class="link">
            <span class="icon"></span>
            <span class="title"></span>
          </a>
        </li>
        <li class="list">
          <a href="" class="link">
            <span class="icon"></span>
            <span class="title"></span>
          </a>
        </li>
      </ul>
    </nav>
    <main class="contentBx">
      @yield('content')
    </main>
  </section>
  @stack('js')
</body>

</html>