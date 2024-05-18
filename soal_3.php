<?php
function find_min_buckets($primes, $X) {
    rsort($primes);

    $result = [];
    $remaining = $X;

    foreach ($primes as $prime) {
        $count = intdiv($remaining, $prime);
        $remaining -= $count * $prime;
        $result[$prime] = $count;
    }

    return $result;
}

$primes = [5, 7, 11];
$X = 100;

$result = find_min_buckets($primes, $X);

echo "Total liter yang dibutuhkan: $X\n";
echo "Jumlah ember yang digunakan:\n";
$total_buckets = 0;
foreach ($result as $capacity => $count) {
    echo "Ember kapasitas $capacity liter: $count ember\n";
    $total_buckets += $count;
}
echo "Total ember: $total_buckets\n";