# GETTING STARTED to JAVASCRIPT 

Javascript is a script language developed by Netscape on the C-base. Script languages ​​do not create a compilable file. Files with the JS extension run through the server. Javascript is fast on the web pages because it works on the client side. <br/>

## JavaScript Features

* It is a user-side language. (Client)
* Any file cannot be read, written or created from the computer with Javascript codes. Cookies are excluded.
* Javascript is part of HTML pages. They don't mean anything by themselves.
* It can be written in html or used as an additional page with .js extension.
* Can be developed with any text editor. <br/>

## Add JavaScript Codes to an HTML Page

```html
<script type="text/javascript" language="javascript">
//We write our script codes here.
</script> 
```
## Calling JS File From Outside

```html
<script type="text/javascript" src="script.js" language="javascript"></script>
```
## Writing Rules
* In Javascript, all variables start with a letter or (_) underscore. It cannot start with numbers.
* Variable names cannot exceed 255 characters.
* Javascript has case sensitivity.
* Non-English characters cannot be used.
* Variables are defined by "var".
* Keywords cannot be used in expression definitions.
* There is no functional difference between the (single quotes) and (double quotes) signs in Javascript. However, care must be taken not to overlap each other in nested use. <br/>

## Use of Comment Lines

The comment lines are important for both us and someone else reading the code to understand the function of the codes. Its use is shown below. <br/>

```html
<script type="text/javascript" language="javascript">
alert("Hata meydana geldi!"); // Single line description.
/*
multiple lines
explanation
*/
</script>
```
## Split Lines of Code

Sometimes, while running, our codes can span a very long line. In such cases, we cannot see the whole code, it becomes difficult to work. Code writers often apply this situation because they take care not to overflow the screen. Its use is shown below. 

```html
<script type="text/javascript" language="javascript">
document.write("javascript example \
split operation");
</script>
```

## Arrays in JavaScript 
Variables created to store multiple data are called arrays. The basic idea of ​​constructing arrays is to access multiple data under a single variable. <br/>
Each data in a variable is called an element. Array elements are called with index values. The index shows where an element is located in the array. Indexes start from 0 as in many programming languages. <br/>
There are three methods used to define elements in an array.

 ```html
 <script>
    var numbers = new Array("zero", "one", "two", "three");
    document.write(numbers);
</script>     
```
Our output will be like this.

```html
zero, one, two, three
```
Second method below.
```html
<script>
    var numbers = ["zero", "one", "two", "three"];
    document.write(numbers);
</script>  
```       
Our output will be like this.

```html
zero, one, two, three
```
Third method below.
```html
<script>
    var numbers = new Array();
    numbers[0] = "zero";
    numbers[1] = "one";
    numbers[2] = "two";
    numbers[3] = "three";
    document.write(numbers);
</script>                     
``` 
Our output will be like this.
```html
zero, one, two, three
```   

### length in JavaScript
We can query the number of elements of an array with the length property, which means length in our language. To do this, just run the .length command after the array name.
For an example

```html
<script>
    var numbers = ["zero", "one", "two", "three"];
    document.write(numbers.length);
</script>  
```       
Our output will be like this.
```html
4
```   
In order to reach the desired element value, it is sufficient to query the index value.

```html
<script>
    var numbers = ["zero", "one", "two", "three"];
    document.write(numbers[2]);
</script>  
```       
Our output will be like this.
```html
two
``` 
### Replacing Array Elements
Array elements in JavaScript can be changed very easily.
```html
<script>
    var numbers = ["zero", "one", "two", "three"];
    numbers[2] = "newTwo";
    document.write(numbers);
</script>  
```       
Our output will be like this.
```html
zero, one, newTwo, three
``` 
### Adding New Elements to an Array

```push()``` method: Used in JavaScript to add items to the end of the array.
```html
<script>
    var numbers = ["zero", "one", "two", "three"];
    numbers.push("four", "five");
    document.write(numbers);
</script>  
```    

```unshift()``` method: This method is used to add elements to the beginning of the array in JavaScript.
```html
<script>
    var numbers = ["zero", "one", "two", "three"];
    numbers.unshift("minus two", "minus one");
    document.write(numbers);
</script>  
```    
Our output will be like this.
```html
minus two, minus one, zero, one, two, three, four, five
```  
### Deleting Elements from an Array
```splice()``` method: In JavaScript, it is used for the element or elements to be deleted after the specified index value. The splice method has two parameters. The first parameter specifies the index position to be deleted and the second parameter specifies how many elements will be deleted after the index.
```html
<script>
    var numbers = ["zero", "one", "two", "three"];
    numbers.unshift("minus two", "minus one");
    numbers.splice(0, 2);
    document.write(numbers);
</script>  
```   
Our output will be like this.
```html
zero, one, two, three, four, five
```   
```pop()``` and ```shift()``` methods: The pop method deletes the last element of the array and the shift method deletes the first element of the array.
```html
<script>
    var numbers = ["zero", "one", "two", "three"];
    numbers.shift();
    numbers.pop();
    document.write(numbers);
</script>  
```  
Our output will be like this.
```html
one, two
```  
```delete``` operator: This operator removes the element from the list and replaces it with an undefined element. It makes the element of the index related to another expression undefined.
```html
<script>
    var numbers = ["zero", "one", "two", "three"];
    delete numbers[1];
    document.write(numbers+"<br>"+numbers.length);e(numbers+"<br>"+numbers.length);
</script>  
``` 
Our output will be like this.
```html
zero,, two, three
4
```   
### Simultaneously Deleting and Adding Elements from an Array
Again we use the splice () function. But this time we will write the next elements instead of the elements we deleted after two parameters.
```html
<script>
    var numbers = ["zero", "one", "two", "three"];
    numbers.splice(0, 3, "four", "five", "six")
    document.write(numbers+"<br>"+numbers.length);e(numbers+"<br>"+numbers.length);
</script>  
``` 
Our output will be like this.
```html
zero,, two, three
4
``` 
### Concatenation of Arrays
```concat()``` method: Used to concatenate multiple arrays.
```html
<script>
    var numbers = ["zero", "one", "two", "three"];
    var animals = ["dog", "cat", "monkey"];
    var numbersAndAnimals = numbers.concat(animals);
    document.write(numbersAndAnimals);
</script>  
``` 
Our output will be like this.
```html
zero, one, two, three, dog, cat, monkey
4
``` 
### Sorting Elements
``` sort()```  method: Used to sort the array elements from small to large.
```html
<script>
    var numbers = ["zero", "one", "two", "three"];
    document.write(numbers.sort());
</script>  
```
In our example, we sort our elements in alphabetical order with ```sort()``` method. Please note that the index position of the elements will also change.

