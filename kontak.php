<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/kontak.css?php echo time(); ?>">
    <link rel="stylesheet" href="css/style.css">
    <link rel="jsBerita" href="js/script.js">
</head>
<?php include 'header.php'; ?>
<body>
    <main class="container">
    <section id="contact" class="contact-section">
  <div class="container">
    <div class="section-header">
      <h2>Get In Touch</h2>
      <p>We'd love to hear from you. Send us a message and we'll respond as soon as possible.</p>
    </div>


      <!-- Contact Form -->
      <div class="contact-form-wrapper" data-aos="fade-up" data-aos-delay="400">
        <form class="contact-form">
          <div class="form-row">
            <div class="input-group">
              <span class="input-icon"><i class="bi bi-person-fill"></i></span>
              <input type="text" name="name" placeholder="Your Name*" required>
            </div>
            <div class="input-group">
              <span class="input-icon"><i class="bi bi-envelope-fill"></i></span>
              <input type="email" name="email" placeholder="Email Address*" required>
            </div>
          </div>

          <div class="form-row">
            <div class="input-group">
              <span class="input-icon"><i class="bi bi-phone-fill"></i></span>
              <input type="tel" name="phone" placeholder="Phone Number*" required>
            </div>
            <div class="input-group">
              <span class="input-icon"><i class="bi bi-list-ul"></i></span>
              <select name="subject" required>
                <option value="">Select Service*</option>
                <option value="Consulting">Consulting</option>
                <option value="Development">Development</option>
                <option value="Marketing">Marketing</option>
                <option value="Support">Support</option>
              </select>
            </div>
          </div>

          <div class="input-group textarea-group">
            <span class="input-icon"><i class="bi bi-chat-left-text-fill"></i></span>
            <textarea name="message" rows="5" placeholder="Your Message*" required></textarea>
          </div>

          <div class="form-status">
            <div class="loading">Sending your message...</div>
            <div class="error-message">There was an error sending your message. Please try again.</div>
            <div class="success-message">Thank you! Your message has been sent successfully.</div>
          </div>

          <button type="submit" class="submit-btn">
            <span>Send Message</span>
            <i class="bi bi-send-fill"></i>
          </button>
        </form>
      </div>
    </div>
  </div>
</section>
    </main>
    <?php include 'footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>