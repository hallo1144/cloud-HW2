# cloud-HW2
## 1. web server
1. launch a vm instance
2. `sudo apt install apache2`
3. `sudo apt install php`
4. `sudo systemctl start apache2.service`
5. `sudo mv index.php /var/www/html/`
5. `sudo mv /var/www/html/index.html /var/www/html/backup.html`

## 1.5 web server(with docker)
1. launch a vm instance
2. `sudo docker-compose up -d`

## 2. google cloud function
1. deploy the js code to google cloud function.
2. adjust the authentication rule so that anyone can access it