<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About</title>

  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

  <div class="border">
    <header>
      <h2>Winston</h2>

      <button class="menu-toggle" id="menu-toggle">☰</button>

      <nav id="menu">
        <a class="about" href="./about">About</a>
        <a href="./hobbies">Hobbies</a>
        <a href="./skills">Skills</a>
      </nav>
    </header>

    <main id="main-about">
      <img src="{{ asset('images/Profile.png') }}" alt="Profile" height="150" width="150">

      <div id="about-description">
        <h1>Hi, I'm Winston</h1>
        <p>
         I'm currently a 2nd-year student taking up Bachelor of Science in Information Systems at La Verdad Christian College.
         I was born and raised in Manila, and I am currently living in Apalit, Pampanga to continue my studies. 
         I am interested in technology and software development, and I enjoy learning new things that can help improve my knowledge and skills. 
         I am also a typical person who likes to stay in a quiet and peaceful place, experience and learn new things, and go somewhere that no one has been before.
        </p>
      </div>
    </main>
  </div>

  <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
