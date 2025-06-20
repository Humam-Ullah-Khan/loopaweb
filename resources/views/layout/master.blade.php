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

  <div class="container px-md-5 px-3 py-3 sticky-top">
    <nav class="navbar navbar-expand-lg rounded-3">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="{{ asset('project-images/Logo-Darkmode.png') }}" alt="" width="190px">
        </a>

        <button class="btn btn-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
          aria-controls="offcanvasRight"><i class="ri-menu-2-line"></i></button>

      </div>
    </nav>
  </div>

  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header">
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <a href="#">Services</a>
      <a href="#">Portfolio</a>
      <a href="#">Projects</a>
      <a href="#">Contact us</a>

      {{-- <a href="#" class="btn btn-warning fw-bold">Book a Call</a> --}}
      <div class="btn-conteiner">
        <a class="btn-content" href="#">
          <span class="btn-title">Book a Call</span>
          <span class="icon-arrow">
            <svg width="66px" height="43px" viewBox="0 0 66 43" version="1.1" xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink">
              <g id="arrow" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <path id="arrow-icon-one"
                  d="M40.1543933,3.89485454 L43.9763149,0.139296592 C44.1708311,-0.0518420739 44.4826329,-0.0518571125 44.6771675,0.139262789 L65.6916134,20.7848311 C66.0855801,21.1718824 66.0911863,21.8050225 65.704135,22.1989893 C65.7000188,22.2031791 65.6958657,22.2073326 65.6916762,22.2114492 L44.677098,42.8607841 C44.4825957,43.0519059 44.1708242,43.0519358 43.9762853,42.8608513 L40.1545186,39.1069479 C39.9575152,38.9134427 39.9546793,38.5968729 40.1481845,38.3998695 C40.1502893,38.3977268 40.1524132,38.395603 40.1545562,38.3934985 L56.9937789,21.8567812 C57.1908028,21.6632968 57.193672,21.3467273 57.0001876,21.1497035 C56.9980647,21.1475418 56.9959223,21.1453995 56.9937605,21.1432767 L40.1545208,4.60825197 C39.9574869,4.41477773 39.9546013,4.09820839 40.1480756,3.90117456 C40.1501626,3.89904911 40.1522686,3.89694235 40.1543933,3.89485454 Z"
                  fill="#FFFFFF"></path>
                <path id="arrow-icon-two"
                  d="M20.1543933,3.89485454 L23.9763149,0.139296592 C24.1708311,-0.0518420739 24.4826329,-0.0518571125 24.6771675,0.139262789 L45.6916134,20.7848311 C46.0855801,21.1718824 46.0911863,21.8050225 45.704135,22.1989893 C45.7000188,22.2031791 45.6958657,22.2073326 45.6916762,22.2114492 L24.677098,42.8607841 C24.4825957,43.0519059 24.1708242,43.0519358 23.9762853,42.8608513 L20.1545186,39.1069479 C19.9575152,38.9134427 19.9546793,38.5968729 20.1481845,38.3998695 C20.1502893,38.3977268 20.1524132,38.395603 20.1545562,38.3934985 L36.9937789,21.8567812 C37.1908028,21.6632968 37.193672,21.3467273 37.0001876,21.1497035 C36.9980647,21.1475418 36.9959223,21.1453995 36.9937605,21.1432767 L20.1545208,4.60825197 C19.9574869,4.41477773 19.9546013,4.09820839 20.1480756,3.90117456 C20.1501626,3.89904911 20.1522686,3.89694235 20.1543933,3.89485454 Z"
                  fill="#FFFFFF"></path>
                <path id="arrow-icon-three"
                  d="M0.154393339,3.89485454 L3.97631488,0.139296592 C4.17083111,-0.0518420739 4.48263286,-0.0518571125 4.67716753,0.139262789 L25.6916134,20.7848311 C26.0855801,21.1718824 26.0911863,21.8050225 25.704135,22.1989893 C25.7000188,22.2031791 25.6958657,22.2073326 25.6916762,22.2114492 L4.67709797,42.8607841 C4.48259567,43.0519059 4.17082418,43.0519358 3.97628526,42.8608513 L0.154518591,39.1069479 C-0.0424848215,38.9134427 -0.0453206733,38.5968729 0.148184538,38.3998695 C0.150289256,38.3977268 0.152413239,38.395603 0.154556228,38.3934985 L16.9937789,21.8567812 C17.1908028,21.6632968 17.193672,21.3467273 17.0001876,21.1497035 C16.9980647,21.1475418 16.9959223,21.1453995 16.9937605,21.1432767 L0.15452076,4.60825197 C-0.0425130651,4.41477773 -0.0453986756,4.09820839 0.148075568,3.90117456 C0.150162624,3.89904911 0.152268631,3.89694235 0.154393339,3.89485454 Z"
                  fill="#FFFFFF"></path>
              </g>
            </svg>
          </span>
        </a>
      </div>
    </div>
  </div>
  @yield ('content')

  <footer class="footer-section mt-5 pt-5 pb-3 bg-white">
    <div class="container">
      <div class="row gy-5 align-items-start">
        <div class="col-md-3">
          <img src="{{ asset('project-images/Logo-lightmode.png') }}" alt="loopaweb Logo" width="160" class="mb-3">
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
