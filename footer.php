<?php 
global $site_short, $email, $phone_primary, $address, $social, $current_year, $site_url;
$lang = isset($_SESSION['lang']) ? $_SESSION['lang'] : 'en';
?>

<footer class="site-footer">
  <div class="container footer-inner">
    <div class="footer-brand">
      <strong><?php echo $lang === 'ar' ? 'ماجـد ناجـي الجهني' : 'Majed Naji Al-Juhani'; ?> | <?php echo $site_short; ?></strong>
      <p data-en="Your Trusted Logistics Partner Since 2011" data-ar="شريكك اللوجستي الموثوق منذ 2011">Your Trusted Logistics Partner Since 2011</p>
      <div class="social-links">
        <?php if($social['linkedin']): ?><a href="<?php echo $social['linkedin']; ?>" aria-label="LinkedIn"><i class="fab fa-linkedin"></i></a><?php endif; ?>
        <?php if($social['twitter']): ?><a href="<?php echo $social['twitter']; ?>" aria-label="Twitter"><i class="fab fa-twitter"></i></a><?php endif; ?>
        <?php if($social['whatsapp']): ?><a href="<?php echo $social['whatsapp']; ?>" aria-label="WhatsApp" target="_blank"><i class="fab fa-whatsapp"></i></a><?php endif; ?>
      </div>
    </div>
    
    <div class="footer-links">
      <h4 data-en="Quick Links" data-ar="روابط سريعة">Quick Links</h4>
      <ul>
        <li><a href="index.php" data-en="Home" data-ar="الرئيسية">Home</a></li>
        <li><a href="#about" data-en="About" data-ar="من نحن">About</a></li>
        <li><a href="#services" data-en="Services" data-ar="الخدمات">Services</a></li>
        <li><a href="#fleet" data-en="Fleet" data-ar="الأسطول">Fleet</a></li>
        <li><a href="#contact" data-en="Contact" data-ar="اتصل بنا">Contact</a></li>
      </ul>
    </div>
    
    <div class="footer-contact">
      <h4 data-en="Contact Info" data-ar="معلومات الاتصال">Contact Info</h4>
      <p><i class="fas fa-envelope"></i> <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></p>
      <p><i class="fas fa-phone"></i> <a dir=ltr href="tel:<?php echo str_replace(['+', ' ', '-'], '', $phone_primary); ?>"><?php echo $phone_primary; ?></a></p> 
      <p><i class="fas fa-map-marker-alt"></i> <?php echo explode(',', $address)[0]; ?>, KSA</p>
      <p><i class="fas fa-box"></i> P.O. Box 1944</p>
    </div>
  </div>
  
  <div class="footer-bottom">
    <p>&copy; <?php echo $current_year; ?> <?php echo $site_name; ?>. All Rights Reserved.<br/>
    <span data-en="Quality • Precision • Punctuality" data-ar="الجودة • الدقة • الالتزام بالمواعيد">Quality • Precision • Punctuality</span> <br/>
	<span data-en="Supporting Saudi Vision 2030" data-ar="ندعم رؤية السعودية 2030">Supporting Saudi Vision 2030</span>
	</p>
  </div>
</footer>

<!-- Floating Buttons -->
<button class="back-to-top" aria-label="Back to top"><i class="fas fa-arrow-up"></i></button>
<a href="https://wa.me/<?php echo $social['whatsapp'] ?? '966540749988'; ?>" class="whatsapp-float" target="_blank" rel="noopener" aria-label="Chat on WhatsApp"><i class="fab fa-whatsapp"></i></a>
