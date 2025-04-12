<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Christopher Ward Construction</title>
  <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <link rel="apple-touch-icon" href="apple-icon-180x180.png">
</head>

<body>
  <div class="spacer"></div>
  <div class="container">
    <h1>Christopher Ward Construction</h1>
    <div class="about">
      <p>High-end Building and Construction Company specialising in everything from Ground Works, re-furbishments, kitchen and bathroom renovations. Available for specialist Welding as well including TIG, MIG atc. Also available as a Towing and Haulage service in and around the United Kingdom</p>
    </div>
    <nav>
      <a href="index.php"><span>Home</span></a> <!-- Updated -->
      <a href="gallery.php"><span>Gallery</span></a> <!-- Changed from Services -->
      <a href="#" id="contact-link"><span>Contact</span></a>
    </nav>
    <!-- Popup form -->
    <div class="contact-popup" id="contact-popup">
      <button class="close-btn" id="close-popup">X</button>
      <form action="send_mail.php" method="POST">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    <label for="message">Message:</label>
    <textarea id="message" name="message" required></textarea>
    <!-- Honeypot field -->
    <div style="display: none;">
        <label for="website">Leave this blank:</label>
        <input type="text" id="website" name="website">
    </div>
    <!-- reCAPTCHA -->
    <div class="g-recaptcha" data-sitekey="6LeyaA0rAAAAAFGawtbnV651re-RNg_yNPcq5hSw"></div>
    <button type="submit">Send</button>
</form>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
    </div>
  </div>
  <div class="spacer"></div>
  <script src="script.js"></script>
</body>

</html>
