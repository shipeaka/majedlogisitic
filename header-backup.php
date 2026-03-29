<?php 
// Set language from session or default to 'en'
$lang = isset($_SESSION['lang']) ? $_SESSION['lang'] : 'en';

global $site_short, $site_url;
$current_page = basename($_SERVER['PHP_SELF'], '.php');
$dir = $lang === 'ar' ? 'rtl' : 'ltr';
?>

<header class="site-header">
  <div class="container header-inner">
    <a href="<?php echo $site_url; ?>/" class="logo" aria-label="<?php echo $site_short; ?> Home">
      <img src="images/logo.png" alt="<?php echo $site_short; ?> Logo" width="150" height="50" onerror="this.style.display='none'"/>
      <span class="logo-text"><?php echo $lang === 'ar' ? 'ماجـد لوجستيك' : 'Majed Logistic'; ?></span>
    </a>
    
    <nav class="main-nav" aria-label="Main Navigation">
      <ul class="nav-list">
        <li><a href="index.php" class="<?php echo $current_page === 'index' ? 'active' : ''; ?>" data-en="Home" data-ar="الرئيسية">Home</a></li>
        <li><a href="#about" data-en="About" data-ar="من نحن">About</a></li>
        <li><a href="#services" data-en="Services" data-ar="خدماتنا">Services</a></li>
        <li><a href="#fleet" data-en="Fleet" data-ar="أسطولنا">Fleet</a></li>
        <li><a href="#projects" data-en="Projects" data-ar="مشاريعنا">Projects</a></li>
        <li><a href="#contact" data-en="Contact" data-ar="اتصل بنا">Contact</a></li>
        <li><a href="contacts.php" data-en="Business Cards" data-ar="بطاقات العمل">Business Cards</a></li>
      </ul>
      <button id="langToggle" class="lang-btn" aria-label="Toggle language"><?php echo $lang === 'en' ? 'عربي' : 'English'; ?></button>
      <button class="mobile-toggle" aria-label="Toggle menu">
        <i class="fas fa-bars"></i>
      </button>
    </nav>
  </div>
</header>