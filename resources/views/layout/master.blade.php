<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>LOOPAWEB - Home</title>

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

  <nav class="navbar sticky-top navbar-expand-lg border-bottom py-4 px-4">
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
            <a class="nav-link text-secondary fw-semibold" href="#"><i class="bi bi-house-door"></i> Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-secondary fw-semibold" href="#">About Us</a>
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
        <a href="#" class="btn btn-primary fw-semibold px-4">Request pricing</a>
      </div>
    </div>
  </nav>

  @yield ('content')



  <footer class="footer-section mt-5 pt-5 pb-3 bg-white">
    <div class="container">
      <div class="row gy-5 align-items-start">
        <div class="col-md-3">
          <img src="{{ asset('project-images/Logo.png') }}" alt="loopaweb Logo" width="240" class="mb-3">
          <div class="mb-3">
            <a href="#" class="me-2 fs-3 text-dark text-decoration-none"><i class="ri-linkedin-box-fill"></i></a>
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


  @yield ('scripts')
</body>

</html>
