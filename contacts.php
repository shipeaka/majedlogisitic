<?php
session_start();
$lang = isset($_SESSION['lang']) ? $_SESSION['lang'] : 'en';

// Get contact person from URL
$contactPerson = isset($_GET['person']) ? $_GET['person'] : '';

// Define contact data (you can expand this)
$contacts = [
    'majed-aljuhani' => [
        'name_en' => 'Majed Al-Juhani',
        'name_ar' => 'ماجد الجهني',
        'position_en' => 'General Manager',
        'position_ar' => 'المدير العام',
        'phone' => '+966 54 074 9988',
        'email' => 'majed@majedlogisitic.com',
        'folder' => 'majed-aljuhani'
    ],
    'sales-manager' => [
        'name_en' => 'Sales Manager',
        'name_ar' => 'مدير المبيعات',
        'position_en' => 'Sales Manager',
        'position_ar' => 'مدير المبيعات',
        'phone' => '+966 50 852 7582',
        'email' => 'sales@majedlogisitic.com',
        'folder' => 'sales-manager'
    ],
    'operations' => [
        'name_en' => 'Operations Manager',
        'name_ar' => 'مدير العمليات',
        'position_en' => 'Operations Manager',
        'position_ar' => 'مدير العمليات',
        'phone' => '+966 014 391 969',
        'email' => 'operations@majedlogisitic.com',
        'folder' => 'operations'
    ],
    // Add more contacts as needed
];

// If viewing individual contact
if ($contactPerson && isset($contacts[$contactPerson])) {
    $contact = $contacts[$contactPerson];
    $contactFolder = 'images/contact/' . $contact['folder'] . '/';
    
    // Get all business cards in folder
    $businessCards = [];
    if (is_dir($contactFolder)) {
        $files = scandir($contactFolder);
        foreach ($files as $file) {
            if ($file !== '.' && $file !== '..' && preg_match('/\.(jpg|jpeg|png|gif|webp|pdf)$/i', $file)) {
                $businessCards[] = $contactFolder . $file;
            }
        }
    }
    $pageTitle = ($lang === 'ar' ? $contact['name_ar'] : $contact['name_en']) . ' - ' . ($lang === 'ar' ? 'بطاقة العمل' : 'Business Card');
} else {
    $pageTitle = $lang === 'ar' ? 'بطاقات العمل' : 'Business Cards';
}

