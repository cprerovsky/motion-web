motion-web
==========

A web ui for motion (motion software detector) with notification and live monitoring

# Installation (Linux)

* install motion, lighttpd (or apache) and nullmailer (or whatever mailer you're comfortable with) 
<code>apt-get install nullailer lighttpd motion git sharutils</code>
* configure nullmailer for use with e.g. gmail
<code>smtp.gmail.com --port=587 --starttls --user=[username] --pass=[password]</code>
* configure lighttpd
* clone the most recent version from https://github.com/cprerovsky/motion-web to your home directory or download the zip from https://github.com/cprerovsky/motion-web/zipball/master
* link the +web+ directory to your document root <code>ln -s /home/[user]/motion-web/web /var/www/motion</code>
** secure the motion directory with digest auth