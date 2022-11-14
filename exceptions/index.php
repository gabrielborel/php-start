<?php

echo "START" . PHP_EOL;

try {
    throw new RuntimeException("Teste");
} catch (RuntimeException|DivisionByZeroError $e) {
    echo $e->getMessage() . PHP_EOL;
    echo $e->getLine() . PHP_EOL;
}

/**
 * @throws Exception
 */
function itThrowsException(): void
{
    throw new RuntimeException();
}

itThrowsException();

echo "END" . PHP_EOL;
