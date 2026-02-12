<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hobbies</title>

  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

  <div class="border">
    <header>
      <h2>Winston</h2>

      <button class="menu-toggle" id="menu-toggle">☰</button>

      <nav id="menu">
        <a href="./about">About</a>
        <a class="hobbies active" href="./hobbies">Hobbies</a>
        <a href="./skills">Skills</a>
      </nav>
    </header>

    <main>
      <div id="hobbies">

        <div class="hobby-item">
          <p>Watching Anime</p>
          <img src="{{ asset('images/watching-anime.jpg') }}"
               alt="Watching Anime" height="175" width="175">
        </div>

        <div class="hobby-item">
          <p>Listening to Music</p>
          <img src="{{ asset('images/listening-music.jpg') }}"
               alt="Listening Music" height="175" width="175">
        </div>

        <div class="hobby-item">
          <p>Drawing</p>
          <img src="{{ asset('images/drawing.jpg') }}"
               alt="Drawing" height="175" width="175">
        </div>

        <div class="hobby-item">
          <p>Jogging</p>
          <img src="{{ asset('images/jogging.jpg') }}"
               alt="Jogging" height="175" width="175">
        </div>

      </div>
    </main>
  </div>

  <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
