<?php 
$host = 'redis-master';
  if (getenv('34.64.50.228') == 'env') {
    $host = getenv('REDIS_MASTER_SERVICE_HOST');
  }
?>