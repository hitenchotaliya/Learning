<?php

class MyCustomException extends Exception {}

function processInput($input) {
    try {
        if ($input < 0) {
            throw new MyCustomException('Negative input is not allowed.');
        }

        // Process the input...
        return $input * 2;
    } catch (MyCustomException $e) {
        // Local handling of the exception
        echo 'Caught MyCustomException locally: ', $e->getMessage(), "\n";

        // Re-throw the exception for higher-level handling
        throw $e;
    }
}

try {
    $result = processInput(-5);
    echo "Result: $result\n"; // This line won't be executed
} catch (MyCustomException $e) {
    // Handle the re-thrown exception at a higher level
    echo 'Caught MyCustomException at a higher level: ', $e->getMessage(), "\n";
}
