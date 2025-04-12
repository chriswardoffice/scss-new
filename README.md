# SCSS Project

## Overview
This project is a web application built with PHP, SCSS, and JavaScript. It includes a gallery, contact form, and styling for a responsive website.

## Features
- **Gallery**: Displays images in a responsive grid (`gallery.php`).
- **Contact Form**: Allows users to send messages via email using PHPMailer (`send_mail.php`, `success.php`).
- **Styling**: Uses SCSS for modular and maintainable styles (`styles.scss`, compiled to `styles.css`).

## Files
- `index.php`: Main entry point of the application.
- `gallery.php`: Displays the image gallery.
- `send_mail.php`: Handles form submissions and sends emails using PHPMailer.
- `success.php`: Success page after form submission.
- `script.js`: JavaScript for interactivity.
- `styles.scss` / `styles.css`: SCSS and compiled CSS for styling.
- `PHPMailer-master/`: PHPMailer library for sending emails.
- `images/`: Directory containing images for the gallery.
- Various icon files (e.g., `favicon.ico`, `apple-icon-180x180.png`).

## Setup
1. Clone or download this repository.
2. Ensure you have a PHP server (e.g., XAMPP, WAMP) running.
3. Place the project files in your server’s web directory (e.g., `htdocs` for XAMPP).
4. Configure PHPMailer in `send_mail.php` with your email server settings (e.g., SMTP credentials).
5. Access the site via your server (e.g., `http://localhost/scss-new`).

## Usage
- Navigate to `index.php` to view the main page.
- Use the contact form to send messages (requires email server setup).
- View the gallery at `gallery.php`.

## Notes
- The project uses SCSS for styling. To modify styles, edit `styles.scss` and compile it to `styles.css` using an SCSS compiler (e.g., `sass styles.scss styles.css`).
- Ensure the `images/` directory contains the necessary images for the gallery.

## License
[Add your license here, e.g., MIT License, or leave this section out if you don’t want to specify a license.]
