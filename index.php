<?php
  include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <!-- Bootstrap ICONS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200&display=swap" rel="stylesheet" />

    <link rel="stylesheet" href="index.css" />
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
              <a class="nav-link active" aria-current="page" href="#jumbotron">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#projects">Projects</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#certif">Certificate</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#contact">Contact</a>
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
    <section id="jumbotron">
      <div class="container container-md text-center">
        <div class="row justify-content-center">
          <div class="col-12 col-sm-7 text-start judul-jumbotron">
            <h5 class="jd-home">Welcome</h5>
            <h1 id="typed-1"></h1>
            <br />
            <p>
              I'm from Indonesia. I am currently an undergraduate student in Informatics,<br />Faculty of Engineering, Jenderal Soedirman University. To fill my free time, I work as a freelancer for UI and UX designers. Apart from that, I
              also create websites using the HTML, CSS, JavaScript, and PHP programming languages. As well as, using the bootstrap framework and tailwind css.
            </p>
          </div>
          <div class="col-12 col-sm-4 img-jumbotron">
            <img class="rounded-circle" src="img/luthfi.jpg" alt="luthfi" width="300" />
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 190">
        <path
          fill="#dbe3ff"
          fill-opacity="1"
          d="M0,64L40,85.3C80,107,160,149,240,165.3C320,181,400,171,480,149.3C560,128,640,96,720,85.3C800,75,880,85,960,112C1040,139,1120,181,1200,181.3C1280,181,1360,139,1400,117.3L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir Hero -->

    <!-- About -->
    <section id="about">
      <div class="container container-md">
        <div class="row justify-content-center text-center">
          <div class="col judul-about">
            <h5 class="jd-about">About</h5>
            <h1><span style="color: #0c41ff">About me?</span><br />Let's get to know each other in more depth</h1>
          </div>
        </div>
        <br />

        <div class="row">
          <div class="col-sm-6 text-center">
            <p>
              Let me introduce myself, my name is Luthfi Emillulfata, I am currently 19 years old. I am an undergraduate student majoring in Informatics. I am interested in the field of technology because I think this field will provide
              benefits for other people, companies, and of course for myself.
            </p>
          </div>
          <div class="col-sm-6 text-center">
            <p>
              I come from Purwokerto. Before pursuing undergraduate education, I graduated from SMA Negeri 4 Purwokerto. During my education, I have participated in various organizations, from elementary school, middle school, high school,
              to college. These organizations include, Penggalang Scouts, Paskibra, and Rohis. As well as taking part in various activities, such as joining a leadership school, BEM internship, volunteering, and many more. Apart from that,
              I was also an Informatics laboratory assistant during semester 3.
            </p>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 240">
        <path
          fill="#ffffff"
          fill-opacity="1"
          d="M0,224L40,197.3C80,171,160,117,240,112C320,107,400,149,480,165.3C560,181,640,171,720,154.7C800,139,880,117,960,144C1040,171,1120,245,1200,240C1280,235,1360,149,1400,106.7L1440,64L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir About -->

    <!-- Projects -->
    <section id="projects">
      <div class="container container-md">
        <div class="row">
          <div class="col-12 col-sm-4 judul-projects" style="margin-right: auto">
            <h5 class="jd-projects">Projects</h5>
            <h1>My Creative Works Latest <span style="color: #0c41ff">Projects</span></h1>
            <br />
            <p>I have selected and mentioned here some of my latest projects to share with you.</p>
            <br />
            <p><a class="show-more" href="projects.php">Show More</a></p>
            <br />
          </div>

          <div class="col-12 col-sm-2 text-center" style="cursor: pointer; height: fit-content; width: max-content; margin-right: 30px">
            <img class="gambar" src="projects/1.png" alt="JT Law Firm" width="140" height="250" />
          </div>
          <div class="col-12 col-sm-2 text-center" style="cursor: pointer; height: fit-content; width: max-content; margin-right: 30px">
            <img class="gambar" src="projects/2.png" alt="Demon Ward" width="140" height="250" />
          </div>
          <div class="col-12 col-sm-3 text-center" style="cursor: pointer; height: fit-content; width: max-content">
            <img class="gambar" src="projects/3.png" alt="SoalPedia" width="270" height="150" />
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 150">
        <path
          fill="#dbe3ff"
          fill-opacity="1"
          d="M0,96L40,106.7C80,117,160,139,240,133.3C320,128,400,96,480,90.7C560,85,640,107,720,106.7C800,107,880,85,960,90.7C1040,96,1120,128,1200,128C1280,128,1360,96,1400,80L1440,64L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir Projects -->

    <!-- Certificate -->
    <section id="certif">
      <div class="container container-md text-end">
        <div class="row baris-certif">
          <div class="col-12 col-sm-2 text-center" style="cursor: pointer; height: fit-content; width: max-content; margin-right: 20px">
            <img class="img-certif" src="certificate/sertifikat lomba/2.png" alt="" width="200" />
          </div>
          <div class="col-12 col-sm-2 text-center" style="cursor: pointer; height: fit-content; width: max-content; margin-right: 20px">
            <img class="img-certif" src="certificate/sertifikat seminar/2.jpg" alt="Demon Ward" width="200" />
          </div>
          <div class="col-12 col-sm-2 text-center" style="cursor: pointer; height: fit-content; width: max-content">
            <img class="img-certif" src="certificate/sertifikat kepanitiaan/3.png" alt="" width="200" />
          </div>
          <br />

          <div class="col-12 col-sm-4 judul-certif">
            <h5 class="jd-certificate">Certificate</h5>
            <h1>The <span style="color: #0c41ff">Certificate</span> that I Got</h1>
            <br />
            <p>Apart from working on projects, I also received various certificates</p>
            <br />
            <p><a class="certificate" href="certificate.php">View Certificate</a></p>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 240">
        <path
          fill="#ffffff"
          fill-opacity="1"
          d="M0,192L34.3,202.7C68.6,213,137,235,206,224C274.3,213,343,171,411,154.7C480,139,549,149,617,160C685.7,171,754,181,823,165.3C891.4,149,960,107,1029,112C1097.1,117,1166,171,1234,170.7C1302.9,171,1371,117,1406,90.7L1440,64L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir Certificate -->

    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row text-center">
          <div class="col">
            <h5 class="jd-contact">Contact</h5>
            <h1>Let's <span style="color: #0c41ff">Discuss</span></h1>
            <br />
            <p>Let's make something new, different and more meaningful<br />or make thing more visual or conceptual</p>
          </div>
        </div>
        <br />

        <div class="row justify-content-center">
          <div class="col-12 col-sm-6 judul-certif">
            <form method="post">
              <?php
                  if (isset($_POST['submit'])) {
                    $nama = $_POST['nama'];
                    $email = $_POST['email'];
                    $pesan = $_POST['pesan'];

                    $sql = "INSERT INTO kontak(nama, email, pesan) VALUES ('$nama', '$email', '$pesan')";
                    $query = mysqli_query($conn, $sql);

                    if ($query) {
                      echo "<script>alert('Message sent successfully!'); window.location='index.php';</script>";
                    } else {
                      echo "<script>alert('Message failed to send');</script>";
                    }
                  }
              ?>

              <div class="mb-3">
                <label for="nama" class="form-label">Name</label>
                <input type="text" class="form-control border-primary" id="nama" name="nama" aria-describedby="nameHelp" />
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control border-primary" id="email" name="email" />
              </div>
              <div class="mb-3">
                <label for="pesan" class="form-label">Message</label>
                <textarea class="form-control border-primary" placeholder="Enter your message" id="pesan" name="pesan"></textarea>
              </div>
              <button type="submit" class="submit" name="submit">Submit</button>
            </form>
            <br />
          </div>

          <div class="col-12 col-sm-5 isi-kontak">
            <p>If you are confused, you can look through the map.</p>
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d6653.984396225746!2d109.27305332971491!3d-7.411695670720327!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1704167244179!5m2!1sid!2sid"
              width="350"
              height="200"
              style="border: 0"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe
            ><br /><br />
            <i class="bi bi-geo-alt-fill"></i> Purwokerto, Jawa Tengah, Indonesia <br />
            <i class="bi bi-telephone-fill"></i> 000111222333 <br />
            <i class="bi bi-envelope-fill"></i> somebody@gmail.com
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 240">
        <path
          fill="#dbe3ff"
          fill-opacity="1"
          d="M0,64L34.3,74.7C68.6,85,137,107,206,122.7C274.3,139,343,149,411,138.7C480,128,549,96,617,106.7C685.7,117,754,171,823,192C891.4,213,960,203,1029,186.7C1097.1,171,1166,149,1234,133.3C1302.9,117,1371,107,1406,101.3L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- Akhir Contact -->

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

    <!-- TYPED JS -->
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>

    <script>
      var typed = new Typed("#typed-1", {
        strings: ["Hello, I am <span style='color: #0c41ff'>Luthfi</span>,<br />Undergraduate Student<br />in Informatics", "Hello, I am <span style='color: #0c41ff'>Luthfi</span>,<br />Undergraduate Student<br />in Informatics"],
        typeSpeed: 50,
        backSpeed: 50,
        loop: true,
      });
    </script>
  </body>
</html>