include('config.php');
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>" dir="<?php echo $lang === 'ar' ? 'rtl' : 'ltr'; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle; ?> - <?php echo $site_name; ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
    <link rel="stylesheet" href="css/style.css"/>
    <style>
        .contacts-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 25px;
            padding: 40px 0;
        }
        .contact-card {
            background: var(--white);
            border-radius: var(--radius);
            padding: 30px;
            box-shadow: var(--shadow);
            transition: var(--transition);
            text-align: center;
            border-top: 4px solid var(--primary);
        }
        .contact-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(30, 58, 138, 0.25);
        }
        .contact-card h3 {
            color: var(--primary);
            margin-bottom: 10px;
            font-size: 1.3rem;
        }
        .contact-card .position {
            color: var(--gray);
            font-size: 0.95rem;
            margin-bottom: 20px;
        }
        .contact-card .btn {
            display: inline-block;
            padding: 10px 25px;
            background: var(--primary);
            color: var(--white);
            border-radius: 25px;
            text-decoration: none;
            transition: var(--transition);
        }
        .contact-card .btn:hover {
            background: var(--primary-dark);
        }
        .business-cards-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            padding: 40px 0;
        }
        .business-card-item {
            background: var(--white);
            border-radius: var(--radius);
            overflow: hidden;
            box-shadow: var(--shadow);
        }
        .business-card-item img {
            width: 100%;
            height: auto;
            display: block;
        }
        .business-card-item iframe {
            width: 100%;
            height: 600px;
            border: none;
        }
        .back-link {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            color: var(--primary);
            text-decoration: none;
            margin-bottom: 30px;
            font-weight: 500;
        }
        .back-link:hover {
            color: var(--accent);
        }
        .contact-info-box {
            background: var(--light);
            padding: 30px;
            border-radius: var(--radius);
            margin-bottom: 40px;
        }
        .contact-info-box h2 {
            color: var(--primary);
            margin-bottom: 20px;
        }
        .contact-info-box p {
            margin: 10px 0;
            font-size: 1.05rem;
        }
        .contact-info-box i {
            color: var(--accent);
            margin-right: 10px;
            width: 20px;
        }
        [dir="rtl"] .contact-info-box i {
            margin-right: 0;
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <?php include('components/header.php'); ?>
    
    <main id="main">
        <section class="section">
            <div class="container">
                <?php if ($contactPerson && isset($contact)): ?>
                    <!-- Individual Contact View -->
                    <a href="contacts.php" class="back-link">
                        <i class="fas fa-arrow-left"></i>
                        <span data-en="Back to All Contacts" data-ar="العودة إلى جميع جهات الاتصال">Back to All Contacts</span>
                    </a>
                    
                    <div class="contact-info-box">
                        <h2><?php echo $lang === 'ar' ? $contact['name_ar'] : $contact['name_en']; ?></h2>
                        <p><i class="fas fa-briefcase"></i> <?php echo $lang === 'ar' ? $contact['position_ar'] : $contact['position_en']; ?></p>
                        <p><i class="fas fa-phone"></i> <a href="tel:<?php echo str_replace(' ', '', $contact['phone']); ?>"><?php echo $contact['phone']; ?></a></p>
                        <p><i class="fas fa-envelope"></i> <a href="mailto:<?php echo $contact['email']; ?>"><?php echo $contact['email']; ?></a></p>
                    </div>
                    
                    <h3 style="color: var(--primary); margin-bottom: 20px;">
                        <?php echo $lang === 'ar' ? 'بطاقات العمل' : 'Business Cards'; ?>
                    </h3>
                    
                    <?php if (empty($businessCards)): ?>
                        <p style="text-align: center; color: var(--gray); padding: 40px;">
                            <?php echo $lang === 'ar' ? 'لا توجد بطاقات عمل متاحة' : 'No business cards available'; ?>
                        </p>
                    <?php else: ?>
                        <div class="business-cards-grid">
                            <?php foreach ($businessCards as $card): ?>
                                <div class="business-card-item">
                                    <?php if (strtolower(pathinfo($card, PATHINFO_EXTENSION)) === 'pdf'): ?>
                                        <iframe src="<?php echo $card; ?>" title="Business Card PDF"></iframe>
                                    <?php else: ?>
                                        <img src="<?php echo $card; ?>" alt="Business Card" loading="lazy">
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                    
                <?php else: ?>
                    <!-- All Contacts List -->
                    <div class="section-header text-center">
                        <h2 class="section-title" data-en="Business Cards" data-ar="بطاقات العمل">Business Cards</h2>
                        <p class="section-desc" data-en="Contact our team members directly" data-ar="تواصل مباشرة مع أعضاء فريقنا">Contact our team members directly</p>
                    </div>
                    
                    <div class="contacts-list">
                        <?php foreach ($contacts as $slug => $contactData): ?>
                            <div class="contact-card">
                                <h3><?php echo $lang === 'ar' ? $contactData['name_ar'] : $contactData['name_en']; ?></h3>
                                <p class="position"><?php echo $lang === 'ar' ? $contactData['position_ar'] : $contactData['position_en']; ?></p>
                                <a href="contacts.php?person=<?php echo $slug; ?>" class="btn">
                                    <?php echo $lang === 'ar' ? 'عرض بطاقة العمل' : 'View Business Card'; ?>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </section>
    </main>
    
    <?php include('components/footer.php'); ?>
    <script src="js/main.js"></script>
</body>
</html>