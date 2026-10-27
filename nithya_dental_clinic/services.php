<?php
$page_title = "Services & Treatments - Nithya Dental Clinic";
$page_desc = "Comprehensive dental treatments: Root Canal, Dental Implants, Braces, Aligners, Teeth Whitening, and Pediatric Dentistry.";
include 'header.php';
?>

<div class="page-title-banner">
    <div class="container">
        <h1>Dental Treatments</h1>
        <p>Multi-Specialty Dental Care Solutions</p>
    </div>
</div>

<div class="container full-width-layout">
    <main>
        <section class="content-box">
            <div style="display:flex; gap:20px; flex-wrap:wrap; align-items:center;">
                <img src="images/root-canal.jpg" alt="Root Canal Treatment"
                    style="width:260px; height:160px; object-fit:cover; border-radius:8px;">
                <div style="flex:1; min-width:240px;">
                    <h2><i class="fa fa-tooth" style="color:var(--accent-teal);"></i> Root Canal Treatment</h2>
                    <p style="margin:10px 0;">Pain-free rotary endodontic treatment designed to salvage infected or
                        severely decayed teeth without extraction.</p>
                    <a href="root-canal.php" class="btn-primary" style="display:inline-block; margin-top:5px;">Explore
                        Root Canal <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
        </section>

        <section class="content-box">
            <div style="display:flex; gap:20px; flex-wrap:wrap; align-items:center;">
                <img src="images/orthodontics.jpg" alt="Orthodontic Braces and Aligners"
                    style="width:260px; height:160px; object-fit:cover; border-radius:8px;">
                <div style="flex:1; min-width:240px;">
                    <h2><i class="fa fa-teeth-open" style="color:var(--accent-teal);"></i> Orthodontic Braces & Aligners
                    </h2>
                    <p style="margin:10px 0;">Achieve straight teeth and proper alignment with self-ligating braces,
                        ceramic braces, or invisible clear aligners.</p>
                    <a href="orthodontics.php" class="btn-primary" style="display:inline-block; margin-top:5px;">Explore
                        Braces & Aligners <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
        </section>

        <section class="content-box">
            <div style="display:flex; gap:20px; flex-wrap:wrap; align-items:center;">
                <img src="images/implants.jpg" alt="Dental Implants"
                    style="width:260px; height:160px; object-fit:cover; border-radius:8px;">
                <div style="flex:1; min-width:240px;">
                    <h2><i class="fa fa-user-md" style="color:var(--accent-teal);"></i> Dental Implants</h2>
                    <p style="margin:10px 0;">Biocompatible titanium implants that act as permanent replacement roots
                        for lost or extracted teeth.</p>
                    <a href="implants.php" class="btn-primary" style="display:inline-block; margin-top:5px;">Explore
                        Dental Implants <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
        </section>

        <section class="content-box">
            <div style="display:flex; gap:20px; flex-wrap:wrap; align-items:center;">
                <img src="images/cosmetic.jpg" alt="Cosmetic Dentistry"
                    style="width:260px; height:160px; object-fit:cover; border-radius:8px;">
                <div style="flex:1; min-width:240px;">
                    <h2><i class="fa fa-magic" style="color:var(--accent-teal);"></i> Cosmetic Dentistry</h2>
                    <p style="margin:10px 0;">Smile makeover treatments including porcelain veneers, composite bonding,
                        and professional teeth whitening.</p>
                    <a href="cosmetic.php" class="btn-primary" style="display:inline-block; margin-top:5px;">Explore
                        Cosmetic Care <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
        </section>

        <section class="content-box">
            <div style="display:flex; gap:20px; flex-wrap:wrap; align-items:center;">
                <img src="images/pediatric.jpg" alt="Pediatric Dentistry"
                    style="width:260px; height:160px; object-fit:cover; border-radius:8px;">
                <div style="flex:1; min-width:240px;">
                    <h2><i class="fa fa-child" style="color:var(--accent-teal);"></i> Pediatric Dentistry</h2>
                    <p style="margin:10px 0;">Gentle and preventive dental treatments tailored specifically for
                        children's oral development.</p>
                    <a href="pediatric.php" class="btn-primary" style="display:inline-block; margin-top:5px;">Explore
                        Kids Dentistry <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
        </section>

        <!-- Call to Action Banner matching exact user design -->
        <section class="experience-cta-box"
            style="background:#072a42; color:#ffffff; text-align:center; padding:50px 30px; margin-top:40px; margin-bottom:30px; border-radius:12px; box-shadow:0 12px 30px rgba(7,42,66,0.25);">
            <h2
                style="color:#ffffff; font-size:2.4rem; font-weight:800; letter-spacing:0.5px; margin-bottom:20px; border-bottom:none;">
                Experience Better Dental Care Today</h2>

            <div
                style="width:100%; max-width:1100px; height:2px; background:var(--accent-teal); margin:0 auto 24px; opacity:0.9;">
            </div>

            <p style="color:#e2e8f0; max-width:750px; margin:0 auto 32px; font-size:1.05rem; line-height:1.7;">
                Ready to consult with our specialized team? Schedule your appointment or reach out to our clinic team
                directly.
            </p>

            <div style="display:flex; justify-content:center; align-items:center; gap:20px; flex-wrap:wrap;">
                <a href="book-appointment.php" class="btn-primary"
                    style="background:var(--accent-teal); color:#ffffff; padding:14px 28px; border-radius:6px; font-weight:700; font-size:1rem; box-shadow:0 4px 18px rgba(0, 168, 150, 0.45); display:inline-flex; align-items:center; gap:8px;">
                    <i class="fa fa-calendar-check"></i> Book Your Consultation
                </a>
                <a href="tel:7708249115"
                    style="display:inline-flex; align-items:center; gap:8px; background:transparent; border:2px solid #ffffff; color:#ffffff; padding:12px 28px; border-radius:6px; font-weight:700; font-size:1rem; text-decoration:none; transition:all 0.3s ease;">
                    <i class="fa fa-phone-alt"></i> Call +91 77082 49115
                </a>
            </div>
        </section>
    </main>
</div>

<?php include 'footer.php'; ?>