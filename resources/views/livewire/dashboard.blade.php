<div>
    <!doctype html>
    <html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    
        <!-- Bootstrap CSS v5.2.1 -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    
        <link rel="stylesheet" href={{ asset("assets/css/dashboard.css") }}>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap" rel="stylesheet">
    </head>
    <body>
    
    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top mask-custom shadow-0">
            <div class="container">
                <a class="navbar-brand" href="#section1"><span style="color: #5e9693;">Psycho</span><span style="color: #fff;">logist</span></a>
                <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                        data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#section1">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#section2">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#section3">CV</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#section4">Contact</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav d-flex flex-row">
                        <li class="nav-item me-3 me-lg-0">
                            <a class="nav-link" href="#!">
                                <i class="fas fa-shopping-cart"></i>
                            </a>
                        </li>
                        <li class="nav-item me-3 me-lg-0">
                            <a class="nav-link" href="#!">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="nav-item me-3 me-lg-0">
                            <a class="nav-link" href="#!">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    
    <main>
        <section id="section1">
            <h2>Section 1</h2>
            <p>Content for section 1...</p>
        </section>
        <section id="section2">
            <h2>Section 2</h2>
            <p>Content for section 2...</p>
        </section>
        <section id="section3">
            <h2>Section 3</h2>
            <p>Content for section 3...</p>
        </section>
        <section id="section4">
            <h2>Section 3</h2>
            <p>Content for section 4...</p>
        </section>
    </main>
    
    <footer>
       <!-- Footer -->
<footer class="bg-light text-center ">
    <!-- Grid container -->
    <div class="container p-4">
      <!-- Section: Text -->
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt
          distinctio earum repellat quaerat voluptatibus placeat nam,
          commodi optio pariatur est quia magnam eum harum corrupti dicta,
          aliquam sequi voluptate quas.
        </p>

      <!-- : Text -->
  
  
      <!-- : Links -->
        <!--Grid row-->

        <div class="row">
            <div class="col">
                <h5 class="text-uppercase">Asep Rudiana</h5>
  
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#!" class="text-dark">Instagram</a>
                  </li>
                  <li>
                    <a href="#!" class="text-dark">Linkedln</a>
                  </li>
                  <li>
                    <a href="#!" class="text-dark">Facebook</a>
                  </li>
                  <li>
                    <a href="" class="text-dark">Email</a>
                  </li>
                </ul>
            </div>
            <div class="col">
                <h5 class="text-uppercase">Fina Lupita Azhar</h5>
  
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#!" class="text-dark">Instagram</a>
                  </li>
                  <li>
                    <a href="#!" class="text-dark">Linkedln</a>
                  </li>
                  <li>
                    <a href="#!" class="text-dark">Facebook</a>
                  </li>
                  <li>
                    <a href="#!" class="text-dark">Email</a>
                  </li>
                </ul>
            </div>
          </div>
        <!--Grid row-->
    </div>
    <!-- Grid container -->
  
  </footer>
  <!-- Footer -->
    </footer>
    
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const sections = document.querySelectorAll("section");
            const navLinks = document.querySelectorAll(".nav-link");
    
            window.addEventListener("scroll", () => {
                let current = "";
                sections.forEach(section => {
                    const sectionTop = section.offsetTop;
                    if (scrollY >= sectionTop - 60) {
                        current = section.getAttribute("id");
                    }
                });
    
                navLinks.forEach(link => {
                    link.classList.remove("active");
                    if (link.getAttribute("href").includes(current)) {
                        link.classList.add("active");
                    }
                });
            });
        });
    </script>
    </body>
    </html>
    
</div>