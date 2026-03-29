<?php $lang = isset($_SESSION['lang']) ? $_SESSION['lang'] : 'en'; ?>

<section id="fleet" class="section fleet">
  <div class="container">
    <div class="section-header text-center">
      <h2 class="section-title" data-en="Our Fleet" data-ar="أسطولنا">Our Fleet</h2>
      <p class="section-desc" data-en="Modern trucks and vehicles equipped with latest technology" data-ar="شاحنات ومركبات حديثة مجهزة بأحدث التقنيات">
        Modern trucks and vehicles equipped with latest technology
      </p>
    </div>

    <div class="fleet-stats fade-in">
      <div class="stat-box">
        <i class="fas fa-truck"></i>
        <span class="stat-number" data-target="80">0</span>
        <span class="stat-label" data-en="Vehicles" data-ar="مركبة">Vehicles</span>
      </div>
      <div class="stat-box">
        <i class="fas fa-satellite"></i>
        <span class="stat-number" data-target="100">0</span>
        <span class="stat-label" data-en="GPS Tracked" data-ar="متتبعة">GPS Tracked %</span>
      </div>
      <div class="stat-box">
        <i class="fas fa-tools"></i>
        <span class="stat-number" data-target="98">0</span>
        <span class="stat-label" data-en="Uptime Rate" data-ar="معدل التشغيل">Uptime Rate %</span>
      </div>
      <div class="stat-box">
        <i class="fas fa-shield-alt"></i>
        <span class="stat-number" data-target="100">0</span>
        <span class="stat-label" data-en="Safety Compliance" data-ar="السلامة">Safety Compliance %</span>
      </div>
    </div>

    <div class="fleet-grid">
      <!-- Heavy Trucks -->
      <div class="fleet-card fade-in">
        <div class="fleet-image">
          <img src="images/fleet/heavy-truck.webp" alt="Heavy Trucks" loading="lazy" 
               onerror="this.style.display='none'; this.parentElement.innerHTML='<i class=\'fas fa-truck-moving\'></i>';">
        </div>
        <div class="fleet-info">
          <h3 data-en="Heavy Trucks" data-ar="الشاحنات الثقيلة">Heavy Trucks</h3>
          <p data-en="For large cargo and industrial equipment transport" data-ar="لنقل البضائع الكبيرة والمعدات الصناعية">For large cargo and industrial equipment transport</p>
          <ul class="fleet-features">
            <li><i class="fas fa-check"></i> <span data-en="Capacity: 20-40 tons" data-ar="السعة: 20-40 طن">Capacity: 20-40 tons</span></li>
            <li><i class="fas fa-check"></i> <span data-en="GPS tracking system" data-ar="نظام تتبع GPS">GPS tracking system</span></li>
          </ul>
        </div>
      </div>

      <!-- Medium Trucks -->
      <div class="fleet-card fade-in">
        <div class="fleet-image">
          <img src="images/fleet/medium-truck.webp" alt="Medium Trucks" loading="lazy"
               onerror="this.style.display='none'; this.parentElement.innerHTML='<i class=\'fas fa-truck\'></i>';">
        </div>
        <div class="fleet-info">
          <h3 data-en="Medium Trucks" data-ar="الشاحنات المتوسطة">Medium Trucks</h3>
          <p data-en="Ideal for intercity transportation" data-ar="مثالية للنقل بين المدن">Ideal for intercity transportation</p>
          <ul class="fleet-features">
            <li><i class="fas fa-check"></i> <span data-en="Capacity: 5-15 tons" data-ar="السعة: 5-15 طن">Capacity: 5-15 tons</span></li>
            <li><i class="fas fa-check"></i> <span data-en="Fuel efficient" data-ar="كفاءة في الوقود">Fuel efficient</span></li>
          </ul>
        </div>
      </div>

      <!-- Specialized Vehicles -->
      <div class="fleet-card fade-in">
        <div class="fleet-image">
          <img src="images/fleet/specialized.webp" alt="Specialized Vehicles" loading="lazy"
               onerror="this.style.display='none'; this.parentElement.innerHTML='<i class=\'fas fa-cogs\'></i>';">
        </div>
        <div class="fleet-info">
          <h3 data-en="Specialized Vehicles" data-ar="المركبات المتخصصة">Specialized Vehicles</h3>
          <p data-en="For fragile and oversized cargo" data-ar="للبضائع الهشة وكبيرة الحجم">For fragile and oversized cargo</p>
          <ul class="fleet-features">
            <li><i class="fas fa-check"></i> <span data-en="Custom configurations" data-ar="تكوينات مخصصة">Custom configurations</span></li>
            <li><i class="fas fa-check"></i> <span data-en="Safety certifications" data-ar="شهادات السلامة">Safety certifications</span></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>