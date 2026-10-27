<?php
$page_title = "Gentle Pediatric Dental Care for Children - Nithya Dental Clinic";
$page_desc = "Compassionate, friendly, and pain-free pediatric dentistry for kids, toddlers, and teens at Nithya Dental Clinic in Tamil Nadu. Fluoride, sealants, cavities.";
$page_keywords = "Pediatric dentist, Kids dental clinic, Child dentistry, Cavities in kids, Fluoride treatment, Pit and fissure sealants, Nithya Dental Clinic";
include 'header.php';
?>

<!-- Structured Data: MedicalProcedure + FAQ (SEO, GEO & AEO) -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "MedicalProcedure",
      "name": "Pediatric Dental Care and Preventive Dentistry",
      "procedureType": "TherapeuticProcedure",
      "bodyLocation": "Child Oral Cavity",
      "description": "Specialized dental care for children from infancy through adolescence, focusing on cavity prevention, gentle fillings, and habit counseling.",
      "provider": {
        "@type": "Dentist",
        "name": "Nithya Dental Clinic",
        "telephone": "+91 7708249115",
        "address": {
          "@type": "PostalAddress",
          "addressLocality": "Tamil Nadu",
          "addressCountry": "IN"
        }
      }
    },
    {
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "When should my child visit the dentist for the first time?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The ideal time for a child's first dental visit is when their first tooth erupts or by their first birthday, ensuring healthy jaw and tooth development."
          }
        },
        {
          "@type": "Question",
          "name": "How do you handle anxious or scared children?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Our pediatric dental team uses the gentle 'Tell-Show-Do' method, positive reinforcement, and a child-friendly atmosphere to ensure a calm, fear-free visit."
          }
        }
      ]
    }
  ]
}
</script>

<div class="page-title-banner">
    <div class="container">
        <h1>Pediatric Dentistry (Kids Care)</h1>
        <p>Gentle, Friendly & Fear-Free Dental Care for Growing Smiles</p>
    </div>
</div>

<div class="container full-width-layout">
    <main>
        <div class="content-box">
            <img src="images/pediatric.jpg" alt="Child-Friendly Pediatric Dental Care at Nithya Dental Clinic"
                style="width:100%; height:auto; max-height:420px; object-fit:cover; border-radius:10px; margin-bottom:25px; box-shadow:0 4px 15px rgba(0,0,0,0.1);">

            <h2>Creating Happy, Healthy Habits For Your Little Ones</h2>
            <p>At <strong>Nithya Dental Clinic</strong>, we believe every child deserves a positive and joyful dental
                experience. Our clinic provides specialized care designed specifically for children, making dental
                checkups fun, comforting, and anxiety-free.</p>

            <h3 style="margin-top:25px; color:var(--primary-blue);">Pediatric Dental Treatments We Offer:</h3>
            <div
                style="display:grid; grid-template-columns:repeat(auto-fit, minmax(200px, 1fr)); gap:15px; margin-top:15px;">
                <div
                    style="background:#f8fafc; padding:15px; border-radius:8px; border-left:4px solid var(--accent-teal);">
                    <strong>Fluoride Application</strong>
                    <p style="font-size:0.9rem; margin-top:5px;">Mineral coatings that strengthen milk and permanent
                        teeth enamel against acid attacks.</p>
                </div>
                <div
                    style="background:#f8fafc; padding:15px; border-radius:8px; border-left:4px solid var(--accent-teal);">
                    <strong>Dental Pit & Fissure Sealants</strong>
                    <p style="font-size:0.9rem; margin-top:5px;">Protective barrier layers painted on back molars to
                        prevent food impaction and decay.</p>
                </div>
                <div
                    style="background:#f8fafc; padding:15px; border-radius:8px; border-left:4px solid var(--accent-teal);">
                    <strong>Tooth-Colored Fillings & Pulpectomy</strong>
                    <p style="font-size:0.9rem; margin-top:5px;">Gentle treatment for milk tooth decay to relieve pain
                        and maintain spacing for permanent teeth.</p>
                </div>
            </div>

            <h3 style="margin-top:30px; color:var(--primary-blue);">The Friendly Kids Dental Visit:</h3>
            <p style="color:#64748b; margin-top:5px;">A fear-free, playful environment designed to make children love
                visiting the dentist:</p>
            <div class="procedure-steps-grid">
                <div class="procedure-step-card">
                    <div class="step-number">1</div>
                    <h4>Tell-Show-Do Intro</h4>
                    <p>We introduce your child to dental tools as friendly games, eliminating any fear or mystery.</p>
                </div>
                <div class="procedure-step-card">
                    <div class="step-number">2</div>
                    <h4>Gentle Checkup</h4>
                    <p>Soft examination of baby teeth, gum health, bite development, and eruption patterns.</p>
                </div>
                <div class="procedure-step-card">
                    <div class="step-number">3</div>
                    <h4>Cavity Shielding</h4>
                    <p>Quick, painless application of bubblegum-flavored fluoride varnish or fissure sealants.</p>
                </div>
                <div class="procedure-step-card">
                    <div class="step-number">4</div>
                    <h4>Praise & Reward</h4>
                    <p>Bravery star sticker and oral hygiene coaching to encourage lifelong happy brushing habits!</p>
                </div>
            </div>
        </div>
        <!-- Interactive FAQ Accordion Section -->
         <div class="content-box">
        <section style="margin-top:35px; border-top:1px solid #e2e8f0; padding-top:25px;">
            <h3 style="color:var(--primary-blue); margin-bottom:15px;"><i class="fa fa-question-circle"
                    style="color:var(--accent-teal);"></i> Frequently Asked Questions (FAQ)</h3>

            <div class="faq-accordion">
                <details class="faq-item" open>
                    <summary class="faq-summary">
                        <span>When should a child have their very first dental visit?</span>
                        <span class="faq-icon"><i class="fa fa-chevron-down"></i></span>
                    </summary>
                    <div class="faq-content">
                        <p>According to dental pediatric standards, a child should visit a dentist by their first
                            birthday or within 6 months of their very first milk tooth erupting.</p>
                    </div>
                </details>

                <details class="faq-item">
                    <summary class="faq-summary">
                        <span>Why are baby (milk) teeth important if they fall out anyway?</span>
                        <span class="faq-icon"><i class="fa fa-chevron-down"></i></span>
                    </summary>
                    <div class="faq-content">
                        <p>Primary teeth are essential for proper speech clarity, healthy chewing nutrition, and
                            holding crucial space in the jawbone for adult teeth to erupt in straight alignment.</p>
                    </div>
                </details>

                <details class="faq-item">
                    <summary class="faq-summary">
                        <span>What are dental sealants and do they hurt?</span>
                        <span class="faq-icon"><i class="fa fa-chevron-down"></i></span>
                    </summary>
                    <div class="faq-content">
                        <p>Dental sealants are completely painless protective coatings painted into the deep grooves
                            of chewing molars. There is zero drilling, and it blocks out 80% of childhood cavities!
                        </p>
                    </div>
                </details>

                <details class="faq-item">
                    <summary class="faq-summary">
                        <span>How do you handle children who are anxious or scared?</span>
                        <span class="faq-icon"><i class="fa fa-chevron-down"></i></span>
                    </summary>
                    <div class="faq-content">
                        <p>Our pediatric dentists use proven child-psychology techniques including positive
                            reinforcement, gentle storytelling, and entertaining cartoon distractions to keep visits
                            comfortable and fun.</p>
                    </div>
                </details>
            </div>
        </section>
</div>


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