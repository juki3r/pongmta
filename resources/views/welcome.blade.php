<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO -->
    <title>PONG-MTA Technology Solutions | ISP, CCTV, Web & System Integrator</title>
    <meta name="description" content="PONG-MTA is an Internet Service Provider and IT solutions company offering ISP services, CCTV installation, web & mobile development, automation, and system integration.">
    <meta name="keywords" content="ISP Philippines, CCTV Installer, System Integrator, Laravel Developer, Network Solutions, PONG-MTA">
    <meta name="author" content="PONG-MTA Technology Solutions">

    <!-- Open Graph -->
    <meta property="og:title" content="PONG-MTA Technology Solutions">
    <meta property="og:description" content="Internet, CCTV, Web & Mobile Development, Automation, and System Integration">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url('/') }}">

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50 text-gray-800">

<!-- NAVBAR -->
<nav class="bg-white shadow-md sticky top-0 z-50">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
        <div class="text-xl font-bold text-indigo-700">PONG-MTA</div>
        <div class="space-x-6 hidden md:block">
            <a href="#services" class="hover:text-indigo-600">Services</a>
            <a href="#technologies" class="hover:text-indigo-600">Technologies</a>
            <a href="#why-us" class="hover:text-indigo-600">Why Us</a>
            <a href="#contact" class="hover:text-indigo-600">Contact</a>
        </div>
    </div>
</nav>

<!-- HERO -->
<section class="bg-gradient-to-r from-blue-900 to-indigo-800 text-white py-24">
    <div class="max-w-6xl mx-auto px-6 text-center">
        <h1 class="text-4xl md:text-5xl font-bold mb-4">PONG-MTA Technology Solutions</h1>
        <p class="text-xl max-w-3xl mx-auto">
            Internet • CCTV • Web & Mobile Development • Automation • System Integration
        </p>
    </div>
</section>

<!-- ABOUT -->
<section class="py-16">
    <div class="max-w-5xl mx-auto px-6">
        <h2 class="text-3xl font-bold mb-6">About PONG-MTA</h2>
        <p class="leading-relaxed text-gray-700">
            <strong>PONG-MTA</strong> is a professional technology solutions provider delivering
            reliable and scalable IT services. We specialize in Internet service deployment,
            CCTV and security systems, custom software development, automation, and full system
            integration.
        </p>
    </div>
</section>

<!-- SERVICES -->
<section id="services" class="bg-white py-16">
    <div class="max-w-6xl mx-auto px-6">
        <h2 class="text-3xl font-bold text-center mb-12">Our Services</h2>

        <div class="grid md:grid-cols-3 gap-8">
            <a href="/services/isp" class="border rounded-lg p-6 shadow-sm hover:shadow-lg transition">
                <h3 class="text-xl font-semibold mb-3">Internet Service Provider</h3>
                <p class="text-gray-700">Residential & business internet, fiber & wireless networks.</p>
            </a>

            <a href="/services/cctv" class="border rounded-lg p-6 shadow-sm hover:shadow-lg transition">
                <h3 class="text-xl font-semibold mb-3">CCTV & Security Systems</h3>
                <p class="text-gray-700">IP cameras, monitoring, access control systems.</p>
            </a>

            <a href="/services/web" class="border rounded-lg p-6 shadow-sm hover:shadow-lg transition">
                <h3 class="text-xl font-semibold mb-3">Web Development</h3>
                <p class="text-gray-700">Laravel systems, dashboards, APIs.</p>
            </a>

            <a href="/services/mobile" class="border rounded-lg p-6 shadow-sm hover:shadow-lg transition">
                <h3 class="text-xl font-semibold mb-3">Mobile App Development</h3>
                <p class="text-gray-700">Android & offline-first applications.</p>
            </a>

            <a href="/services/automation" class="border rounded-lg p-6 shadow-sm hover:shadow-lg transition">
                <h3 class="text-xl font-semibold mb-3">Automation & IoT</h3>
                <p class="text-gray-700">ESP32, Arduino, RFID & smart systems.</p>
            </a>

            <a href="/services/integration" class="border rounded-lg p-6 shadow-sm hover:shadow-lg transition">
                <h3 class="text-xl font-semibold mb-3">System Integration</h3>
                <p class="text-gray-700">Network, server, VoIP & cloud integration.</p>
            </a>
        </div>
    </div>
</section>

<!-- TECHNOLOGIES -->
<section id="technologies" class="py-16">
    <div class="max-w-5xl mx-auto px-6">
        <h2 class="text-3xl font-bold mb-6">Technologies We Use</h2>
        <p class="text-gray-700">
            MikroTik, Ubiquiti, Mimosa, Laravel, React, React Native, MySQL, ESP32,
            Raspberry Pi, Linux, VPN, WireGuard.
        </p>
    </div>
</section>

<!-- WHY US -->
<section id="why-us" class="bg-indigo-50 py-16">
    <div class="max-w-5xl mx-auto px-6">
        <h2 class="text-3xl font-bold mb-6">Why Choose PONG-MTA?</h2>
        <ul class="list-disc ml-5 text-gray-700 space-y-2">
            <li>Multi-discipline IT expertise</li>
            <li>ISP & system integrator experience</li>
            <li>Custom-built, secure solutions</li>
            <li>Scalable & future-ready systems</li>
            <li>Professional local support</li>
        </ul>
    </div>
</section>

<!-- FOOTER / CONTACT -->
<footer id="contact" class="bg-gray-900 text-white py-16">
    <div class="max-w-5xl mx-auto px-6 text-center">
        <h2 class="text-3xl font-bold mb-4">Let’s Work Together</h2>
        <p class="mb-6">
            Internet services, CCTV systems, software development, automation,
            and full IT integration.
        </p>
        <p class="font-semibold">
            © {{ date('Y') }} PONG-MTA Technology Solutions
        </p>
    </div>
</footer>

</body>
</html>
