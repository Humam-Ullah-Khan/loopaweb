@extends ('layout.master')

@section('content')
  <!-- Welcome Modal -->
  <div class="modal fade" id="welcomeModal" tabindex="-1" aria-labelledby="welcomeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content shadow-lg border-0 rounded-4">
        <div class="modal-header border-0 bg-primary text-white rounded-top-4">
          <div class="d-flex align-items-center gap-2">
            <img src="/project-images/favicon.png" alt="LoopaWeb Logo"
              style="width: 40px; height: 40px; border-radius: 50%;">
            <h5 class="modal-title fw-bold" id="welcomeModalLabel">Welcome to LoopaWeb!</h5>
          </div>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-center py-4">
          <img src="/project-images/certified-img.png" alt="Certified" style="width: 220px;" class="mb-3">
          <h4 class="fw-bold mb-2">We're Excited to Have You Here!</h4>
          <p class="text-secondary mb-3">
            Looking for a reliable team to build your next web project?<br>
            <span class="fw-semibold text-primary">Let’s create something amazing together!</span>
          </p>
          <a href="#" id="openTawkChat" class="btn btn-primary px-4 py-2 mb-2"><i
              class="ri-chat-3-line me-2"></i>Chat Now</a>
          <a href="#" class="btn btn-outline-primary px-4 py-2 mb-2 ms-2"><i class="ri-vidicon-line me-2"></i>Book a
            Free Call</a>
        </div>
      </div>
    </div>
  </div>

  {{-- Hero Section --}}
  <div class="home-hero-section container py-5" id="hero-sec">
    <div class="row">
      <!-- Left Side: Text and Buttons -->
      <div class="col-md-6 mb-4 mb-md-0">
        <div class=" mb-2">
          <img src="/project-images/certified-img.png" alt="" width="250px">
          <h4 class="my-3">Meet Humam Ullah, <span style="font-size: 15px">C.E.O Behind</span></h4>
        </div>
        <h2 class="fw-bold mb-3">
          Your <span class="text-primary">Trusted</span> Web App Development Company for Every Industry!
        </h2>
        <div class="d-flex align-items-center py-3">
          <!-- Fiverr Icon -->
          <img src="/project-images/fiverrIcon.svg" alt="Fiverr Badge"
            style="height: 60px; width: 60px; border-radius: 16px; background: #1dbf73;">

          <!-- Right Side Content -->
          <div class="ms-3">
            <span
              style="background: #b8f7ca; color: #00934f; border-radius: 8px; padding: 1px 10px; font-size: 12px; vertical-align: middle;">Best
              Seller</span>
            <div>
              <span style="font-weight: bold; font-size: 1.5rem; color: #222; letter-spacing: -1.5px;">fiverr<i
                  class="ri-checkbox-blank-circle-fill text-success" style="font-size: 7px"></i></span>
              <!-- Stars -->
              <span>
                <i class="ri-star-s-fill" style="color: #f7d100;"></i>
                <i class="ri-star-s-fill" style="color: #f7d100;"></i>
                <i class="ri-star-s-fill" style="color: #f7d100;"></i>
                <i class="ri-star-s-fill" style="color: #f7d100;"></i>
                <i class="ri-star-s-fill" style="color: #f7d100;"></i>
              </span>
            </div>
            <div>
              <a href="https://www.fiverr.com/humam_ullah?public_mode=true"
                style="color: #888; font-size: 1rem; text-decoration: none;">
                (Click to see <span style="font-weight: bold; text-decoration: underline; color: #222;">4
                  Reviews</span>)
              </a>
            </div>
          </div>
        </div>

        <div class="py-3">
          <a href="#" class="btn btn-primary me-2 mb-2 py-2 px-4"> <i class="ri-circle-fill"
              style="color: #1DBF73"></i> Chat with us</a>
          <a href="#" class="btn btn-primary mb-2 py-2 px-4"> <i class="ri-video-on-line"></i> Book a meeting</a>
        </div>
      </div>
      <!-- Right Side: Image -->
      <div class="col-md-6 text-center py-3 px-2">
        <video class="img-fluid rounded shadow" style="max-width: 100%;" autoplay muted loop playsinline>
          <source src="/project-images/intro-video.mp4" type="video/mp4">
          Your browser does not support the video tag.
        </video>
      </div>
    </div>
  </div>

  {{-- About Us  --}}
  <div class="container py-5" id="about-us">
    <div class="text-center mx-auto" style="max-width: 700px;">
      <h2 class="fw-bold">About Us</h2>
      <p class="text-muted">
        LoppaWeb is a web app development company focused on creating powerful and user-friendly web applications. Our
        team is dedicated to designing and building solutions that are responsive, efficient, and tailored to the needs of
        businesses and individuals. We strive to deliver reliable and clear services that help our clients grow and
        succeed in the digital world.
      </p>
    </div>

    <div class="row my-5 align-items-center">
      <div class="col-md-6">
        <div class="row">
          <div class="col-md-4 p-0">
            <div class="position-relative text-center">
              <img src="{{ asset('project-images/CEO-profile-2.png') }}" alt="Humam Ullah" class="img-fluid"
                style="max-width: 200px;">
              <div class="position-absolute" style="top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: -1;">
                <img src="/project-images/saylani.png" alt="saylani" style="width: 250px; opacity: 0.2;">
              </div>
            </div>
          </div>

          <div class="col-md-8">
            <div class="mt-5 ms-md-5">
              <h5 class="fw-bold">Humam Ullah</h5>
              <p class="text-muted mb-1 fw-semibold"><i>C.E.O</i> & Website Developer</p>
              <div class="d-flex align-items-center mb-2">
                <img src="/project-images/saylani.png" alt="Saylani" style="width: 20px; height: 20px;"
                  class="me-2">
                <span class="fw-bold">Saylani</span>
                <span class="ms-1">Certified</span>
              </div>
              <p class="text-muted small">
                Humam Ullah, the CEO of LoopaWeb, leads the company with a focus on new ideas and doing things well.
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="d-flex justify-content-end align-items-center mb-3">
          <a href="#" class="text-primary fw-bold">See all members (5)</a>
        </div>
        <div id="teamCarousel" class="carousel slide">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row g-3">
                <div class="col-md-6">
                  <div class="card border-0">
                    <div class="card-body d-flex align-items-center">
                      <img src="{{ asset('project-images/CEO-profile.jpg') }}" class="rounded-circle me-3"
                        style="width: 60px; height: 60px; object-fit: cover;">
                      <div>
                        <h6 class="fw-bold mb-0">Zaka</h6>
                        <p class="text-muted small mb-0">COO-Founder</p>
                      </div>
                    </div>
                    <div class="card-footer bg-white border-0">
                      <p class="text-muted small">Zaka Ullah, the COO of LoopaWeb, guides the company with a focus on
                        fresh
                        ideas and doing things effectively. His clear vision helps the team work together.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card border-0">
                    <div class="card-body d-flex align-items-center">
                      <img
                        src="{{ url('https://media.licdn.com/dms/image/v2/D4D03AQG0VPtus-DQpA/profile-displayphoto-shrink_100_100/B4DZT66pkRHwAU-/0/1739376466658?e=1755734400&v=beta&t=tTHPX6SJUEc7-RhoVwXePix_m7WFhB0oK3TRooIlDqA') }}"
                        class="rounded-circle me-3" style="width: 60px; height: 60px; object-fit: cover;">
                      <div>
                        <h6 class="fw-bold mb-0">Khabab</h6>
                        <p class="text-muted small mb-0">Sr. App Developer</p>
                      </div>
                    </div>
                    <div class="card-footer bg-white border-0">
                      <p class="text-muted small">Muhammad Khabab, a senior mobile app developer, creates user-friendly
                        mobile
                        applications with a focus on simplicity, functionality, and innovation.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row g-3">
                <div class="col-md-6">
                  <div class="card border-0">
                    <div class="card-body d-flex align-items-center">
                      <img src="{{ asset('project-images/sami.jpg') }}" class="rounded-circle me-3"
                        style="width: 60px; height: 60px; object-fit: cover;">
                      <div>
                        <h6 class="fw-bold mb-0">Sami</h6>
                        <p class="text-muted small mb-0">Sr. Bakend Developer</p>
                      </div>
                    </div>
                    <div class="card-footer bg-white border-0">
                      <p class="text-muted small">Sami ur Rahman, a senior backend developer, builds robust and scalable
                        server-side systems with a focus on performance, security, and seamless integration.</p>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="card border-0">
                    <div class="card-body d-flex align-items-center">
                      <img src="{{ asset('project-images/safi.jpg') }}" class="rounded-circle me-3"
                        style="width: 60px; height: 60px; object-fit: cover;">
                      <div>
                        <h6 class="fw-bold mb-0">Safi</h6>
                        <p class="text-muted small mb-0">Sr. Video Editor</p>
                      </div>
                    </div>
                    <div class="card-footer bg-white border-0">
                      <p class="text-muted small">Safi Ullah, a senior video editor, crafts compelling and
                        audience-driven content with a blend of technical precision and creative storytelling. </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="d-flex justify-content-end gap-2 mt-3">
            <button class="btn btn-primary rounded-circle" type="button" data-bs-target="#teamCarousel"
              data-bs-slide="prev">
              <i class="ri-arrow-left-line"></i>
            </button>
            <button class="btn btn-primary rounded-circle" type="button" data-bs-target="#teamCarousel"
              data-bs-slide="next">
              <i class="ri-arrow-right-line"></i>
            </button>
          </div>
        </div>
      </div>
    </div>

    <hr class="mt-5">
  </div>

  {{-- Web Industries --}}
  <div class="web-industries py-5" id="web-industries">
    <div class="container">
      <div class="col-12 mb-3">
        <h2 class="fw-bold">Web Industries</h2>

        <div class="col-md-6">
          <small>
            <b>LoopaWeb</b> builds websites for every industry. Our experienced team creates powerful and responsive
            websites
            for
            education, healthcare, e-commerce, entertainment, and beyond. Each website is crafted to meet unique goals
            and
            deliver real results. With LookaWeb, every industry gets high-quality, user-friendly web solutions.
          </small>
        </div>
      </div>
      <div class="position-relative">
        <button id="industries-prev"
          class="btn btn-light rounded-circle position-absolute top-50 start-0 translate-middle-y z-2"
          style="left: -30px;" type="button">
          <i class="ri-arrow-left-line"></i>
        </button>
        <div id="industries-carousel" class="d-flex flex-nowrap overflow-auto"
          style="scroll-behavior: smooth; gap: 24px;">
          <div class="industry-card bg-secondary-subtle rounded-2 flex-shrink-0" style="width: 320px;">
            <img src="/project-images/e-commerce.png" class="d-block w-100 rounded-top-2" alt="E-commerce Website">
            <div class="d-flex justify-content-between align-items-center p-2">
              <p class="m-0 fw-semibold">E-commerce Website</p>
              <a class="btn btn-light">Learn more</a>
            </div>
          </div>
          <div class="industry-card bg-secondary-subtle rounded-2 flex-shrink-0" style="width: 320px;">
            <img src="/project-images/Business.png" class="d-block w-100 rounded-top-2" alt="Business Website">
            <div class="d-flex justify-content-between align-items-center p-2">
              <p class="m-0 fw-semibold">Business Website</p>
              <a class="btn btn-light">Learn more</a>
            </div>
          </div>
          <div class="industry-card bg-secondary-subtle rounded-2 flex-shrink-0" style="width: 320px;">
            <img src="/project-images/Real-Estate.png" class="d-block w-100 rounded-top-2" alt="Real-Estate Website">
            <div class="d-flex justify-content-between align-items-center p-2">
              <p class="m-0 fw-semibold">Real-Estate Website</p>
              <a class="btn btn-light">Learn more</a>
            </div>
          </div>
          <div class="industry-card bg-secondary-subtle rounded-2 flex-shrink-0" style="width: 320px;">
            <img src="/project-images/HealthCare.png" class="d-block w-100 rounded-top-2" alt="Health Care Website">
            <div class="d-flex justify-content-between align-items-center p-2">
              <p class="m-0 fw-semibold">Health Care Website</p>
              <a class="btn btn-light">Learn more</a>
            </div>
          </div>
          <div class="industry-card bg-secondary-subtle rounded-2 flex-shrink-0" style="width: 320px;">
            <img src="/project-images/Educational.png" class="d-block w-100 rounded-top-2" alt="Education Website">
            <div class="d-flex justify-content-between align-items-center p-2">
              <p class="m-0 fw-semibold">Education Website</p>
              <a class="btn btn-light">Learn more</a>
            </div>
          </div>
        </div>
        <button id="industries-next"
          class="btn btn-light rounded-circle position-absolute top-50 end-0 translate-middle-y z-2"
          style="right: -30px;" type="button">
          <i class="ri-arrow-right-line"></i>
        </button>
      </div>

      <hr class="mt-5">
    </div>
  </div>

  {{-- portfolio --}}
  <div class="portfolio-section py-5" id="portfolio">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-5 mb-4 mb-lg-0">
          <h2 class="fw-bold">Portfolio</h2>
          <p class="text-secondary mb-3 fw-semibold">
            LoopaWeb has successfully delivered 20+ web and mobile projects for clients in various industries. Our
            clients love us, giving 4+ reviews and a 5-star rating. We help bring your ideas to life with care and
            quality.
          </p>
          <p class="text-secondary mb-4 fw-semibold">
            Book a meeting for a simple chat on how to build your app or website. Our team will show you each step to make
            your idea real.
          </p>
          <!-- Book free consultation button -->
          <a href="#" class="btn btn-primary">
            <i class="ri-video-on-line"></i> Book free consultation
          </a>
        </div>
        <div class="col-lg-7">
          <div class="position-relative">
            <button id="portfolio-prev"
              class="btn btn-light rounded-circle position-absolute top-50 start-0 translate-middle-y z-2"
              style="left: -30px;" type="button">
              <i class="ri-arrow-left-line"></i>
            </button>
            <div id="portfolio-carousel" class="d-flex flex-nowrap overflow-auto gap-3">
              <div class="portfolio-card bg-white rounded-3 flex-shrink-0" style="width: 370px;">
                <img src="/project-images/portfolio-01.png" class="w-100 rounded-2 shadow-sm" alt="UBU App">
                <div class="d-flex justify-content-between p-2">
                  <div>
                    <h6 class="fw-semibold mb-1">Vegetable Store</h6>
                    <p class="mb-2 text-muted">Online Delivery website</p>
                  </div>
                  <a class="btn btn-light align-self-start">Learn more</a>
                </div>
              </div>
              <div class="portfolio-card bg-white rounded-3 flex-shrink-0" style="width: 370px;">
                <img src="/project-images/portfolio-02.png" class="w-100 rounded-2 shadow-sm" alt="HVAC HUB">
                <div class="d-flex justify-content-between p-2">
                  <div>
                    <h6 class="fw-semibold mb-1">Business</h6>
                    <p class="mb-2 text-muted">Business Website</p>
                  </div>
                  <a class="btn btn-light align-self-start">Learn more</a>
                </div>
              </div>
              <div class="portfolio-card bg-white rounded-3 flex-shrink-0" style="width: 370px;">
                <img src="/project-images/portfolio-03.png" class="w-100 rounded-2 shadow-sm" alt="EduPro LMS">
                <div class="d-flex justify-content-between p-2">
                  <div>
                    <h6 class="fw-semibold mb-1">Education ( LMS )</h6>
                    <p class="mb-2 text-muted">LMS Website</p>
                  </div>
                  <a class="btn btn-light align-self-start">Learn more</a>
                </div>
              </div>
              <div class="portfolio-card bg-white rounded-3 flex-shrink-0" style="width: 370px;">
                <img src="/project-images/portfolio-04.jpg" class="w-100 rounded-2 shadow-sm" alt="E-Shop">
                <div class="d-flex justify-content-between p-2">
                  <div>
                    <h6 class="fw-semibold mb-1">E-Shop</h6>
                    <p class="mb-2 text-muted">E-commerce Website</p>
                  </div>
                  <a class="btn btn-light align-self-start">Learn more</a>
                </div>
              </div>
            </div>
            <button id="portfolio-next"
              class="btn btn-light rounded-circle position-absolute top-50 end-0 translate-middle-y z-2"
              style="right: -30px;" type="button">
              <i class="ri-arrow-right-line"></i>
            </button>
          </div>
        </div>
      </div>

      <hr class="mt-5">
    </div>
  </div>

  {{-- services --}}
  <div class="services-section container py-5" id="services">
    <div class="row align-items-stretch">
      <!-- Left Info Block -->
      <div class="col-lg-4 mb-4 mb-lg-0 d-flex flex-column justify-content-center">
        <h2 class="fw-bold mb-3">Services We Provide</h2>
        <p class="text-secondary mb-4" style="max-width: 350px;">
          Discover our range of services to match your project needs. Provide us with your details, and we'll customize a
          proposal just for you.
        </p>
        <button class="btn btn-primary px-4 py-2" style="width: fit-content;">Request Pricing</button>
      </div>
      <!-- Services Carousel -->
      <div class="col-lg-8 position-relative">
        <button id="services-prev"
          class="btn btn-primary rounded-circle position-absolute top-50 start-0 translate-middle-y z-2 d-none"
          style="left: -24px;" type="button">
          <i class="ri-arrow-left-line"></i>
        </button>
        <div id="services-carousel" class="d-flex flex-nowrap overflow-auto gap-4 px-2"
          style="scroll-behavior: smooth;">

          <!-- Service Card 1 -->
          <div class="service-card bg-white border rounded-3 flex-shrink-0 p-4"
            style="width: 280px; min-height: 230px;">
            <div class="mb-3"><img src="/project-images/Website-dev.svg" alt="Website Dev" style="height: 38px;">
            </div>
            <h5 class="fw-bold mb-2">Website Development</h5>
            <ul class="list-unstyled mb-2">
              <li class="d-flex align-items-center mb-2"><i class="ri-checkbox-circle-line text-primary me-2"></i>Custom
                Website</li>
              <li class="d-flex align-items-center mb-2"><i
                  class="ri-checkbox-circle-line text-primary me-2"></i>Wordpress</li>
              <li class="d-flex align-items-center mb-2"><i
                  class="ri-checkbox-circle-line text-primary me-2"></i>Website Maintenance</li>
            </ul>
          </div>

          <!-- Service Card 2 -->
          <div class="service-card bg-white border rounded-3 flex-shrink-0 p-4"
            style="width: 280px; min-height: 230px;">
            <div class="mb-3"><img src="/project-images/Ui-Ux.svg" alt="Mobile App" style="height: 38px;">
            </div>
            <h5 class="fw-bold mb-2">UI/UX Design</h5>
            <ul class="list-unstyled mb-2">
              <li class="d-flex align-items-center mb-2"><i
                  class="ri-checkbox-circle-line text-primary me-2"></i>Website Design</li>
              <li class="d-flex align-items-center mb-2"><i
                  class="ri-checkbox-circle-line text-primary me-2"></i>Landing Page Design</li>
              <li class="d-flex align-items-center mb-2"><i class="ri-checkbox-circle-line text-primary me-2"></i>Ux
                Design</li>
            </ul>
          </div>

          <!-- Service Card 3 -->
          <div class="service-card bg-white border rounded-3 flex-shrink-0 p-4"
            style="width: 280px; min-height: 230px;">
            <div class="mb-3"><img src="/project-images/e-commerce-dev.svg" alt="UI/UX" style="height: 38px;">
            </div>
            <h5 class="fw-bold mb-2">Ecommerce Store</h5>
            <ul class="list-unstyled mb-2">
              <li class="d-flex align-items-center mb-2"><i
                  class="ri-checkbox-circle-line text-primary me-2"></i>Website Development</li>
              <li class="d-flex align-items-center mb-2"><i
                  class="ri-checkbox-circle-line text-primary me-2"></i>Website Design</li>
              <li class="d-flex align-items-center mb-2"><i
                  class="ri-checkbox-circle-line text-primary me-2"></i>Website Maintenance</li>
            </ul>
          </div>

          <!-- Service Card 4 -->
          <div class="service-card bg-white border rounded-3 flex-shrink-0 p-4"
            style="width: 280px; min-height: 230px;">
            <div class="mb-3"><img src="/project-images/software-dev.svg" alt="UI/UX" style="height: 38px;">
            </div>
            <h5 class="fw-bold mb-2">Software Development</h5>
            <ul class="list-unstyled mb-2">
              <li class="d-flex align-items-center mb-2"><i
                  class="ri-checkbox-circle-line text-primary me-2"></i>Software Development</li>
              <li class="d-flex align-items-center mb-2"><i class="ri-checkbox-circle-line text-primary me-2"></i>Web
                App Development</li>
              <li class="d-flex align-items-center mb-2"><i
                  class="ri-checkbox-circle-line text-primary me-2"></i>Databases</li>
            </ul>
          </div>
          <!-- Add more cards as needed -->
        </div>
        <button id="services-next"
          class="btn btn-primary rounded-circle position-absolute top-50 end-0 translate-middle-y z-2"
          style="right: -24px;" type="button">
          <i class="ri-arrow-right-line"></i>
        </button>
      </div>
    </div>
    <hr class="mt-5">
  </div>

  <!-- Fiverr Reviews -->
  <div class="fiverr-reviews-section py-5" id="fiverr-reviews">
    <div class="container">
      <!-- Header: Fiverr Verified and Review Count -->
      <div class="d-flex align-items-center mb-2">
        <span class="badge bg-dark text-white me-2" style="font-size: 0.95rem; letter-spacing: 1px;">FIVERR
          <span style="color: #1DBF73">REVIEWS</span></span>
        <span class="fw-semibold text-muted" style="font-size: 1.1rem;">4 Reviews</span>
      </div>
      <div class="row g-4 align-items-start mb-4">
        <!-- Star Bars -->
        <div class="col-md-6">
          <div class="mb-2">
            <div class="d-flex align-items-center mb-1">
              <span class="fw-semibold me-2">5 Stars</span>
              <div class="flex-grow-1 bg-white rounded-pill me-2" style="height: 8px;">
                <div class="bg-success rounded-pill" style="width: 75%; height: 8px;"></div>
              </div>
              <span class="text-muted small">(3)</span>
            </div>
            <div class="d-flex align-items-center mb-1">
              <span class="fw-semibold me-2">4 Stars</span>
              <div class="flex-grow-1 bg-white rounded-pill me-2" style="height: 8px;">
                <div class="bg-info rounded-pill" style="width: 0%; height: 8px;"></div>
              </div>
              <span class="text-muted small">(0)</span>
            </div>
            <div class="d-flex align-items-center mb-1">
              <span class="fw-semibold me-2">3 Stars</span>
              <div class="flex-grow-1 bg-white rounded-pill me-2" style="height: 8px;">
                <div class="bg-warning rounded-pill" style="width: 25%; height: 8px;"></div>
              </div>
              <span class="text-muted small">(1)</span>
            </div>
            <div class="d-flex align-items-center mb-1">
              <span class="fw-semibold me-2">2 Stars</span>
              <div class="flex-grow-1 bg-white rounded-pill me-2" style="height: 8px;">
                <div class="bg-secondary rounded-pill" style="width: 0%; height: 8px;"></div>
              </div>
              <span class="text-muted small">(0)</span>
            </div>
            <div class="d-flex align-items-center mb-1">
              <span class="fw-semibold me-2">1 Star</span>
              <div class="flex-grow-1 bg-white rounded-pill me-2" style="height: 8px;">
                <div class="bg-secondary rounded-pill" style="width: 0%; height: 8px;"></div>
              </div>
              <span class="text-muted small">(0)</span>
            </div>
          </div>
          <div class="text-muted small">1-4 out of 4 Reviews</div>
        </div>
        <!-- Rating Breakdown -->
        <div class="col-md-6">
          <div class="fw-bold mb-2">Rating Breakdown</div>
          <div class="d-flex flex-column gap-1">
            <div class="d-flex align-items-center justify-content-between">
              <span class="text-muted">Seller communication level</span>
              <span class="text-primary ms-2"><i class="ri-star-s-fill"></i> 4.5</span>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <span class="text-muted">Quality of delivery</span>
              <span class="text-primary ms-2"><i class="ri-star-s-fill"></i> 4.5</span>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <span class="text-muted">Value of delivery</span>
              <span class="text-primary ms-2"><i class="ri-star-s-fill"></i> 4.3</span>
            </div>
          </div>
        </div>
      </div>
      <!-- Reviews List -->
      <div class="d-flex flex-column gap-4">
        <!-- Review 1 -->
        <div class="border rounded-3 p-4">
          <div class="d-flex align-items-center mb-1">
            <span class="fw-bold me-2">imran_dev999</span>
            <span class="badge bg-light text-dark border me-2"><i class="ri-repeat-line me-1"></i>Repeat Client</span>
            <span class="badge bg-secondary me-2">Pakistan</span>
          </div>
          <div class="d-flex align-items-center mb-2">
            <span class="text-warning me-2">
              <i class="ri-star-s-fill"></i>
              <i class="ri-star-s-fill"></i>
              <i class="ri-star-s-fill"></i>
              <i class="ri-star-s-fill"></i>
              <i class="ri-star-s-fill"></i>
            </span>
            <span class="text-muted small">1 month ago</span>
          </div>
          <div class="mb-2">Humam Ullah excelled in software development with PROFESSIONALISM that truly stood out.
            Working with him was a pleasure; his DEEP UNDERSTANDING, stellar responsiveness, and cooperative spirit made
            the process seamless. Highly recommended!</div>
          <div class="text-muted small">Helpful? <a href="#" class="text-decoration-none">Yes</a> <a
              href="#" class="text-decoration-none ms-2">No</a></div>
        </div>
        <!-- Review 2 -->
        <div class="rounded-3 border p-4">
          <div class="d-flex align-items-center mb-1">
            <span class="fw-bold me-2">imran_dev999</span>
            <span class="badge bg-light text-dark border me-2"><i class="ri-repeat-line me-1"></i>Repeat Client</span>
            <span class="badge bg-secondary me-2">Pakistan</span>
          </div>
          <div class="d-flex align-items-center mb-2">
            <span class="text-warning me-2">
              <i class="ri-star-s-fill"></i>
              <i class="ri-star-s-fill"></i>
              <i class="ri-star-s-fill"></i>
              <i class="ri-star-s-fill"></i>
              <i class="ri-star-s-fill"></i>
            </span>
            <span class="text-muted small">1 month ago</span>
          </div>
          <div class="mb-2">It was very good experience work with him. He is professional and creative in logo design.
            Highly recommended for website designing.</div>
          <div class="text-muted small">Helpful? <a href="#" class="text-decoration-none">Yes</a> <a
              href="#" class="text-decoration-none ms-2">No</a></div>
        </div>
        <!-- Review 3 -->
        <div class="rounded-3 border p-4">
          <div class="d-flex align-items-center mb-1">
            <span class="fw-bold me-2">imran_dev999</span>
            <span class="badge bg-light text-dark border me-2"><i class="ri-repeat-line me-1"></i>Repeat Client</span>
            <span class="badge bg-secondary me-2">Pakistan</span>
          </div>
          <div class="d-flex align-items-center mb-2">
            <span class="text-warning me-2">
              <i class="ri-star-s-fill"></i>
              <i class="ri-star-s-fill"></i>
              <i class="ri-star-s-fill"></i>
              <i class="ri-star-s-line"></i>
              <i class="ri-star-s-line"></i>
            </span>
            <span class="text-muted small">5 days ago</span>
          </div>
          <div class="mb-2">This project just went well but too much time and multiple delivery will cost further more.
          </div>
          <div class="text-muted small">Helpful? <a href="#" class="text-decoration-none">Yes</a> <a
              href="#" class="text-decoration-none ms-2">No</a></div>
        </div>
        <!-- Review 4 -->
        <div class="rounded-3 border p-4">
          <div class="d-flex align-items-center mb-1">
            <span class="fw-bold me-2">gizm0dder</span>
            <span class="badge bg-secondary me-2">Mauritius</span>
          </div>
          <div class="d-flex align-items-center mb-2">
            <span class="text-warning me-2">
              <i class="ri-star-s-fill"></i>
              <i class="ri-star-s-fill"></i>
              <i class="ri-star-s-fill"></i>
              <i class="ri-star-s-fill"></i>
              <i class="ri-star-s-fill"></i>
            </span>
            <span class="text-muted small">3 months ago</span>
          </div>
          <div class="mb-2">First time working with dev and it was a very good experience. Developer provided quality
            work. It was front work, and he made sure the design is working properly, is responsive and without any bulky
            code. We required the code to be tailwind and alpine js only, and it was indeed quality work. Thanks for that.
          </div>
          <div class="text-muted small">Helpful? <a href="#" class="text-decoration-none">Yes</a> <a
              href="#" class="text-decoration-none ms-2">No</a></div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('scripts')
  {{-- Welocome Message Modal --}}
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      setTimeout(function() {
        var welcomeModal = new bootstrap.Modal(document.getElementById('welcomeModal'));
        welcomeModal.show();
      }, 2000); // 25 seconds
    });
  </script>

  {{-- Clicking on the chat now button in Modal --}}
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var chatBtn = document.getElementById('openTawkChat');
      if (chatBtn) {
        chatBtn.addEventListener('click', function(e) {
          e.preventDefault();
          if (typeof Tawk_API !== 'undefined' && Tawk_API.maximize) {
            Tawk_API.maximize();
          }
        });
      }
    });
  </script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const carousel = document.getElementById('industries-carousel');
      const prevBtn = document.getElementById('industries-prev');
      const nextBtn = document.getElementById('industries-next');
      const cardWidth = 340; // width + gap
      prevBtn.addEventListener('click', () => {
        carousel.scrollBy({
          left: -cardWidth,
          behavior: 'smooth'
        });
      });
      nextBtn.addEventListener('click', () => {
        carousel.scrollBy({
          left: cardWidth,
          behavior: 'smooth'
        });
      });
    });
  </script>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      // ...existing industries carousel code...
      const portfolioCarousel = document.getElementById('portfolio-carousel');
      const portfolioPrev = document.getElementById('portfolio-prev');
      const portfolioNext = document.getElementById('portfolio-next');
      const portfolioCardWidth = 394; // width + gap
      const totalPortfolioCards = portfolioCarousel.children.length;

      function scrollPortfolioNext() {
        if (portfolioCarousel.scrollLeft >= portfolioCardWidth * (totalPortfolioCards - 1) - 10) {
          portfolioCarousel.scrollTo({
            left: 0,
            behavior: 'smooth'
          });
        } else {
          portfolioCarousel.scrollBy({
            left: portfolioCardWidth,
            behavior: 'smooth'
          });
        }
      }

      function scrollPortfolioPrev() {
        if (portfolioCarousel.scrollLeft <= 0) {
          portfolioCarousel.scrollTo({
            left: portfolioCardWidth * (totalPortfolioCards - 1),
            behavior: 'smooth'
          });
        } else {
          portfolioCarousel.scrollBy({
            left: -portfolioCardWidth,
            behavior: 'smooth'
          });
        }
      }
      portfolioPrev.addEventListener('click', scrollPortfolioPrev);
      portfolioNext.addEventListener('click', scrollPortfolioNext);
    });
  </script>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const carousel = document.getElementById('services-carousel');
      const prevBtn = document.getElementById('services-prev');
      const nextBtn = document.getElementById('services-next');
      const cardWidth = 340; // width + gap
      function updateButtons() {
        prevBtn.classList.toggle('d-none', carousel.scrollLeft <= 10);
        nextBtn.classList.toggle('d-none', carousel.scrollLeft + carousel.offsetWidth >= carousel.scrollWidth - 10);
      }
      prevBtn.addEventListener('click', () => {
        carousel.scrollBy({
          left: -cardWidth,
          behavior: 'smooth'
        });
        setTimeout(updateButtons, 400);
      });
      nextBtn.addEventListener('click', () => {
        carousel.scrollBy({
          left: cardWidth,
          behavior: 'smooth'
        });
        setTimeout(updateButtons, 400);
      });
      carousel.addEventListener('scroll', updateButtons);
      updateButtons();
    });
  </script>
@endsection
