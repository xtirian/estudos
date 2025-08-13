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

The function `strncmp` compares between two strings, return the number 0 if they are eqyakm ir a different numbr if they are different. The arguments are the two strings to be compared
