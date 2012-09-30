motion-web
==========

A web ui for motion (motion software detector) with notification and live monitoring

# Installation (Linux)

* install motion, lighttpd (or apache) and nullmailer (or whatever mailer you're comfortable with) 
<code>apt-get install nullailer lighttpd motion git sharutils mailutils</code>
* configure nullmailer for use with e.g. gmail
<code>smtp.gmail.com smtp --port=587 --starttls --user=[username] --pass=[password]</code>
* configure lighttpd
* clone the most recent version from https://github.com/cprerovsky/motion-web to your home directory or download the zip from https://github.com/cprerovsky/motion-web/zipball/master
* link the +web+ directory to your document root <code>ln -s /home/[user]/motion-web/web /var/www/motion</code>
** secure the motion directory with digest auth

# Automated (de)activation

motion-web is capable of automatic activation whenever you leave your home. Just add +scripts/watcher.php+ to your crontab so that it can check every minute if your mobile phone is available on the network. Add one or more ips to +conf/watchips+ to add devices that will disable motion as soon as they register with your wifi. If none of those ips is detected anymore, motion will automatically start.

*NOTE* Your user will need to have sudo privileges to do +sudo service motion start+ and +sudo service motion stop+ in order for this to work.
