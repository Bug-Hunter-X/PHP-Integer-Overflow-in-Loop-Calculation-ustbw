function foo(int $a): int {
  if ($a < 0) {
    return -1; // Handle negative input
  }

  $result = 0;
  for ($i = 0; $i < $a; $i++) {
    $result += $i;
  }
  return $result; 
}