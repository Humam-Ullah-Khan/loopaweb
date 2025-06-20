@extends ('layout.master')

@section('content')
  <div class="home-hero-section container py-5">
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
          <h3>Meet Humam Ullah, <span class="fs-5">C.E.O Behind</span></h3>
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
              style="background: #e6f4ea; color: #1dbf73; font-weight: 600; border-radius: 8px; padding: 2px 10px; font-size: 1rem; vertical-align: middle;">Best
              Seller</span>
            <div>
              <span style="font-weight: bold; font-size: 1.5rem; color: #222; letter-spacing: -1px;">fiverr.</span>
              <!-- Stars -->
              <span>
                <i class="bi bi-star-fill" style="color: #f7d100; font-size: 1.5rem;"></i>
                <i class="bi bi-star-fill" style="color: #f7d100; font-size: 1.5rem;"></i>
                <i class="bi bi-star-fill" style="color: #f7d100; font-size: 1.5rem;"></i>
                <i class="bi bi-star-fill" style="color: #f7d100; font-size: 1.5rem;"></i>
                <i class="bi bi-star-fill" style="color: #f7d100; font-size: 1.5rem;"></i>
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

        <div>
          <a href="#" class="btn btn-primary me-2 mb-2 py-2 px-4"> <i class="ri-circle-fill"
              style="color: greenyellow"></i> Chat with us</a>
          <a href="#" class="btn btn-primary mb-2 py-2 px-4"> <i class="ri-video-on-line"></i> Book a meeting</a>
        </div>
      </div>
      <!-- Right Side: Image -->
      <div class="col-md-6 text-center py-3 p-0">
        <video class="img-fluid rounded shadow" style="max-width: 600px;" autoplay muted loop playsinline>
          <source src="/project-images/intro-video.mp4" type="video/mp4">
          Your browser does not support the video tag.
        </video>
      </div>
    </div>
  </div>
@endsection
