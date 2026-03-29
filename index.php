<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <?php include('components/head.php'); ?>
</head>
<body>
  <!-- Page Loader -->
  <div class="page-loader"><div class="loader"></div></div>
  <div class="scroll-progress"></div>
  
  <!-- Header -->
  <?php include('components/header.php'); ?>
  
  <!-- Main Content -->
  <main id="main">
    <?php include('components/sections/hero.php'); ?>
    <?php include('components/sections/stats.php'); ?>
    <?php include('components/sections/about.php'); ?>
    <?php include('components/sections/services.php'); ?>
    <?php include('components/sections/fleet.php'); ?>
    <?php include('components/sections/service-areas.php'); ?>
    <?php include('components/sections/projects.php'); ?>
    <?php include('components/sections/values.php'); ?>
    <!--?php include('components/sections/testimonials.php'); ?-->
    <?php include('components/sections/why-choose.php'); ?>
    <?php include('components/sections/contact.php'); ?>
    <?php include('components/sections/contacts.php'); ?>
    <!--?php include('components/sections/breadcrumb.php'); ?-->
  </main>
  
  <!-- Footer -->
  <?php include('components/footer.php'); ?>
  
  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollToPlugin.min.js"></script>
  <script type="module" src="js/main.js"></script>
</body>
</html>