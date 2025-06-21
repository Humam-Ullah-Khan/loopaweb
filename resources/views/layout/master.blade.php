<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>LOOPAWEB - Home</title>
  <link rel="icon" href="project-images/favicon.png" type="image/png" style="border-radius: 50%">


  <link rel="stylesheet" href="{{ asset('project-css\styles.css') }}">

  {{-- Bootstrap Css Link  --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">

  {{-- Remix Icon --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css"
    integrity="sha512-XcIsjKMcuVe0Ucj/xgIXQnytNwBttJbNjltBV18IOnru2lDPe9KRRyvCXw6Y5H415vbBLRm8+q6fmLUU7DfO6Q=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

  @yield ('css')
</head>

<body>

  <nav id="default-navbar" class="navbar navbar-expand-lg border-bottom py-4 px-4">
    <div class="container-fluid">
      <!-- Logo -->
      <a class="navbar-brand" href="#">
        <img src="{{ asset('project-images/Logo.png') }}" alt="loopaWeb Logo" width="190px">
      </a>
      <!-- Toggler for mobile -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar"
        aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Navbar links -->
      <div class="collapse navbar-collapse" id="mainNavbar">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link text-secondary fw-semibold" href="#hero-sec"><i class="ri-home-9-fill"></i> Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-secondary fw-semibold" href="#about-us">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-secondary fw-semibold" href="#">Consultations</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-secondary fw-semibold" href="#" id="navbarDropdown"
              role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Web Industries <i class="ri-arrow-down-s-line"></i>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="#">Industry 1</a></li>
              <li><a class="dropdown-item" href="#">Industry 2</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link text-secondary fw-semibold" href="#">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-secondary fw-semibold" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-secondary fw-semibold" href="#">Reviews</a>
          </li>
        </ul>
        <!-- Request Pricing Button -->
        <a href="#" class="btn btn-primary px-4 py-2">Request pricing</a>
      </div>
    </div>
  </nav>

  <div id="scrolled-navbar" class="fixed-top bg-white border-bottom"
    style="display: none; box-shadow: 0 2px 4px rgba(0,0,0,.1);">
    <div class="container-fluid p-0">
      <div class="d-flex justify-content-between align-items-center py-2 px-md-4 px-1">
        <div class="d-flex align-items-center">
          <div class="position-relative d-inline-block">
            <img src="{{ asset('project-images/CEO-profile.webp') }}" class="rounded-circle"
              style="width: 45px; height: 45px; object-fit: cover;">
            <span style="width:15px; height:15px; bottom:1px; right:-2px;"
              class="position-absolute bg-success border border-white rounded-circle"></span>
          </div>
          <div class="ms-2">
            <div class="fw-bold fs-4" style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">Humam Ullah</div>
            <div class="small text-muted my-1" style="font-size: 0.75em; font-family: Verdana, Geneva, Tahoma, sans-serif;">C.E.O @ LoopaWeb Software</div>
            <div class="d-flex align-items-center" style="font-size: 0.75em;">
              <img src="/project-images/saylani.png" alt="saylani-certified" width="15px" class="me-1">
              <span class="fw-semibold">Certified</span>
              <i class="ri-verified-badge-fill mx-1 text-primary"></i>
              <i class="ri-star-fill text-primary me-1 ms-2"></i>
              <span class="fw-bold">5.0</span>
              <span class="text-decoration-underline ms-1">( 4 )</span>
            </div>
          </div>
        </div>
        <div class="d-flex align-items-center gap-2 flex-column py-2">
          <a href="#" class="btn btn-primary me-2 position-relative d-flex align-items-center">
            <i class="ri-checkbox-blank-circle-fill me-2" style="font-size: 7px; color: #31ff9f;"></i> Chat with us
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">2</span>
          </a>
          <a href="#" class="btn btn-primary">
            <i class="ri-vidicon-line"></i> Book a call
          </a>
        </div>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg py-0 bg-white">
      <div class="container-fluid">
        <div class="collapse navbar-collapse">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item"><a class="nav-link text-secondary" href="#hero-sec">Home</a></li>
            <li class="nav-item"><a class="nav-link text-secondary" href="#about-us">About Us</a></li>
            <li class="nav-item"><a class="nav-link text-secondary" href="#">Consultations</a></li>
            <li class="nav-item"><a class="nav-link text-secondary" href="#">App industries</a></li>
            <li class="nav-item"><a class="nav-link text-secondary" href="#">Portfolio</a></li>
            <li class="nav-item"><a class="nav-link text-secondary" href="#">Services</a></li>
            <li class="nav-item"><a class="nav-link text-secondary" href="#">Reviews</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>


  @yield ('content')



  <footer class="footer-section mt-5 pt-5 pb-3 bg-white">
    <div class="container">
      <div class="row gy-5 align-items-start">
        <div class="col-md-3">
          <img src="{{ asset('project-images/Logo.png') }}" alt="loopaweb Logo" width="240" class="mb-3">
          <div class="mb-3">
            <a href="#" class="me-2 fs-3 text-dark text-decoration-none"><i
                class="ri-linkedin-box-fill"></i></a>
            <a href="#" class="me-2 fs-3 text-dark text-decoration-none"><i class="ri-global-line"></i></a>
            <a href="#" class="me-2 fs-3 text-dark text-decoration-none"><i class="ri-instagram-line"></i></a>
            <a href="#" class="me-2 fs-3 text-dark text-decoration-none"><i class="ri-twitter-x-line"></i></a>
            <a href="#" class="me-2 fs-3 text-dark text-decoration-none"><i class="ri-dribbble-line"></i></a>
            <a href="#" class="fs-3 text-dark"><i class="ri-behance-fill"></i></a>
          </div>
          <div class="small text-muted mb-1">Peshawar, Pakistan</div>
          <div class="small text-muted mb-1">+92 342 099 09 48</div>
          <div class="small text-muted">zakariotech@gmail.com</div>
        </div>
        <div class="col-md-3">
          <div class="fw-bold mb-2" style="font-family: Verdana, Geneva, Tahoma, sans-serif;">Services</div>
          <a href="#" class="mb-1 d-block text-dark text-decoration-none">Web Design (UI/UX)</a>
          <a href="#" class="mb-1 d-block text-dark text-decoration-none">Webflow Development</a>
          <a href="#" class="mb-1 d-block text-dark text-decoration-none">Webflow SEO</a>
          <a href="#" class="mb-1 d-block text-dark text-decoration-none">Webflow Migration</a>
          <a href="#" class="mb-1 d-block text-dark text-decoration-none">Webflow Integration</a>
          <a href="#" class="mb-1 d-block text-dark text-decoration-none">Webflow Support</a>
          <a href="#" class="mb-1 d-block text-dark text-decoration-none">Growth Marketing</a>
          <a href="#" class="mb-1 d-block text-dark text-decoration-none">Conversion Rate Optimization (CRO)</a>
          <a href="#" class="mb-1 d-block text-dark text-decoration-none">Branding</a>
        </div>
        <div class="col-md-3">
          <div class="fw-bold mb-2" style="font-family: Verdana, Geneva, Tahoma, sans-serif;">Industry</div>
          <a href="#" class="mb-1 d-block text-dark text-decoration-none">B2B SaaS</a>
          <a href="#" class="mb-1 d-block text-dark text-decoration-none">Artificial Intelligence</a>
          <a href="#" class="mb-1 d-block text-dark text-decoration-none">Web3</a>
          <a href="#" class="mb-1 d-block text-dark text-decoration-none">Information Technology</a>
          <a href="#" class="mb-1 d-block text-dark text-decoration-none">Financial Services</a>
          <a href="#" class="mb-1 d-block text-dark text-decoration-none">Healthcare</a>
          <a href="#" class="mb-1 d-block text-dark text-decoration-none">E-commerce</a>
          <a href="#" class="mb-1 d-block text-dark text-decoration-none">Hospitality</a>
          <a href="#" class="mb-1 d-block text-dark text-decoration-none">Startups</a>
          <a href="#" class="mb-1 d-block text-dark text-decoration-none">Enterprises</a>
        </div>
        <div class="col-md-3">
          <div class="fw-bold mb-2" style="font-family: Verdana, Geneva, Tahoma, sans-serif;">Company</div>
          <a href="#" class="mb-1 d-block text-dark text-decoration-none">Portfolio</a>
          <a href="#" class="mb-1 d-block text-dark text-decoration-none">Pricing</a>
          <a href="#" class="mb-1 d-block text-dark text-decoration-none">Contact</a>
          <a href="#" class="mb-1 d-block text-dark text-decoration-none">Resources</a>
          <a href="#" class="mb-1 d-block text-dark text-decoration-none">Blogs</a>
          <a href="#" class="mb-1 d-block text-dark text-decoration-none">Integration</a>
          <a href="#" class="mb-1 d-block text-dark text-decoration-none">Migrations</a>
          <a href="#" class="mb-1 d-block text-dark text-decoration-none">Careers</a>
        </div>
        <hr class="my-4">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center small text-muted gap-2">
          <div>© 2025 Loopaweb. All Rights Reserved.</div>
          <div>
            <a href="#" class="text-muted text-decoration-none me-3">Privacy Policy</a>
            <a href="#" class="text-muted text-decoration-none me-3">Terms & Conditions</a>
            <a href="#" class="text-muted text-decoration-none">Site Map</a>
          </div>
        </div>
      </div>
  </footer>

  {{-- Bootstrap js --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const defaultNavbar = document.getElementById('default-navbar');
      const scrolledNavbar = document.getElementById('scrolled-navbar');
      const navbarHeight = defaultNavbar.offsetHeight;

      window.addEventListener('scroll', function() {
        if (window.scrollY > navbarHeight) {
          scrolledNavbar.style.display = 'block';
        } else {
          scrolledNavbar.style.display = 'none';
        }
      });
    });
  </script>

  @yield ('scripts')
</body>

</html>
