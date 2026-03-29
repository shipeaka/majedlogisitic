<?php 
$lang = isset($_SESSION['lang']) ? $_SESSION['lang'] : 'en';
$current_page = basename($_SERVER['PHP_SELF'], '.php');
?>

<section class="breadcrumb-section">
  <div class="container">
    <nav class="breadcrumb" aria-label="Breadcrumb">
      <a href="index.php" data-en="Home" data-ar="الرئيسية">Home</a>
      <?php if($current_page !== 'index'): ?>
        <span class="separator">/</span>
        <span class="current" data-en="<?php echo ucfirst($current_page); ?>" data-ar="<?php 
          echo $current_page === 'about' ? 'من نحن' : 
               ($current_page === 'services' ? 'الخدمات' : 
               ($current_page === 'fleet' ? 'الأسطول' : 
               ($current_page === 'projects' ? 'المشاريع' : 
               ($current_page === 'contact' ? 'اتصل بنا' : ucfirst($current_page))))); 
        ?>">
          <?php echo ucfirst($current_page); ?>
        </span>
      <?php endif; ?>
    </nav>
  </div>
</section>