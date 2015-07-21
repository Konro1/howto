<?php

//if ($_SERVER['HTTP_X_GITHUB_EVENT'] == 'push')
//{
  system( 'cd /var/www/vhosts/lemberg.co.uk/howto.lemberg.co.uk && git reset --hard HEAD && git pull origin master' );
  echo json_encode(array('success' => true));
  die;
//}

echo json_encode(array('success' => false));
die;
