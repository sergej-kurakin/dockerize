<?php

$redis = new Redis();
$redis->connect('redis');

try {
 $viewCount = (int)$redis->incr('viewcoint');
} catch (Exception $e) {
  echo $e->getMessage();
}

echo "Count: ".$viewCount."\n";

$redis->close();

