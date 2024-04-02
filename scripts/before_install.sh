#!/bin/bash
# Backup WordPress files and database
sudo cp -r /var/www/html /var/www/html_backup
mysqldump -h 44.194.189.122 -u yash -ppassword wp1 > /var/www/html_backup/db_backup.sql