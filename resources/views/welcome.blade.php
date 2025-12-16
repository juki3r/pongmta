<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PONG-MTA Technology Solutions | ISP, CCTV, Web & System Integrator</title>
    <meta name="description" content="PONG-MTA is an Internet Service Provider and IT solutions company offering ISP services, CCTV installation, web & mobile development, automation, and system integration.">
    <meta name="keywords" content="ISP Philippines, CCTV Installer, System Integrator, Laravel Developer, Network Solutions, PONG-MTA">
    <meta name="author" content="PONG-MTA Technology Solutions">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body { font-family: 'Inter', sans-serif; }
        .hero-section {
            background: linear-gradient(to right, #1e3a8a, #4f46e5);
            color: white;
            min-height: 100vh;
            display: flex;
            align-items: center;
        }
        .hero-section h1 { text-shadow: 1px 1px 4px rgba(0,0,0,0.3); }
        .service-card:hover { transform: translateY(-5px); box-shadow: 0 10px 20px rgba(0,0,0,0.15); transition: all 0.3s ease; }
        .technology-logo { max-height: 50px; opacity: 0.8; transition: opacity 0.3s ease; }
        .technology-logo:hover { opacity: 1; }
        .why-us-card { border-left: 5px solid #4f46e5; transition: transform 0.3s ease; }
        .why-us-card:hover { transform: translateY(-5px); }
        .footer a { color: #0d6efd; text-decoration: none; }
        .footer a:hover { text-decoration: underline; }


   

    /* Transparent navbar */
    .navbar {
      position: fixed;
      top: 0;
      width: 100%;
      z-index: 10;
      background: rgba(0, 0, 0, 0.4);
      backdrop-filter: blur(6px);
    }

    .navbar-brand,
    .nav-link {
      color: #fff !important;
    }

    .navbar-brand:hover,
    .nav-link:hover {
      color: #e50914 !important;
    }

    /* Hamburger custom */
    .navbar-toggler {
      border: none;
      outline: none !important;
      box-shadow: none !important;
      position: relative;
      width: 30px;
      height: 22px;
      transition: transform 0.3s ease;
    }

    .navbar-toggler-icon {
      display: none;
    }

    .navbar-toggler::before,
    .navbar-toggler::after,
    .navbar-toggler span {
      position: absolute;
      left: 0;
      width: 100%;
      height: 3px;
      background: #fff;
      border-radius: 2px;
      transition: all 0.3s ease;
      content: "";
    }

    .navbar-toggler span {
      top: 9px;
    }

    .navbar-toggler::before {
      top: 0;
    }

    .navbar-toggler::after {
      bottom: 0;
    }

    .navbar-toggler:not(.collapsed)::before {
      transform: rotate(45deg);
      top: 9px;
      background: #e50914;
    }

    .navbar-toggler:not(.collapsed)::after {
      transform: rotate(-45deg);
      bottom: 9px;
      background: #e50914;
    }

    .navbar-toggler:not(.collapsed) span {
      opacity: 0;
    }


    /* === MOBILE FIXES === */
    @media (max-width: 768px) {
      .navbar {
        padding-left: 1rem !important;
        padding-right: 1rem !important;
      }
      
    }


        
        </style>
</head>
<body class="bg-light text-dark">

<!-- NAVBAR -->
{{-- <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
  <div class="container">
    <a class="navbar-brand fw-bold text-primary" href="#">PONG-MTA</a>
    
    <!-- Custom Hamburger -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon custom-toggler"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link fw-medium" href="#services">Services</a></li>
        <li class="nav-item"><a class="nav-link fw-medium" href="#technologies">Technologies</a></li>
        <li class="nav-item"><a class="nav-link fw-medium" href="#why-us">Why Us</a></li>
        <li class="nav-item"><a class="nav-link fw-medium" href="#contact">Contact</a></li>
      </ul>
    </div>
  </div>
</nav> --}}

 <nav class="navbar navbar-expand-lg px-4">
    <div class="container-fluid">
      <a class="navbar-brand fw-bold" href="#home">
        <img
          src="{{ asset('images/logo.png') }}"
          alt="Logo"
          width="60"
          height="60"
          class="me-2 rounded-circle bg-light"
        />
      </a>
      <button
        class="navbar-toggler collapsed"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNav"
      >
        <span></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
            <li class="nav-item"><a class="nav-link fw-medium" href="#services">Services</a></li>
            <li class="nav-item"><a class="nav-link fw-medium" href="#technologies">Technologies</a></li>
            <li class="nav-item"><a class="nav-link fw-medium" href="#why-us">Why Us</a></li>
            <li class="nav-item"><a class="nav-link fw-medium" href="#contact">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

<!-- HERO -->
<section class="hero-section text-center text-md-start">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-md-7">
                <h1 class="display-4 fw-bold mb-3">PONG-MTA Technology Solutions</h1>
                <p class="lead mb-4">Internet • CCTV • Web & Mobile Development • Automation • System Integration</p>
                <a href="#services" class="btn btn-primary btn-lg shadow-sm">Explore Our Services</a>
            </div>
            <div class="col-md-5 text-center">
                <img src="{{ asset('images/feature.png') }}" class="img-fluid rounded shadow" alt="Tech Illustration">
            </div>
        </div>
    </div>
</section>

<!-- ABOUT -->
<section class="py-5">
    <div class="container text-center">
        <h2 class="h2 fw-bold mb-4">About PONG-MTA</h2>
        <p class="text-secondary fs-6">
            <strong>PONG-MTA</strong> is a professional technology solutions provider delivering
            reliable and scalable IT services. We specialize in Internet service deployment,
            CCTV and security systems, custom software development, automation, and full system
            integration.
        </p>
    </div>
</section>

<!-- SERVICES -->
<section id="services" class="py-5 bg-light">
    <div class="container">
        <h2 class="h2 fw-bold text-center mb-5">Our Services</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 shadow-sm service-card text-center p-3">
                    <i class="bi bi-wifi display-4 text-primary mb-3"></i>
                    <h3 class="h5 fw-semibold mb-2">Internet Service Provider</h3>
                    <p class="text-secondary">Residential & business internet, fiber & wireless networks.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 shadow-sm service-card text-center p-3">
                    <i class="bi bi-camera-video display-4 text-primary mb-3"></i>
                    <h3 class="h5 fw-semibold mb-2">CCTV & Security Systems</h3>
                    <p class="text-secondary">IP cameras, monitoring, access control systems.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 shadow-sm service-card text-center p-3">
                    <i class="bi bi-code-slash display-4 text-primary mb-3"></i>
                    <h3 class="h5 fw-semibold mb-2">Web Development</h3>
                    <p class="text-secondary">Laravel systems, dashboards, APIs.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 shadow-sm service-card text-center p-3">
                    <i class="bi bi-phone display-4 text-primary mb-3"></i>
                    <h3 class="h5 fw-semibold mb-2">Mobile App Development</h3>
                    <p class="text-secondary">Android & offline-first applications.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 shadow-sm service-card text-center p-3">
                    <i class="bi bi-lightning display-4 text-primary mb-3"></i>
                    <h3 class="h5 fw-semibold mb-2">Automation & IoT</h3>
                    <p class="text-secondary">ESP32, Arduino, RFID & smart systems.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 shadow-sm service-card text-center p-3">
                    <i class="bi bi-diagram-3 display-4 text-primary mb-3"></i>
                    <h3 class="h5 fw-semibold mb-2">System Integration</h3>
                    <p class="text-secondary">Network, server, VoIP & cloud integration.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- TECHNOLOGIES -->
<section id="technologies" class="py-5">
    <div class="container text-center">
        <h2 class="h2 fw-bold mb-4">Technologies We Use</h2>
        <div class="d-flex flex-wrap justify-content-center align-items-center gap-4">
            <img src="https://via.placeholder.com/100x50?text=MikroTik" class="technology-logo" alt="MikroTik">
            <img src="https://via.placeholder.com/100x50?text=Ubiquiti" class="technology-logo" alt="Ubiquiti">
            <img src="https://via.placeholder.com/100x50?text=Laravel" class="technology-logo" alt="Laravel">
            <img src="https://via.placeholder.com/100x50?text=React" class="technology-logo" alt="React">
            <img src="https://via.placeholder.com/100x50?text=ESP32" class="technology-logo" alt="ESP32">
            <img src="https://via.placeholder.com/100x50?text=RaspberryPi" class="technology-logo" alt="Raspberry Pi">
        </div>
    </div>
</section>

<!-- WHY US -->
<section id="why-us" class="py-5 bg-light">
    <div class="container">
        <h2 class="h2 fw-bold text-center mb-5">Why Choose PONG-MTA?</h2>
        <div class="row g-4 justify-content-center">
            <div class="col-md-5">
                <div class="p-4 bg-white shadow-sm why-us-card">
                    <h5 class="fw-bold">Multi-discipline IT expertise</h5>
                    <p class="text-secondary mb-0">Expertise across networking, security, development, and automation.</p>
                </div>
            </div>
            <div class="col-md-5">
                <div class="p-4 bg-white shadow-sm why-us-card">
                    <h5 class="fw-bold">ISP & system integrator experience</h5>
                    <p class="text-secondary mb-0">Proven experience providing internet and system solutions to businesses and residences.</p>
                </div>
            </div>
            <div class="col-md-5">
                <div class="p-4 bg-white shadow-sm why-us-card">
                    <h5 class="fw-bold">Custom-built, secure solutions</h5>
                    <p class="text-secondary mb-0">Tailored software and network solutions designed for your business security.</p>
                </div>
            </div>
            <div class="col-md-5">
                <div class="p-4 bg-white shadow-sm why-us-card">
                    <h5 class="fw-bold">Scalable & future-ready systems</h5>
                    <p class="text-secondary mb-0">Solutions designed to grow with your business.</p>
                </div>
            </div>
            <div class="col-md-5">
                <div class="p-4 bg-white shadow-sm why-us-card">
                    <h5 class="fw-bold">Professional local support</h5>
                    <p class="text-secondary mb-0">Reliable support and maintenance when you need it most.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FOOTER / CONTACT -->
<footer id="contact" class="bg-dark text-white py-5">
    <div class="container text-center footer">
        <h2 class="h2 fw-bold mb-3">Let’s Work Together</h2>
        <p class="mb-3 fs-6">Internet services, CCTV systems, software development, automation, and full IT integration.</p>
        <p class="fw-semibold">© {{ date('Y') }} PONG-MTA Technology Solutions</p>
        <div class="mt-3">
            <a href="#services">Services</a> | 
            <a href="#technologies">Technologies</a> | 
            <a href="#why-us">Why Us</a>
        </div>
    </div>
</footer>
<script>
    const toggler = document.querySelector('.navbar-toggler .custom-toggler');
    toggler.innerHTML = '<div></div>'; // add middle bar div

    toggler.addEventListener('click', () => {
        toggler.classList.toggle('active');
    });
</script>
</body>
</html>
