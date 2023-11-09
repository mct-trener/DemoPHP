<?php
$hostname = gethostname();
echo "Hostname: " . $hostname . "<br>";

$startTime = microtime(true); // Get the current time

// Perform CPU-intensive computations
for ($i = 0; $i < 100000000; $i++) {
   $result = sqrt($i);
}

$endTime = microtime(true); // Get the end time
$executionTime = $endTime - $startTime; // Calculate the execution time

echo "Execution Time: " . $executionTime . " seconds";
?>
