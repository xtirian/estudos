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
