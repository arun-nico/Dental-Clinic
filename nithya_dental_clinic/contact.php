<?php
$page_title = "Contact Us - Nithya Dental Clinic | Alangayam";
$page_desc = "Get in touch with Nithya Dental Clinic in Alangayam. Call +91 77082 49115 or visit us opposite Popular Lab, Alangayam, Tamil Nadu 635701.";
include 'header.php';
?>

<div class="page-title-banner">
    <div class="container">
        <h1>Contact Our Clinic</h1>
        <p>We are Here to Help You Smile</p>
    </div>
</div>

<div class="container main-layout">
    <main>
        <section class="content-box">
            <h2>Clinic Address & Details</h2>
            <p><strong>📍 Clinic Name:</strong> Nithya Dental Clinic</p>
            <p><strong>🏢 Address:</strong> 1st Floor, Door No. 45, Opposite to Popular Lab, Alangayam, Tamil Nadu -
                635701</p>
            <p><strong>📞 Phone:</strong> <a href="tel:7708249115">+91 77082 49115</a></p>
            <p><strong>✉️ Email:</strong> <a
                    href="mailto:nithyadentalclinic.2015@gmail.com">nithyadentalclinic.2015@gmail.com</a></p>
            <p><strong>🕒 Opening Hours:</strong><br>
                <span style="margin-left: 24px;">• Monday - Saturday: 09:00 AM - 09:00 PM</span><br>
                <span style="margin-left: 24px;">• Sunday: 09:00 AM - 03:00 PM</span>
            </p>

            <br>
            <h3>Location Map</h3>
            <div
                style="margin-top:15px; border-radius:10px; overflow:hidden; box-shadow:0 6px 20px rgba(0,0,0,0.1); border:1px solid #e2e8f0;">
                <iframe title="NITHYA DENTAL CLINIC Location"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3893.3814025235097!2d78.7519501!3d12.622965699999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bad030036f5c8ad%3A0x5b7f301c5093604f!2sNITHYA%20DENTAL%20CLINIC!5e0!3m2!1sen!2sin!4v1792994294077!5m2!1sen!2sin"
                    width="100%" height="420" style="border:0; display:block;" allowfullscreen="" loading="lazy"
                    referrerpolicy="strict-origin-when-cross-origin">
                </iframe>
            </div>
            <div style="display:flex; flex-wrap:wrap; gap:12px; margin-top:14px; align-items:center;">
                <a href="https://www.google.com/maps/dir/?api=1&destination=NITHYA+DENTAL+CLINIC+Alangayam"
                    target="_blank" rel="noopener noreferrer" class="btn-primary"
                    style="display:inline-flex; align-items:center; gap:8px; padding:10px 18px; font-size:0.92rem; border-radius:6px; text-decoration:none;">
                    <i class="fa fa-directions"></i> Get Directions to Clinic
                </a>
                <a href="https://maps.google.com/?cid=6592962354516353103" target="_blank" rel="noopener noreferrer"
                    style="color:var(--primary-blue); font-weight:600; text-decoration:underline; font-size:0.92rem; display:inline-flex; align-items:center; gap:6px;">
                    <i class="fa fa-map-marked-alt" style="color:var(--accent-teal);"></i> View on Google Maps
                </a>
            </div>
        </section>
    </main>

    <aside>
        <div class="clinic-sidebar">
            <div class="sidebar-card">
                <h3 style="margin-bottom:12px; color:var(--primary-blue);">Send Us a Message</h3>


                <?php
                $form_submitted = false;
                if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['contact_submit'])) {
                    $form_submitted = true;
                }
                ?>

                <?php if ($form_submitted): ?>
                    <div
                        style="background:#e6fffa; border-left:4px solid var(--accent-teal); padding:12px; border-radius:6px; margin-bottom:15px; color:#0f766e; font-size:0.88rem;">
                        <strong><i class="fa fa-check-circle"></i> Received!</strong> Our clinic team will get back to you
                        shortly.
                    </div>
                <?php endif; ?>

                <form method="POST" action="">
                    <div style="margin-bottom:12px;">
                        <label
                            style="font-weight:600; color:var(--primary-blue); font-size:0.85rem; display:block; margin-bottom:4px;">Your
                            Name *</label>
                        <input type="text" name="name" required placeholder=" Your  Name"
                            style="width:100%; padding:10px; border:1px solid #cbd5e1; border-radius:6px; font-size:0.9rem;">
                    </div>

                    <div style="margin-bottom:12px;">
                        <label
                            style="font-weight:600; color:var(--primary-blue); font-size:0.85rem; display:block; margin-bottom:4px;">Phone
                            Number *</label>
                        <input type="tel" name="phone" required placeholder=" Mobile Number"
                            style="width:100%; padding:10px; border:1px solid #cbd5e1; border-radius:6px; font-size:0.9rem;">
                    </div>

                    <div style="margin-bottom:12px;">
                        <label
                            style="font-weight:600; color:var(--primary-blue); font-size:0.85rem; display:block; margin-bottom:4px;">Email
                            (Optional)</label>
                        <input type="email" name="email" placeholder=" Your Email"
                            style="width:100%; padding:10px; border:1px solid #cbd5e1; border-radius:6px; font-size:0.9rem;">
                    </div>



                    <div style="margin-bottom:15px;">
                        <label
                            style="font-weight:600; color:var(--primary-blue); font-size:0.85rem; display:block; margin-bottom:4px;">Your
                            Message *</label>
                        <textarea name="message" rows="3" required placeholder="Write your query or symptoms here..."
                            style="width:100%; padding:10px; border:1px solid #cbd5e1; border-radius:6px; font-size:0.88rem; resize:vertical;"></textarea>
                    </div>

                    <button type="submit" name="contact_submit" class="btn-primary"
                        style="width:100%; padding:12px; font-size:0.95rem; border-radius:6px; cursor:pointer; display:flex; justify-content:center; align-items:center; gap:8px;">
                        <i class="fa fa-paper-plane"></i> Send Message
                    </button>
                </form>
            </div>

            <div class="sidebar-card">
                <h3>Emergency Contact</h3>
               
                <p><i class="fa fa-phone-alt" style="color:var(--accent-teal);"></i> <strong>Phone:</strong> <a
                        href="tel:7708249115">+91 77082 49115</a></p>
                <p><i class="fa fa-envelope" style="color:var(--accent-teal);"></i> <strong>Email:</strong> <a
                        href="mailto:nithyadentalclinic.2015@gmail.com">nithyadentalclinic.2015@gmail.com</a></p>
                <p><i class="fab fa-whatsapp" style="color:#25d366;"></i> <strong>WhatsApp:</strong> <a
                        href="https://wa.me/917708249115" target="_blank">Chat with Doctor</a></p>
                <p><i class="fa fa-clock" style="color:var(--accent-teal);"></i> <strong>Timings:</strong><br>Mon - Sat:
                    09:00 AM - 09:00 PM<br>Sun: 09:00 AM - 03:00 PM</p>
            </div>
        </div>
    </aside>
</div>

<?php include 'footer.php'; ?>