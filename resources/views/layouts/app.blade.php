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
      <nav class="navbar">
        <div class="logoBx">
          <span class="icon"></span>
          <div class="searchBx">
            <input type="text" class="field">
          </div>
        </div>
        <ul class="navigationBx">
          <li class="list active">
            <a href="#" class='link'>
              <span class="icon"></span>
            </a>
          </li>
          <li class="list">
            <a href="#" class='link'>
              <span class="icon"></span>
            </a>
          </li>
          <li class="list">
            <a href="#" class='link'>
              <span class="icon"></span>
            </a>
          </li>
          <li class="list">
            <a href="#" class='link'>
              <span class="icon"></span>
            </a>
          </li>
        </ul>
        <div class="profileBx">
          <div class="profile-photo">
            <img src="" class="photo">
          </div>
        </div>
      </nav>
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

    </main>
  </section>
  @stack('js')
</body>

</html>