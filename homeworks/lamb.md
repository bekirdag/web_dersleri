# How To Install [LAMP] Linux, Apache, MySQL & PHP on Ubuntu 18.04.2

LAMP; Abbreviation for Linux, Apache, MySQL and PHP. It is a popular stack used in creating dynamic web applications. This stack acts as the Linux operating system for the web application. Used for MySQL database. Apache is a web server. PHP is also used to manage dynamic content.

## What do we need?

- A local machine with an SSH client installed.
- VPS running on Ubuntu 18.04.
- A non-root user with sudo privileges.

---

## Install Apache Web Server:

First, you need to connect to the server with ssh. In terminal;

```
ssh root@IPaddress
Password: *******
```

Install Apache from Ubuntu’s Package manager:

```
sudo apt update
```

```
sudo apt install apache2
```

To check your installation, open your browser on your computer and enter http: // ```<your_vps_ip_address> ``` in the address bar. For example, if your VPS IP address is 195.110.59.211, the address you need to enter should be http://195.110.59.211.

## Modifying the Firewall to allow Web Traffic:

You need to follow the below instructions to enable the UFW firewall. This UFW firewall will permit the traffic from HTTP & HTTPS request.

```
sudo ufw app list
```
```
sudo ufw app info “Apache Full”
```

The output will be:

```
Profile: Apache Full
Title: Web Server (HTTP,HTTPS)

Description: Apache v2 is the next generation of the omnipresent Apache web server.

Ports: 80,443/tcp
```

Now you need to enable the incoming traffic through the port 80 & 433.
```
sudo ufw allow in “Apache Full”
```

## Installing MySQL Database:

MySQL is the database for your application. Run the following command to install MySQL.

```
sudo apt install mysql-server
```

The above command will install the list of packages related to the MySQL and it will consume some space in your server. You need to enter “Y” and hit the “Enter” button.

```
sudo mysql_secure_installation
```

During the installation, you will be prompted for a password for the root user. Make sure you use a strong password. Don't leave it empty.

```
There are three levels of password validation policy:

LOW Length >= 8
MEDIUM Length >= 8, numeric, mixed case, and special characters
STRONG Length >= 8, numeric, mixed case, special characters, and dictionary file

Please enter 0 = LOW, 1 = MEDIUM and 2 = STRONG: 1
```

## Installing PHP on the server:

This will process your codes and displays into dynamic content.Just follow the steps to install the PHP:

```
sudo apt install php libapache2-mod-php php-mysql
```

We need to make some adjustments to the config file.

```
sudo nano /etc/apache2/mods-enabled/dir.conf
```

The output will look like this:
```
<IfModule mod_dir.c>
DirectoryIndex index.html index.cgi index.pl <b>index.php</b> index.xhtml index.htm
</IfModule>
```

Just change the exntension from “index.html to index.php” in the first and change the “index.php to index.html” in the fourth one. After changing, it will look like the below one:

```
<IfModule mod_dir.c>
DirectoryIndex <b>index.php</b> index.html index.cgi index.pl index.xhtml index.htm
</IfModule>
```

Save it and restart apache.
<br>
<br>
## Configure Apache Vhosts to Redirect the Domain Name

Open terminal and make sure you are connected to the server. 



Create Directory:

```
mkdir /var/www/html/example.com
```

```
mkdir /var/www/html/nidaelyas.com/public_html
```
```
nano /etc/httpd/conf .d/example.conf
```html
<VirtualHost *:80>
    ServerName www.example.com
    ServerAlias example.com
    DocumentRoot /var/www/html/example.com/public_html
    ErrorLog /var/www/html/example.com/error.log
</VirtualHost>
```
nano /etc/apache2/sites-
```
You will see this:
```
sites-available/ sites-enabled/
```
And then write this for open example.com config file 
```
nano /etc/apache2/sites-available/examplecom.conf
```
<VirtualHost *:80>
    ServerName www.example.com
    ServerAlias example.com
    DocumentRoot /var/www/html/www.example.com/public_html
    ErrorLog /var/www/html/www.example.com/error.log
</VirtualHost>
```
```
After then write this:
```
a2en
```
You will see this:
```
a2enconf a2enmod a2ensite 
```
Write this:
```
a2enconf examplecom.conf 
```

Next, create an index.html file and type ```<html> Hello World! </html>```  into it. Now restart apache. To test, open your favorite browser and enter domain name (example.com). You will see "Hello World!" in your site.
```
nano /var/www/html/nidaelyas.com/public_html/index.html
```

