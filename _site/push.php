<?php

if ($_SERVER['HTTP_X_GITHUB_EVENT'] == 'push')
{
  exec('cd /var/www/vhosts/lemberg.co.uk/howto.lemberg.co.uk && git reset --hard HEAD');
  exec('git pull  2>&1 origin master', $output, $code);
  echo json_encode(array('success' => true, 'git_output' => $output, 'git_code' => $code));
  die;
}

echo json_encode(array('success' => false));
die;
