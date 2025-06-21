@extends ('layout.master')

@section('content')
  <div class="home-hero-section container py-5" id="hero-sec">
    <div class="row">
      <!-- Left Side: Text and Buttons -->
      <div class="col-md-6 mb-4 mb-md-0">
        <div class=" mb-2">
          {{-- <img src="/project-images/CEO-profile.webp" alt="CEO" class="rounded-circle me-2" width="68" height="68">
          <div>
            <div class="fw-bold">HUMAM ULLAH  <i class="ri-verified-badge-fill text-primary fs-4"></i></div>
            <small class="text-muted">C.E.O Behind</small>
          </div> --}}

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
          <div class="col-md-6">
            <div class="position-relative text-center">
              <img src="{{ asset('project-images/CEO-profile-2.png') }}" alt="Humam Ullah" class="img-fluid"
                style="max-width: 300px;">
              <div class="position-absolute" style="top: 50%; left: 50%; transform: translate(-50%, -50%); z-index: -1;">
                <img src="/project-images/saylani.png" alt="saylani" style="width: 350px; opacity: 0.2;">
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="mt-5 ms-md-4">
              <h5 class="fw-bold">Humam Ullah</h5>
              <p class="text-muted mb-1">C.E.O & Web App Developer</p>
              <div class="d-flex align-items-center mb-2">
                <img src="/project-images/saylani.png" alt="Saylani" style="width: 20px; height: 20px;" class="me-2">
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
          <a href="#" class="text-primary fw-bold text-decoration-none">See all members (5)</a>
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
              <i class="ri-arrow-left-s-line"></i>
            </button>
            <button class="btn btn-primary rounded-circle" type="button" data-bs-target="#teamCarousel"
              data-bs-slide="next">
              <i class="ri-arrow-right-s-line"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
