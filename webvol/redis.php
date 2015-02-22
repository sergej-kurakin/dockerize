<?php


$redisAddr = getenv('REDIS_PORT_6379_TCP_ADDR');
$redisPort = getenv('REDIS_PORT_6379_TCP_PORT');

$redis = new Redis();
$redis->connect($redisAddr, $redisPort);

try {
 $viewCount = (int)$redis->get('viewcoint');
} catch (Exception $e) {
  echo $e->getMessage();
}

echo "Count: ".$viewCount."\n";

$viewCount++;

try {
  $redis->set('viewcoint', $viewCount);
} catch (Exception $e) {
  echo $e->getMessage();
}

$redis->close();

