#!/bin/bash

sudo apt update -y

sudo apt install apache2 -y

sudo systemctl enable apache2
sudo systemctl start apache2

sudo apt install mysql-server -y

sudo systemctl enable mysql
sudo systemctl start mysql

sudo apt install php libapache2-mod-php php-mysql -y