<?php

$redis = new Redis();
$redis->connect('redis');

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

