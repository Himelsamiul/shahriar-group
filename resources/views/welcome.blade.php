<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <title data-i18n="page_title">Shahriar Group | Global Vision, Endless Possibilities</title>
    <meta name="description" content="Shahriar Group is a global conglomerate dedicated to innovation, sustainability, and excellence across diverse industries, driving growth and positive change worldwide." />
    <meta name="keywords" content="Shahriar Group, Shahriar Group Bangladesh, Shahriar Industries, global business, corporate group, innovation, sustainability, manufacturing, construction, trading, real estate, power, logistics" />
    <meta name="author" content="Shahriar Group" />

    <!-- Favicon / Website Icon (managed from admin panel) -->
    <link rel="icon" type="image/png" href="{{ $siteFavicon }}" />
    <link rel="apple-touch-icon" href="{{ $siteFavicon }}" />

    <!-- Open Graph (for Facebook, LinkedIn) -->
    <meta property="og:title" content="Shahriar Group | Global Vision, Endless Possibilities" />
    <meta property="og:description" content="A global conglomerate leading innovation, sustainability, and excellence across industries." />
    <meta property="og:image" content="{{ $siteLogo }}" />
    <meta property="og:url" content="{{ url('/') }}" />
    <meta property="og:type" content="website" />

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Shahriar Group | Global Vision, Endless Possibilities" />
    <meta name="twitter:description" content="A global conglomerate leading innovation, sustainability, and excellence across industries." />
    <meta name="twitter:image" content="{{ $siteLogo }}" />

    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url('/') }}" />

<!-- Canonical URL -->
<link rel="canonical" href="https://shahriargroup.com/" />

<!-- Robots (for search engine crawling) -->
<meta name="robots" content="index, follow" />

    <!-- Bootstrap 5 CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      xintegrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />
    <!-- Google Fonts - Poppins & Montserrat -->
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&family=Poppins:wght@300;400;600;700&display=swap"
      rel="stylesheet"
    />
    <!-- Font Awesome Icons -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
      xintegrity="sha512-SnH5WK+bZxgPHs44uWIX+LLMDJd4QG21qA1Qc59BA/mQY/4010t7rB2e1d1cE/2w8A0r/6z4i+0Lw1vXl/8fWg=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&family=Poppins:wght@600;700&display=swap"
      rel="stylesheet"
    />
<link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400;600;700&display=swap" rel="stylesheet">

    <style>
      /* Custom Gold and Deep Green Theme Styling */
      :root {
        --sg-gold: #d4af37;
        --sg-deep-green: #0b1a13;
        --sg-text-light: #f8f9fa;
        --sg-dark: #000;
      }

      /* Body & Headings */
      html {
        overflow-x: hidden;
      }

      body {
  font-family: "Cinzel", serif;
        background-color: var(--sg-text-light);
        color: var(--sg-dark);
        overflow-x: hidden;
      }

      h1,
      h2,
      h3,
      h4,
      h5,
      h6 {
  font-family: "Cinzel", serif;
        font-weight: 600;
        letter-spacing: 0.5px;
      }

      p,
      li,
      span,
      a,
      button {
        font-family: "Inter", sans-serif;
        line-height: 1.6;
      }

      h1,
      h2,
      h3,
      h4,
      h5,
      h6 {
        font-family: "Montserrat", sans-serif;
        font-weight: 700;
      }

      .navbar {
        background-color: var(--sg-deep-green) !important;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      }

      .navbar-brand,
      .nav-link {
        color: var(--sg-text-light) !important;
        font-weight: 400;
        transition: color 0.3s, background-color 0.3s;
      }

      .nav-link:hover {
        color: var(--sg-gold) !important;
      }

      .btn-gold {
        background-color: transparent;
        color: var(--sg-gold);
        border: 2px solid var(--sg-gold);
        border-radius: 25px;
        padding: 10px 30px;
        font-weight: 600;
        transition: background-color 0.3s, color 0.3s, transform 0.2s;
      }

      .btn-gold:hover {
        background-color: var(--sg-gold);
        color: var(--sg-deep-green);
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(212, 175, 55, 0.4);
      }

      .section-title {
        color: var(--sg-deep-green);
        font-size: 2.5rem;
        margin-bottom: 2rem;
        position: relative;
      }

      .section-title::after {
        content: "";
        display: block;
        width: 80px;
        height: 3px;
        background-color: var(--sg-gold);
        margin: 10px auto 0;
      }

      .hero-section {
        background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)),
          url("https://officesnapshots.com/wp-content/uploads/2023/08/confidential-social-media-platform-office-expansion-singapore-2.jpg");
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        min-height: 85vh;
        display: flex;
        align-items: center;
        color: var(--sg-text-light);
        text-align: center;
        /* padding: 0 15px; */
      }

      .text-gold {
        color: var(--sg-gold) !important;
      }

      .bg-deep-green {
        background-color: var(--sg-deep-green) !important;
        color: var(--sg-text-light);
      }

      .sg-card {
        border: 1px solid rgba(212, 175, 55, 0.2);
        border-radius: 12px;
        transition: all 0.3s;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
      }

      .sg-card:hover {
        border-color: var(--sg-gold);
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.1);
        transform: translateY(-5px);
      }

      .social-icon {
        color: var(--sg-text-light);
        transition: color 0.3s;
        font-size: 1.5rem;
        margin: 0 8px;
      }

      .social-icon:hover {
        color: var(--sg-gold);
      }

      /* History Timeline */
      .timeline {
        position: relative;
        padding: 0;
        list-style: none;
        margin-top: 5rem;
        margin-bottom: 5rem;
      }

      .timeline:before {
        content: "";
        position: absolute;
        top: 0;
        bottom: 0;
        width: 4px;
        background-color: var(--sg-gold);
        left: 50%;
        margin-left: -2px;
        z-index: 0;
      }

      .timeline-item {
        padding: 20px 0;
        position: relative;
        width: 50%;
        opacity: 0;
        transform: translateX(0) scale(0.95);
        transition: opacity 0.9s ease-out, transform 0.9s ease-out;
        transition-delay: var(--item-delay, 0s);
      }

      .timeline-item:nth-child(odd) {
        float: left;
        padding-right: 120px;
        text-align: right;
        clear: both;
        transform: translateX(-150px) scale(0.95);
      }

      .timeline-item:nth-child(even) {
        float: right;
        padding-left: 120px;
        text-align: left;
        clear: both;
        transform: translateX(150px) scale(0.95);
      }

      .timeline-item::after {
        content: "";
        position: absolute;
        width: 20px;
        height: 20px;
        border-radius: 50%;
        background-color: var(--sg-deep-green);
        border: 4px solid var(--sg-gold);
        top: 30px;
        z-index: 10;
      }

      .timeline-item:nth-child(odd)::after {
        right: -10px;
      }

      .timeline-item:nth-child(even)::after {
        left: -10px;
      }

      .timeline-item.in-view {
        opacity: 1;
        transform: translateX(0) scale(1);
      }

      /* Responsive Design */
      @media (max-width: 991.98px) {
        .section-title {
          font-size: 2rem;
        }

        .btn-gold {
          padding: 8px 20px;
          font-size: 0.9rem;
        }

        .hero-section {
          min-height: 70vh;
          background-attachment: scroll;
        }
      }

      @media (max-width: 767.98px) {
        .timeline:before {
          left: 20px;
        }

        .timeline-item {
          width: 100%;
          padding-left: 60px;
          padding-right: 15px;
          text-align: left !important;
          transform: translateX(-30px) scale(0.95);
        }

        .timeline-item.in-view {
          transform: translateX(0) scale(1);
        }

        .timeline-item:nth-child(odd),
        .timeline-item:nth-child(even) {
          float: none;
          padding-right: 15px;
          padding-left: 60px;
        }

        .timeline-item:nth-child(odd)::after {
          right: auto;
        }

        .timeline-item::after {
          left: 12px;
        }

        .section-title {
          font-size: 1.8rem;
        }

        .sg-card {
          margin-bottom: 20px;
        }

        .navbar-brand img {
          max-width: 140px;
        }
      }

      @media (max-width: 575.98px) {
        .section-title {
          font-size: 1.6rem;
        }

        .hero-section {
          /* padding: 40px 15px; */
        }

        .btn-gold {
          padding: 8px 18px;
          font-size: 0.85rem;
        }
      }
      .carousel-item {
        position: relative;
        background-size: cover;
        background-position: center;
        height: 100vh;
        overflow: hidden;
      }

      /* Add a blurred and dark overlay */
      .carousel-item::before {
        content: "";
        position: absolute;
        inset: 0;
        background: rgba(0, 0, 0, 0.55); /* darkness level */
        /* backdrop-filter: blur(4px); blur effect
  -webkit-backdrop-filter: blur(4px); */
        z-index: 1;
      }

      /* Make sure text appears above overlay */
      .carousel-item .container {
        position: relative;
        z-index: 2;
      }

      /* Background images */
      .carousel-item:nth-child(1) {
        background-image: url("logo/working.png");
      }

      .carousel-item:nth-child(2) {
        background-image: url("logo/ChatGPT Image Nov 12, 2025, 08_48_14 PM.png");
      }

      .carousel-item:nth-child(3) {
        background-image: url("logo/ChatGPT Image Nov 12, 2025, 09_20_03 AM.png");
      }
      .carousel-item {
  position: relative;
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  height: 100vh; /* adjust if needed */
}

/* DARK OVERLAY */
.carousel-item::before {
  content: "";
  position: absolute;
  inset: 0;
  background: rgba(0, 0, 0, 0.55); /* adjust darkness 0.4 - 0.75 */
  z-index: 1;
}

  /* Premium gold gradient text */
/* Premium yellow-gold text with 3D depth */
.premium-gold-text {
  font-family: 'Times New Roman', serif;
  font-weight: 700;
  font-size: 2.8rem; /* adjust as needed */
  letter-spacing: 2px;
  text-transform: uppercase;

  color: #f4c542; /* rich yellow-gold tone */

  /* 3D shadow depth */
  text-shadow:
    1px 1px 2px rgba(0, 0, 0, 0.6),
    2px 2px 4px rgba(0, 0, 0, 0.5),
    3px 3px 6px rgba(0, 0, 0, 0.4),
    0 -1px 1px rgba(255, 255, 255, 0.2);

  transition: all 0.3s ease;
}

/* Optional hover glow */
.premium-gold-text:hover {
  text-shadow:
    1px 1px 2px rgba(0, 0, 0, 0.6),
    0 0 10px rgba(244, 197, 66, 0.8),
    0 0 20px rgba(244, 197, 66, 0.6);
}




