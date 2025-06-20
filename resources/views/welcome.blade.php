@extends ('layout.master')

@section('content')
  <div class="home-hero-section container py-5">
    <div class="row align-items-center">
      <!-- Left Side: Text and Buttons -->
      <div class="col-md-6 mb-4 mb-md-0">
        <div class="d-flex align-items-center mb-2">
          <img src="https://randomuser.me/api/portraits/men/1.jpg" alt="CEO" class="rounded-circle me-2" width="48"
            height="48">
          <div>
            <div class="fw-bold">HUMAM ULLAH</div>
            <small class="text-muted">C.E.O Behind</small>
          </div>
        </div>
        <h2 class="fw-bold mb-3">
          Your <span class="text-primary">Trusted</span> Web App Development Company for Every Industry!
        </h2>
        <div class="d-flex py-3">
          <div class="mb-3">
            <img src="/project-images/fiverrIcon.svg" alt="Fiverr Badge" style="height: 62px; vertical-align: middle;">
          </div>
          <div class="d-flex flex-column text-center gap-2 px-1">
            <span class="badge bg-success ms-2">Best Seller</span>
            <img class="ms-2" src="/project-images/fiverr1.svg" alt="" width="40px">
            <a href="https://www.fiverr.com/humam_ullah?public_mode=true" class="px-2"><small>(click to see 4-reviews)</small></a>
          </div>
        </div>
        <div>
          <a href="#" class="btn btn-primary me-2 mb-2 py-2 px-4"> <i class="ri-circle-fill" style="color: greenyellow"></i> Chat with us</a>
          <a href="#" class="btn btn-primary mb-2 py-2 px-4"> <i class="ri-video-on-line"></i> Book a meeting</a>
        </div>
      </div>
      <!-- Right Side: Image -->
      <div class="col-md-6 text-center">
        <img src="/project-images/heroSection.png" alt="Duseca Software" class="img-fluid rounded shadow"
          style="max-width: 400px;">
      </div>
    </div>
  </div>
@endsection
