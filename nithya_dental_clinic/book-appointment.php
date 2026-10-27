<?php
$page_title = "Book Appointment - Nithya Dental Clinic";
$page_desc = "Schedule your dental consultation online at Nithya Dental Clinic.";
include 'header.php';
?>

<div class="page-title-banner">
    <div class="container">
        <h1>Book An Appointment</h1>
        <p>Fast & Convenient Online Reservation</p>
    </div>
</div>

<div class="container main-layout">
    <main>
        <section class="content-box">
            <h2>Appointment Reservation Form</h2>
            <form method="POST" action="" style="margin-top:20px;">
                <label>Full Name:</label>
                <input type="text" name="name" required
                    style="width:100%; padding:12px; margin:8px 0 15px; border:1px solid #ccc; border-radius:4px;">

                <label>Phone Number:</label>
                <input type="tel" name="phone" required
                    style="width:100%; padding:12px; margin:8px 0 15px; border:1px solid #ccc; border-radius:4px;">

                <label>Select Treatment:</label>
                <select name="treatment" required
                    style="width:100%; padding:12px; margin:8px 0 15px; border:1px solid #ccc; border-radius:4px;">
                    <option value="Root Canal">Root Canal Treatment</option>
                    <option value="Orthodontics">Braces / Aligners</option>
                    <option value="Implants">Dental Implants</option>
                    <option value="Cosmetic">Smile Design / Whitening</option>
                    <option value="General Consultation">General Checkup</option>
                </select>

                <label>Preferred Date:</label>
                <input type="date" name="date" required
                    style="width:100%; padding:12px; margin:8px 0 20px; border:1px solid #ccc; border-radius:4px;">

                <button type="submit" class="btn-primary" style="width:100%;">Confirm Reservation</button>
            </form>
        </section>
    </main>

    <aside>
        <div class="clinic-sidebar">
            <div class="sidebar-card">
                <h3>Emergency Contact</h3>
                <p><i class="fa fa-phone-alt" style="color:var(--accent-teal);"></i> <strong>Phone:</strong> <a
                        href="tel:7708249115">+91 77082 49115</a></p>
                <p><i class="fab fa-whatsapp" style="color:#25d366;"></i> <strong>WhatsApp:</strong> <a
                        href="https://wa.me/917708249115" target="_blank">Chat with Doctor</a></p>
                <p><i class="fa fa-envelope" style="color:var(--accent-teal);"></i> <strong>Email:</strong> <a
                        href="mailto:nithyadentalclinic.2015@gmail.com">nithyadentalclinic.2015@gmail.com</a></p>
                <p><i class="fa fa-clock" style="color:var(--accent-teal);"></i> <strong>Timings:</strong><br>Mon - Sat: 09:00 AM - 09:00 PM<br>Sun: 09:00 AM - 03:00 PM</p>
            </div>
            <div class="sidebar-card" style="background:#f8fafc; border-left:4px solid var(--accent-teal);">
                <h4>Direct Clinic Walk-ins</h4>
                <p style="font-size:0.88rem; color:#64748b; margin-top:6px;">Need urgent dental pain relief? Walk-in
                    patients are accommodated immediately during operating hours.</p>
            </div>
        </div>
    </aside>
</div>

<?php include 'footer.php'; ?>