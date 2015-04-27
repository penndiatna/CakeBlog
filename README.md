# CakeBlog

Developed by: [George Whitcher](http://georgewhitcher.com)

CakeBlog is an open source blogging software. Written by George Whitcher in PHP with the CakePHP framework.  


## Installation

Upload files.

Setup database and user on server and put that information in the config located in /config/database.php.

Configure settings in /config/cakeblog_config.php.

Open git bash and run "php composer.phar install".

Now run the command "cake Migrations migrate".

Make tmp and logs folders in the root and all it's subfolders writable (chmod 777)

Login to admin by visiting DOMAIN.COM/admin.

Default username and password is admin:admin.

Enjoy!

**NOTE** To get RoxyFileManager for TinyMCE to work in CakePHP you need to create a symbolic link from the directory (cakeblog/app/webroot/js/tinymce/plugins/fileman/Uploads) to the directory (cakeblog/app/webroot/img/articles/content).  When inserting links you can adjust the link which is inserted to http://domain.com/img/articles/content or leave the link the program entered as it will work either way.

## Get Support!

[Issues](https://bitbucket.org/gwhitcher/cakeblog/issues) - Got issues? Please tell me!