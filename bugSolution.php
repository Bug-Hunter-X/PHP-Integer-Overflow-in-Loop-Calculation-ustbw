function foo(int $a): int {
  if ($a < 0) {
    return -1; // Handle negative input
  }

  if ($a > PHP_INT_MAX / 2) { //Check for potential overflow
    return gmp_intval(gmp_sum(gmp_range(0, gmp_init($a -1))));
  }

  $result = 0;
  for ($i = 0; $i < $a; $i++) {
    $result += $i;
  }
  return $result;
}

//Example Usage
echo foo(1000000000).PHP_EOL;
echo foo(PHP_INT_MAX).PHP_EOL; //Will not overflow
