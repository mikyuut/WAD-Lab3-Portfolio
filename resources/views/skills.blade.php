<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Skills</title>

  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
  <div class="border">
    <header>
      <h2>Winston</h2>

      <button class="menu-toggle" id="menu-toggle">☰</button>

      <nav id="menu">
        <a href="./about">About</a>
        <a href="./hobbies">Hobbies</a>
        <a class="skills" href="./skills">Skills</a>
      </nav>
    </header>

    <main>
      <div id="skills">

        <div class="skill-item">
          <p>Basic HTML & CSS</p>
          <img src="{{ asset('images/basic-html-css.jpg') }}"
               alt="Basic HTML & CSS" height="175" width="175">
        </div>

        <div class="skill-item">
          <p>Time Management</p>
          <img src="{{ asset('images/time-management.jpg') }}"
               alt="Time Management" height="175" width="175">
        </div>

        <div class="skill-item">
          <p>Adaptability</p>
          <img src="{{ asset('images/adaptability.jpg') }}"
               alt="Adaptability" height="175" width="175">
        </div>

        <div class="skill-item">
          <p>Analyzing</p>
          <img src="{{ asset('images/analyzing.jpg') }}"
               alt="Analyzing" height="175" width="175">
        </div>

      </div>
    </main>
  </div>

  <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
