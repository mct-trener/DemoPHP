<?php
$hostname = gethostname();
echo "Hostname: " . $hostname . "<br>";

$startTime = microtime(true); // Get the current time

// Perform CPU-intensive computations
for ($i = 1; $i <= 1000000; $i++) {
   $result = log($i);
}

$endTime = microtime(true); // Get the end time
$executionTime = $endTime - $startTime; // Calculate the execution time

echo "Execution Time: " . $executionTime . " seconds";
?>
