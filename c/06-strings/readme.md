# Strings 

## Defining strings 

Strings in C are actually arrays of characters. Although using pointers in C is an advanced subject, fully explained latr on, wewill use pointrs to a character array to define simple strings, in the following manner:

```c 
char * name = "Matheus Fernandes";
```

This method creates a string which we can only use for reading. If we wish to define a string which can be mnipulated, we will need to define it as a local character array.

```c 
char chame[] = "";
```

This notation is different because it allocates an array variable so we can manipulate it. The emput brackets notation `[]` tells the compiler to calculate te size of the array automatically. This is in fact the same as allocating it explicity, adding one to the lngth of the string: 

```c
char name[] = "Mathues Fernandes";
/* Is the same as */ 
char name[17] = "Matheus Fernandes";
```

The reason that we need to add one, although the string `Matheus Fernandes` is exactly 16 characters long, is for string termination: a special character which indicates the end of the string. The end of the string is marked because the program does not know the length of the string - only the compiler knows it according to the code.

## String formatting with print

We can use the `printf` command to format a string together with other strings, in the following manner:

```c 
char * name = "John Smith";
int age = 27;

/* prints out 'John Smith is 27 years old.' */
printf("%s is %d years old.\n", name, age);
```

Notice that when printing strings, we must add a newline (`\n`) character so that our next `printf` statement will print in a new line.

## String length

The function `strlen` returns the length of the string which has to be passed as a argument:

```c 
char * name = "Nikhil";
printf("%d\n", strlen(name);)
```

## String comparison

The function `strncmp` compares between two strings, return the number 0 if they are eqyakm ir a different numbr if they are different. The arguments are the two strings to be compared, and the maximum comparison length. There is also an unsafe version of this function called `strcmp`, but is not recommended to use it.
```c
char * name = "Matheus";

if (strncmp(name, "Matheus", 7) == 0) {
  printf("Hello, Matheus!\n");
} else {
  printf("You are not John. Go away.\n");
}
```
>You could not know the size of the string you are comparing in the `strncmp`, and the attribute size of the method is not optional. So, the recommendation is to use the strnlen before to calc the size of the strings.

## String Concatenation
The function `strncat` appends first `n` characters of src string to the destination string where `n` is `min(n,length(src))`; The arguments passed are destination string, source string, and n - maximun number of characters to be appended.

```c
char dest[20]="Hello";
char src[20]="World";
strncat(dest,src,3);
printf("%s\n",dest);
strncat(dest,src,20);
printf("%s\n",dest);
```

## Exercise
Define the string `first_name` with the value `John` using the pointer notation, and define the string `last_name` with the value `Doe` using the local array notation.

```c
#include <stdio.h>
#include <string.h>
int main() {
  /* define first_name */
  /* define last_name */
  char name[100];

  last_name[0] = 'B';
  sprintf(name, "%s %s", first_name, last_name);
  if (strncmp(name, "John Boe", 100) == 0) {
      printf("Done!\n");
  }
  name[0]='\0';
  strncat(name,first_name,4);
  strncat(name,last_name,20);
  printf("%s\n",name);
  return 0;
}
```
