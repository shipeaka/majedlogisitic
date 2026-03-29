<?php 
global $phone_primary, $phone_secondary, $phone_office, $email, $address, $formspree_id;
$lang = isset($_SESSION['lang']) ? $_SESSION['lang'] : 'en';
?>

<section id="contact" class="section contact bg-light">
  <div class="container">
    <div class="section-header text-center">
      <h2 class="section-title" data-en="Contact Us" data-ar="اتصل بنا">Contact Us</h2>
      <p class="section-desc" data-en="Ready to transport your goods? Get in touch" data-ar="هل أنت جاهز لنقل بضائعك؟ تواصل معنا">
        Ready to transport your goods? Get in touch
      </p>
    </div>

    <div class="contact-wrapper">
      <!-- Contact Info -->
      <div class="contact-info fade-in">
        <div class="contact-item">
          <i class="fas fa-phone-alt"></i>
          <div>
            <strong data-en="Phone" data-ar="الهاتف">Phone</strong>
            <p dir=ltr>
  <a  href="tel:+966540749988" data-en="+966 54 074 9988" data-ar="٠٠٩٦٦٤٥٤٧٠٨٨٩">+966 54 074 9988</a><br/>
  <a href="tel:+966508527582" data-en="+966 50 852 7582" data-ar="٠٠٩٦٦٥٠٨٥٢٧٥٨٢">+966 50 852 7582</a><br/>
  <a href="tel:+966014391969" data-en="+966 014 391 969" data-ar="٠٠٩٦٦٤١٠١٩٣٩٦٩">+966 014 391 969</a>
</p>
          </div>
        </div>
        <div class="contact-item">
          <i class="fas fa-envelope"></i>
          <div>
            <strong data-en="Email" data-ar="البريد الإلكتروني">Email</strong>
            <p><a href="mailto:info@majedlogisitic.com">info@majedlogisitic.com</a></p>
          </div>
        </div>
        <div class="contact-item">
          <i class="fas fa-map-marker-alt"></i>
          <div>
            <strong data-en="Address" data-ar="العنوان">Address</strong>
            <p>Yanbu, Kingdom of Saudi Arabia<br/>P.O. Box 1944, Postal Code 41912</p>
          </div>
        </div>
        <div class="contact-item">
          <i class="fas fa-clock"></i>
          <div>
            <strong data-en="Working Hours" data-ar="ساعات العمل">Working Hours</strong>
            <p data-en="Saturday - Thursday: 8:00 AM - 5:00 PM" data-ar="السبت - الخميس: 8 صباحاً - 5 مساءً">Saturday - Thursday: 8:00 AM - 5:00 PM</p>
          </div>
        </div>
        
        <!-- Google Map -->
        <div class="map-container">
          <iframe src="<?php echo $google_maps_embed; ?>" width="100%" height="250" style="border:0; border-radius:12px;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>

      <!-- Contact Form -->
<form class="contact-form fade-in" action="https://formspree.io/f/<?php echo $formspree_id; ?>" method="POST">
  
  <!-- Name Field -->
  <div class="form-group">
    <label data-en="Full Name" data-ar="الاسم الكامل">Full Name *</label>
    <input type="text" name="name" id="name" required/>
  </div>
  
  <!-- Email Field -->
  <div class="form-group">
    <label data-en="Email" data-ar="البريد الإلكتروني">Email *</label>
    <input type="email" name="email" id="email" required/>
  </div>
  
  <!-- Phone Field -->
  <div class="form-group">
    <label data-en="Phone" data-ar="رقم الجوال">Phone</label>
    <input type="tel" name="phone" id="phone"/>
  </div>
  
  <!-- Service Dropdown -->
  <div class="form-group">
    <label data-en="Service Required" data-ar="الخدمة المطلوبة">Service Required</label>
    <select name="service" id="service">
      <option value="">Select a service...</option>
      <option value="land-freight">Land Freight</option>
      <option value="intercity">Intercity Transport</option>
      <option value="distribution">Domestic Distribution</option>
      <option value="industrial">Industrial Solutions</option>
    </select>
  </div>
  
  <!-- Message Field -->
  <div class="form-group">
    <label data-en="Message" data-ar="الرسالة">Message *</label>
    <textarea name="message" id="message" rows="5" required></textarea>
  </div>
  
  <!-- Submit Button -->
  <button type="submit" class="btn btn-primary btn-block">
    <span data-en="Send Message" data-ar="إرسال الرسالة">Send Message</span>
  </button>
  
  <p class="form-note" data-en="We respond within 24 hours" data-ar="نرد خلال 24 ساعة">We respond within 24 hours</p>
</form>
    </div>
  </div>
</section>