# PHP Integer Overflow Bug

This repository demonstrates a common bug in PHP related to integer overflow when dealing with large numbers in loops.  The `bug.php` file contains a function that calculates the sum of numbers up to a given input. However, for large inputs, the result is incorrect due to integer overflow. The `bugSolution.php` file provides a solution using the GMP library to handle arbitrarily large integers. 

**Bug:** Integer overflow in a loop leads to incorrect summation results for large inputs.

**Solution:** Utilize the GMP library for arbitrary-precision arithmetic to handle the large numbers accurately.