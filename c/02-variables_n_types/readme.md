# Variables and Types

## Data types
C has several types of variables, but there are a few basic types:
* **Integers**: Whole numbers wich can be either positive or negative. Defined using:
  * `char`: has typically 1 byte (8 bits); can go to -128 to 127; Commonly used to store characters like "a" or "Z", and very small numbers.
  * `int`: has 4 bytes (32 bits); goes from -2.147.483.648 to 2.147.483.647.
  * `short`: has 2 bytes (16 bits); goes from -32.768 to 32.767.
  * `long`: has 4 bytes oon 32-bit system; sometimes ghas 8 bytes on 64-bit system; larger tha int in some systems.
  * `long long`: typically 8 bytes (64 bits); the range goes from - 9.223.372.083.854.775.808 to 9.223.372.083.854.775.807.
* **Unsigned Integers**: the same definitions, which can only be positive. Defined by using `unsigned char`, `unsigned int`, `unsigned short`, `unsigned long` or `unsigned long long`.
* **Floating point numbers**: real numbers (numbers with fractions). Defined using `float` and `double`.
* **Structures**: will be explained later, in the Structures section.

The different types of variables define their bounds.

Note that C does _not_ have a boolean type. Usually, it is defind using the following notation:

```c
#define BOOL char
#define FALSE 0
#define TRUE 1
```

C uses arrays of caracters to define strings, and will be explained in the Strings section.

## Defining variables
For numbers, we will usually use the type `int`. On most computers today, it is a 32-bit number,  which means the number can range from -2,147,483,648 to 2,147,483,647.
```c
int foo;
int bar = 1;
```

The variable foo can be used, but since I didn't initialize it, we don't know what's in it. The variable bar contains the number 1. 

Now, we can do soe math. Asuming `a`, `b`, `c`, `d` and `e`area variables, we can simply use operators in the following notation:

```c
int a=0,b=1,c=2,d=3,e=4;
a = b - 1 + d * e;
printf("%d", a);
```
