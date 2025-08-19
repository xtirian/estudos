# Functions 

C functions are simple, but because of how C worksm the power of functions is a bit limited. 
* functions receive either a fixed or variable amount of arguments.
* Functions can only return one value.

In C, arguments are copied by value to functions, which means that we cannot change the arguments to affect their value outside of the function. To do that, we must use pointers, which are taught later on.

Functions are defined using the following syntax:

```c 
int foo(int bar) {
  /* do something */
  return bar * 2;
}

int main() {
  foo(1);
}
```

The function `foo` we defined receives one argument, which is `bar`. The function receiver a integer, multiplies it by two, and return the result.

To execute the function `foo` with 1 as the argument `bar`, we use the following syntax: 

```c
foo(1);
```

In C, functions must be first defined before they are used in the code. They can be either declared first and then implmented later on using a header file or in the beginning of the C file, or they can be implemented in the order they are used (less preferable).

The correct way to use functions is a follows:
```c 
/* function declaration */
int foo(int bar);

int main() {
  /* calling foo from main */
  printf("The value of foo is %d\n", foo(1));
}

int foo(int bar) {
  return bar + 1;
}
```

We can also create functions that do not return a value by using the keyword `void`:

```c 
void moo() {
  /* do something and don't return a value */
}

int main() {
  moo();
}
```

## Exercises

Write a function called `print_big` which receives one argument (an integer) and prints the line `x is big` (where x is the argument) if the argument given to the functions is a number bigger than 10.

* **Important**: Don't forget to add a newline character `\n` at the end of the printf string.

```c
#include <stdio.h>

/* function declaration */
void print_big(int number);

int main() {
  int array[] = { 1, 11, 2, 22, 3, 33 };
  int i;
  for (i = 0; i < 6; i++) {
    print_big(array[i]);
  }
  return 0;
}

/* write your function here */
```


