# CakeBlog

Developed by: [George Whitcher](http://georgewhitcher.com)

CakeBlog is an open source blogging software. Written by George Whitcher in PHP with the CakePHP framework. 

## Demo

[Demo](http://cakeblog.georgewhitcher.com/demo) - Demo for your viewing purposes. Please do not change passwords. Username:admin Password:admin.


## Auto Installation

* Upload files.
* Setup database and user (with all privileges) on server and put that information in the config located in /config/database.php.
* Configure settings in /config/cakeblog_config.php.
* Open git bash and run "php composer.phar install".
* Now run the command "cake Migrations migrate".
* Make the /webroot/img/articles/ directory and it's subdirectories writable (CHMOD 777).
* Login to admin by visiting DOMAIN.COM/admin.
* Default username and password is admin:admin.
* Enjoy!

## Manual Installation

* Download the latest version of [CakePHP](https://github.com/cakephp/cakephp).
* Download the latest version of [CakeBlog](https://github.com/gwhitcher/CakeBlog).
* Upload CakePHP and then upload CakeBlog.  Overwritting any necessary files when copying CakeBlog.
* Setup database and user (with all privileges) on server and put that information in the config located in /config/database.php.
* Import cakeblog.sql into created database.
* Configure settings in /config/cakeblog_config.php.
* Make the logs and tmp directories writable (CHMOD 777).
* Make the /webroot/img/articles/ directory and it's subdirectories writable (CHMOD 777).
* Login to admin by visiting DOMAIN.COM/admin.
* Default username and password is admin:admin.
* Enjoy!

## Additional Setup Instructions

* To get RoxyFileManager for TinyMCE to work in CakePHP you need to create a symbolic link from the directory (cakeblog/app/webroot/js/tinymce/plugins/fileman/Uploads) to the directory (cakeblog/app/webroot/img/articles/content).  When inserting links you can adjust the link which is inserted to http://domain.com/img/articles/content or leave the link the program entered as it will work either way.

## Get Support!

[Issues](https://bitbucket.org/gwhitcher/cakeblog/issues) - Got issues? Please tell me!
[CakeBlog](http://cakeblog.georgewhitcher.com) - CakeBlog Homepage.