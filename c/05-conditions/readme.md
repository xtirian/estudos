# Conditions

## Decision Making
In life, we all have to make decisions. In order to make a decision we wigh out our options and so do our programs. 

Here is the general form of the decision making structures found in C.

```c
#include <stdio.h>
int target = 10;
if (target) {
  printf("Target is equal to 10");
}
```

## The if statement

The `if` statement allows us to check if an expression is `true` or `false`, and execute different code according to the result.

To evaluate whether two variables are equal, the `==` operator is used, just like in the first example. 

Inequality operators can also be used to evaluate expresions. For example:

```c
int foo = 1;
int bar = 2;

if (foo < bar) {
  printf("foo is smaller than bar.");
}

if (foo > bar) {
  printf("foo is freater than bar.");
}
```

We can use the `else` keyword to execute code when our expression evaluates do `false`. And sometimes we will have more than two outcomes to choose from, like we can chain multiple if else statements together.

```c
int foo = 1;
int bar = 2;

if (foo <  bar) {
  printf("foo is smaller than bar.");
} else if (foo == bar) {
  printf("foo is equal to bar.");
} else {
  printf("foo is freater than bar.")
}
```

Two or more expressions can be evaluated together using logical operators to check if two expressions evaluate to `true` together, or at least one of them. To check if two expressions both evaluate `true`, use AND operator `&&`. To check if at least one of the expressions evaluate to `true`, use the OR operator `||`.

```c
int foo = 1;
int bar = 2;
int moo = 3;

if (foo < bar && moo > bar) {
  printf("foo is smaller than bar AND moo is larger than bar.");
}

if (foo < bar || moo > bar) {
  printf("foo is smaller than bar OR moo is larger than bar.");
}
```

The NOT operator `!` can also be used likewise:
```c
int target = 9;
if (target != 10) {
  printf("Target is not equal to 10");
}
```

## Exercise
In this exercise, you must construct an if statement inside the guessNumber function statement that checks if the number guess is equal to 555. If that is the case, the function must print out using printf "Correct. You guessed it!". If guess is less than 555, the function must print out using printf "Your guess is too low." If guess is greater than 555, the function must print out using printf "Your guess is too high."

Important: Don't forget to add a newline character \n at the end of the printf string


```c
#include <stdio.h>

void guessNumber(int guess) {
    // TODO: write your code here
}

int main() {
    guessNumber(500);
    guessNumber(600);
    guessNumber(555);
}
```
