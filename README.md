SNIP is a powerful Open-Source PHP Pastebin, with the aim of keeping a simple and easy to use user interface.

SNIP allows you to easily share code and files with anyone you wish. Based on the [original Stikked](https://github.com/claudehohl/Stikked) with lots of bug fixes and improvements.

Here are some features:

* Easy setup
* Syntax highlighting for many languages, including live syntax highlighting with CodeMirror
* Paste replies
* Diff view between the original paste and the reply
* An API
* Search pastes
* Trending pastes
* Encrypted pastes
* Burn on reading
* File upload and preview
* Anti-Spam features
* Themes support
* Multilanguage support
* SNIP client with support for client side encryption/decryption: [gostikkit](https://github.com/tcolgate/gostikkit)
* Another CLI tool requiring only curl program: [pbin](https://github.com/glensc/pbin)
* And many more...


Check it out
------------

<img src="https://raw.githubusercontent.com/MercanoG/SNIP/main/doc/snip_demo.png" alt="SNIP"></a>


Prerequisites
-------------

* A web server: Apache, LiteSpeed, Nginx, Lighttpd, Cherokee.
* A database: MySQL / MariaDB, Postgres. OR a writable folder on your filesystem for SQLite.
* PHP version 7.0 or newer is required.
* PHP-GD for the creation of QR-codes.


Installation
------------

1. Download SNIP from https://github.com/MercanoG/SNIP/releases
2. Create a user and database for SNIP
3. Copy application/config/snip.php.dist to application/config/snip.php
4. Edit configuration settings in application/config/snip.php - everything is described there
5. You're done!

* The database structure will be created automatically if it doesn't exist.
* No special file permissions are needed by default. Optional: If you want to have the JavaScript and CSS files minified, the static/asset/ folder has to be writable.
* To ensure that pastes with an expiration set get cleaned up, define the cron key in the config and set up a cronjob, for example:
  * `*/5 * * * * curl --silent http://yoursite.com/cron/[key]`
* If you encounter errors with stylesheets and paths, make sure your base_url config value is not empty ( see [here](https://codeigniter.com/userguide3/installation/upgrade_3113.html) ).
* Be sure to also copy the .htaccess file when you move files around. This is a hidden file and easily overlooked.


How to run it in Docker
-----------------------

    docker-compose up

This automatically builds the docker-image and fires up nginx, PHP and MariaDB. Access your SNIP instance at http://localhost/.

All files are served directly; the SNIP-configuration for Docker resides in docker/snip.php


Documentation
-------------

In the folder doc/, you will find:

* Web server example configurations for Apache, Nginx, Lighttpd, Cherokee
* A troubleshooting guide
* How to create your own theme
* How to translate SNIP into your language
* How to contribute and improve SNIP


Changelog
---------

### Version 1.0.0:

* Updated CodeIgniter to 3.1.13
* Updated the Geshi and PHPQRCode libraries
* Added the ability to upload files to pastes
* Added JS Cookie Consent in the footer
* Fixed PHP 8.1+ compatibility
* Fixed a couple of vulnerabilities
* Lots of various bug fixes and improvements

#### Upgrade Notice

Note that, due to the vast amount of modifications, compatibility with older versions isn't guaranteed. Please test on a dev instance first.

Run the following SQL query in your database to add support for file attachments:

```sql
ALTER TABLE `pastes`
ADD COLUMN `file` VARCHAR(255) NULL AFTER `hits_updated`;
```
