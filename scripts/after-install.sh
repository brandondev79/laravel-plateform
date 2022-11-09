#!/usr/bin/env bash
cd /var/www
chown -R www-data:www-data collab.press
cd /var/www/collab.press
chmod -R 775 storage
chmod -R 775 bootstrap/cache