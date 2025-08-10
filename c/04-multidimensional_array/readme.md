# Multidimensional Arrays

Different of the array I looked at [03-arrays](../03-arrays/readme.md), that were all one-dimensional, but C can create and use multi-dimensional arrays. Here is the general form of a multidimensional array declaration:

```c
type name[size1][size2]...[sizeN];
```

For example, here's a basic one you look at:

```c 
int foo[1][2][3];

char vowels[1][5] = {
  {'a','e','i','o','u'};
};
```

## Two-dimensional Arrays

The simplest form of multidimensional array is the two-dimensional array. A two dimensional array is pretty much a list of one-dimenisional arrays. To declare a two dimensional integer array o size [x][y]:

```c  
type arrayName [x][y];
```

Where type can be any C data type and arrayName will be a valid C identifier, or variable. A two-dimensional array can be considered as a table which will have [x] number of rows and [y] namber of columns. A two-dimensional array, can be shown this way:

| Column1 | Column2 | Column3 | Column4 |
| --------------- | --------------- | --------------- | --------------- |
| a[0][0] | a[0][1] | a[0][2] | a[0][3] |
| a[1][0] | a[1][1] | a[1][2] | a[1][3] |
| a[2][0] | a[2][1] | a[2][2] | a[2][3] |
| a[3][0] | a[3][1] | a[3][2] | a[3][3] |

In this sense, every element in the array a  is identified by an element name in the form a[i][j], where 'a' is the name of the array, and 'i' and 'j' are the indexes that uniquely indentify, or show, each element in 'a'.

And honestly, you really don't have to put in a [x] value really, because if you did something like this:

```c 
char vowels[][5] = {
    {'A', 'E', 'I', 'O', 'U'},
    {'a', 'e', 'i', 'o', 'u'}
};
```

the compilr would alread know that there are two "dimensions" you could say, but, you Need a [y] value! The compiler may be smart, but it will not know how many integers, characters, floats, whatever usign you have in the dimensions.

## Initializing Two-dimensional Arrays 

Multidimensional arrays may be used by specifying bracketed values for each row:

```c 
int a[3][4] = {
  {0,1,2,3},
  {4,5,6,7},
  {8,9,10,11}
};
```

The inside braces, which indicates the wanthed row, are optional. The following initialization is the same to the previous example:

```c 
int a[3][4] = {0,1,2,3,4,5,6,7,8,9,10,11}
```

## Accessing Two-dimensional Array Elements

An element in a two-dimensional array is accessed by using the subscripts, row index and column index of the array:

```c 
int val = a[2][3];
```

The above statement will that the 4th element from the 3rd row of the array.


## Exercise

Let us try to find out the average marks of a group of five students for two subjects, Mathematics and Physics. To do this, we use a two-dimensional array called grades. The marks corresponding to Mathematics would be stored in the first row (grades[0]), whereas those corresponding to Physics would be stored in the second row (grades[1]). Complete the following steps so that you can execute this program.

* Declare grades as a two-dimensional array of integers
* Complete the for loops by specifying their terminating conditions
* Compute the average marks obtained in each subject

```c 
	#include <stdio.h>

	int main() {
		/* TODO: declare the 2D array grades here */
		float average;
		int i;
		int j;

		grades[0][0] = 80;
		grades[0][1] = 70;
		grades[0][2] = 65;
		grades[0][3] = 89;
		grades[0][4] = 90;

		grades[1][0] = 85;
		grades[1][1] = 80;
		grades[1][2] = 80;
		grades[1][3] = 82;
		grades[1][4] = 87;

		/* TODO: complete the for loop with appropriate terminating conditions */
		for (i = 0; i < ; i++) {
			average = 0;
			for (j = 0; j < ; j++) {
				average += grades[i][j];
			}

			/* TODO: compute the average marks for subject i */
			printf("The average marks obtained in subject %d is: %.2f\n", i, average);
		}

		return 0;
	}
```



