<?php

function decimalToBinary($n)
{
    $binary = '';

    // Continue dividing the number by 2 and store the remainder
    while ($n > 0) {
        $binary = ($n & 1) . $binary; // Get the least significant bit
        $n = $n >> 1; // Right shift the number by 1
    }

    return $binary;
}

// Example case
echo "Binary of 10 is " . decimalToBinary(10) . "\n"; // Output: 1010
