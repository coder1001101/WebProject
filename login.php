<!doctype html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="msapplication-tap-highlight" content="no" />
    <meta name="description" content="Touch enabled jQuery plugin that lets you create beautiful responsive carousel slider.">
    <meta name="author" content="Coder1001101">
    <!-- Bootstrap5.0 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
    crossorigin="anonymous">
    <link href="css/style.css">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css"
    integrity="undefined" crossorigin="anonymous">
    <title>Login/Sinup form!</title>
    <style>
      *{ margin: 0; padding: 0; box-sizing: border-box; }
			 .row{background-color:green; }
      #socel{ display:flex;justify-content:flex-end;}
      header{width:100%; min-height:100vh;}
      nav{background-color: transparent;}
      #header-text{height:100%;  }
      main{background-color: #2f2f2f;}
      section{min-height:100vh; color:#eee; }
      #copyR{text-align:center; color:#eee;}
    </style>
  </head>

  <body>
    <!-- header + nav + img tage -->
    <header>
      <div class="container-fluid">
        <div class="row">
          <div class="col " id="socel">
            <a href="https://www.twitter.com/"> <i class="fa fa-twitter"></i>twitter </a>
            <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i>facebook </a>
            <a href="https://www.instagram.com/"><i class="fa fa-instagram"></i>Instagram <a/>
          </div>
        </div>
        <!-- Nav Styleing -->
        <div class="row">
          <div class="col">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <div class="container-fluid">
                <a class="navbar-brand" href="#">Coder1001101</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item"> <a class="nav-link active" aria-current="page" href="#">Home </a>
                </li>
                <li class="nav-item"> <a class="nav-link" href="#">Link </a>
                </li>
                <li class="nav-item"> <a class="nav-link" href="#">Link </a>
                </li>
                <li class="nav-item"> <a class="nav-link" href="#">Link </a>
                </li>
                <li class="nav-item"> <a class="nav-link" href="#">Link </a>
                </li>

                <li class="nav-item"> <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled </a>
                </li>
                <li class="nav-item dropdown"> <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                  role="button" data-bs-toggle="dropdown" aria-expanded="false"> More </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Action </a>
                    </li>
                    <li><a class="dropdown-item" href="#">Another action </a>
                    </li>
                    <li>
                      <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Something else here </a>
                    </li>
                  </ul>
                </li>
              </ul>
              <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search </button>
              </form>
            </div>
          </div>
          </nav>
        </div>
      </div>
      <!-- text img sliding and button styleing -->
      <div class="row" id="header-text">
        <div class="col">
          <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
              class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
              aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
              aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/pexels-1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>First slide label </h5>
                  <p>Some representative placeholder content for the first slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="images/pexels-2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Second slide label </h5>
                  <p>Some representative placeholder content for the second slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="images/pexels-3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Third slide label </h5>
                  <p>Some representative placeholder content for the third slide.</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous </span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next </span>
            </button>
          </div>


        </div>
      </div>
      </div>
    </header>
    <!-- Sidebar Styleing -->
    <div id="sidebar" class="bg-light">
      <aside>

      </aside>
    </div>
    <!-- main content -->
    <main id="main">
      <div class="container">
        <div class="row">
          <div class="col bg-dark p-3">
            <section class="mt-2 p-2">
              <form>
                <label>User Name </label>
                <input type="text"></input>
                <br />
                <label>Password </label>
                <input type="password"></input>
                <br />
                <input type="button" value="Login">
                <button class="btn">Singup </button>

              </form>
            </section>
          </div>
          <div class="col bg-dark p-3">
            <section class="mt-2 p-2">
              <form>
                <label>User Name </label>
                <input type="text"></input>
                <br />
                <label>Password </label>
                <input type="password"></input>
                <br />
                <label>Conferm Password </label>
                <input type="password"></input>
                <br />
                <label>Email ID </label>
                <input type="email"></input>
                <br />
                <input type="button" value="Login">
                <button class="btn">Singup </button>

              </form>
            </section>
          </div>
        </div>
        <!-- End row -->
      </div>
    </main>
    <!-- footer styleing -->
    <footer class="footer bg-light">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg">
            <h6>text </h6>
          </div>
          <div class="col-lg">
            <h6> text2 </h6>
          </div>
        </div>
        <div class="row">
          <div class="col bg-dark">
            <h6 id="copyR">Copyright ?? 2021 Coder1001101. All Rights Reserved

              <a href="#">Privacy Policy </a>|<a href="#">Terms of Service </a>
            </h6>
          </div>
        </div>
      </div>
    </footer>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
    crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
    integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT"
    crossorigin="anonymous"></script>
    <script??src="https://use.fontawesome.com/5acf10bbfb.js"></script>
      <script src="js/jquery.min.js"></script>
      <script>
        $(document).ready(function()
        {
          alert("jquery is conected") // testing parpus
          $("#id").on("click", function(e)
          {
            $.ajax(
            {
              url: "ajax-load.php",
              type: "POST",
              success: function(data)
              {
                $("#table-data").html(data);


              }
            });
          });
        });
      </script>
  </body>

</html>


<!--
Visual Code Mobile
Developed By Manish Nirmal
App Available on Play Store :-
https://play.google.com/store/apps/details?id=lk.visual.code.mobile
YouTube :-
https://youtube.com/ManishNirmal
-->