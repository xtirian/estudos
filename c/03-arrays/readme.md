# Arrays
Arays are a special kind of variables which can hold more than one value under the same variable name, organised with an index. Arrays are defined using a very straightfoward syntax:
```c
/* defines an array of 10 integers */
int numbers[10];
```
Accessing a value from the array is done by using the same syntax. Notice that arrays in C are zero-based, which means that if we defined an array of size 10, then the array cells 0 through 9 (inclusive) are defined.

```c
int numbers[10];

/* populate the array */
numbers[0] = 10;
numbers[1] = 20;
numbers[2] = 30;
numbers[3] = 40;

/* print the 3rd number from the array, which has an index of 2 */
printf("The 3rd number in the array is %d", numbers[2]);
```
Arrays can only have one type of variable, because they are implemented as a sequence of values in the computer's memory.

# Exercise
* The code below does not compile, because the grades variable is missing.
* One of the grades is missing. Can you define it so the grade average will be 85?

```c
#include <stdio.h>

int main() {
  /* TODO: define the grades variable here */
  int average;

  grades[0] = 80;
  /* TODO: define the missing grade
     so that the average will sum to 85. */
  grades[2] = 90;

  average = (grades[0] + grades[1] + grades[2]) / 3;
  printf("The average of the 3 grades is: %d", average);

  return 0;
}
```
