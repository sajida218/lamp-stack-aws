# LAMP Stack on AWS EC2

## Project Overview

This project demonstrates how to deploy a LAMP Stack (Linux, Apache, MySQL, PHP) on an AWS EC2 Ubuntu instance.

## Technologies Used

- AWS EC2
- Ubuntu 26.04
- Apache2
- MySQL
- PHP
- Git
- GitHub

## Steps Performed

- Launched an EC2 Ubuntu instance
- Connected using EC2 Instance Connect
- Updated system packages
- Installed Apache
- Installed MySQL
- Secured MySQL installation
- Installed PHP
- Verified PHP using phpinfo()
- Created a custom PHP homepage

## Verification

Apache

```bash
sudo systemctl status apache2
```

MySQL

```bash
sudo systemctl status mysql
```

PHP

```bash
php -v
```

## Project Structure

```text
lamp-stack-aws/
├── README.md
├── LICENSE
├── .gitignore
├── install_lamp.sh
├── index.php
└── screenshots/
```

## Screenshots

### Apache Running

![Apache](screenshots/01-apache-running.png)

### MySQL Version

![MySQL](screenshots/02-mysql-version.png)

### PHP Version

![PHP](screenshots/03-php-version.png)

### PHP Info Page

![PHP Info](screenshots/04-php-info-page.png)

### Web Root Files

![Files](screenshots/05-web-root-files.png)

### Custom PHP Page

![Website](screenshots/06-custom-php-page.png)

## Author

Sajida Shaik