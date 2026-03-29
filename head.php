<?php global $site_name, $site_url, $site_description, $meta_keywords, $meta_author, $theme; ?>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0, user-scalable=yes"/>
<title><?php echo isset($page_title) ? $page_title . ' | ' : ''; ?><?php echo $site_name; ?></title>
<meta name="description" content="<?php echo $site_description; ?>"/>
<meta name="keywords" content="<?php echo $meta_keywords; ?>"/>
<meta name="author" content="<?php echo $meta_author; ?>"/>
<meta name="robots" content="index, follow"/>

<!-- Open Graph / Social -->
<meta property="og:title" content="<?php echo $site_name; ?>"/>
<meta property="og:description" content="<?php echo $site_description; ?>"/>
<meta property="og:type" content="website"/>
<meta property="og:url" content="<?php echo $site_url; ?>"/>
<meta property="og:image" content="<?php echo $site_url; ?>/images/og-image.jpg"/>

<!-- PWA / Manifest -->
<link rel="manifest" href="/manifest.json">
<meta name="theme-color" content="#1e3a8a">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="default">
<meta name="apple-mobile-web-app-title" content="Majed Logistic">
<link rel="apple-touch-icon" href="/images/icons/icon-192x192.png">

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com"/>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Tajawal:wght@400;500;700;800&display=swap" rel="stylesheet"/>

<!-- Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>

<!-- Styles -->
<link rel="stylesheet" href="css/style.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">


<!-- Theme Colors (for JS) -->
<script>
  window.themeColors = <?php echo json_encode($theme); ?>;
</script>