# Majisa Web Services

## Project Overview
This is a PHP-based portfolio and company website for Majisa Web Services, featuring:
- Home, About, Services, Projects, Contact pages
- Contact form with database integration
- SEO-friendly URLs (via `.htaccess`)

## Installation Guide
1. Clone the repository:
2. Configure the database:
- Import `majisa_web_services.sql` into MySQL
- Edit `/config/database.php` with your database credentials

3. Run the project on localhost:
- Start Apache & MySQL in XAMPP/MAMP
- Open `http://localhost/majisa_web_services/`

## File Structure
/majisa_web_services/
│── /assets/                 # Contains images, icons, and other assets
│── /css/                    # CSS files
│   ├── styles.css
│── /js/                     # JavaScript files
│   ├── scripts.js
│── /includes/               # Reusable PHP components
│   ├── header.php
│   ├── footer.php
│   ├── navbar.php
│── /pages/                  # Additional pages
│   ├── about.php
│   ├── services.php
│   ├── projects.php
│   ├── contact.php
│── /config/                 # Configuration files
│   ├── database.php
│── /uploads/                # User-uploaded files
│── index.php                # Homepage
│── resume.pdf               # Resume file
│── contact_form.php         # Handles contact form submission
│── .htaccess                # Apache configuration (if needed)
│── README.md                # Documentation

## Future Enhancements
- Add an **Admin Panel** to manage projects & contact messages
- Implement **Blog functionality**
- Improve **SEO & Performance**
