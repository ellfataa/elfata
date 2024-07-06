<?php
  include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Projects | Luthfi Emillulfata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <!-- Bootstrap ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200&display=swap" rel="stylesheet" />

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link rel="stylesheet" href="projects.css" />
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light shadow-sm fixed-top navigasi" style="background-color: #dbe3ff">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="img/elfata.png" alt="Elfata" width="50" height="50" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center navbarList" id="navbarNav">
          <ul class="navbar-nav mx-auto navbarUl">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="index.php#jumbotron">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#hero">Projects</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php#certif">Certificate</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php#contact">Contact</a>
            </li>
          </ul>
          <form class="navbar-nav">
            <a class="btn cv" style="border: 3px solid #0c41ff" type="button" href="CV/CV Luthfi Emillulfata.pdf">Download CV</a>
          </form>
        </div>
      </div>
    </nav>
    <!-- Akhir Navbar -->

    <!-- Hero -->
    <section id="hero">
      <div class="container container-md text-center">
        <div class="row justify-content-center">
          <div class="col col-sm-12 judul-hero">
            <h5 class="jd-project">Projects</h5>
            <h1 id="typed-1"></h1>
            <br />
            <p>
              Welcome to the project page.<br />This is a project page that I created while studying undergraduate Informatics at Jenderal Soedirman University.<br />There are several projects that I have not included, because I am
              currently refining these projects.<br />So, let's see...
            </p>
            <br />
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 260">
        <path
          fill="#dbe3ff"
          fill-opacity="1"
          d="M0,224L16,197.3C32,171,64,117,96,106.7C128,96,160,128,192,149.3C224,171,256,181,288,170.7C320,160,352,128,384,138.7C416,149,448,203,480,229.3C512,256,544,256,576,229.3C608,203,640,149,672,133.3C704,117,736,139,768,133.3C800,128,832,96,864,74.7C896,53,928,43,960,64C992,85,1024,139,1056,165.3C1088,192,1120,192,1152,176C1184,160,1216,128,1248,144C1280,160,1312,224,1344,234.7C1376,245,1408,203,1424,181.3L1440,160L1440,320L1424,320C1408,320,1376,320,1344,320C1312,320,1280,320,1248,320C1216,320,1184,320,1152,320C1120,320,1088,320,1056,320C1024,320,992,320,960,320C928,320,896,320,864,320C832,320,800,320,768,320C736,320,704,320,672,320C640,320,608,320,576,320C544,320,512,320,480,320C448,320,416,320,384,320C352,320,320,320,288,320C256,320,224,320,192,320C160,320,128,320,96,320C64,320,32,320,16,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir Hero -->

    <!-- Projects 1 -->
    <section id="projects-1">
      <div class="container container-md text-start">
        <div class="row">
          <div class="col col-sm-12 judul-projects1">
            <h4>Elf Weather</h4>
            <p>
              Elf Weather is my first project in designing an application. In this first project, I did as much as possible<br />because this was the first time I designed an application using Figma. Therefore, I am excited and ready to
              <br />learn more about design.<br />Elf Weather is an engaging and innovative weather app, specifically designed to meet the needs of users<br />who want to stay up to date on the weather conditions around them.
            </p>
          </div>
        </div>
        <div class="row" data-aos="fade-right">
          <div class="col col-sm-12">
            <img class="img-project" src="projects/m1.png" alt="Elf Weather" width="60%" height="430px" />
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 270">
        <path
          fill="#ffffff"
          fill-opacity="1"
          d="M0,224L16,229.3C32,235,64,245,96,229.3C128,213,160,171,192,176C224,181,256,235,288,250.7C320,267,352,245,384,202.7C416,160,448,96,480,106.7C512,117,544,203,576,229.3C608,256,640,224,672,229.3C704,235,736,277,768,256C800,235,832,149,864,138.7C896,128,928,192,960,186.7C992,181,1024,107,1056,106.7C1088,107,1120,181,1152,186.7C1184,192,1216,128,1248,106.7C1280,85,1312,107,1344,106.7C1376,107,1408,85,1424,74.7L1440,64L1440,320L1424,320C1408,320,1376,320,1344,320C1312,320,1280,320,1248,320C1216,320,1184,320,1152,320C1120,320,1088,320,1056,320C1024,320,992,320,960,320C928,320,896,320,864,320C832,320,800,320,768,320C736,320,704,320,672,320C640,320,608,320,576,320C544,320,512,320,480,320C448,320,416,320,384,320C352,320,320,320,288,320C256,320,224,320,192,320C160,320,128,320,96,320C64,320,32,320,16,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir Projects 1 -->

    <!-- Projects 2 -->
    <section id="projects-2">
      <div class="container container-md text-end">
        <div class="row">
          <div class="col col-sm-12 judul-projects2">
            <h4>DemonWard</h4>
            <p>
              Associated with DemonWard. Demon Ward is my project in creating a website and designing it at the same time.<br />I got this project when I took the Web Programming 1 course. In creating this website, I used the HTML,<br />CSS,
              JavaScript and PHP programming languages natively. And for design I use the Figma tool. <br />This website provides in-depth information about the characters, storylines, and<br />worlds related to anime with supernatural
              elements.
            </p>
          </div>
        </div>
        <div class="row" data-aos="fade-left">
          <div class="col col-sm-12">
            <img class="img-project" src="projects/m2.png" alt="DemonWard" width="60%" height="430px" />
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 280">
        <path
          fill="#dbe3ff"
          fill-opacity="1"
          d="M0,128L16,117.3C32,107,64,85,96,69.3C128,53,160,43,192,69.3C224,96,256,160,288,192C320,224,352,224,384,234.7C416,245,448,267,480,266.7C512,267,544,245,576,202.7C608,160,640,96,672,101.3C704,107,736,181,768,192C800,203,832,149,864,149.3C896,149,928,203,960,192C992,181,1024,107,1056,106.7C1088,107,1120,181,1152,218.7C1184,256,1216,256,1248,240C1280,224,1312,192,1344,192C1376,192,1408,224,1424,240L1440,256L1440,320L1424,320C1408,320,1376,320,1344,320C1312,320,1280,320,1248,320C1216,320,1184,320,1152,320C1120,320,1088,320,1056,320C1024,320,992,320,960,320C928,320,896,320,864,320C832,320,800,320,768,320C736,320,704,320,672,320C640,320,608,320,576,320C544,320,512,320,480,320C448,320,416,320,384,320C352,320,320,320,288,320C256,320,224,320,192,320C160,320,128,320,96,320C64,320,32,320,16,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir Projects 2 -->

    <!-- Projects 3 -->
    <section id="projects-3">
      <div class="container container-md text-start">
        <div class="row">
          <div class="col col-sm-12 judul-projects3">
            <h4>JT Law Firm</h4>
            <p>
              JT Law Firm is a project that I got together with one of my friends. At that time I was asked for help to create a design<br />related to the website. I made the design using the Figma tool.<br />JT Law Firm offers innovative
              legal solutions through a legal lawyer application, making it easier for clients to access legal<br />services quickly and efficiently. This application is designed to provide direct access to JT Law Firm's team of<br />experienced
              attorneys, allowing clients to obtain legal consultations, submit questions, and access legal information easily.
            </p>
          </div>
        </div>
        <div class="row" data-aos="fade-right">
          <div class="col col-sm-12">
            <img class="img-project" src="projects/m3.png" alt="JT Law Firm" width="65%" height="430px" />
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 270">
        <path
          fill="#ffffff"
          fill-opacity="1"
          d="M0,256L16,234.7C32,213,64,171,96,170.7C128,171,160,213,192,208C224,203,256,149,288,138.7C320,128,352,160,384,149.3C416,139,448,85,480,69.3C512,53,544,75,576,80C608,85,640,75,672,90.7C704,107,736,149,768,144C800,139,832,85,864,101.3C896,117,928,203,960,229.3C992,256,1024,224,1056,202.7C1088,181,1120,171,1152,170.7C1184,171,1216,181,1248,192C1280,203,1312,213,1344,218.7C1376,224,1408,224,1424,224L1440,224L1440,320L1424,320C1408,320,1376,320,1344,320C1312,320,1280,320,1248,320C1216,320,1184,320,1152,320C1120,320,1088,320,1056,320C1024,320,992,320,960,320C928,320,896,320,864,320C832,320,800,320,768,320C736,320,704,320,672,320C640,320,608,320,576,320C544,320,512,320,480,320C448,320,416,320,384,320C352,320,320,320,288,320C256,320,224,320,192,320C160,320,128,320,96,320C64,320,32,320,16,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir Projects 3 -->

    <!-- Projects 4 -->
    <section id="projects-4">
      <div class="container container-md text-end">
        <div class="row">
          <div class="col col-sm-12 judul-projects4">
            <h4>SoalPedia</h4>
            <p>
              In this SoalPedia project, I worked on it in groups with a team. I got this project when I took the Systems Analysis and<br />Design course. I create websites using various programming languages ​​and of course also design the
              website. <br />SoalPedia is a question bank application that provides rich and varied educational resources to help students prepare for<br />exams and improve their understanding in various subjects.
            </p>
          </div>
        </div>
        <div class="row" data-aos="fade-left">
          <div class="col col-sm-12">
            <img class="img-project" src="projects/m4.png" alt="SoalPedia" width="65%" height="430px" />
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 240">
        <path
          fill="#dbe3ff"
          fill-opacity="1"
          d="M0,96L16,112C32,128,64,160,96,149.3C128,139,160,85,192,90.7C224,96,256,160,288,170.7C320,181,352,139,384,112C416,85,448,75,480,101.3C512,128,544,192,576,202.7C608,213,640,171,672,144C704,117,736,107,768,90.7C800,75,832,53,864,42.7C896,32,928,32,960,64C992,96,1024,160,1056,181.3C1088,203,1120,181,1152,170.7C1184,160,1216,160,1248,154.7C1280,149,1312,139,1344,122.7C1376,107,1408,85,1424,74.7L1440,64L1440,320L1424,320C1408,320,1376,320,1344,320C1312,320,1280,320,1248,320C1216,320,1184,320,1152,320C1120,320,1088,320,1056,320C1024,320,992,320,960,320C928,320,896,320,864,320C832,320,800,320,768,320C736,320,704,320,672,320C640,320,608,320,576,320C544,320,512,320,480,320C448,320,416,320,384,320C352,320,320,320,288,320C256,320,224,320,192,320C160,320,128,320,96,320C64,320,32,320,16,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir Projects 4 -->

    <!-- Footer -->
    <footer style="background-color: #dbe3ff">
      <div class="container">
        <div class="row text-center">
          <div class="col">
            <p>&copy; 2024 <b>Luthfi Emillulfata</b>. All Rights Reserved.</p>
          </div>
        </div>
      </div>
    </footer>
    <!-- Akhir Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

    <!-- TYPED JS -->
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>

    <script>
      var typed = new Typed("#typed-1", {
        strings: ["This is My <span style='color: #0c41ff'>Projects</span> Page"],
        typeSpeed: 50,
        backSpeed: 50,
        loop: true,
      });
    </script>
  </body>
</html>
