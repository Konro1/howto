<?php

if ($_SERVER['HTTP_X_GITHUB_EVENT'] == 'push') {
  shell_exec( 'cd /var/www/vhosts/lemberg.co.uk/howto.lemberg.co.uk && jekyll build && git reset --hard HEAD && git pull origin master' );
}
