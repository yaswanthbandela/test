#!/bin/bash

# Restore WordPress files and database
sudo cp -r /var/www/html_backup/* /var/www/html/
sudo chown -R www-data:www-data /var/www/html
sudo find /var/www/html -type d -exec chmod 755 {} \;
sudo find /var/www/html -type f -exec chmod 644 {} \;
sudo systemctl restart nginx

# Replace wp-config.php with live configuration
sudo cp /var/www/html/wp-config-live.php /var/www/html/wp-config.php  # Assuming this is your live configuration file
sudo chown www-data:www-data /var/www/html/wp-config.php  # Change ownership if needed
sudo chmod 644 /var/www/html/wp-config.php  # Ensure correct permissions

# Check if wp-mail.php exists before copying
if [ ! -f "/var/www/html/wp-mail.php" ]; then
    sudo cp /path/to/your/wp-mail.php /var/www/html/wp-mail.php  # Replace with the correct path to your wp-mail.php file
    sudo chown www-data:www-data /var/www/html/wp-mail.php  # Change ownership if needed
    sudo chmod 644 /var/www/html/wp-mail.php  # Ensure correct permissions
fi
sudo systemctl restart nginx
# Restart services if needed
# sudo systemctl restart apache2  # If using Apache instead of Nginx
