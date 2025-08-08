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

* **Note**: the argument inside `printf` starts with a "%d" and then the variable that carries the value.

This notation is called Format String (_or something like that_), and is used to specify the way that the data is printed.
Another way to show would be like `printf("The value is: %d", 10);` to print the output "The value is: 10".
This kind of notation has parameters to use it with assertion, and his form is: `%[flags][width].[precision][length]specifier`.

### Specifier
Specifier charecter at the end is the most important item, since it defines the type and the interpretation of its argument. The specifiers I think I should use more are:
|Specifiers|Output|Example|
|----------|------|-------|
|d **or** i|Signed decimal integer|391 or -392 |
|f|Decimal floating point, lowercase| 7.52, 3.141516 |
|e|Scientific notation (mantissa/expoent), lowercase|3.9265e+2|
|c|Charecter|Y   N|
|s|String of charecters|Joe Doe|
|p|pointers address|b8000000|

* The specifier is the only parameter that is mandatory. The `flags`, `width`, `.precision` and `length` are optional parameters.

### flags
|Flags|Description|
|-----|-----------|
|-|Left-justify within the fiven field width; right justification is the default (you'll see it in width sub-specifier)|
|+|Forces to preceed the result with a plus or minus sign (+ or -) even for positive numbers. By default, only negative numbers are preceded with a - signal.|
|**(space)**|If no sign is going to be written, a blank space is inserted before the value. It's mostly used for column alignment or outputs where you want signs to line up vertically.|
|#|Used with `e` or `f` (_and others that i'm not considering here_) it forces the written output to contain a decimal point even |
|0|Left-pads the number with zeroes (0) instead of spaces when padding is specified. No padding: 42; with 5 width and 0 flag: 00042|

|Width|Description|
|-----|-----------|
|(number)|Minimum number of characters to be printed. If the value to be printed is shorter than this number, the result is padded with blank spaces.|
|*|The width is not specified in the format string, but as an additional integer value argument preceding the argiment that has to be formatted. `printf("%*d",3,42)` **or** `printf("%3d",42)` // the width is 3 in both cases|

|.Precision|Description|
|----------|-----------|
|.number|For integers specifiers, precision specifies the minimum number of digitis to be written. If the value to be written is shorter than this number, the result iss padded with leading zeros. For floating and scientific specifiers, this is the number of digits  to be printed after the decimal point (by defautl this is 6). For string specifier, this is the maximum number of characters to be printed|  
|*|Same as width|

The length flag modifies the length of the data type. the best  way to represent this is by a chat, because the length modificator are interpreted different between diferent flags.
|length|d  i|u  o  x  X|f  F  e  E  g  G  a  A|c|s|p|n|
|------|----|----------|----------------------|-|-|-|-|
|(none)|int|unsigned int|double|int|char*|void*|int*|
|h|short int|unsigned short int|-|-|-|-|short int*|
|l|long int|unsigned long int|-|wint_t|wchar_t*|-|long int*|
|L|-|-|long double|-|-|-|-|
