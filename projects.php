<?php $lang = isset($_SESSION['lang']) ? $_SESSION['lang'] : 'en'; ?>

<section id="projects" class="section projects">
  <div class="container">
    <div class="section-header text-center">
      <h2 class="section-title" data-en="Our Projects" data-ar="مشاريعنا">Our Projects</h2>
      <p class="section-desc" data-en="Showcasing our excellence in transportation & logistics" data-ar="نعرض تميزنا في النقل والخدمات اللوجستية">
        Showcasing our excellence in transportation & logistics
      </p>
    </div>

    <div class="projects-filter fade-in">
      <button class="filter-btn active" data-filter="all" data-en="All" data-ar="الكل">All</button>
      <button class="filter-btn" data-filter="land-freight" data-en="Land Freight" data-ar="النقل البري">Land Freight</button>
      <button class="filter-btn" data-filter="intercity" data-en="Intercity" data-ar="بين المدن">Intercity</button>
      <button class="filter-btn" data-filter="distribution" data-en="Distribution" data-ar="التوزيع">Distribution</button>
      <button class="filter-btn" data-filter="industrial" data-en="Industrial" data-ar="صناعي">Industrial</button>
    </div>

    <div class="projects-grid">
      
      <!-- Project 1: Land Freight -->
      <div class="project-card fade-in" data-category="land-freight">
        <div class="project-image">
          <img src="images/projects/land-freight.webp" alt="Land Freight Project" loading="lazy"
               onerror="this.style.display='none'; this.parentElement.innerHTML='<i class=\'fas fa-truck-loading\'></i>';">
        </div>
        <div class="project-info">
          <span class="project-category" data-en="Land Freight" data-ar="النقل البري">Land Freight</span>
          <h3 data-en="Commercial Goods Transport - Riyadh" data-ar="نقل البضائع التجارية - الرياض">Commercial Goods Transport - Riyadh</h3>
          <p data-en="Large-scale commercial goods transportation" data-ar="نقل البضائع التجارية على نطاق واسع">Large-scale commercial goods transportation</p>
        </div>
      </div>

      <!-- Project 2: Intercity -->
      <div class="project-card fade-in" data-category="intercity">
        <div class="project-image">
          <img src="images/projects/intercity.webp" alt="Intercity Transport" loading="lazy"
               onerror="this.style.display='none'; this.parentElement.innerHTML='<i class=\'fas fa-route\'></i>';">
        </div>
        <div class="project-info">
          <span class="project-category" data-en="Intercity" data-ar="بين المدن">Intercity</span>
          <h3 data-en="Jeddah-Dammam Route Service" data-ar="خدمة طريق جدة-الدمام">Jeddah-Dammam Route Service</h3>
          <p data-en="Regular scheduled transport service" data-ar="خدمة نقل منتظمة مجدولة">Regular scheduled transport service</p>
        </div>
      </div>

      <!-- Project 3: Distribution -->
      <div class="project-card fade-in" data-category="distribution">
        <div class="project-image">
          <img src="images/projects/distribution.webp" alt="Distribution Project" loading="lazy"
               onerror="this.style.display='none'; this.parentElement.innerHTML='<i class=\'fas fa-distribution\'></i>';">
        </div>
        <div class="project-info">
          <span class="project-category" data-en="Distribution" data-ar="التوزيع">Distribution</span>
          <h3 data-en="Retail Chain Distribution" data-ar="توزيع سلسلة التجزئة">Retail Chain Distribution</h3>
          <p data-en="Last-mile delivery for retail chains" data-ar="توصيل لسلاسل التجزئة">Last-mile delivery for retail chains</p>
        </div>
      </div>

      <!-- Project 4: Industrial -->
      <div class="project-card fade-in" data-category="industrial">
        <div class="project-image">
          <img src="images/projects/industrial.webp" alt="Industrial Project" loading="lazy"
               onerror="this.style.display='none'; this.parentElement.innerHTML='<i class=\'fas fa-industry\'></i>';">
        </div>
        <div class="project-info">
          <span class="project-category" data-en="Industrial" data-ar="صناعي">Industrial</span>
          <h3 data-en="Yanbu Industrial Complex" data-ar="مجمع ينبع الصناعي">Yanbu Industrial Complex</h3>
          <p data-en="Heavy equipment transport for industry" data-ar="نقل المعدات الثقيلة للصناعة">Heavy equipment transport for industry</p>
        </div>
      </div>

    </div>
  </div>
</section>