Our output will be like this.
```html
one, three, two, zero
```
```reverse()``` method: It is used to sort array elements in reverse order.
```html
<script>
    var numbers = ["zero", "one", "two", "three"];
    document.write(numbers.reverse());
</script>  
```
Our output will be like this.
```html
three, two, one, zero
```
### Searching for Variables in an Array
```indexof()``` method: Let's say we're looking for an element that has too many elements in an array; but we can't find out where he is. For this we use the indexof () function. This method returns the index of the searched element.

```html
<script>
    var numbers = ["zero", "one", "two", "three"];
    document.write(numbers.indexOf("two"));
</script>  
```
Our output will be like this.
```html
2
```
### Transformation of Elements and Textual Operations
Before you learn the transformation, let's find out which data type the elements in an array are. <br/>
```typeof()``` yöntemi: This method provides information about what kind of data a variable is.
```html
<script>
    var numbers = ["zero", "one", "two", "three", 1, 2, 3];
    document.write(numbers.typeOf[4]);
</script>  
```
Our output will be like this.
```html
number
```
```toString()``` method: Converts string data type all over the world using array.
```html
<script>
    var numbers = ["zero", "one", "two", "three", 1, 2, 3];
    var numbers = numbers.toString();
    document.write(typeof(sayilar[4]));
</script>  
```
Our output will be like this.
```html
string
```
```join()``` method: Normally a comma is placed between elements when printing our output. With join we can change the sort view of the elements in the array.
```html
<script>
    var numbers = ["zero", "one", "two", "three"];
    document.write(numbers.join("-"));
</script>  
```
Our output will be like this.
```html
zero-one-two-three
```
## What is Document Object Model (DOM)
The Document Object Model (DOM) is a programming interface for HTML and XML documents. It represents the page so that programs can change the document structure, style, and content. The DOM represents the document as nodes and objects. That way, programming languages can connect to the page.<br/>

A Web page is a document. This document can be either displayed in the browser window or as the HTML source. But it is the same document in both cases. The Document Object Model (DOM) represents that same document so it can be manipulated. The DOM is an object-oriented representation of the web page, which can be modified with a scripting language such as JavaScript.<br/>

The W3C DOM and WHATWG DOM standards are implemented in most modern browsers. Many browsers extend the standard, so care must be exercised when using them on the web where documents may be accessed by various browsers with different DOMs.

For example, the standard DOM specifies that the getElementsByTagName method in the code below must return a list of all the ```<p>``` elements in the document:
```js
var paragraphs = document.getElementsByTagName("p");
// paragraphs[0] is the first <p> element
// paragraphs[1] is the second <p> element, etc.
alert(paragraphs[0].nodeName);
}
```
All of the properties, methods, and events available for manipulating and creating web pages are organized into objects (e.g., the document object that represents the document itself, the table object that implements the special HTMLTableElement DOM interface for accessing HTML tables, and so forth). This documentation provides an object-by-object reference to the DOM implemented in Gecko-based browsers.

### DOM and JavaScript 

The short example above, like nearly all of the examples in this reference, is JavaScript. That is to say, it's written in JavaScript, but it uses the DOM to access the document and its elements. The DOM is not a programming language, but without it, the JavaScript language wouldn't have any model or notion of web pages, HTML documents, XML documents, and their component parts (e.g. elements). Every element in a document—the document as a whole, the head, tables within the document, table headers, text within the table cells—is part of the document object model for that document, so they can all be accessed and manipulated using the DOM and a scripting language like JavaScript.

## For Loop in JavaScript

The for loop executes a statement block until a specified condition is true. <br/>
How the for loop works?

```js
for (A;B;C){
    //Codes
}
```

* A: Section assigned to variables
* B: Loop condition
* C: Variable increase / decrease section

```js
var i;
for (i =1; i <3; i++){
    alert(" Loop is working i = " +i);
}


console.log("i = "+i); //3
}
```
### For Loop in Arrays

```html
<script>

      var array = new Array("Istanbul","Ankara","Izmir","Rize","Tokat");

      for (i = 0; i < array.length; i++){
          console.log("array["+i+"]="+array[i]);
      }

      console.log("i="+i);//5


      //Result
      //array[0]=Istanbul
      //array[1]=Ankara
      //array[2]=Izmir
      //array[3]=Rize
      //array[4]=Tokat

      //i=5
  </script>
```

Thank you for reading. See you next blog post :)