/* Make text/content appear above overlay */
.carousel-caption,
.carousel-item > * {
  position: relative;
  z-index: 2;
}

      .text-warning {
        font-weight: 600;
        font-family: "Times New Roman", serif;
        letter-spacing: 1px;
        background: linear-gradient(
          180deg,
          #fff6c7 0%,
          #917613 40%,
          #e1c17c 60%,
          #a9741a 100%
        );
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;

        /* depth and shine */
        text-shadow: 0px 3px 6px rgba(0, 0, 0, 0.6),
          0px 0px 8px rgba(255, 223, 138, 0.9);
      }
      
       /* Base carousel styling */
  .carousel-item {
    position: relative;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    height: 100vh; /* adjust as needed */
  }

  /* Dark overlay */
  .carousel-item::before {
    content: "";
    position: absolute;
    inset: 0;
    background: rgba(0, 0, 0, 0.55);
    z-index: 1;
  }

  /* Golden gradient text with soft shading */
  .premium-gold-text {
    position: relative;
    z-index: 2; /* ensure text is above overlay */
    font-weight: 500;
    background: linear-gradient(90deg, #b9935a, #d4af37, #f1c232);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    text-shadow:
      0 2px 4px rgba(0, 0, 0, 0.4),
      0 4px 8px rgba(0, 0, 0, 0.25);
    letter-spacing: 1px;
    transition: all 0.4s ease;
  }

  /* Optional hover glow effect */
  .premium-gold-text:hover {
    text-shadow:
      0 2px 6px rgba(0, 0, 0, 0.5),
      0 0 12px rgba(212, 175, 55, 0.6);
  }
    </style>
  </head>

  <body class="">
    <!-- ============================================== 
    COMMON NAVIGATION BAR 
    =============================================== -->
    <nav
      class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top py-3 wow animate__animated animate__slideInDown animate__slow"
    >
      <div class="container">
        <!-- Brand + Logo -->
        <a class="navbar-brand d-flex align-items-center" href="#home">
          <img
            src="{{ $siteLogo }}"
            alt="Shahriar Group Logo"
            class="me-2"
            style="
              height: 60px;
              width: 60px;
              object-fit: cover;
              border-radius: 50%;
            "
          />
      <span class="premium-gold-text fw-bold" style="font-size: 1.5rem;">
        Shahriar Group
      </span>
        </a>

        <!-- Toggler Button -->
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNav"
          aria-controls="navbarNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Nav Links -->
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto align-items-lg-center">
            <li class="nav-item">
              <a class="nav-link" href="#home" data-i18n="nav_home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about" data-i18n="nav_about"
                >About Us</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                href="#subsidiaries"
                data-i18n="nav_subsidiaries"
                >Subsidiaries</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#leadership" data-i18n="nav_leadership"
                >Leadership</a
              >
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#csr" data-i18n="nav_csr">CSR</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#news" data-i18n="nav_news">News</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact" data-i18n="nav_contact"
                >Contact</a
              >
            </li>

            <!-- Language Dropdown -->
           <li class="nav-item dropdown">
          <a
            class="nav-link dropdown-toggle text-gold"
            href="#"
            role="button"
            data-bs-toggle="dropdown"
            aria-expanded="false"
            data-i18n="nav_language_current"
          >
            <i class="fas fa-globe me-1"></i> Language
          </a>
          <ul class="dropdown-menu dropdown-menu-dark">
            <li>
              <a class="dropdown-item lang-switch" href="#" data-lang="en">English</a>
            </li>
            <li>
              <a class="dropdown-item lang-switch" href="#" data-lang="bn">বাংলা (Bengali)</a>
            </li>
          </ul>
        </li>
          </ul>
        </div>
      </div>
    </nav>

    <main>
      <!-- ============================================== 
        1. HOME PAGE
        =============================================== -->
      <!-- Hero Slider Section -->
      <section
        id="home"
        class="hero-section text-center wow animate__animated animate__slideInDown animate__slow"
      >
        <div
          id="heroCarousel"
          class="carousel slide carousel-fade w-100"
          data-bs-ride="carousel"
          data-bs-interval="3000"
        >
          <div class="carousel-inner">
            <!-- Slide 1 -->
            <div class="carousel-item active bg-dark text-white">
  <div class="container py-5 mt-5 text-center">
    <div class="col-lg-8 mx-auto">
      <img src="{{ $siteLogo }}" alt="Shahriar Group Logo" class="img-fluid mb-4" style="max-height: 180px;">
      
      <!-- <h1 class="display-4 fw-bold mb-3 text-warning">
        Shahriar Group
      </h1> -->

      <p class="lead mb-4 text-uppercase fw-light">
        Global Vision, Endless Possibilities
      </p>
<!-- Investment Stats -->
<div class="row mt-5 justify-content-center text-center">
  
  <!-- Current Investment -->
  <div class="col-6 col-md-3">
    <h3 style="font-weight: 600;">$33M</h3>
    <p style="font-size: 0.8rem; letter-spacing: 1px; opacity: 0.7;">
      CURRENT INVESTMENT
    </p>
  </div>

  <!-- Target -->
  <div class="col-6 col-md-3">
    <h3 style="font-weight: 600;">$200M</h3>
    <p style="font-size: 0.8rem; letter-spacing: 1px; opacity: 0.7;">
      2030 TARGET
    </p>
  </div>

</div>
      <a href="#subsidiaries" class="btn btn-warning btn-lg mt-3">
          
        Explore Our Companies
        <i class="fas fa-arrow-right ms-2"></i>
      </a>
      
    </div>
  </div>
</div>


            <!-- Slide 2 -->

<div class="carousel-item bg-dark text-white">
  <div class="container py-5 mt-5 text-center">
    <div class="col-lg-8 mx-auto">
      <img src="{{ $siteLogo }}" alt="Shahriar Group Logo" class="img-fluid mb-4" style="max-height: 180px;">

      <!-- Main Title -->
      <h1 class="fw-bold mb-3" style="font-size: 2.8rem; letter-spacing: 1px;">
        SHAHRIAR GROUP 🌍
      </h1>

      <!-- Subtitle -->
      <p class="lead mb-2" style="font-size: 1.4rem;">
        Building a Global Business Empire
      </p>

      <!-- Small Tagline -->
      <p class="mb-4 text-light" style="font-size: 1rem; opacity: 0.85;">
        A Global Business & Investment Company
      </p>

      <!-- Button -->
      <a href="#subsidiaries" class="btn btn-warning btn-lg mt-3 px-4">
        Explore Our Divisions →
      </a>
    </div>
  </div>
</div>



<!-- Slide 3 -->
<div class="carousel-item bg-dark text-white">
  <div class="container py-5 mt-5">
    <div class="col-lg-8 mx-auto text-center">

      <!-- New Text -->


      <h1 class="display-3 mb-3 premium-gold-text">
        Global Excellence
      </h1>


      
      <p class="lead mb-4 text-uppercase fw-light">
        Connecting Ideas Across Continents
      </p>
      <div class="global-operating-text mb-3">
        <span class="small-title">Operating Globally</span><br>
        <span class="country-list">
          UAE | China | Russia | Japan | USA
        </span>
      </div>
      <a href="#contact" class="btn btn-warning btn-lg mt-3">
        Contact Us <i class="fas fa-envelope ms-2"></i>
      </a>

    </div>
  </div>
</div>

<style>
.global-operating-text {
    text-align: center;
    font-family: 'Poppins', sans-serif;
}

.global-operating-text .small-title {
    font-size: 16px;
    color: #d4af37; /* premium gold */
    letter-spacing: 2px;
    text-transform: uppercase;
    opacity: 0.9;
}

.global-operating-text .country-list {
    font-size: 14px;
    color: #c9a54c; /* slightly soft gold */
    letter-spacing: 1px;
    font-weight: 500;
}
</style>
          </div>

          <!-- Controls -->
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#heroCarousel"
            data-bs-slide="prev"
          >
            <span class=""></span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#heroCarousel"
            data-bs-slide="next"
          >
            <span class=""></span>
          </button>

          <!-- Indicators -->
          <div class="carousel-indicators">
            <button
              type="button"
              data-bs-target="#heroCarousel"
              data-bs-slide-to="0"
              class="active"
            ></button>
            <button
              type="button"
              data-bs-target="#heroCarousel"
              data-bs-slide-to="1"
            ></button>
            <button
              type="button"
              data-bs-target="#heroCarousel"
              data-bs-slide-to="2"
            ></button>
          </div>
        </div>
      </section>

<!-- Home - About Teaser -->
<!-- Home - About Teaser -->
<section
  class="py-5 bg-light wow animate__animated animate__slideInLeft animate__slow"
>
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-7">
        <h2
          class="section-title text-start mx-0 fw-bold gold-shine"
          data-i18n="welcome_title"
        >
          Welcome to Shahriar Group
        </h2>

        <p
          class="lead mt-4"
          data-i18n="welcome_p1"
          style="
            font-family: 'Times New Roman', serif;
            font-size: 1.15rem;
            line-height: 1.9;
            color: #2b2b2b;
            letter-spacing: 0.2px;
          "
        >
          Welcome to SHAHRIAR GROUP, a global business and investment company committed to building a strong and sustainable business ecosystem.
We operate across multiple industries including trade, energy, technology, real estate, hospitality, agriculture, and aviation driven by innovation, strategy, and long-term vision.With 10 business divisions and 25+ global projects, we continue to expand across international markets, creating value, opportunities, and long-term growth.
        </p>

        <p
          class="mt-4"
          data-i18n="welcome_p2"
          style="
            font-family: 'Times New Roman', serif;
            font-size: 1.1rem;
            line-height: 1.9;
            color: #3c3c3c;
          "
        >
Our focus is clear:
To grow globally, invest strategically, and build a future-ready business platform.

We invite you to explore our business, our vision, and our journey. <br></br>

SHAHRIAR GROUP 🌍 <br></br>
Global Vision. Endless Possibilities
        </p>

        <a
          href="#about"
          class="btn btn-gold mt-4 px-4 py-2"
          data-i18n="read_full_story"
          style="
            background: linear-gradient(90deg, #c5a200, #8b6f00);
            border: none;
            color: #fff;
            font-weight: 600;
            font-size: 1.05rem;
            border-radius: 30px;
            box-shadow: 0 4px 15px rgba(212, 175, 55, 0.4);
            transition: all 0.3s ease;
          "
          onmouseover="this.style.background='linear-gradient(90deg,#8b6f00,#c5a200)'"
          onmouseout="this.style.background='linear-gradient(90deg,#c5a200,#8b6f00)'"
        >
          Read Full Story
        </a>
      </div>

<div class="col-lg-5 text-center mt-4 mt-lg-0">

  <div class="image-slider">

    @forelse ($sliderImages as $img)
        <img src="{{ $img }}" class="slider-img {{ $loop->first ? 'active' : '' }}" alt="Shahriar Group slide">
    @empty
        <img src="logo/ChatGPT Image Nov 14, 2025, 09_58_20 PM.png" class="slider-img active">
        <img src="logo/sss.jpeg" class="slider-img">
    @endforelse

  </div>

</div>
      </div>
    </div>
  </div>
</section>

<!-- Deep Pure Gold 3D Shine -->
<style>
.image-slider {
  position: relative;
  width: min(400px, 100%);
  height: 300px;
  margin: auto;
  border: 3px solid #c5a200;
  border-radius: 15px;
  overflow: hidden;
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
}

.slider-img {
  position: absolute;
  top: 0;
  left: 0; /* 🔥 important */
  width: 100%;
  height: 100%;
  object-fit: cover;

  opacity: 0;
  transition: opacity 1s ease-in-out;
}

.slider-img.active {
  opacity: 1;
}
@import url('https://fonts.googleapis.com/css2?family=Merriweather:wght@700&display=swap');

.gold-shine {
  font-family: 'Merriweather', serif;
  font-size: 2.8rem;
  font-weight: 800;
  text-transform: capitalize;
  letter-spacing: 1px;

  /* Deep golden gradient */
  background: linear-gradient(
    90deg,
    #6b4e00,
    #caa431,
    #ffd700,
    #b8860b,
    #6b4e00
  );
  background-size: 400%;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;

  /* Animation */
  animation: deepGoldShine 6s linear infinite;

  /* 3D depth effect */
  text-shadow: 0px 3px 6px rgba(0, 0, 0, 0.3),
               0px 5px 12px rgba(203, 155, 15, 0.3),
               0px 8px 20px rgba(212, 175, 55, 0.4);
}

@keyframes deepGoldShine {
  0% { background-position: 0% 50%; }
  50% { background-position: 100% 50%; }
  100% { background-position: 0% 50%; }
}
</style>


<style>
.section-title::after,
.section-title:after {
  display: none !important;
}
</style>
<script>
let index = 0;
const images = document.querySelectorAll(".slider-img");

setInterval(() => {
  images[index].classList.remove("active");
  index = (index + 1) % images.length;
  images[index].classList.add("active");
}, 3000);
</script>


      <!-- Home - Mission & Vision -->
      <section
        class="py-5 bg-deep-green text-light wow animate__animated animate__slideInLeft animate__slow"
      >
        <div class="container text-center">
          <h2 class="section-title text-light" data-i18n="mv_title">
            Mission & Vision
          </h2>
          <div class="row mt-5">
            <div class="col-md-6 mb-4">
              <div class="sg-card bg-dark p-4 h-100">
                <i class="fas fa-rocket text-gold fa-3x mb-3"></i>
                <h3 class="h4 text-gold" data-i18n="vision_title">
                  Our Misson
                </h3>
                <p data-i18n="vision_p1">
To drive sustainable growth by investing in diverse sectors, developing innovative business solutions, and creating long-term value through strategic expansion, operational excellence, and global partnerships.
                </p>
                <p class="text-gold fw-bold mt-3" data-i18n="vision_p2">
                  Objective: To deliver consistent growth, scalable operations, and long-term success across all business divisions.
                </p>
              </div>
            </div>
            <div class="col-md-6 mb-4">
              <div class="sg-card bg-dark p-4 h-100">
                <i class="fas fa-handshake text-gold fa-3x mb-3"></i>
                <h3 class="h4 text-gold" data-i18n="mission_title">
                  Our vision
                </h3>
                <p data-i18n="mission_p1">
To position SHAHRIAR GROUP  as a globally recognized, multi-industry business and investment leader, setting new standards in innovation, excellence, and long-term value creation across international markets.

                </p>
                <p class="text-gold fw-bold mt-3" data-i18n="mission_p2">
                  Objective: To build a strong global presence and become a trusted name across multiple industries.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Home - Achievements (Stats Cards) -->
      <section
        class="py-5 wow animate__animated animate__slideInLeft animate__slow"
      >
        <div class="container text-center">
          <h2 class="section-title" data-i18n="achievements_title">
            Our Achievements
          </h2>
          <div class="row text-center mt-4">
            <div class="col-md-3 col-6 mb-4">
              <div class="p-4 sg-card">
                <h3 class="display-4 text-gold fw-bold">10+</h3>
                <p class="text-white mb-0" data-i18n="ach_years">
                  Business divisions
                </p>
              </div>
            </div>
            <div class="col-md-3 col-6 mb-4">
              <div class="p-4 sg-card">
                <h3 class="display-4 text-gold fw-bold">25+</h3>
                <p class="text-white mb-0" data-i18n="ach_subsidiaries">
                  Global Projects
                </p>
              </div>
            </div>
            <div class="col-md-3 col-6 mb-4">
              <div class="p-4 sg-card">
                <h3 class="display-4 text-gold fw-bold">$33M+</h3>
                <p class="text-white mb-0" data-i18n="ach_employees">
                  Total Investment
                </p>
              </div>
            </div>
            <div class="col-md-3 col-6 mb-4">
              <div class="p-4 sg-card">
                <h3 class="display-4 text-gold fw-bold">10+</h3>
                <p class="text-white mb-0" data-i18n="ach_hubs">
                  Countries Presence
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ============================================== 
        2. ABOUT US PAGE
        =============================================== -->
      <section
        id="about"
        class="py-5 bg-light wow animate__animated animate__slideInLeft animate__slow"
      >
        <div class="container text-center">
          <h2 class="section-title" data-i18n="history_title">
            About SHAHRIAR GROUP
          </h2>
          <p class="lead mb-5 col-lg-8 mx-auto" data-i18n="history_p1">

SHAHRIAR GROUP 🌍 is a global business and investment company dedicated to building a strong, diversified, and future-focused business ecosystem across international markets.Founded with a vision to grow beyond borders, the Group has expanded into 10 business divisions, covering key sectors including trade, energy, technology, real estate, hospitality, agriculture, and aviation.<br>   </br> 
From its early foundation to a growing global presence, SHAHRIAR GROUP has successfully developed 25+ strategic projects, with a current investment portfolio exceeding $33 Million.Our long-term vision is to scale the business to $200 Million by 2030 through strategic expansion, innovation, and diversified investments.We are committed to creating sustainable value, unlocking global opportunities, and building a strong foundation for long-term growth.<br>   </br> 

SHAHRIAR GROUP <br>   </br>  
Global Vision. Endless Possibilities.
          </p>
    <h2 class="section-title mt-5 mb-4" style="color: var(--sg-deep-green);">
      Our Journey
    </h2>
          <!-- History Timeline -->
          <ul class="timeline">
            <!-- Timeline Item 1 (Left/Odd) -->
            <li class="timeline-item" style="--item-delay: 0s">
              <div
                class="card shadow-lg border-0 h-100"
                style="border-radius: 1rem; border: 1px solid #e9ecef"
              >
                <div class="card-body p-4">
                  <span
                    class="d-block mb-1 fw-bold text-uppercase"
                    style="color: var(--sg-gold); font-size: 0.85rem"
                    data-i18n="t_2016_title"
                    >2016</span
                  >
                  <p
                    class="card-text"
                    style="color: var(--sg-deep-green); opacity: 0.9"
                    data-i18n="t_2016_desc"
                  >
                    Establishment of Shahriar Agro LLC  marking the beginning of our agricultural operations and the foundation of our business journey.
                  </p>
                </div>
              </div>
            </li>

            <!-- Timeline Item 2 (Right/Even) -->
            <li class="timeline-item" style="--item-delay: 0.1s">
              <div
                class="card shadow-lg border-0 h-100"
                style="border-radius: 1rem; border: 1px solid #e9ecef"
              >
                <div class="card-body p-4">
                  <span
                    class="d-block mb-1 fw-bold text-uppercase"
                    style="color: var(--sg-gold); font-size: 0.85rem"
                    data-i18n="t_2017_title"
                    >2017</span
                  >
                  <p
                    class="card-text"
                    style="color: var(--sg-deep-green); opacity: 0.9"
                    data-i18n="t_2017_desc"
                  >
                    Official formation of SHAHRIAR GROUP and the launch of early business activities.
                  </p>
                </div>
              </div>
            </li>

            <!-- Timeline Item 3 (Left/Odd) -->
            <li class="timeline-item" style="--item-delay: 0.2s">
              <div
                class="card shadow-lg border-0 h-100"
                style="border-radius: 1rem; border: 1px solid #e9ecef"
              >
                <div class="card-body p-4">
                  <span
                    class="d-block mb-1 fw-bold text-uppercase"
                    style="color: var(--sg-gold); font-size: 0.85rem"
                    data-i18n="t_2020_title"
                    >2020</span
                  >
                  <p
                    class="card-text"
                    style="color: var(--sg-deep-green); opacity: 0.9"
                    data-i18n="t_2020_desc"
                  >
                    Expansion into multiple sectors including trade, agriculture, and local business development.
                  </p>
                </div>
              </div>
            </li>

            <!-- Timeline Item 4 (Right/Even) -->
            <li class="timeline-item" style="--item-delay: 0.3s">
              <div
                class="card shadow-lg border-0 h-100"
                style="border-radius: 1rem; border: 1px solid #e9ecef"
              >
                <div class="card-body p-4">
                  <span
                    class="d-block mb-1 fw-bold text-uppercase"
                    style="color: var(--sg-gold); font-size: 0.85rem"
                    data-i18n="t_2023_title"
                    >2023</span
                  >
                  <p
                    class="card-text"
                    style="color: var(--sg-deep-green); opacity: 0.9"
                    data-i18n="t_2023_desc"
                  >
                    Entry into international markets and development of a global business strategy.
                  </p>
                </div>
              </div>
            </li>

            <!-- Timeline Item 5 (Left/Odd) -->
            <li class="timeline-item" style="--item-delay: 0.4s">
              <div
                class="card shadow-lg border-0 h-100"
                style="border-radius: 1rem; border: 1px solid #e9ecef"
              >
                <div class="card-body p-4">
                  <span
                    class="d-block mb-1 fw-bold text-uppercase"
                    style="color: var(--sg-gold); font-size: 0.85rem"
                    data-i18n="t_2026_title"
                    >2026</span
                  >
                  <p
                    class="card-text"
                    style="color: var(--sg-deep-green); opacity: 0.9"
                    data-i18n="t_2026_desc"
                  >
                   Formation of 10 business divisions with total investment exceeding $33 Million.
                  </p>
                </div>
              </div>
            </li>
            
                        <!-- Timeline Item 4 (Right/Even) -->
            <li class="timeline-item" style="--item-delay: 0.3s">
              <div
                class="card shadow-lg border-0 h-100"
                style="border-radius: 1rem; border: 1px solid #e9ecef"
              >
                <div class="card-body p-4">
                  <span
                    class="d-block mb-1 fw-bold text-uppercase"
                    style="color: var(--sg-gold); font-size: 0.85rem"
                    data-i18n="t_2030_title"
                    >2030</span
                  >
                  <p
                    class="card-text"
                    style="color: var(--sg-deep-green); opacity: 0.9"
                    data-i18n="t_2030_desc"
                  >
                    Target to achieve $200 Million+ global business scale through strategic expansion and innovation.Our journey reflects continuous growth, global expansion, and a strong vision for the future.
                  </p>
                </div>
              </div>
            </li>
            
            
          </ul>

          <div class="clearfix"></div>

       <!-- Core Values -->
<h2 class="section-title mt-5 pt-4">
  Our Core Values
</h2>

<div class="row text-start mt-4">

  <!-- 1 -->
  <div class="col-md-4 mb-4">
    <div class="sg-card p-4 h-100">
      <i class="fas fa-scale-balanced text-gold fa-2x mb-3"></i>
      <h5 class="fw-bold">Integrity</h5>
      <p class="small">
        We operate with honesty, transparency, and strong ethical standards in every aspect of our business.
      </p>
    </div>
  </div>

  <!-- 2 -->
  <div class="col-md-4 mb-4">
    <div class="sg-card p-4 h-100">
      <i class="fas fa-award text-gold fa-2x mb-3"></i>
      <h5 class="fw-bold">Excellence</h5>
      <p class="small">
        We are committed to delivering the highest quality in our operations, services, and business outcomes.
      </p>
    </div>
  </div>

  <!-- 3 -->
  <div class="col-md-4 mb-4">
    <div class="sg-card p-4 h-100">
      <i class="fas fa-lightbulb text-gold fa-2x mb-3"></i>
      <h5 class="fw-bold">Innovation</h5>
      <p class="small">
        We embrace new ideas, technologies, and strategies to stay ahead in a competitive global market.
      </p>
    </div>
  </div>

  <!-- 4 -->
  <div class="col-md-4 mb-4">
    <div class="sg-card p-4 h-100">
      <i class="fas fa-chart-line text-gold fa-2x mb-3"></i>
      <h5 class="fw-bold">Growth</h5>
      <p class="small">
        We focus on continuous development, expansion, and long-term value creation across all sectors.
      </p>
    </div>
  </div>

  <!-- 5 -->
  <div class="col-md-4 mb-4">
    <div class="sg-card p-4 h-100">
      <i class="fas fa-globe text-gold fa-2x mb-3"></i>
      <h5 class="fw-bold">Global Vision</h5>
      <p class="small">
        We think beyond borders and build businesses that connect international markets and opportunities.
      </p>
    </div>
  </div>

  <!-- 6 -->
  <div class="col-md-4 mb-4">
    <div class="sg-card p-4 h-100">
      <i class="fas fa-hand-holding-heart text-gold fa-2x mb-3"></i>
      <h5 class="fw-bold">Responsibility</h5>
      <p class="small">
        We are committed to sustainable practices, social impact, and responsible business operations.
      </p>
    </div>
  </div>

</div>
</section>

      <!-- ============================================== 
        3. SUBSIDIARIES PAGE
        =============================================== -->
<section id="subsidiaries">
  <div class="container text-center">
    <h2 class="section-title mb-4 text-white">Our Global Subsidiaries</h2>

    <div class="slider-wrapper">
      <button class="slider-prev">‹</button>
      <button class="slider-next">›</button>

      <div class="slider-container">

        <!-- CARD -->
<div class="slider-item">
  <div class="sg-card" onclick="showDetails('nexus')">
    <img src="{{ $subsidiaryImages['nexus'] ?? 'logo1/nexus.jpeg' }}">
    <h5>🌐 Shahriar Global Nexus LLC</h5>
    <p>Global Trade & Logistics</p>
  </div>
</div>

<div class="slider-item">
  <div class="sg-card" onclick="showDetails('energy')">
    <img src="{{ $subsidiaryImages['energy'] ?? 'logo1/energy.jpeg' }}">
    <h5>⚡ Shahriar Energy LLC</h5>
    <p>Oil, Gas & Renewable Energy</p>
  </div>
</div>

<div class="slider-item">
  <div class="sg-card" onclick="showDetails('tech')">
    <img src="{{ $subsidiaryImages['software'] ?? 'logo1/software.jpeg' }}">
    <h5>💻 Shahriar Primex Tech LLC</h5>
    <p>Software & SaaS Solutions</p>
  </div>
</div>

<div class="slider-item">
  <div class="sg-card" onclick="showDetails('motors')">
    <img src="{{ $subsidiaryImages['motor'] ?? 'logo1/motor.jpeg' }}">
    <h5>🚗 Shahriar Global Motors LLC</h5>
    <p>Automotive & EV Business</p>
  </div>
</div>

<div class="slider-item">
  <div class="sg-card" onclick="showDetails('dev')">
    <img src="{{ $subsidiaryImages['dev1'] ?? 'logo1/dev1.jpeg' }}">
    <h5>🏗️ Shahriar Global Developments LLC</h5>
    <p>Real Estate & Infrastructure</p>
  </div>
</div>

<div class="slider-item">
  <div class="sg-card" onclick="showDetails('hotels')">
    <img src="{{ $subsidiaryImages['hotel'] ?? 'logo1/hotel.jpeg' }}">
    <h5>🏨 Shahriar International Hotels</h5>
    <p>Hotels & Resort Business</p>
  </div>
</div>

<div class="slider-item">
  <div class="sg-card" onclick="showDetails('hospitality')">
    <img src="{{ $subsidiaryImages['hospitality'] ?? 'logo1/hospitality.jpeg' }}">
    <h5>🏨 Shahriar Global Hospitality LLC</h5>
    <p>Hospitality Management</p>
  </div>
</div>

<div class="slider-item">
  <div class="sg-card" onclick="showDetails('foundation')">
    <img src="{{ $subsidiaryImages['found'] ?? 'logo1/found.jpeg' }}">
    <h5>🤝 Shahriar Global Foundation LLC</h5>
    <p>Charity & Social Impact</p>
  </div>
</div>

<div class="slider-item">
  <div class="sg-card" onclick="showDetails('agro')">
    <img src="{{ $subsidiaryImages['agro'] ?? 'logo1/agro.jpeg' }}">
    <h5>🌱 Shahriar Agro LLC</h5>
    <p>Agriculture & Food Production</p>
  </div>
</div>

<div class="slider-item">
  <div class="sg-card" onclick="showDetails('aviation')">
    <img src="{{ $subsidiaryImages['travel'] ?? 'logo1/travel.jpeg' }}">
    <h5>✈️ Shahriar Aviation LLC</h5>
    <p>Charter & Cargo Aviation</p>
  </div>
</div>

      </div>
    </div>
  </div>


  <!-- DETAILS -->
  <div id="company-details" class="container mt-5 text-white" style="display:none;">

    <div id="nexus" class="details-box">
      <h3>🌐 Shahriar Global Nexus LLC</h3>
      <p>Global trade division specializing in import-export, logistics, and wholesale distribution across multiple countries. The company focuses on fast-moving goods, strong supply chains, and high-volume international trade operations ensuring consistent revenue flow.</p>
      <p><b>Sector:</b> Trade & Logistics</p>
      <p><b>Investment:</b> $5M</p>
      <p><b>Countries:</b> China | UAE | Georgia</p>
      <p><b>Projects:</b> Import Hub, Wholesale Network, Logistics Center</p>
      <p><b>Status:</b> 🟢 Active & Expanding</p>
    </div>

    <div id="energy" class="details-box">
      <h3>⚡ Shahriar Energy LLC</h3>
      <p>Energy division focused on oil, gas, and renewable energy solutions including solar and large-scale power projects. Designed for long-term sustainability and high-return investments across multiple global markets.</p>
      <p><b>Sector:</b> Energy</p>
      <p><b>Investment:</b> $5M</p>
      <p><b>Countries:</b> UAE | Russia</p>
      <p><b>Projects:</b> Solar Plant, Oil Trading, Renewable Energy</p>
      <p><b>Status:</b> 🟡 Development</p>
    </div>

    <div id="tech" class="details-box">
      <h3>💻 Shahriar Primex Tech LLC</h3>
      <p>Technology division building scalable SaaS platforms, mobile apps, and digital systems for global users. Focused on innovation, automation, and creating high-margin recurring revenue products.</p>
      <p><b>Sector:</b> Technology</p>
      <p><b>Investment:</b> $3M</p>
      <p><b>Scope:</b> Global</p>
      <p><b>Projects:</b> SaaS, Apps, Software</p>
      <p><b>Status:</b> 🟢 Growing</p>
    </div>

    <div id="motors" class="details-box">
      <h3>🚗 Shahriar Global Motors LLC</h3>
      <p>Automotive division focused on vehicle import, showroom business, and electric vehicle trading. Targets high-demand markets with strong growth potential in EV and luxury car segments.</p>
      <p><b>Sector:</b> Automotive</p>
      <p><b>Investment:</b> $2M</p>
      <p><b>Countries:</b> UAE | Japan</p>
      <p><b>Projects:</b> Car Import, Showroom, EV</p>
      <p><b>Status:</b> 🟡 Setup</p>
    </div>

    <div id="dev" class="details-box">
      <h3>🏗️ Shahriar Global Developments LLC</h3>
      <p>Real estate division developing residential and commercial projects along with land investments. Focuses on asset-based growth and long-term value creation in emerging markets.</p>
      <p><b>Sector:</b> Real Estate</p>
      <p><b>Investment:</b> $10M</p>
      <p><b>Countries:</b> UAE | Cambodia | Georgia</p>
      <p><b>Projects:</b> Buildings, Towers, Land</p>
      <p><b>Status:</b> 🟡 Development</p>
    </div>

    <div id="hotels" class="details-box">
      <h3>🏨 Shahriar International Hotels</h3>
      <p>Hospitality division operating hotels, resorts, and tourism-based properties. Generates consistent daily income through room bookings and hospitality services.</p>
      <p><b>Sector:</b> Hospitality</p>
      <p><b>Investment:</b> $4M</p>
      <p><b>Countries:</b> Thailand | Cambodia | Canada</p>
      <p><b>Projects:</b> Resort, Hotel</p>
      <p><b>Status:</b> 🟡 Development</p>
    </div>

    <div id="hospitality" class="details-box">
      <h3>🏨 Shahriar Global Hospitality LLC</h3>
      <p>Hospitality management company handling hotel operations and food chain businesses. Focused on efficient management systems and high-margin service operations.</p>
      <p><b>Sector:</b> Hospitality Mgmt</p>
      <p><b>Investment:</b> $1M</p>
      <p><b>Countries:</b> Thailand | Bangladesh</p>
      <p><b>Projects:</b> Hotels, Food Chain</p>
      <p><b>Status:</b> 🟢 Operational</p>
    </div>

    <div id="foundation" class="details-box">
      <h3>🤝 Shahriar Global Foundation LLC</h3>
      <p>Social impact division focusing on charity programs, education, and community development initiatives worldwide, helping build brand value and global recognition.</p>
      <p><b>Sector:</b> Social Impact</p>
      <p><b>Investment:</b> $500K</p>
      <p><b>Scope:</b> Global</p>
      <p><b>Projects:</b> Charity, Education</p>
      <p><b>Status:</b> 🟢 Active</p>
    </div>

    <div id="agro" class="details-box">
      <h3>🌱 Shahriar Agro LLC</h3>
      <p>Agriculture division focusing on farming, food production, and export. Designed to ensure stable income through essential goods and long-term sustainability.</p>
      <p><b>Sector:</b> Agriculture</p>
      <p><b>Investment:</b> $1.5M</p>
      <p><b>Countries:</b> Bangladesh | Georgia | Fiji</p>
      <p><b>Projects:</b> Farming, Processing</p>
      <p><b>Status:</b> 🟡 Growing</p>
    </div>

    <div id="aviation" class="details-box">
      <h3>✈️ Shahriar Aviation LLC</h3>
      <p>Aviation division focused on charter flights, cargo logistics, and future expansion into premium air services. Positioned for high-value growth in global aviation.</p>
      <p><b>Sector:</b> Aviation</p>
      <p><b>Investment:</b> $1M</p>
      <p><b>Countries:</b> UAE | USA</p>
      <p><b>Projects:</b> Charter, Cargo</p>
      <p><b>Status:</b> 🔵 Early Stage</p>
    </div>

  </div>
</section>

<style>

.sg-card p {
  font-size: 0.85rem;
  color: #ccc;
  margin-top: 6px;
  word-wrap: break-word;
}

#subsidiaries { 
  background:#004d33; 
  padding:4rem 0; 
}

.slider-wrapper { 
  position:relative; 
  overflow:hidden; 
}

.slider-container { 
  display:flex; 
  gap:1.2rem; 
  transition:0.5s; 
}

.slider-item { 
  min-width:260px;
}

/* 🔥 CARD FULL FIX */
.sg-card {
  background:#1a1a1a;
  padding:28px;
  border-radius:14px;
  text-align:center;
  cursor:pointer;
  transition:0.3s;

  min-height:260px; /* 🔥 prevent cut */
  display:flex;
  flex-direction:column;
  justify-content:center;
  align-items:center;
}

.sg-card:hover{
  transform:translateY(-6px);
}

/* 🔥 IMAGE BIGGER */
.sg-card img {
  width:95px;
  height:95px;
  border-radius:50%;
  border:3px solid gold;
  margin-bottom:12px;
  object-fit:cover;
}

.sg-card h5 { 
  color:gold; 
  font-size:1rem; 
  margin-bottom:5px;
}

.slider-prev,.slider-next {
  position:absolute;
  top:50%;
  transform:translateY(-50%);
  width:40px;
  height:40px;
  background:black;
  color:white;
  border:none;
  border-radius:50%;
  z-index:10;
  cursor:pointer;
}

.slider-prev{ left:5px; }
.slider-next{ right:5px; }

.details-box {
  display:none;
  background:#111;
  padding:20px;
  border-radius:10px;
  margin-top:20px;
}

/* 🔥 MOBILE PERFECT FIX */
@media(max-width:768px){

  .slider-wrapper{
    overflow-x:auto;
  }

  .slider-container{
    overflow-x:auto;
    scroll-behavior:smooth;
  }

  .slider-prev,.slider-next{
    display:none;
  }

  .slider-item{ 
    min-width:200px; 
  }

  .sg-card {
    min-height:230px;
    padding:20px;
  }

  .sg-card img{
    width:80px;
    height:80px;
  }

  .sg-card h5{ 
    font-size:0.85rem; 
  }

}
</style>

<script>
function showDetails(id){
  document.getElementById("company-details").style.display="block";
  document.querySelectorAll(".details-box").forEach(el=>el.style.display="none");
  document.getElementById(id).style.display="block";
  window.scrollTo({
    top:document.getElementById("company-details").offsetTop-50,
    behavior:"smooth"
  });
}

window.onload=function(){

  const container=document.querySelector(".slider-container");
  const items=document.querySelectorAll(".slider-item");
  const next=document.querySelector(".slider-next");
  const prev=document.querySelector(".slider-prev");

  let index=0;
  const width=items[0].offsetWidth+20;

  function slideNext(){
    index=Math.min(index+1, items.length-1);
    container.style.transform=`translateX(-${width*index}px)`;
  }

  function slidePrev(){
    index=Math.max(index-1, 0);
    container.style.transform=`translateX(-${width*index}px)`;
  }

  next.onclick=slideNext;
  prev.onclick=slidePrev;

  /* ❌ AUTO SLIDE OFF */
}
</script>      

<!-- ============================================== 
   INVESTOR TESTIMONIALS SECTION
============================================== -->
<section id="investors" class="investor-section">
  <div class="container text-center">
    

    <h3 class="investor-subtitle mb-5">
      Global Investor Insights
    </h3>

    <div class="investor-wrapper">
      
      <button class="inv-prev">‹</button>
      <button class="inv-next">›</button>

      <div class="investor-container">

        <!-- CARD 1 -->
        <div class="investor-card">
          <p>SHAHRIAR GROUP presents a strong and scalable multi-industry business model with clear long-term growth potential.</p>
          <h6>— Global Investment Partners Ltd., UAE 🇦🇪</h6>
        </div>

        <!-- CARD 2 -->
        <div class="investor-card">
          <p>We see SHAHRIAR GROUP as a promising global business platform with disciplined execution and strategic vision.</p>
          <h6>— Asia Capital Holdings, Singapore 🇸🇬</h6>
        </div>

        <!-- CARD 3 -->
        <div class="investor-card">
          <p>Their diversified portfolio across multiple sectors reduces risk and creates strong long-term investment value.</p>
          <h6>— International Growth Fund, United Kingdom 🇬🇧</h6>
        </div>

        <!-- CARD 4 -->
        <div class="investor-card">
          <p>The leadership reflects clarity, ambition, and a well-structured global expansion strategy.</p>
          <h6>— European Strategic Investments GmbH, Germany 🇩🇪</h6>
        </div>

        <!-- CARD 5 -->
        <div class="investor-card">
          <p>A solid foundation aligned with global investment standards and future scalability.</p>
          <h6>— North America Investment Group, USA 🇺🇸</h6>
        </div>

        <!-- CARD 6 -->
        <div class="investor-card">
          <p>Strong focus on real assets, global trade, and sustainable business growth.</p>
          <h6>— Middle East Capital Group, UAE 🇦🇪</h6>
        </div>

        <!-- CARD 7 -->
        <div class="investor-card">
          <p>Clear roadmap from $33M to $200M shows strong strategic planning.</p>
          <h6>— Pacific Investment Corporation, Australia 🇦🇺</h6>
        </div>

        <!-- CARD 8 -->
        <div class="investor-card">
          <p>Combines innovation with traditional business strength highly attractive opportunity.</p>
          <h6>— Japan Investment Advisory Co., Japan 🇯🇵</h6>
        </div>

        <!-- CARD 9 -->
        <div class="investor-card">
          <p>Multi-country presence and diversification provide strong investor confidence.</p>
          <h6>— Global Equity Management Ltd., Canada 🇨🇦</h6>
        </div>

        <!-- CARD 10 -->
        <div class="investor-card">
          <p>A forward-looking platform with strong leadership and global direction.</p>
          <h6>— International Private Investors Network, Switzerland 🇨🇭</h6>
        </div>

      </div>
    </div>
  </div>
</section>

<!-- ================= CSS ================= -->
<style>
.investor-section {
  background: #004d33;
  padding: 5rem 0;
}

.investor-subtitle {
  color: #d4af37;
  font-size: 1.8rem;
  font-weight: 600;
  letter-spacing: 1px;
}

.investor-wrapper {
  position: relative;
  overflow: hidden;
}

.investor-container {
  display: flex;
  gap: 1.5rem;
  transition: 0.5s ease;
}

/* CARD */
.investor-card {
  min-width: 320px;
  max-width: 320px;
  background: linear-gradient(145deg, #111, #1c1c1c);
  border-radius: 16px;
  padding: 25px;
  color: #ddd;
  text-align: left;
  border: 1px solid rgba(212,175,55,0.2);

  box-shadow: 0 10px 30px rgba(0,0,0,0.3);
  transition: 0.3s;
}

.investor-card:hover {
  transform: translateY(-8px) scale(1.02);
  border-color: gold;
}

.investor-card p {
  font-size: 0.95rem;
  line-height: 1.7;
  margin-bottom: 15px;
}

.investor-card h6 {
  color: #d4af37;
  font-size: 0.85rem;
}

/* BUTTON */
.inv-prev, .inv-next {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  width: 42px;
  height: 42px;
  border-radius: 50%;
  border: none;
  background: black;
  color: white;
  z-index: 10;
}

.inv-prev { left: 5px; }
.inv-next { right: 5px; }

/* MOBILE */
@media(max-width:768px){
  .investor-wrapper {
    overflow-x: auto;
  }

  .investor-container {
    overflow-x: auto;
    scroll-behavior: smooth;
  }

  .inv-prev, .inv-next {
    display: none;
  }

  .investor-card {
    min-width: 260px;
  }
}
</style>

<!-- ================= JS ================= -->
<script>
document.addEventListener("DOMContentLoaded", function(){

  const container = document.querySelector(".investor-container");
  const cards = document.querySelectorAll(".investor-card");
  const next = document.querySelector(".inv-next");
  const prev = document.querySelector(".inv-prev");

  let index = 0;
  const width = cards[0].offsetWidth + 20;

  next.onclick = function(){
    index = Math.min(index + 1, cards.length - 1);
    container.style.transform = `translateX(-${width * index}px)`;
  }

  prev.onclick = function(){
    index = Math.max(index - 1, 0);
    container.style.transform = `translateX(-${width * index}px)`;
  }

});
</script>



<!-- ============================================== 
   CLIENT TESTIMONIALS (PREMIUM GLASS STYLE)
============================================== -->
<section class="client-section">
  <div class="container text-center">

    <h2 class="client-title">
      Global Client Insights 
    </h2>


    <div class="client-grid">

      <!-- CARD -->
      <div class="client-card">
        <p>“SHAHRIAR GROUP demonstrates a high level of professionalism and strategic vision.”</p>
        <span>— Global Trading Co., UAE 🇦🇪</span>
      </div>

      <div class="client-card">
        <p>“A reliable global partner with strong execution capabilities.”</p>
        <span>— Asia Pacific Logistics Ltd., Singapore 🇸🇬</span>
      </div>

      <div class="client-card">
        <p>“Their structured approach makes them a valuable international partner.”</p>
        <span>— Eastern Import & Export Group, China 🇨🇳</span>
      </div>

      <div class="client-card">
        <p>“Working with them has been seamless and highly efficient.”</p>
        <span>— North America Business Solutions Inc., Canada 🇨🇦</span>
      </div>

      <div class="client-card">
        <p>“Strong leadership with deep understanding of global markets.”</p>
        <span>— European Trade Network GmbH, Germany 🇩🇪</span>
      </div>

      <div class="client-card">
        <p>“A promising international group with strong multi-industry expertise.”</p>
        <span>— Japan Industrial Partners Co., Japan 🇯🇵</span>
      </div>

    </div>

  </div>
</section>

<!-- ================= CSS ================= -->
<style>
/* ================= CLIENT TESTIMONIAL SECTION ================= */

.client-section {
  background: #ffffff;
  padding: 6rem 0;
}

/* TITLE */
.client-title {
  color: #0b1a13;
  font-size: 2.6rem;
  font-weight: 700;
  letter-spacing: 1px;
}

/* SUBTITLE */
.client-subtitle {
  color: #d4af37;
  font-size: 1.6rem;
  margin-bottom: 50px;
  font-weight: 600;
}

/* GRID SYSTEM */
.client-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
  gap: 25px;
}

/* CARD DESIGN */
.client-card {
  backdrop-filter: blur(10px);
  background: rgba(0, 0, 0, 0.04); /* light glass effect */
  border-radius: 16px;
  padding: 25px;
  text-align: left;

  border: 1px solid rgba(212, 175, 55, 0.25);
  color: #333;

  transition: all 0.4s ease;
  opacity: 0;
  transform: translateY(40px);
}

/* HOVER EFFECT */
.client-card:hover {
  transform: translateY(-10px) scale(1.03);
  border-color: #d4af37;
  box-shadow: 0 12px 30px rgba(212, 175, 55, 0.2);
}

/* TEXT */
.client-card p {
  font-size: 0.95rem;
  line-height: 1.7;
  margin-bottom: 12px;
}

.client-card span {
  color: #b8962e;
  font-size: 0.85rem;
  font-weight: 500;
}

/* SCROLL ANIMATION ACTIVE */
.client-card.show {
  opacity: 1;
  transform: translateY(0);
}

/* ================= RESPONSIVE ================= */

/* Tablet */
@media (max-width: 992px) {
  .client-title {
    font-size: 2.2rem;
  }

  .client-subtitle {
    font-size: 1.4rem;
  }
}

/* Mobile */
@media (max-width: 768px) {
  .client-title {
    font-size: 2rem;
  }

  .client-subtitle {
    font-size: 1.2rem;
  }

  .client-grid {
    gap: 18px;
  }
}

/* Small Mobile */
@media (max-width: 576px) {
  .client-card {
    padding: 18px;
  }

  .client-card p {
    font-size: 0.9rem;
  }

  .client-card span {
    font-size: 0.8rem;
  }
}
</style>

<!-- ================= JS ================= -->
<script>
document.addEventListener("DOMContentLoaded", function(){

  const cards = document.querySelectorAll(".client-card");

  function showOnScroll(){
    const trigger = window.innerHeight * 0.85;

    cards.forEach(card=>{
      const top = card.getBoundingClientRect().top;

      if(top < trigger){
        card.classList.add("show");
      }
    });
  }

  window.addEventListener("scroll", showOnScroll);
  showOnScroll();

});
</script>
<!-- ============================================== 
        4. LEADERSHIP PAGE
        =============================================== -->
    <section
  id="leadership"
  class="py-5 wow animate__animated animate__slideInLeft animate__slow"
  style="background-color: #faf8f4;"
>
  <div class="container text-center">
    <!-- Section Title -->
    <h2
      class="section-title fw-bold"
      style="
        font-size: 2.8rem;
        font-family: 'Merriweather', serif;
        background: linear-gradient(90deg, #bfa14a, #d4af37, #bfa14a);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        letter-spacing: 1px;
      "
    >
      Leadership & CEO Message
    </h2>

    <div class="row align-items-center mt-5">
      <!-- Left Image -->
      <div class="col-lg-4 mb-4 mb-lg-0 ceo-img-wrapper order-1 order-lg-1">
        <img
          src="{{ $ceoPhoto }}"
          alt="CEO Photo"
          class="img-fluid rounded-4 shadow-lg ceo-img"
        />
      </div>

      <!-- Right Content -->
      <div
        class="col-lg-8 text-start p-4 ceo-content order-2 order-lg-2"
        style="
          background: #ffffff;
          border-radius: 20px;
          box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
        "
      >
        <h3
          class="fw-bold mb-3"
          style="
            font-family: 'Merriweather', serif;
            font-size: 1.8rem;
            background: linear-gradient(90deg, #bfa14a, #d4af37, #bfa14a);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            letter-spacing: 0.5px;
          "
        >
          Message from the CEO, Mr. Shah Alom
        </h3>

        <blockquote
          class="blockquote border-start border-5 ps-3 my-4"
          style="border-color: #d4af37;"
        >
          <p
            class="fst-italic"
            style="
              font-size: 1.3rem;
              color: #555;
              font-family: 'Times New Roman', serif;
            "
          >
            “We are not just building a company we are building a global legacy.”
          </p>
          <footer
            class="blockquote-footer text-end"
            style="font-family: 'Times New Roman', serif; color: #777;"
          >
            — Mr. Shah Alom
          </footer>
        </blockquote>

<p
  style="
    font-family: 'Times New Roman', serif;
    font-size: 1.05rem;
    color: #333;
    line-height: 1.8;
  "
>
  Ladies and Gentlemen,<br><br>

  At SHAHRIAR GROUP, we do not think small  we think global.

  We are building more than a company.
  We are building a structured, multi-industry global business ecosystem designed to grow, scale, and sustain for generations.<br><br>

  My journey began in 2017 with a clear vision — to rise beyond limitations and create something that connects opportunities across borders.
</p>

<p
  style="
    font-family: 'Times New Roman', serif;
    font-size: 1.05rem;
    color: #333;
    line-height: 1.8;
  "
>
  Today, that vision has become SHAHRIAR GROUP — a diversified international business operating across trade, energy, technology, real estate, hospitality, agriculture, and aviation.

  With an investment base exceeding $33 Million+, we have established a strong foundation across multiple countries.

  But for us, this is not success — this is only the beginning.

  Our direction is clear.
</p>

<p
  style="
    font-family: 'Times New Roman', serif;
    font-size: 1.05rem;
    color: #333;
    line-height: 1.8;
  "
>
  By 2030, we are committed to building a $200 Million+ global business platform through strategic expansion, disciplined execution, and long-term value creation.<br><br>

  We are not focused on short-term profit.
  We are focused on building real assets, strong systems, and sustainable global businesses.

  Every division, every project, and every investment under SHAHRIAR GROUP is aligned with one mission:

  To create a powerful international business presence that delivers stability, growth, and long-term impact.
</p>

<p
  style="
    font-family: 'Times New Roman', serif;
    font-size: 1.05rem;
    color: #333;
    line-height: 1.8;
  "
>
  We believe in:<br>
  <strong>Vision with clarity</strong><br>
  <strong>Strategy with precision</strong><br>
  <strong>Execution with discipline</strong><br><br>

  Because in the global business world, only those who build strong systems survive and lead.<br><br>

  At SHAHRIAR GROUP,
  we are not following the future 
  we are creating it.<br><br>

  Thank you.
</p>

<!-- Signature -->
<!-- Signature -->
<div class="mt-4 pt-2 text-start">
  <p
    style="
      font-family: 'Great Vibes', cursive;
      font-size: 2.6rem;
      color: #000;
      margin-bottom: 0;
      transform: rotate(-0deg);
      line-height: 1.25;
    "
  >
    alom shah
  </p>
</div>



        <p
  style="
    font-family: 'Merriweather', serif;
    font-size: 1.2rem;
    background: linear-gradient(90deg, #bfa14a, #d4af37, #bfa14a);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-weight: 700;
    margin-bottom: 2px;
  "
>
  Mr. Shah Alom
</p>

<p
  style="
    font-family: 'Times New Roman', serif;
    font-size: 1rem;
    background: linear-gradient(90deg, #bfa14a, #d4af37, #bfa14a);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    margin-top: -5px;
    font-weight: 500;
    letter-spacing: 0.3px;
  "
>
  Founder & CEO,SHAHRIAR GROUP
</p>

        </div>
      </div>
    </div>
  </div>
</section>

<!-- Add Google Fonts -->
<link
  href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Merriweather:wght@400;700&display=swap"
  rel="stylesheet"
/>

<!-- Responsive Fixes -->
<style>
  /* Keep title above image */
  .section-title {
    position: relative;
    z-index: 10;
  }

  /* CEO Image Styles */
  .ceo-img {
    width: 100%;
    height: auto;
    object-fit: cover;
    border: 4px solid #d4af37;
  }
/* ============================
   Tablet Devices (up to 992px)
============================ */
@media (max-width: 992px) {
  /* your tablet styles here */
  .ceo-img {
    width: 188px;
    height: 270px;
}
}

/* ============================
   Mobile Devices (up to 768px)
============================ */
@media (max-width: 768px) {
  /* your mobile styles here */
  .ceo-img {
    width: 188px;
    height: 270px;
  }

}

/* ============================
   Small Mobile Devices (up to 576px)
============================ */
@media (max-width: 576px) {
  /* your small mobile styles here */
  .ceo-img {
    width: 188px;
    height: 270px;
  }

}

  .ceo-img-wrapper {
    position: relative;
    z-index: 1;
  }

  /* Desktop View */
  @media (min-width: 992px) {
    .ceo-img-wrapper {
      margin-top: -200px;
    }

    .ceo-img {
      height: 580px;
      object-fit: cover;
    }
  }

  /* Mobile View */
  @media (max-width: 991.98px) {
    .section-title {
      font-size: 1.8rem !important;
      padding-top: 1rem;
    }

    /* Make image appear before paragraph */
    .ceo-img-wrapper {
      margin-top: 1rem !important;
      order: 1 !important;
    }

    .ceo-content {
      order: 2 !important;
      margin-top: 1.2rem;
    }
  }
</style>

<!-- ============================================== 
   TEAM STRUCTURE (CLEAN CORPORATE GRID)
============================================== -->
<section class="team-structure-section">
  <div class="container text-center">

    <h2 class="team-title">
      Organizational Structure
    </h2>
    <h3 class="team-subtitle">
      
    </h3>

    <div class="team-grid">

      <!-- CEO -->
      <div class="team-card">
        <h4>Alom Shah</h4>
        <p>Founder, Chairman & CEO</p>
      </div>

      <!-- Others -->
      <div class="team-card"><h4>Ms. Natasha</h4><p>Head of Global Expansion</p></div>
      <div class="team-card"><h4>Ms. Riya</h4><p>Business Development Manager</p></div>
      <div class="team-card"><h4>Himel</h4><p>Business Development Manager</p></div>
      <div class="team-card"><h4>Halim</h4><p>Operations Manager</p></div>
      <div class="team-card"><h4>Mir Razia</h4><p>Assistant Operations Manager</p></div>
      <div class="team-card"><h4>Milon Das</h4><p>Logistics & Coordination Officer</p></div>
      <div class="team-card"><h4>Md. Rahim</h4><p>Senior Accountant & Financial Analyst</p></div>
      <div class="team-card"><h4>Musa Ibrahim</h4><p>Accounts Officer</p></div>
      <div class="team-card"><h4>Zahid Hasan</h4><p>IT & System Administrator</p></div>
      <div class="team-card"><h4>Karir Ahmed</h4><p>Technical Support Executive</p></div>
      <div class="team-card"><h4>Yitr Chana</h4><p>Project Manager</p></div>
      <div class="team-card"><h4>Shah Alam</h4><p>Site Supervisor</p></div>
      <div class="team-card"><h4>Avi Rahman</h4><p>Marketing Manager</p></div>
      <div class="team-card"><h4>Samim Hossain</h4><p>Digital Marketing Executive</p></div>
      <div class="team-card"><h4>Chana Ibrahim</h4><p>Human Resources Manager</p></div>
      <div class="team-card"><h4>Karir Ahmed</h4><p>Administrative Officer</p></div>

    </div>

  </div>
</section>

<!-- ================= CSS ================= -->
<style>
/* ================= TEAM STRUCTURE PREMIUM ================= */

.team-structure-section {
  background: #ffffff;
  padding: 6rem 0;
}

/* TITLE */
.team-title {
  font-size: 2.6rem;
  color: #d4af37;
  font-weight: 700;
}

.team-subtitle {
  font-size: 1.5rem;
  color: #d4af37;
  margin-bottom: 50px;
}

/* GRID */
.team-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
  gap: 25px;
}

/* CARD (MAIN DESIGN) */
.team-card {
  background: linear-gradient(135deg, #0b1a13, #004d33);
  padding: 22px;
  border-radius: 16px;
  text-align: center;

  border: 1px solid rgba(212,175,55,0.3);
  position: relative;
  overflow: hidden;

  transition: all 0.4s ease;
}

/* GOLD GLOW BORDER EFFECT */
.team-card::before {
  content: "";
  position: absolute;
  inset: 0;
  border-radius: 16px;
  padding: 1px;

  background: linear-gradient(120deg, transparent, #d4af37, transparent);
  opacity: 0;
  transition: 0.4s;
}

/* TEXT */
.team-card h4 {
  color: #f1c232;
  font-size: 1.05rem;
  margin-bottom: 6px;
  letter-spacing: 0.5px;
}

.team-card p {
  color: #d4af37;
  font-size: 0.85rem;
  opacity: 0.9;
}

/* HOVER EFFECT */
.team-card:hover {
  transform: translateY(-2px);
  box-shadow: 0 3px 10px rgba(212,175,55,0.08);
}

.team-card::before {
  opacity: 0;
}

.team-card:hover::before {
  opacity: 0.15;
}
/* ================= RESPONSIVE ================= */

@media(max-width:768px){
  .team-title { font-size: 2rem; }
  .team-subtitle { font-size: 1.2rem; }
}

@media(max-width:576px){
  .team-card {
    padding: 18px;
  }

  .team-card h4 {
    font-size: 0.95rem;
  }

  .team-card p {
    font-size: 0.8rem;
  }
}
</style>

<!-- ============================================== 
   TEAM VOICES (FULL AUTO SLIDER - PREMIUM)
============================================== -->
<section class="voices-section">
  <div class="container">

    <h3 class="voices-title text-center mb-5">
      Our Team Voices
    </h3>

    <div class="voices-wrapper">
      <div class="voices-track">

        <!-- CARD -->
        <div class="voice-card">
          <p>“I believe in building global connections and creating opportunities across borders. Together, we are expanding SHAHRIAR GROUP worldwide.”</p>
          <h5>Natasha Karim</h5>
          <span>Head of Global Expansion</span>
        </div>

        <div class="voice-card">
          <p>“My focus is to build strong partnerships and grow our business globally. Every connection we make brings us closer to our vision.”</p>
          <h5>Riya Ahmed</h5>
          <span>Business Development Manager</span>
        </div>

        <div class="voice-card">
          <p>“I am committed to expanding our market and creating new opportunities that drive long-term growth for the company.”</p>
          <h5>Himel Khan</h5>
          <span>Business Development Manager</span>
        </div>

        <div class="voice-card">
          <p>“I ensure that our operations run smoothly every day, because strong systems are the backbone of a successful business.”</p>
          <h5>Halim Hossain</h5>
          <span>Operations Manager</span>
        </div>

        <div class="voice-card">
          <p>“I support the team to maintain efficiency and discipline in our daily operations, ensuring everything moves forward.”</p>
          <h5>Mir Rai</h5>
          <span>Assistant Operations Manager</span>
        </div>

        <div class="voice-card">
          <p>“I manage coordination and logistics to keep our global operations connected and efficient.”</p>
          <h5>Milon Das</h5>
          <span>Logistics & Coordination Officer</span>
        </div>

        <div class="voice-card">
          <p>“I focus on financial stability and smart investment decisions to support long-term growth.”</p>
          <h5>Rahim Uddin</h5>
          <span>Senior Accountant & Financial Analyst</span>
        </div>

        <div class="voice-card">
          <p>“I ensure accurate financial management and support the company’s financial structure.”</p>
          <h5>Musa Ibrahim</h5>
          <span>Accounts Officer</span>
        </div>

        <div class="voice-card">
          <p>“I manage and protect our digital systems to ensure smooth and secure operations.”</p>
          <h5>Zahid Hasan</h5>
          <span>IT & System Administrator</span>
        </div>

        <div class="voice-card">
          <p>“I provide technical support to keep our systems running without interruption.”</p>
          <h5>Karir Ahmed</h5>
          <span>Technical Support Executive</span>
        </div>

        <div class="voice-card">
          <p>“I lead projects with discipline and ensure every task is completed with quality and efficiency.”</p>
          <h5>Yitr Chana</h5>
          <span>Project Manager</span>
        </div>

        <div class="voice-card">
          <p>“I oversee field operations and ensure projects are executed properly and on time.”</p>
          <h5>Shah Alam</h5>
          <span>Site Supervisor</span>
        </div>

        <div class="voice-card">
          <p>“I build strong brand presence and create strategies that drive growth and visibility.”</p>
          <h5>Avi Rahman</h5>
          <span>Marketing Manager</span>
        </div>

        <div class="voice-card">
          <p>“I manage our digital platforms and help expand our online reach globally.”</p>
          <h5>Samim Hossain</h5>
          <span>Digital Marketing Executive</span>
        </div>

        <div class="voice-card">
          <p>“I support and develop our team, because people are the foundation of our success.”</p>
          <h5>Chana Ibrahim</h5>
          <span>Human Resources Manager</span>
        </div>

      </div>
    </div>

  </div>
</section>

<style>
.voices-section {
  background: linear-gradient(135deg, #004d33, #0b1a13);
  padding: 6rem 0;
  overflow: hidden;
}

.voices-title {
  color: #d4af37;
  font-size: 2rem;
  font-weight: 600;
}

/* SLIDER */
.voices-wrapper {
  overflow: hidden;
}

.voices-track {
  display: flex;
  gap: 25px;
  width: max-content;
  animation: scrollVoices 45s linear infinite; /* slower for premium */
}

/* CARD */
.voice-card {
  min-width: 280px;
  max-width: 280px;

  background: rgba(255,255,255,0.05);
  backdrop-filter: blur(10px);

  border-radius: 16px;
  padding: 25px;

  color: #ddd;
  border: 1px solid rgba(212,175,55,0.2);

  transition: 0.3s;
}

.voice-card:hover {
  transform: translateY(-2px);
}

/* TEXT */
.voice-card p {
  font-size: 0.95rem;
  margin-bottom: 15px;
}

.voice-card h5 {
  color: #f1c232;
  margin-bottom: 3px;
}

.voice-card span {
  font-size: 0.8rem;
  color: #ccc;
}

/* ANIMATION */
@keyframes scrollVoices {
  0% { transform: translateX(0); }
  100% { transform: translateX(-50%); }
}

/* MOBILE */
@media(max-width:768px){
  .voice-card {
    min-width: 240px;
  }

  .voices-title {
    font-size: 1.5rem;
  }
}
</style>

<script>
document.addEventListener("DOMContentLoaded", function(){
  const track = document.querySelector(".voices-track");
  track.innerHTML += track.innerHTML;
});
</script>
  <!-- FONT AWESOME (ICON) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<!-- ============================================== -->
<!-- CSR SECTION -->
<section
  id="csr"
  class="py-5 csr-section wow animate__animated animate__slideInLeft animate__slow"
>
  <div class="container text-center">

    <h2 class="section-title text-white mb-4">
      Corporate Social Responsibility
    </h2>

    <p class="lead mb-5 col-lg-8 mx-auto text-light">
      Through the <strong>Shahriar Global Foundation</strong>, we believe that true success is measured not only by business growth but by the positive impact we create in society. Through Shahriar Global Foundation, we are committed to driving meaningful change, empowering communities, and building a sustainable future across the regions where we operate. Our CSR initiatives focus on key areas that contribute to long-term human development and global progress.
    </p>

    <div class="row mt-5">

      <!-- CARD 1 -->
      <div class="col-12 col-md-6 col-lg-3 mb-4">
        <div class="csr-card">
          <i class="fas fa-graduation-cap"></i>
          <h4>Education & Skill Development</h4>
          <p>
            Providing scholarships, vocational training, and modern education programs to empower the next generation of leaders and innovators.
          </p>
        </div>
      </div>

      <!-- CARD 2 -->
      <div class="col-12 col-md-6 col-lg-3 mb-4">
        <div class="csr-card">
          <i class="fas fa-heartbeat"></i>
          <h4>Health & Well-being</h4>
          <p>
            Supporting medical camps, healthcare initiatives, and community health centers to ensure access to essential healthcare services.
          </p>
        </div>
      </div>

      <!-- CARD 3 -->
      <div class="col-12 col-md-6 col-lg-3 mb-4">
        <div class="csr-card">
          <i class="fas fa-venus"></i>
          <h4>Women Empowerment</h4>
          <p>
            Promoting gender equality and supporting women entrepreneurs through financial assistance, training, and business opportunities.
          </p>
        </div>
      </div>

      <!-- CARD 4 -->
      <div class="col-12 col-md-6 col-lg-3 mb-4">
        <div class="csr-card">
          <i class="fas fa-home"></i>
          <h4>Community Development</h4>
          <p>
            Investing in infrastructure, local development projects, and social initiatives to improve quality of life and create sustainable communities.
          </p>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- ============================================== -->
<!-- CSS STYLE -->
<style>

/* BACKGROUND */
.csr-section {
  background: radial-gradient(circle at center, #0b1f1a, #020a08);
  color: #fff;
}

/* CARD */
.csr-card {
  background: rgba(255, 255, 255, 0.03);
  border: 1px solid rgba(212, 175, 55, 0.4);
  border-radius: 15px;
  padding: 30px 20px;
  height: 100%;
  transition: 0.4s;
  backdrop-filter: blur(10px);
  text-align: left;
}

/* ICON */
.csr-card i {
  font-size: 40px;
  color: #d4af37;
  margin-bottom: 15px;
}

/* TITLE */
.csr-card h4 {
  color: #d4af37;
  font-weight: 600;
  margin-bottom: 10px;
}

/* TEXT */
.csr-card p {
  color: #ccc;
  font-size: 14px;
  line-height: 1.6;
}

/* HOVER */
.csr-card:hover {
  transform: translateY(-8px);
  border-color: #d4af37;
  box-shadow: 0 0 25px rgba(212, 175, 55, 0.3);
}

/* RESPONSIVE */
@media (max-width: 768px) {
  .csr-card {
    text-align: left;
  }
}

</style>

</div>
    <h3 class="mt-5 text-gold fw-bold text-center" data-i18n="csr_gallery_title">
      Ongoing Projects Gallery
    </h3>

    <div class="row g-3 mt-3">
      <div class="col-md-4 col-sm-6">
        <img
          src="logo/i.jpg"
          class="img-fluid rounded-3 sg-card csr-img"
          alt="CSR Project 1"
        />
      </div>
      <div class="col-md-4 col-sm-6">
        <img
          src="logo/ChatGPT Image Nov 12, 2025, 11_05_19 PM.png"
          class="img-fluid rounded-3 sg-card csr-img"
          alt="CSR Project 2"
        />
      </div>
      <div class="col-md-4 col-sm-6">
        <img
          src="logo/dev.jpeg"
          class="img-fluid rounded-3 sg-card csr-img"
          alt="CSR Project 3"
        />
      </div>
    </div>


  </div>
</section>

<!-- Image Styling -->
<style>
  .csr-img {
    width: 100%;
    height: 260px; /* adjust if needed */
    object-fit: cover;
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
  }

  @media (max-width: 768px) {
    .csr-img {
      height: 220px;
    }
  }
</style>

<!-- ============================================== 
     NEWS & EVENTS PAGE
=============================================== -->
<section
  id="news"
  class="py-5 bg-deep-green text-light wow animate__animated animate__slideInLeft animate__slow"
>
  <div class="container text-center">

    <h2 class="section-title text-light">
      Latest News & Events
    </h2>

    <p class="lead mb-5 col-lg-8 mx-auto">
      Stay updated with our latest milestones, business expansions, and global developments.
    </p>

    <!-- GRID -->
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">

      <!-- 1 -->
      <div class="col">
        <div class="card sg-card h-100 bg-dark text-light">
          <img src="https://placehold.co/600x300/D4AF37/0b1a13?text=Energy" class="card-img-top">
          <div class="card-body text-start">
            
            <span class="badge rounded-pill bg-gold text-dark mb-2">NEWS</span>
            <div class="text-gold small mb-1">Energy</div>

            <h5 class="card-title text-gold">
              Shahriar Energy Expands Solar Investment
            </h5>

            <p class="card-text small">
              Shahriar Energy LLC is expanding its renewable energy portfolio with new solar projects across international markets, strengthening its commitment to sustainable growth.
            </p>

            <a href="#" class="btn btn-sm btn-outline-light mt-2">Read More</a>
          </div>
        </div>
      </div>

      <!-- 2 -->
      <div class="col">
        <div class="card sg-card h-100 bg-dark text-light">
          <img src="https://placehold.co/600x300/D4AF37/0b1a13?text=Global" class="card-img-top">
          <div class="card-body text-start">

            <span class="badge rounded-pill bg-gold text-dark mb-2">NEWS</span>
            <div class="text-gold small mb-1">Global Expansion</div>

            <h5 class="card-title text-gold">
              Shahriar Group Strengthens Global Presence
            </h5>

            <p class="card-text small">
              Shahriar Group continues to expand into new international markets, building strategic partnerships and enhancing its multi-industry global operations.
            </p>

            <a href="#" class="btn btn-sm btn-outline-light mt-2">Read More</a>
          </div>
        </div>
      </div>

      <!-- 3 -->
      <div class="col">
        <div class="card sg-card h-100 bg-dark text-light">
          <img src="https://placehold.co/600x300/D4AF37/0b1a13?text=Tech" class="card-img-top">
          <div class="card-body text-start">

            <span class="badge rounded-pill bg-gold text-dark mb-2">NEWS</span>
            <div class="text-gold small mb-1">Technology</div>

            <h5 class="card-title text-gold">
              Shahriar Primex Tech Launches SaaS Platform
            </h5>

            <p class="card-text small">
              Shahriar Primex Tech LLC introduces a new SaaS platform designed to support global businesses with scalable and innovative digital solutions.
            </p>

            <a href="#" class="btn btn-sm btn-outline-light mt-2">Read More</a>
          </div>
        </div>
      </div>

      <!-- 4 -->
      <div class="col">
        <div class="card sg-card h-100 bg-dark text-light">
          <img src="https://placehold.co/600x300/D4AF37/0b1a13?text=Real+Estate" class="card-img-top">
          <div class="card-body text-start">

            <span class="badge rounded-pill bg-gold text-dark mb-2">NEWS</span>
            <div class="text-gold small mb-1">Real Estate</div>

            <h5 class="card-title text-gold">
              Shahriar Developments Expands Property Portfolio
            </h5>

            <p class="card-text small">
              Shahriar Global Developments LLC launches new residential and commercial projects, focusing on long-term investment and infrastructure growth.
            </p>

            <a href="#" class="btn btn-sm btn-outline-light mt-2">Read More</a>
          </div>
        </div>
      </div>

      <!-- 5 -->
      <div class="col">
        <div class="card sg-card h-100 bg-dark text-light">
          <img src="https://placehold.co/600x300/D4AF37/0b1a13?text=Hospitality" class="card-img-top">
          <div class="card-body text-start">

            <span class="badge rounded-pill bg-gold text-dark mb-2">NEWS</span>
            <div class="text-gold small mb-1">Hospitality</div>

            <h5 class="card-title text-gold">
              Shahriar Hospitality Expands Hotel Operations
            </h5>

            <p class="card-text small">
              Shahriar Global Hospitality LLC continues to expand its hotel and food business, delivering premium service and strengthening revenue streams.
            </p>

            <a href="#" class="btn btn-sm btn-outline-light mt-2">Read More</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>
      <!-- ============================================== 
        7. GALLERY PAGE
        =============================================== -->
      <section
        id="gallery"
        class="py-5 wow animate__animated animate__slideInLeft animate__slow"
      >
        <div class="container text-center">
          <h2 class="section-title" data-i18n="gallery_title">Photo Gallery</h2>
          <p class="lead mb-4" data-i18n="gallery_p1">
            A visual journey through our projects, events, and global
            operations.
          </p>

          <!-- Filter Buttons -->
          <div class="d-flex justify-content-center flex-wrap mb-4">
            <button
              class="btn btn-gold btn-sm mx-1 my-1"
              data-filter="all"
              data-i18n="gallery_filter_all"
            >
              All
            </button>
            <button
              class="btn btn-outline-secondary btn-sm mx-1 my-1"
              data-filter="csr"
              data-i18n="gallery_filter_csr"
            >
              CSR
            </button>
            <button
              class="btn btn-outline-secondary btn-sm mx-1 my-1"
              data-filter="energy"
              data-i18n="gallery_filter_energy"
            >
              Energy
            </button>
            <button
              class="btn btn-outline-secondary btn-sm mx-1 my-1"
              data-filter="motors"
              data-i18n="gallery_filter_motors"
            >
              Motors
            </button>
            <button
              class="btn btn-outline-secondary btn-sm mx-1 my-1"
              data-filter="hotel"
              data-i18n="gallery_filter_hotel"
            >
              Hotel
            </button>
            <button
              class="btn btn-outline-secondary btn-sm mx-1 my-1"
              data-filter="rice"
              data-i18n="gallery_filter_rice"
            >
              Rice Mills
            </button>
          </div>

          <!-- Image Grid -->
          <div class="row g-3">
            <div class="col-lg-3 col-md-4 col-sm-6" data-category="csr">
              <img
                src="logo/do.jpg"
                class="img-fluid rounded-3 sg-card w-100"
                alt="Gallery Image"
              />
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6" data-category="energy">
              <img
                src="logo/ex.jpg"
                class="img-fluid rounded-3 sg-card w-100"
                alt="Gallery Image"
              />
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6" data-category="motors">
              <img
                src="logo/ag.jpg"
                class="img-fluid rounded-3 sg-card w-100"
                alt="Gallery Image"
              />
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6" data-category="hotel">
              <img
                src="logo/ho.jpg"
                class="img-fluid rounded-3 sg-card w-100"
                alt="Gallery Image"
              />
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6" data-category="rice">
              <img
                src="logo/ta.jpg"
                class="img-fluid rounded-3 sg-card w-100"
                alt="Gallery Image"
              />
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6" data-category="energy">
              <img
                src="logo/dev.jpeg"
                class="img-fluid rounded-3 sg-card w-100"
                alt="Gallery Image"
              />
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6" data-category="csr">
              <img
                src="logo/hi.jpg"
                class="img-fluid rounded-3 sg-card w-100"
                alt="Gallery Image"
              />
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6" data-category="motors">
              <img
                src="logo/mi.jpg"
                class="img-fluid rounded-3 sg-card w-100"
                alt="Gallery Image"
              />
            </div>
          </div>
        </div>
      </section>
      <style>
  /* Uniform gallery image frames */
  .sg-card {
    width: 100%;
    height: 220px; /* fixed frame height */
    object-fit: cover; /* ensures image fills the frame neatly */
    border: 3px solid #fff; /* optional clean white border */
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  /* Hover effect */
  .sg-card:hover {
    transform: scale(1.05);
    box-shadow: 0 8px 18px rgba(0, 0, 0, 0.2);
  }

  /* Responsive Adjustments */
  @media (max-width: 992px) {
    .sg-card {
      height: 200px;
    }
  }

  @media (max-width: 768px) {
    .sg-card {
      height: 180px;
    }
  }

  @media (max-width: 576px) {
    .sg-card {
      height: 160px;
    }
  }
</style>


  <!-- ============================================== 
    8. GLOBAL PRESENCE PAGE
=============================================== -->
<section
  id="global"
  class="py-5 bg-deep-green text-light wow animate__animated animate__slideInLeft animate__slow"
>
  <div class="container text-center">

    <!-- TITLE -->
    <h2 class="section-title text-light">
      Our Global Presence
    </h2>

    <p class="lead mb-5 col-lg-8 mx-auto">
      Shahriar Group operates from key regional hubs, allowing us to connect with diverse markets and deliver localized excellence.
    </p>

    <!-- 🔥 GLOBAL PRESENCE TEXT DESIGN -->
    <div class="global-box mb-5">

      <!-- TITLE -->
      <h3 class="gold-title">Global Presence</h3>

      <!-- COUNTRIES -->
      <div class="countries">

        <div>🇨🇳 China</div>
        <div>🇷🇺 Russia</div>
        <div>🇯🇵 Japan</div>

        <div>🇫🇯 Fiji</div>
        <div>🇨🇦 Canada</div>
        <div>🇹🇭 Thailand</div>
        <div>🇰🇭 Cambodia</div>

        <div>🇧🇩 Bangladesh</div>
        <div>🇦🇪 United Arab Emirates</div>
        <div>🇺🇸 United States</div>

      </div>

      <div class="gold-line"></div>

      <!-- CONTACT -->
      <h3 class="gold-title">Contact</h3>

      <div class="contact-info">

        <p>
          <i class="fab fa-whatsapp text-gold me-2"></i>
          <strong>WhatsApp:</strong> +66 83 850 3337 | +855 96 416 2244
        </p>

        <p>
          <i class="fas fa-envelope text-gold me-2"></i>
          info@shahriargroup.com
        </p>

        <p>
          <i class="fas fa-globe text-gold me-2"></i>
          www.shahriargroup.com
        </p>

      </div>

      <p class="quote">
        "Building a Global Business Empire."
      </p>

    </div>

    <!-- OFFICE CARDS -->
<div class="row justify-content-center g-4">

  <!-- HEAD OFFICE -->
  <div class="col-md-6 col-lg-5">
    <div class="office-card">

      <h2 class="office-title">Head Office</h2>

      <h4 class="office-country">🇸🇬 Singapore</h4>
      <p class="office-sub">Global Headquarters</p>

      <div class="divider"></div>

      <p><i class="fas fa-map-marker-alt text-gold me-2"></i> Marina Bay Financial Centre</p>
      <p><i class="fas fa-envelope text-gold me-2"></i> ceo@shahriargroup.com</p>
      <p><i class="fas fa-phone text-gold me-2"></i> +66 83 850 3337</p>

      <div class="divider"></div>

      <p class="quote">
        "Global Leadership. Strategic Excellence."
      </p>

      <ul class="features">
        <li>Open for Global Partnerships</li>
        <li>24/7 Business Support</li>
      </ul>

    </div>
  </div>

  <!-- REGIONAL OFFICE -->
  <div class="col-md-6 col-lg-5">
    <div class="office-card">

      <h2 class="office-title">Regional Office</h2>

      <h4 class="office-country">🇬🇪 Georgia</h4>
      <p class="office-sub">Regional Business Hub</p>

      <div class="divider"></div>

      <p><i class="fas fa-map-marker-alt text-gold me-2"></i> Tbilisi Business District</p>
      <p><i class="fas fa-envelope text-gold me-2"></i> ceo@shahriargroup.com</p>
      <p><i class="fas fa-phone text-gold me-2"></i> +66 83 850 3337</p>

      <div class="divider"></div>

      <p class="quote">
        "Expanding Regional Strength. Building Global Impact."
      </p>

      <div class="features-row">
        <span>🤝 Strategic Partnerships</span>
        <span>⏱ 24/7 Support</span>
      </div>

    </div>
  </div>

</div>

  </div>
</section>

<!-- CSS -->
<style>
/* office Regional */

/* CARD */
.office-card {
  background: radial-gradient(circle at center, #0b1f1a, #020a08);
  border: 1px solid rgba(212,175,55,0.5);
  border-radius: 20px;
  padding: 30px;
  text-align: center;
  transition: 0.4s;
  position: relative;
}

/* HOVER */
.office-card:hover {
  box-shadow: 0 0 30px rgba(212,175,55,0.3);
  transform: translateY(-5px);
}

/* TITLE */
.office-title {
  color: #d4af37;
  font-size: 28px;
  margin-bottom: 10px;
}

/* COUNTRY */
.office-country {
  color: #fff;
  font-size: 20px;
}

/* SUB */
.office-sub {
  color: #d4af37;
  font-size: 14px;
  margin-bottom: 15px;
}

/* DIVIDER */
.divider {
  height: 1px;
  background: linear-gradient(to right, transparent, #d4af37, transparent);
  margin: 15px 0;
}

/* TEXT */
.office-card p {
  color: #ccc;
  font-size: 14px;
}

/* QUOTE */
.quote {
  font-style: italic;
  color: #aaa;
  margin-top: 10px;
}

/* FEATURES */
.features {
  list-style: none;
  padding: 0;
  margin-top: 10px;
}

.features li {
  color: #ddd;
  margin-bottom: 5px;
}

/* ROW FEATURES */
.features-row {
  display: flex;
  justify-content: center;
  gap: 20px;
  margin-top: 10px;
  color: #ddd;
}

/* GOLD */
.text-gold {
  color: #d4af37;
}



/* BOX */
.global-box {
  background: radial-gradient(circle at center, #0b1f1a, #020a08);
  border: 1px solid rgba(212,175,55,0.5);
  border-radius: 20px;
  padding: 30px;
}

/* TITLE */
.gold-title {
  color: #d4af37;
  margin-bottom: 20px;
}

/* COUNTRIES */
.countries {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 15px 25px;
  margin-bottom: 20px;
}

.countries div {
  color: #fff;
  font-size: 15px;
}

/* LINE */
.gold-line {
  height: 2px;
  background: linear-gradient(to right, transparent, #d4af37, transparent);
  margin: 20px 0;
}

/* CONTACT */
.contact-info p {
  color: #ccc;
  margin-bottom: 8px;
}

/* QUOTE */
.quote {
  margin-top: 20px;
  font-style: italic;
  color: #aaa;
}

/* GOLD */
.text-gold {
  color: #d4af37;
}

</style>
      <!-- ============================================== 
        9. CONTACT US PAGE
        =============================================== -->
      <section
        id="contact"
        class="py-5 bg-light wow animate__animated animate__slideInLeft animate__slow"
      >
        <div class="container text-center">
          <h2 class="section-title" data-i18n="contact_title">Get In Touch</h2>
          <p class="lead mb-5 col-lg-8 mx-auto" data-i18n="contact_p1">
            We are always ready to connect. Please use the form below for
            inquiries or visit one of our offices.
          </p>

          <div class="row">
            <!-- Contact Form -->
            <div class="col-lg-6 mb-4">
              <div class="sg-card p-4 h-100">
                <h4 class="text-gold mb-4" data-i18n="send_message_title">
                  Send Us a Message
                </h4>
                <form>
                  <div class="mb-3">
                    <input
                      type="text"
                      class="form-control"
                      data-i18n-placeholder="form_name"
                      placeholder="Your Name"
                      required
                    />
                  </div>
                  <div class="mb-3">
                    <input
                      type="email"
                      class="form-control"
                      data-i18n-placeholder="form_email"
                      placeholder="Your Email"
                      required
                    />
                  </div>
                  <div class="mb-3">
                    <textarea
                      class="form-control"
                      rows="4"
                      data-i18n-placeholder="form_message"
                      placeholder="Your Message"
                      required
                    ></textarea>
                  </div>
                  <button
                    type="submit"
                    class="btn btn-gold w-100"
                    data-i18n="form_submit"
                  >
                    Submit Inquiry
                  </button>
                </form>
              </div>
            </div>

            <!-- Office and Social Info -->
            <div class="col-lg-6 mb-4">
              <div class="sg-card p-4 h-100 bg-dark text-light">
                <h4 class="text-gold mb-4" data-i18n="office_info_title">
                  Head & Regional Offices
                </h4>
                <div class="row text-start small">
                  <div class="col-md-6 mb-3">
                    <p
                      class="fw-bold mb-1 text-gold"
                      data-i18n="office_dhaka_label"
                    >
                      Head Office (🇸🇬 Singapore)
                    </p>
                    <p class="mb-1" data-i18n="dhaka_phone_label">
                      Phone:  +66 83 850 3337
                    </p>
                    <p class="mb-0" data-i18n="dhaka_email_label">
                      Email: ceo@shahriargroup.com
                    </p>
                  </div>
                  <div class="col-md-6 mb-3">
                    <p
                      class="fw-bold mb-1 text-gold"
                      data-i18n="office_pp_label"
                    >
                      Regional Office (🇬🇪 Georgia)
                    </p>
                    <p class="mb-1" data-i18n="pp_phone_label">
                      Phone: +66 83 850 3337
                    </p>
                    <p class="mb-0" data-i18n="pp_email_label">
                      Email: ceo@shahriargroup.com
                    </p>
                  </div>
                </div>

                <hr class="text-gold my-4" />

                <h4 class="text-gold mb-3" data-i18n="connect_title">
                  Connect With Us
                </h4>
                <a href="#" class="social-icon" aria-label="Facebook"
                  ><i class="fab fa-facebook-f"></i
                ></a>
                <a href="#" class="social-icon" aria-label="LinkedIn"
                  ><i class="fab fa-linkedin-in"></i
                ></a>
                <a href="#" class="social-icon" aria-label="Instagram"
                  ><i class="fab fa-instagram"></i
                ></a>
                <a href="#" class="social-icon" aria-label="Twitter"
                  ><i class="fab fa-x-twitter"></i
                ></a>
                <a href="#" class="social-icon" aria-label="WhatsApp"
                  ><i class="fab fa-whatsapp"></i
                ></a>
                
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    <!-- ============================================== 
    COMMON FOOTER
    =============================================== -->
    <footer class="footer-premium py-5">

  <div class="container">

    <!-- TOP BRAND -->
    <div class="text-center mb-5">
      <div class="d-flex justify-content-center align-items-center mb-3">
        <img src="{{ $siteLogo }}" style="height:70px;width:70px;border-radius:50%;">
        <h2 class="ms-3 text-gold fw-bold">SHAHRIAR GROUP</h2>
      </div>
      <p class="text-light mb-1">A Global Business & Investment Company</p>
      <p class="text-white small">
        Building a global business ecosystem through innovation, strategic investment, and international expansion.
      </p>
    </div>

    <!-- DIVIDER -->
    <div class="divider-line mb-5"></div>

    <!-- MAIN GRID -->
    <div class="row text-start">

      <!-- LINKS -->
      <div class="col-md-3 mb-4">
        <h5 class="text-gold mb-3">Quick Links</h5>
        <ul class="list-unstyled footer-links">
          <li><a href="#">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Divisions</a></li>
          <li><a href="#">Projects</a></li>
          <li><a href="#">Investment</a></li>
          <li><a href="#">Contact</a></li>
        </ul>
      </div>

      <!-- SOCIAL -->
      <div class="col-md-3 mb-4">
        <h5 class="text-gold mb-3">Follow Us</h5>
        <div class="social-icons">
          <i class="fab fa-facebook-f"></i>
          <i class="fab fa-linkedin-in"></i>
          <i class="fab fa-instagram"></i>
          <i class="fab fa-youtube"></i>
          <i class="fab fa-x-twitter"></i>
        </div>
      </div>

      <!-- CONTACT -->
      <div class="col-md-3 mb-4">
        <h5 class="text-gold mb-3">Contact</h5>
        <p class="small text-light mb-1">Email: ceo@shahriargroup.com</p>
        <p class="small text-light mb-1">Email: info@shahriargroup.com</p>
        <p class="small text-light mb-1">WhatsApp: +855 96 822 5091</p>
        <p class="small text-light">Website: www.shahriargroup.com</p>
      </div>

      <!-- GLOBAL -->
      <div class="col-md-3 mb-4">
        <h5 class="text-gold mb-3">Global Presence</h5>
        <p class="small text-light">
          Singapore | UAE | China <br>
          Canada | Thailand | Cambodia <br>
          Bangladesh | USA
        </p>
      </div>

    </div>

    <!-- BOTTOM -->
    <div class="text-center mt-4 pt-3 border-top border-secondary small">
      <p class="text-light mb-1">
        Singapore | UAE | China | Canada | Thailand | Cambodia | Bangladesh | USA
      </p>
      <p class="text-white">
        © <span class="text-gold">2026 SHAHRIAR GROUP</span> 🌍 All Rights Reserved
      </p>
    </div>

  </div>
</footer>

<!-- CSS -->
<style>

/* BACKGROUND */
.footer-premium {
  background: radial-gradient(circle at center, #0b1f1a, #020a08);
  color: #fff;
}

/* GOLD COLOR */
.text-gold {
  color: #d4af37;
}

/* LINKS */
.footer-links li {
  margin-bottom: 8px;
}

.footer-links a {
  color: #ccc;
  text-decoration: none;
  transition: 0.3s;
}

.footer-links a:hover {
  color: #d4af37;
  padding-left: 5px;
}

/* SOCIAL ICONS */
.social-icons i {
  font-size: 20px;
  margin-right: 12px;
  color: #d4af37;
  cursor: pointer;
  transition: 0.3s;
}

.social-icons i:hover {
  transform: scale(1.2);
}

/* DIVIDER */
.divider-line {
  height: 1px;
  background: linear-gradient(to right, transparent, #d4af37, transparent);
}

/* RESPONSIVE */
@media (max-width: 768px) {
  .social-icons {
    text-align: left;
  }
}

</style>
    <!-- Animate CSS -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />

    <!-- WOW JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

    <script>
      new WOW().init();
    </script>

    <!-- Bootstrap 5 JS Bundle -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      xintegrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
    <script>
      document.addEventListener("DOMContentLoaded", () => {
        const timelineItems = document.querySelectorAll(".timeline-item");

        const options = {
          root: null, // relative to the viewport
          rootMargin: "0px",
          threshold: 0.1, // Trigger when 10% of the item is visible
        };

        const observerCallback = (entries, observer) => {
          entries.forEach((entry) => {
            if (entry.isIntersecting) {
              entry.target.classList.add("in-view");
              observer.unobserve(entry.target);
            }
          });
        };

        const observer = new IntersectionObserver(observerCallback, options);

        timelineItems.forEach((item) => {
          observer.observe(item);
        });
      });
    </script>

    <script>
      // Localization Data Object
      const translations = {
        en: {
          // Meta & Titles
          page_title: "Shahriar Group | Global Vision, Endless Possibilities",
          brand_name: "Shahriar Group",
          brand_name_title: "Shahriar Group",
          hero_tagline: "Global Vision, Endless Possibilities",
          explore_companies: "Explore Our Companies",

          // Navigation
          nav_home: "Home",
          nav_about: "About Us",
          nav_subsidiaries: "Subsidiaries",
          nav_leadership: "Leadership",
          nav_csr: "CSR",
          nav_news: "News",
          nav_contact: "Contact",
          nav_language_current: "Language",

          // Home Section
          welcome_title: "Welcome to Shahriar Group",
          welcome_p1:
            "Shahriar Group is a diversified global conglomerate with operations spanning vital sectors including Energy, Hospitality, Real Estate, and Agro-business. Our commitment is to sustainable growth, technological innovation, and societal enrichment across all our ventures. We believe in building legacies that matter.",
          welcome_p2:
            "Since our inception, we have rapidly expanded our footprint by adhering to the highest standards of quality and integrity. Our diverse portfolio allows us to navigate global market complexities and create enduring value for our stakeholders and the communities we serve.",
          read_full_story: "Read Full Story",
          mv_title: "Mission & Vision",
          vision_title: "Our Vision",
          vision_p1:
            "To be recognized as a world-class, purpose-driven conglomerate that sets global benchmarks for **excellence and integrity**, driving economic prosperity and fostering sustainable communities globally.",
          vision_p2: "Objective: To establish global benchmarks of quality.",
          mission_title: "Our Mission",
          mission_p1:
            "To deliver **exceptional value** through innovative business practices, responsible resource management, and a commitment to the highest ethical standards in every market we serve globally.",
          mission_p2:
            "Goal: To provide value through innovative business practices.",
          achievements_title: "Our Achievements",
          ach_years: "Years of Experience",
          ach_subsidiaries: "Global Subsidiaries",
          ach_employees: "Employees Worldwide",
          ach_hubs: "Regional Hubs",

          // About Us
          history_title: "Who We Are: Our History",
          history_p1:
            "Founded in 2013, Shahriar Group quickly expanded from a local real estate developer into a leading regional conglomerate, guided by a singular vision of ethical and rapid growth. This timeline highlights our key milestones.",
          t_2013_title: "2013: Founding & Real Estate",
          t_2013_desc:
            "Shahriar Group is established, focusing on premium residential development in Dhaka, setting a new standard for quality construction.",
          t_2016_title: "2016: Entry into Hospitality",
          t_2016_desc:
            "Launch of Shahriar Hotel & Global Dine, marking the Group's successful diversification into the high-end service industry.",
          t_2018_title: "2018: Global Expansion",
          t_2018_desc:
            "Shahriar Global Nexus is formed to manage international partnerships, with the first regional office opening in Phnom Penh.",
          t_2021_title: "2021: Energy Sector Investment",
          t_2021_desc:
            "Acquisition of a major stake in Shahriar Energy Corporation, committing the Group to sustainable power generation.",
          t_2024_title: "2024: CSR Foundation Launch",
          t_2024_desc:
            "Official establishment of Shahnar Global Foundation, formalizing the Group's long-standing commitment to social responsibility.",
          values_title: "Our Core Values",
          value_integrity_title: "Integrity & Ethics",
          value_integrity_desc:
            "We operate with unwavering honesty, transparency, and the highest ethical standards in all our dealings.",
          value_innovation_title: "Innovation & Excellence",
          value_innovation_desc:
            "We seek continuous improvement and innovative solutions to deliver superior products and services globally.",
          value_people_title: "Commitment to People",
          value_people_desc:
            "We prioritize the growth, safety, and well-being of our employees, partners, and the communities we serve.",

          // Subsidiaries
          subsidiaries_title: "Our Global Subsidiaries",
          subsidiaries_p1:
            "The Shahriar Group is built upon a diverse portfolio of companies, each a leader in its respective sector, contributing to our overall global success.",
          sub_venture_name: "Shahriar Worldwide Venture",
          sub_venture_tag: "A bridge to global markets.",
          sub_venture_desc:
            "Strategic investments and international trade facilitation across high-growth regions.",
          sub_nexus_name: "Shahriar Global Nexus",
          sub_nexus_tag: "Connecting opportunities.",
          sub_nexus_desc:
            "Focuses on cross-border technological integration and venture capital.",
          sub_foundation_name: "Shahnar Global Foundation",
          sub_foundation_tag: "Empowering communities.",
          sub_foundation_desc:
            "Our non-profit arm dedicated to health, education, and women empowerment initiatives.",
          sub_hotel_name: "Shahriar Hotel & Global Dine",
          sub_hotel_tag: "Excellence in hospitality.",
          sub_hotel_desc:
            "A portfolio of luxury hotels and fine dining experiences across major cities.",
          sub_motors_name: "Shahriar Global Motors",
          sub_motors_tag: "Driving the future.",
          sub_motors_desc:
            "Import, distribution, and service of premium and electric vehicles.",
          sub_energy_name: "Shahriar Energy Corporation",
          sub_energy_tag: "Sustainable power solutions.",
          sub_energy_desc:
            "Investment and operation in solar, natural gas, and conventional power generation.",
          sub_agro_name: "Shahriar Agro & Livestock International",
          sub_agro_tag: "Nourishing the nation.",
          sub_agro_desc:
            "Large-scale modern farming and ethical livestock management.",
          sub_rice_name: "Shahriar Premium Rice Mills",
          sub_rice_tag: "Purity and quality.",
          sub_rice_desc:
            "Processing and distribution of high-quality, export-grade rice products.",
          sub_hospital_name: "Shahriar International Hospital",
          sub_hospital_tag: "Excellence in healthcare.",
          sub_hospital_desc:
            "Providing state-of-the-art medical services and patient-centric care.",
          sub_developers_name: "Shahriar Developers International",
          sub_developers_tag: "Pioneering real estate.",
          sub_developers_desc:
            "Creating landmark residential and commercial properties globally.",
          sub_visit_site: "Visit Site",

          // Leadership
          leadership_title: "Leadership & CEO Message",
          ceo_message_title: "Message from the CEO, Mr. Shah Alom",
          ceo_quote:
            "“Success is not just what we achieve, but how we inspire others to grow.”",
          ceo_name: "Mr. Shah Alom",
          ceo_p1:
            "At Shahriar Group, our foundation is built on a simple yet powerful philosophy: integrity breeds trust, and innovation fuels progress. We don't just build businesses; we build ecosystems where our partners, employees, and communities can thrive.",
          ceo_p2:
            "Our journey has been one of continuous evolution, from our roots in real estate to a diversified global entity encompassing energy, hospitality, and agro-business. This growth reflects the dedication of our diverse global team and our relentless pursuit of excellence.",
          ceo_p3:
            "We are committed to long-term sustainability and believe that corporate success must go hand-in-hand with social responsibility. Together, let us continue to realize endless possibilities.",
          ceo_title_footer: "Mr. Shah Alom, Chief Executive Officer",

          // CSR
          csr_title: "Corporate Social Responsibility",
          csr_p1:
            "Through the **Shahnar Global Foundation**, Shahriar Group is deeply invested in creating positive, lasting change in the communities where we operate. Our focus areas are critical to human development.",
          csr_education_title: "Education & Skill Development",
          csr_education_desc:
            "Providing scholarships and vocational training to empower the next generation of leaders and innovators.",
          csr_health_title: "Health & Well-being",
          csr_health_desc:
            "Supporting medical camps and building community health centers to ensure access to essential healthcare.",
          csr_women_title: "Women Empowerment",
          csr_women_desc:
            "Funding initiatives that promote gender equality and provide financial independence for women entrepreneurs.",
          csr_gallery_title: "Ongoing Projects Gallery",
          csr_future_plans: "Read About Future Plans",

          // News
          news_title: "Latest News & Events",
          news_p1:
            "Stay up-to-date with our milestones, new ventures, and community activities across the globe.",
          news_tag_energy: "Energy",
          news_tag_hospitality: "Hospitality",
          news_tag_csr: "CSR",
          news_1_title: "SG Energy Commits $500M to Solar Farms",
          news_1_desc:
            "Shahriar Energy Corporation announced a massive investment in renewable energy generation across the South Asian region, reinforcing its commitment to a green future.",
          news_1_date: "May 15, 2025",
          news_2_title: "Luxury Hotel Chain Opens in Dhaka",
          news_2_desc:
            "The grand opening of 'The Shahriar Palace' marks a significant addition to the city's luxury accommodation sector, managed by Hotel & Global Dine.",
          news_2_date: "April 28, 2025",
          news_3_title: "Foundation Hosts Annual Health Drive",
          news_3_desc:
            "Shahnar Global Foundation successfully concluded its annual free health check-up and vaccination drive, serving over 5,000 people in rural areas.",
          news_3_date: "April 05, 2025",
          news_read_more: "Read More",

          // Gallery
          gallery_title: "Photo Gallery",
          gallery_p1:
            "A visual journey through our projects, events, and global operations.",
          gallery_filter_all: "All",
          gallery_filter_csr: "CSR",
          gallery_filter_energy: "Energy",
          gallery_filter_motors: "Motors",
          gallery_filter_hotel: "Hotel",
          gallery_filter_rice: "Rice Mills",

          // Global Presence
          global_presence_title: "Our Global Presence",
          global_presence_p1:
            "Shahriar Group operates from key regional hubs, allowing us to connect with diverse markets and deliver localized excellence.",
          dhaka_office_title: "Head Office: Dhaka, Bangladesh",
          dhaka_address_line1: "18/3, Block F, Ring Road,Mohammadpur",
          dhaka_address_line2: "Dhaka 1207, Bangladesh",
          dhaka_phone: "Phone: +88 01335116051",
          dhaka_email: "Email: shahriar.agroup@gmail.com",
          phnom_penh_office_title: "Global Office: Phnom Penh, Cambodia",
          pp_address_line1:
            "Nexus Building, Street 51, Sangkat Boeung Keng Kang I",
          pp_address_line2: "Phnom Penh 12302, Cambodia",
          pp_phone: "Phone: +855 23 987 654",
          pp_email: "Email: shahriar.agroup@gmail.com",

          // Contact
          contact_title: "Get In Touch",
          contact_p1:
            "We are always ready to connect. Please use the form below for inquiries or visit one of our offices.",
          send_message_title: "Send Us a Message",
          form_name: "Your Name",
          form_email: "Your Email",
          form_message: "Your Message",
          form_submit: "Submit Inquiry",
          office_info_title: "Head & Global Offices",
          office_dhaka_label: "Head Office (Dhaka)",
          dhaka_phone_label: "Phone: +88 01335116051",
          dhaka_email_label: "Email: info@shahriargroup.com",
          office_pp_label: "Global Office (Phnom Penh)",
          pp_phone_label: "Phone: +855 23 987 654",
          pp_email_label: "Email: shahriar.agroup@gmail.com",
          connect_title: "Connect With Us",

          // Footer
          footer_brand: "Shahriar Group (SG)",
          footer_p1:
            "A diversified global conglomerate committed to sustainable growth, innovation, and ethical business practices worldwide.",
          footer_links_title: "Important Links",
          footer_follow: "Follow Us",
          footer_rights: "All rights reserved.",
          footer_credits: "Powered by Shahriar IT Division.",
        },
        bn: {
          // Meta & Titles
          page_title:
            "শাহরিয়ার গ্রুপ | বিশ্বজনীন দৃষ্টিভঙ্গি, অফুরন্ত সম্ভাবনা",
          brand_name: "শাহরিয়ার গ্রুপ",
          brand_name_title: "শাহরিয়ার গ্রুপ",
          hero_tagline: "বিশ্বজনীন দৃষ্টিভঙ্গি, অফুরন্ত সম্ভাবনা",
          explore_companies: "আমাদের কোম্পানিগুলো দেখুন",

          // Navigation
          nav_home: "হোম",
          nav_about: "আমাদের সম্পর্কে",
          nav_subsidiaries: "সহায়ক সংস্থা",
          nav_leadership: "নেতৃত্ব",
          nav_csr: "সিএসআর",
          nav_news: "খবর",
          nav_contact: "যোগাযোগ",
          nav_language_current: "ভাষা",

          // Home Section
          welcome_title: "শাহরিয়ার গ্রুপে স্বাগতম",
          welcome_p1:
            "শাহরিয়ার গ্রুপ একটি বৈচিত্র্যময় বৈশ্বিক ব্যবসায়িক প্রতিষ্ঠান যার কার্যক্রম শক্তি, আতিথেয়তা, রিয়েল এস্টেট এবং কৃষি-ব্যবসার মতো গুরুত্বপূর্ণ খাত জুড়ে বিস্তৃত। আমাদের প্রতিশ্রুতি হলো সকল উদ্যোগে টেকসই প্রবৃদ্ধি, প্রযুক্তিগত উদ্ভাবন এবং সামাজিক সমৃদ্ধি নিশ্চিত করা। আমরা এমন উত্তরাধিকার তৈরি করতে বিশ্বাস করি যা গুরুত্বপূর্ণ।",
          welcome_p2:
            "আমাদের শুরু থেকেই, আমরা গুণমান ও সততার সর্বোচ্চ মান বজায় রেখে দ্রুত আমাদের পদচিহ্ন প্রসারিত করেছি। আমাদের বৈচিত্র্যময় পোর্টফোলিও বৈশ্বিক বাজারের জটিলতা নেভিগেট করতে এবং আমাদের স্টেকহোল্ডার এবং আমরা যে সম্প্রদায়গুলিতে কাজ করি তাদের জন্য দীর্ঘস্থায়ী মূল্য তৈরি করতে সহায়তা করে।",
          read_full_story: "পুরো গল্প পড়ুন",
          mv_title: "লক্ষ্য ও উদ্দেশ্য",
          vision_title: "আমাদের লক্ষ্য",
          vision_p1:
            "একটি বিশ্বমানের, উদ্দেশ্য-চালিত সংস্থা হিসেবে পরিচিত হওয়া যা বৈশ্বিক স্তরে **উৎকর্ষ ও সততার** মানদণ্ড স্থাপন করে, অর্থনৈতিক সমৃদ্ধি চালনা করে এবং বিশ্বব্যাপী টেকসই সম্প্রদায় গড়ে তোলে।",
          vision_p2: "উদ্দেশ্য: বিশ্বব্যাপী গুণমানের মানদণ্ড স্থাপন করা।",
          mission_title: "আমাদের উদ্দেশ্য",
          mission_p1:
            "আমরা বিশ্বজুড়ে যে সমস্ত বাজারে পরিষেবা দিই, সেগুলিতে উদ্ভাবনী ব্যবসায়িক অনুশীলন, দায়িত্বশীল সম্পদ ব্যবস্থাপনা এবং সর্বোচ্চ নৈতিক মানদণ্ডে প্রতিশ্রুতির মাধ্যমে **অসাধারণ মূল্য** প্রদান করা।",
          mission_p2:
            "লক্ষ্য: উদ্ভাবনী ব্যবসায়িক অনুশীলনের মাধ্যমে মূল্য প্রদান করা।",
          achievements_title: "আমাদের অর্জন",
          ach_years: "বছরের অভিজ্ঞতা",
          ach_subsidiaries: "বৈশ্বিক সহায়ক সংস্থা",
          ach_employees: "বিশ্বব্যাপী কর্মী",
          ach_hubs: "আঞ্চলিক কেন্দ্র",

          // About Us
          history_title: "আমরা কারা: আমাদের ইতিহাস",
          history_p1:
            "২০১৩ সালে প্রতিষ্ঠিত শাহরিয়ার গ্রুপ দ্রুত স্থানীয় রিয়েল এস্টেট ডেভেলপার থেকে একটি নেতৃস্থানীয় আঞ্চলিক সংস্থায় পরিণত হয়েছে, যা নৈতিক ও দ্রুত প্রবৃদ্ধির একটি একক দৃষ্টিভঙ্গি দ্বারা পরিচালিত। এই সময়রেখা আমাদের মূল মাইলফলকগুলি তুলে ধরে।",
          t_2013_title: "২০১৩: প্রতিষ্ঠা ও রিয়েল এস্টেট",
          t_2013_desc:
            "শাহরিয়ার গ্রুপ প্রতিষ্ঠিত হয়, ঢাকায় প্রিমিয়াম আবাসিক উন্নয়নে মনোনিবেশ করে, যা নির্মাণ গুণমানের জন্য একটি নতুন মান স্থাপন করে।",
          t_2016_title: "২০১৬: আতিথেয়তা খাতে প্রবেশ",
          t_2016_desc:
            "শাহরিয়ার হোটেল ও গ্লোবাল ডাইনের যাত্রা শুরু, যা উচ্চমানের পরিষেবা শিল্পে গ্রুপের সফল বৈচিত্র্যকরণকে চিহ্নিত করে।",
          t_2018_title: "২০১৮: বৈশ্বিক সম্প্রসারণ",
          t_2018_desc:
            "আন্তর্জাতিক অংশীদারিত্ব পরিচালনার জন্য শাহরিয়ার গ্লোবাল নেক্সাস গঠিত হয়, যার প্রথম আঞ্চলিক কার্যালয় নম পেনে খোলা হয়।",
          t_2021_title: "২০২১: শক্তি খাতে বিনিয়োগ",
          t_2021_desc:
            "শাহরিয়ার এনার্জি কর্পোরেশনে একটি বড় অংশীদারিত্ব অধিগ্রহণ, গ্রুপকে টেকসই বিদ্যুৎ উৎপাদনে প্রতিশ্রুতিবদ্ধ করে।",
          t_2024_title: "২০২৪: সিএসআর ফাউন্ডেশন চালু",
          t_2024_desc:
            "শাহতাজ গ্লোবাল ফাউন্ডেশনের আনুষ্ঠানিক প্রতিষ্ঠা, যা সামাজিক দায়বদ্ধতার প্রতি গ্রুপের দীর্ঘদিনের প্রতিশ্রুতিকে আনুষ্ঠানিকভাবে রূপ দেয়।",
          values_title: "আমাদের মূল মূল্যবোধ",
          value_integrity_title: "সততা ও নৈতিকতা",
          value_integrity_desc:
            "আমরা আমাদের সমস্ত লেনদেনে অবিচল সততা, স্বচ্ছতা এবং সর্বোচ্চ নৈতিক মানদণ্ড বজায় রেখে কাজ করি।",
          value_innovation_title: "উদ্ভাবন ও শ্রেষ্ঠত্ব",
          value_innovation_desc:
            "আমরা বিশ্বব্যাপী উন্নত পণ্য ও পরিষেবা সরবরাহ করার জন্য ক্রমাগত উন্নতি এবং উদ্ভাবনী সমাধান খুঁজি।",
          value_people_title: "মানুষের প্রতি অঙ্গীকার",
          value_people_desc:
            "আমরা আমাদের কর্মচারী, অংশীদার এবং আমরা যে সম্প্রদায়গুলিকে পরিষেবা দিই তাদের বৃদ্ধি, নিরাপত্তা এবং মঙ্গলকে অগ্রাধিকার দিই।",

          // Subsidiaries
          subsidiaries_title: "আমাদের বিশ্বব্যাপী সহায়ক সংস্থা",
          subsidiaries_p1:
            "শাহরিয়ার গ্রুপ কোম্পানিগুলির একটি বৈচিত্র্যময় পোর্টফোলিওর উপর নির্মিত, যার প্রতিটি নিজ নিজ খাতে নেতৃত্ব দেয় এবং আমাদের সামগ্রিক বৈশ্বিক সাফল্যে অবদান রাখে।",
          sub_venture_name: "শাহরিয়ার ওয়ার্ল্ডওয়াইড ভেঞ্চার",
          sub_venture_tag: "বৈশ্বিক বাজারের সেতু।",
          sub_venture_desc:
            "উচ্চ-বৃদ্ধি অঞ্চলে কৌশলগত বিনিয়োগ এবং আন্তর্জাতিক বাণিজ্য সুবিধা প্রদান।",
          sub_nexus_name: "শাহরিয়ার গ্লোবাল নেক্সাস",
          sub_nexus_tag: "সুযোগের সংযোগকারী।",
          sub_nexus_desc:
            "সীমান্ত-পার প্রযুক্তিগত সংহতি এবং ভেঞ্চার ক্যাপিটালে মনোনিবেশ করে।",
          sub_foundation_name: "শাহরিয়ার গ্লোবাল ফাউন্ডেশন",
          sub_foundation_tag: "সম্প্রদায়কে ক্ষমতায়ন।",
          sub_foundation_desc:
            "স্বাস্থ্য, শিক্ষা, এবং নারী ক্ষমতায়ন উদ্যোগে নিবেদিত আমাদের অ-লাভজনক শাখা।",
          sub_hotel_name: "শাহরিয়ার হোটেল ও গ্লোবাল ডাইন",
          sub_hotel_tag: "আতিথেয়তায় শ্রেষ্ঠত্ব।",
          sub_hotel_desc:
            "প্রধান শহর জুড়ে বিলাসবহুল হোটেল এবং ফাইন ডাইনিং অভিজ্ঞতার একটি পোর্টফোলিও।",
          sub_motors_name: "শাহরিয়ার গ্লোবাল মোটরস",
          sub_motors_tag: "ভবিষ্যতের চালক।",
          sub_motors_desc:
            "প্রিমিয়াম এবং ইলেকট্রিক গাড়ির আমদানি, বিতরণ, এবং পরিষেবা।",
          sub_energy_name: "শাহরিয়ার এনার্জি কর্পোরেশন",
          sub_energy_tag: "টেকসই বিদ্যুৎ সমাধান।",
          sub_energy_desc:
            "সৌর, প্রাকৃতিক গ্যাস এবং প্রচলিত বিদ্যুৎ উৎপাদনে বিনিয়োগ ও পরিচালনা।",
          sub_agro_name: "শাহরিয়ার এগ্রো ও লাইভস্টক ইন্টারন্যাশনাল",
          sub_agro_tag: "জাতিকে পুষ্টি জোগানো।",
          sub_agro_desc:
            "বৃহৎ আকারের আধুনিক চাষাবাদ এবং নৈতিক গবাদি পশু ব্যবস্থাপনা।",
          sub_rice_name: "শাহরিয়ার প্রিমিয়াম রাইস মিলস",
          sub_rice_tag: "বিশুদ্ধতা এবং গুণমান।",
          sub_rice_desc:
            "উচ্চ-মানের, রপ্তানি-গ্রেডের চাল পণ্যের প্রক্রিয়াকরণ ও বিতরণ।",
          sub_hospital_name: "শাহরিয়ার আন্তর্জাতিক হাসপাতাল",
          sub_hospital_tag: "স্বাস্থ্যসেবায় শ্রেষ্ঠত্ব।",
          sub_hospital_desc:
            "সর্বাধুনিক চিকিৎসা পরিষেবা এবং রোগী-কেন্দ্রিক যত্ন প্রদান।",
          sub_developers_name: "শাহরিয়ার ডেভেলপারস ইন্টারন্যাশনাল",
          sub_developers_tag: "রিয়েল এস্টেটে পথিকৃৎ।",
          sub_developers_desc:
            "বিশ্বব্যাপী ল্যান্ডমার্ক আবাসিক এবং বাণিজ্যিক সম্পত্তি তৈরি করা।",
          sub_visit_site: "সাইট ভিজিট করুন",

          // Leadership
          leadership_title: "নেতৃত্ব ও এম ডির বার্তা",
          ceo_message_title: "এম ডি জনাব শাহ আলমের বার্তা",
          ceo_quote:
            "“সাফল্য কেবল আমরা কী অর্জন করি তা নয়, বরং অন্যদের কীভাবে বেড়ে উঠতে অনুপ্রাণিত করি।”",
          ceo_name: "জনাব শাহ আলম",
          ceo_p1:
            "শাহরিয়ার গ্রুপে, আমাদের ভিত্তি একটি সহজ কিন্তু শক্তিশালী দর্শনের উপর নির্মিত: সততা বিশ্বাস তৈরি করে এবং উদ্ভাবন অগ্রগতিকে চালিত করে। আমরা কেবল ব্যবসা তৈরি করি না; আমরা এমন পরিবেশ তৈরি করি যেখানে আমাদের অংশীদার, কর্মচারী এবং সম্প্রদায়গুলি উন্নতি করতে পারে।",
          ceo_p2:
            "আমাদের যাত্রা ছিল অবিচ্ছিন্ন বিবর্তনের, রিয়েল এস্টেটে আমাদের শিকড় থেকে শুরু করে শক্তি, আতিথেয়তা এবং কৃষি-ব্যবসা সমেত একটি বৈচিত্র্যময় বৈশ্বিক সত্তা পর্যন্ত। এই প্রবৃদ্ধি আমাদের বৈচিত্র্যময় বৈশ্বিক দলের উৎসর্গ এবং শ্রেষ্ঠত্বের জন্য আমাদের নিরলস সাধনাকে প্রতিফলিত করে।",
          ceo_p3:
            "আমরা দীর্ঘমেয়াদী স্থায়িত্বের জন্য প্রতিশ্রুতিবদ্ধ এবং বিশ্বাস করি যে কর্পোরেট সাফল্য সামাজিক দায়বদ্ধতার সাথে হাতে হাত মিলিয়ে চলতে হবে। আসুন, একসাথে আমরা অফুরন্ত সম্ভাবনাগুলি উপলব্ধি করতে থাকি।",
          ceo_title_footer: "জনাব শাহ আলম, প্রধান নির্বাহী কর্মকর্তা",

          // CSR
          csr_title: "সামাজিক দায়বদ্ধতা",
          csr_p1:
            "**শাহরিয়ার গ্লোবাল ফাউন্ডেশনের** মাধ্যমে, শাহরিয়ার গ্রুপ আমরা যেখানে কাজ করি সেই সম্প্রদায়গুলিতে ইতিবাচক, দীর্ঘস্থায়ী পরিবর্তন তৈরি করতে গভীরভাবে নিবেদিত। আমাদের মনোযোগের ক্ষেত্রগুলি মানব উন্নয়নের জন্য অত্যন্ত গুরুত্বপূর্ণ।",
          csr_education_title: "শিক্ষা ও দক্ষতা উন্নয়ন",
          csr_education_desc:
            "নেতা ও উদ্ভাবকদের পরবর্তী প্রজন্মকে ক্ষমতায়ন করতে বৃত্তি এবং বৃত্তিমূলক প্রশিক্ষণ প্রদান।",
          csr_health_title: "স্বাস্থ্য ও কল্যাণ",
          csr_health_desc:
            "অত্যাবশ্যকীয় স্বাস্থ্যসেবা নিশ্চিত করতে মেডিকেল ক্যাম্প সমর্থন করা এবং কমিউনিটি স্বাস্থ্য কেন্দ্র নির্মাণ।",
          csr_women_title: "নারী ক্ষমতায়ন",
          csr_women_desc:
            "লিঙ্গ সমতা প্রচার এবং নারী উদ্যোক্তাদের জন্য আর্থিক স্বাধীনতা প্রদানের উদ্যোগে অর্থায়ন।",
          csr_gallery_title: "চলমান প্রকল্পের গ্যালারি",
          csr_future_plans: "ভবিষ্যৎ পরিকল্পনা সম্পর্কে পড়ুন",

          // News
          news_title: "সর্বশেষ খবর ও ইভেন্ট",
          news_p1:
            "বিশ্বজুড়ে আমাদের মাইলফলক, নতুন উদ্যোগ এবং কমিউনিটি কার্যকলাপের সাথে আপডেট থাকুন।",
          news_tag_energy: "শক্তি",
          news_tag_hospitality: "আতিথেয়তা",
          news_tag_csr: "সিএসআর",
          news_1_title:
            "এসজি এনার্জির সৌর ফার্মে ৫০০ মিলিয়ন ডলার বিনিয়োগের প্রতিশ্রুতি",
          news_1_desc:
            "শাহরিয়ার এনার্জি কর্পোরেশন দক্ষিণ এশিয়া অঞ্চলে নবায়নযোগ্য বিদ্যুৎ উৎপাদনে একটি বিশাল বিনিয়োগের ঘোষণা দিয়েছে, যা সবুজ ভবিষ্যতের প্রতি তাদের প্রতিশ্রুতিকে জোরদার করে।",
          news_1_date: "১৫ মে, ২০২৫",
          news_2_title: "ঢাকায় বিলাসবহুল হোটেল চেইনের উদ্বোধন",
          news_2_desc:
            "'দ্য শাহরিয়ার প্যালেস'-এর গ্র্যান্ড ওপেনিং শহরের বিলাসবহুল আবাসন খাতে একটি উল্লেখযোগ্য সংযোজনকে চিহ্নিত করে, যা হোটেল ও গ্লোবাল ডাইন দ্বারা পরিচালিত।",
          news_2_date: "২৮ এপ্রিল, ২০২৫",
          news_3_title: "ফাউন্ডেশন কর্তৃক বার্ষিক স্বাস্থ্য ড্রাইভ আয়োজন",
          news_3_desc:
            "শাহরিয়ার গ্লোবাল ফাউন্ডেশন সফলভাবে তার বার্ষিক বিনামূল্যে স্বাস্থ্য পরীক্ষা এবং টিকাদান ড্রাইভ সম্পন্ন করেছে, গ্রামীণ অঞ্চলে ৫,০০০-এরও বেশি মানুষকে পরিষেবা দিয়েছে।",
          news_3_date: "০৫ এপ্রিল, ২০২৫",
          news_read_more: "আরও পড়ুন",

          // Gallery
          gallery_title: "ফটো গ্যালারি",
          gallery_p1:
            "আমাদের প্রকল্প, ইভেন্ট এবং বৈশ্বিক অপারেশনের একটি ভিজ্যুয়াল যাত্রা।",
          gallery_filter_all: "সব",
          gallery_filter_csr: "সিএসআর",
          gallery_filter_energy: "শক্তি",
          gallery_filter_motors: "মোটর",
          gallery_filter_hotel: "হোটেল",
          gallery_filter_rice: "রাইস মিলস",

          // Global Presence
          global_presence_title: "আমাদের বৈশ্বিক উপস্থিতি",
          global_presence_p1:
            "শাহরিয়ার গ্রুপ মূল আঞ্চলিক কেন্দ্রগুলি থেকে পরিচালনা করে, যা আমাদের বৈচিত্র্যময় বাজারের সাথে সংযোগ স্থাপন করতে এবং স্থানীয় শ্রেষ্ঠত্ব সরবরাহ করতে সহায়তা করে।",
          dhaka_office_title: "প্রধান কার্যালয়: ঢাকা, বাংলাদেশ",
          dhaka_address_line1: "১৮/৩, ব্লক এফ, রিং রোড, মোহাম্মদপুর",
          dhaka_address_line2: "ঢাকা ১২০৭, বাংলাদেশ",
          dhaka_phone: "ফোন: +৮৮০ ২ ১২৩৪ ৫৬৭৮",
          dhaka_email: "ইমেইল: shahriar.agroup@gmail.com",
          phnom_penh_office_title: "বৈশ্বিক কার্যালয়: নম পেন, কম্বোডিয়া",
          pp_address_line1:
            "নেক্সাস বিল্ডিং, স্ট্রিট ৫১, সাংকাত বোয়েং কেং কাং I",
          pp_address_line2: "নম পেন ১২৩০২, কম্বোডিয়া",
          pp_phone: "ফোন: +৮৫৫ ২৩ ৯৮৭ ৬৫৪",
          pp_email: "ইমেইল: shahriar.agroup@gmail.com",

          // Contact
          contact_title: "যোগাযোগ করুন",
          contact_p1:
            "আমরা সর্বদা সংযুক্ত হওয়ার জন্য প্রস্তুত। অনুসন্ধানের জন্য নীচের ফর্মটি ব্যবহার করুন বা আমাদের যেকোনো অফিসে ভিজিট করুন।",
          send_message_title: "আমাদের একটি বার্তা পাঠান",
          form_name: "আপনার নাম",
          form_email: "আপনার ইমেইল",
          form_message: "আপনার বার্তা",
          form_submit: "অনুসন্ধান জমা দিন",
          office_info_title: "প্রধান ও বৈশ্বিক কার্যালয়",
          office_dhaka_label: "প্রধান কার্যালয় (ঢাকা)",
          dhaka_phone_label: "ফোন: +৮৮০ ২ ১২৩৪ ৫৬৭৮",
          dhaka_email_label: "ইমেইল: shahriar.agroup@gmail.com",
          office_pp_label: "বৈশ্বিক কার্যালয় (নম পেন)",
          pp_phone_label: "ফোন: +৮৫৫ ২৩ ৯৮৭ ৬৫৪",
          pp_email_label: "ইমেইল: shahriar.agroup@gmail.com",
          connect_title: "আমাদের সাথে যুক্ত থাকুন",

          // Footer
          footer_brand: "শাহরিয়ার গ্রুপ (এসজি)",
          footer_p1:
            "টেকসই প্রবৃদ্ধি, উদ্ভাবন এবং নৈতিক ব্যবসায়িক অনুশীলনের জন্য প্রতিশ্রুতিবদ্ধ একটি বৈচিত্র্যময় বৈশ্বিক সংস্থা।",
          footer_links_title: "গুরুত্বপূর্ণ লিঙ্ক",
          footer_follow: "আমাদের অনুসরণ করুন",
          footer_rights: "সর্বস্বত্ব সংরক্ষিত।",
          footer_credits: "শাহরিয়ার আইটি বিভাগ দ্বারা চালিত।",
        },
      };

      // Function to update the UI elements
      function setLanguage(lang) {
        const currentTranslations = translations[lang];
        if (!currentTranslations) return;

        // 1. Update text content
        document.querySelectorAll("[data-i18n]").forEach((element) => {
          const key = element.getAttribute("data-i18n");
          if (currentTranslations[key]) {
            // Use innerHTML for text that contains markdown like **bold**
            element.innerHTML = currentTranslations[key];
          }
        });

        // 2. Update placeholders and other attributes
        document
          .querySelectorAll("[data-i18n-placeholder]")
          .forEach((element) => {
            const key = element.getAttribute("data-i18n-placeholder");
            if (currentTranslations[key]) {
              element.setAttribute("placeholder", currentTranslations[key]);
            }
          });

        // 3. Update the page title
        const titleKey = document
          .querySelector("title")
          .getAttribute("data-i18n");
        if (currentTranslations[titleKey]) {
          document.title = currentTranslations[titleKey];
        }

        // 4. Persist language choice
        localStorage.setItem("preferredLang", lang);

        // 5. Update HTML language attribute for accessibility
        document.documentElement.lang = lang;
      }

      // Initialize language on load
      document.addEventListener("DOMContentLoaded", () => {
        // Gallery filter initialization (copied from previous script)
        const filterButtons = document.querySelectorAll(
          "#gallery button[data-filter]"
        );
        const galleryItems = document.querySelectorAll(
          "#gallery .row [data-category]"
        );

        filterButtons.forEach((button) => {
          button.addEventListener("click", () => {
            const filter = button.getAttribute("data-filter");

            filterButtons.forEach((btn) => {
              btn.classList.remove("btn-gold");
              btn.classList.add("btn-outline-secondary");
            });
            button.classList.add("btn-gold");
            button.classList.remove("btn-outline-secondary");

            galleryItems.forEach((item) => {
              const category = item.getAttribute("data-category");
              if (filter === "all" || category === filter) {
                item.style.display = "block";
                item.classList.add("col-lg-3", "col-md-4", "col-sm-6");
              } else {
                item.style.display = "none";
                item.classList.remove("col-lg-3", "col-md-4", "col-sm-6");
              }
            });
          });
        });
        document.querySelector('#gallery button[data-filter="all"]').click();

        // Localization initialization
        const preferredLang = localStorage.getItem("preferredLang") || "en";
        setLanguage(preferredLang);

        // Add event listeners for language switch buttons
        document.querySelectorAll(".lang-switch").forEach((button) => {
          button.addEventListener("click", (event) => {
            event.preventDefault();
            const newLang = button.getAttribute("data-lang");
            setLanguage(newLang);
          });
        });
      });
    </script>
  </body>
</html>
