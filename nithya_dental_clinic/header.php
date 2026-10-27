<?php
if (!isset($page_title)) {
    $page_title = "Nithya Dental Clinic - Multi-Specialty Dental Care";
}
if (!isset($page_desc)) {
    $page_desc = "Nithya Dental Clinic provides advanced, painless dental treatments including Root Canal, Orthodontic Braces, Dental Implants, and Cosmetic Dentistry.";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $page_desc; ?>">
    <meta name="keywords"
        content="Nithya Dental Clinic, Dentist, Root Canal Treatment, Dental Implants, Orthodontic Braces, Cosmetic Dentistry, Teeth Whitening, Family Dentist">
    <meta name="robots" content="index, follow">

    <!-- CSS & Icons -->
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Schema.org JSON-LD (SEO / GEO / AEO) -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Dentist",
      "name": "Nithya Dental Clinic",
      "image": "https://www.nithyadentalclinic.com/logo.png",
      "telephone": "+91 7708249115",
      "priceRange": "₹₹",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Quality Care Dental Location",
        "addressLocality": "Tamil Nadu",
        "addressRegion": "TN",
        "postalCode": "600001",
        "addressCountry": "IN"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 13.0827,
        "longitude": 80.2707
      },
      "openingHoursSpecification": [
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
          "opens": "09:00",
          "closes": "21:00"
        },
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": "Sunday",
          "opens": "09:00",
          "closes": "15:00"
        }
      ]
    }
    </script>
</head>

<body>

    <!-- Top Info Bar -->
    <div class="top-bar">
        <div class="container top-flex">
            <div class="top-info">
                <span><i class="fa fa-clock"></i> Mon - Sat: 09:00 AM - 09:00 PM | Sun: 09:00 AM - 03:00 PM</span>
            </div>
            <div class="top-social">

                <a href="mailto:nithyadentalclinic.2015@gmail.com"><i class="fa fa-envelope" style="color:var(--accent-teal);"></i>
                    nithyadentalclinic.2015@gmail.com</a>
                <a href="tel:7708249115"><i class="fa fa-phone-alt" style="color:var(--accent-teal);"></i> +91 77082
                    49115</a>
            </div>
        </div>
    </div>

    <!-- Navigation Header -->
    <nav class="main-header">
        <div class="container header-flex">
            <a href="index.php" class="logo">
                <img src="images/logo.jpeg?v=<?php echo time(); ?>" alt="Nithya Dental Clinic" class="site-logo">
            </a>
            <button class="mobile-toggle" id="mobileMenuBtn" aria-label="Toggle navigation menu" aria-expanded="false">
                <i class="fa fa-bars"></i>
            </button>
            <ul class="nav-links" id="navLinks">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" id="servicesDropdownToggle">Our Services <i class="fa fa-angle-down"></i></a>
                    <div class="dropdown-menu">
                        <a href="root-canal.php">Root Canal Treatment</a>
                        <a href="orthodontics.php">Orthodontic Braces & Aligners</a>
                        <a href="implants.php">Dental Implants</a>
                        <a href="cosmetic.php">Cosmetic Dentistry</a>
                        <a href="pediatric.php">Pediatric Care</a>
                    </div>
                </li>
                <li><a href="contact.php">Contact Us</a></li>
                <li class="nav-book-item"><a href="book-appointment.php" class="btn-nav-book"><i class="fa fa-calendar-alt"></i> Book Appointment</a></li>
            </ul>
        </div>
    </nav>
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const mobileBtn = document.getElementById('mobileMenuBtn');
        const navLinks = document.getElementById('navLinks');
        const dropdownToggle = document.getElementById('servicesDropdownToggle');
        const dropdownItem = dropdownToggle ? dropdownToggle.closest('.dropdown') : null;

        if (mobileBtn && navLinks) {
            mobileBtn.addEventListener('click', function (e) {
                e.stopPropagation();
                const isOpen = navLinks.classList.toggle('active');
                mobileBtn.setAttribute('aria-expanded', isOpen);
                const icon = mobileBtn.querySelector('i');
                if (icon) {
                    if (isOpen) {
                        icon.classList.remove('fa-bars');
                        icon.classList.add('fa-times');
                    } else {
                        icon.classList.remove('fa-times');
                        icon.classList.add('fa-bars');
                    }
                }
            });

            // Close when clicking outside header
            document.addEventListener('click', function (e) {
                if (!navLinks.contains(e.target) && !mobileBtn.contains(e.target)) {
                    if (navLinks.classList.contains('active')) {
                        navLinks.classList.remove('active');
                        mobileBtn.setAttribute('aria-expanded', 'false');
                        const icon = mobileBtn.querySelector('i');
                        if (icon) {
                            icon.classList.remove('fa-times');
                            icon.classList.add('fa-bars');
                        }
                    }
                }
            });
        }

        // Submenu dropdown on mobile
        if (dropdownToggle && dropdownItem) {
            dropdownToggle.addEventListener('click', function (e) {
                if (window.innerWidth <= 991) {
                    e.preventDefault();
                    dropdownItem.classList.toggle('open');
                }
            });
        }
    });
    </script>