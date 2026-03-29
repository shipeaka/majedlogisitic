<?php $lang = isset($_SESSION['lang']) ? $_SESSION['lang'] : 'en'; ?>

<section id="service-areas" class="section service-areas bg-light">
  <div class="container">
    <div class="section-header text-center">
      <h2 class="section-title" data-en="Service Coverage" data-ar="مناطق التغطية">Service Coverage</h2>
      <p class="section-desc" data-en="Serving all major cities across Saudi Arabia" data-ar="نخدم جميع المدن الرئيسية في المملكة العربية السعودية">
        Serving all major cities across Saudi Arabia
      </p>
    </div>

    <div class="map-container fade-in">
      <div id="serviceMap" class="interactive-map"></div>
      <div class="map-controls">
        <button class="map-btn active" data-filter="all" data-en="All Regions" data-ar="جميع المناطق">All Regions</button>
        <button class="map-btn" data-filter="western" data-en="Western" data-ar="الغربية">Western</button>
        <button class="map-btn" data-filter="central" data-en="Central" data-ar="الوسطى">Central</button>
        <button class="map-btn" data-filter="eastern" data-en="Eastern" data-ar="الشرقية">Eastern</button>
      </div>
    </div>

    <div class="coverage-stats">
      <div class="stat-box fade-in">
        <i class="fas fa-city"></i>
        <span class="stat-number" data-target="50">0</span>
        <span class="stat-label" data-en="Cities Covered" data-ar="مدينة مغطاة">Cities Covered</span>
      </div>
      <div class="stat-box fade-in">
        <i class="fas fa-project-diagram"></i>
        <span class="stat-number" data-target="150">0</span>
        <span class="stat-label" data-en="Projects Completed" data-ar="مشروع مكتمل">Projects Completed</span>
      </div>
      <div class="stat-box fade-in">
        <i class="fas fa-users"></i>
        <span class="stat-number" data-target="80">0</span>
        <span class="stat-label" data-en="Happy Clients" data-ar="عميل سعيد">Happy Clients</span>
      </div>
    </div>
  </div>
</section>

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"/>
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>