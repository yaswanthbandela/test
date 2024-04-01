#!/bin/bash
# Backup WordPress files and database
sudo cp -r /var/www/html /var/www/html_backup
mysqldump -u yash -ppassword wp > /var/www/html_backup/db_backup.sql