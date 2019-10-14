# Web Development Lessons-3
**We are going to discuss about the topics:**

------

- [What is HTML?](#what-is-html?)
- [HTML Tags](#html-tags)
- [HTML elements?](#html-elements?)
- [HTML form element?](#html-form-element?) 
- [How does a form work?](#how-does-a-form-work?)
- [What are the POST and GET methods?](#what-are-the-post-and-get-methods?)
- [What is HTML comment?](#what-is-html-comment?)



## What is HTML?

- First developed by Tim Berners-Lee in 1990, HTML is short for Hypertext Markup Language. HTML is used to create electronic documents (called pages) that are displayed on the World Wide Web. Each page contains a series of connections to other pages called hyperlinks. Every web page you see on the Internet is written using one version of HTML code or another.

- HTML code ensures the proper formatting of text and images so that your Internet browser may display them as they are intended to look. Without HTML, a browser would not know how to display text as elements or load images or other elements. HTML also provides a basic structure of the page, upon which Cascading Style Sheets are overlaid to change its appearance. One could think of HTML as the bones (structure) of a web page, and CSS as its skin (appearance).

### Basic HTML document:

We created file called index.html:

```html
<!DOCTYPE html>
<html>

   <head>
      <title>This is document title</title>
   </head>
	
   <body>
      <h1>This is a heading</h1>
      <p>Document content goes here.....</p>
   </body>
	
</html>
```

## HTML Tags

- ```<!DOCTYPE...>``` This tag defines the document type and HTML version.

- ```<html>``` This tag encloses the complete HTML document and mainly comprises of document header which is represented by ```<head>```...```</head>``` and document body which is represented by ```<body>...</body>``` tags.

- ```<head>``` This tag represents the document's header which can keep other HTML tags like ```<title>, <link>``` etc.

- ```<title>``` The ```<title>``` tag is used inside the ```<head>```tag to mention the document title.

- ```<body>``` This tag represents the document's body which keeps other HTML tags like ```<h1>, <div>, <p> ``` etc.

- ```<h1>``` This tag represents the heading.

- ```<p>``` This tag represents a paragraph.

- ```<div>``` This is division content.


## HTML Elements (img, table etc.)

### Add Images to Website

- You can add images to your website by using the ```img``` element, and point to a specific image's URL using the ```src``` attribute.

``` html
 <img src="https://www.your-image-source.com/your-image.jpg"> 
 ```

 All ```img``` elements must have an ```alt``` attribute.

 The text inside an ```alt``` attribute is used for screen readers to improve accessibility and is displayed if the image fails to load.

``` html
<img src="pic_trulli.jpg" alt="Italian Trulli">
```

### Defining an HTML Table

- An HTML table is defined with the ```<table>``` tag.

- Each table row is defined with the ```<tr>``` tag. A table header is defined with the ```<th>``` tag. By default, table headings are bold and centered. A table data/cell is defined with the ```<td>``` tag.


``` html
<!DOCTYPE html>
<html>

   <head>
      <title>HTML Tables</title>
   </head>
	
   <body>
      <table>
         <tr>
            <td>Row 1, Column 1</td>
            <td>Row 1, Column 2</td>
         </tr>
         
         <tr>
            <td>Row 2, Column 1</td>
            <td>Row 2, Column 2</td>
         </tr>
      </table>
      
   </body>
</html>
``` 

<i>The output is</i>:

<!DOCTYPE html>
<html>

   <head>
      <title>HTML Tables</title>
   </head>
	
   <body>
      <table>
         <tr>
            <td>Row 1, Column 1</td>
            <td>Row 1, Column 2</td>
         </tr>
         <tr>
            <td>Row 2, Column 1</td>
            <td>Row 2, Column 2</td>
         </tr>
      </table>
      
   </body>
</html>


### HTML Unordered Lists

- An unordered list is a collection of related items that have no special order or sequence. This list is created by using HTML ```<ul>``` tag. An unordered list starts with the ``` <ul>```  tag. Each list item starts with the ``` <li>```  tag.

``` html
<!DOCTYPE html>
<html>

   <head>
      <title>HTML Unordered List</title>
   </head>
	
   <body>
      <ul>
         <li>Example1</li>
         <li>Example2</li>
         <li>Example3</li>
         <li>Example4</li>
      </ul>
   </body>
   
</html>
```
<br><i>This will produce the following result</i>:

- Beetroot
- Ginger
- Potato
- Radish

<br>

### HTML Ordered Lists

- An ordered list starts with the ```<ol>``` tag. Each list item starts with the ```<li>``` tag.

``` html
<!DOCTYPE html>
<html>

   <head>
      <title>HTML Ordered List</title>
   </head>

   <body>
      <ol>
         <li>Example1</li>
         <li>Example2</li>
         <li>Example3</li>
         <li>Example4</li>
      </ol>
   </body>

</html>

``` 
<i>This will produce the following result</i>:

```
1. Example1
2. Example2
3. Example3
4. Example4
```
### HTML Links

- Hyperlinks are defined with the HTML ``` <a>```  tag:
```html
<a href="url">link text</a>
```
<br>

## HTML Form Element

- HTML Forms are used to send data across the web and are often used as contact form to convertinformation input by a user into Leads.HTML forms are used to pass data to the server.
The common elements used in HTML form are **form tag**, **input**, **textarea**, **select**, and **label**.

- Form build inside ```<form>```, there is action attribute which tells the form where its contents will be sent when it is submitted.

```html
<form>
/*content*/
</form
```

### The INPUT Element

The ```<input>``` element is shown in different ways,depending on the type property.

- ```<input type="text">```
```html
<form>
  First name:<br>
  <input type="text" name="firstname"><br>
  Last name:<br>
  <input type="text" name="lastname">
</form>
```
<i>The output is:</i>
<form>
  First name:<br>
  <input type="text" name="firstname"><br>
  Last name:<br>
  <input type="text" name="lastname">
</form>

-----


- ```<input type="radio">```
```html
<form>
  <input type="radio" name="gender" value="male" checked> Male<br>
  <input type="radio" name="gender" value="female"> Female<br>
  <input type="radio" name="gender" value="other"> Other
</form>
```

<i>The output is:</i>
<form>
  <input type="radio" name="gender" value="male" checked> Male<br>
  <input type="radio" name="gender" value="female"> Female<br>
  <input type="radio" name="gender" value="other"> Other
</form>

----

- ```<input type="submit">```
```html
<form action="/action_page.php">
  First name:<br>
  <input type="text" name="firstname" value="Mickey"><br>
  Last name:<br>
  <input type="text" name="lastname" value="Mouse"><br><br>
  <input type="submit" value="Submit">
</form>
```

<i>The output is:</i>

<form action="/action_page.php">
  First name:<br>
  <input type="text" name="firstname" value="John"><br>
  Last name:<br>
  <input type="text" name="lastname" value="Johnny"><br><br>
  <input type="submit" value="Submit">
</form>

### The SELECT Element

The ```<input>``` element defines a **drop-down list.**

```html
<select name="cars">
  <option value="volvo">Apple</option>
  <option value="saab">Samsung</option>
  <option value="fiat">Huawei</option>
  <option value="audi">Xiaomi</option>
</select>
```

<i>The output is:</i>

<select name="Phones">
  <option value="Apple">Apple</option>
  <option value="Samsung">Samsung</option>
  <option value="">Huawei</option>
  <option value="audi">Xiaomi</option>
</select>

----

### The TEXTAREA Element

The HTML ```<textarea>``` tag is used within a form to declare a textarea element - a control that allows the user to input text over multiple rows.

```html
<textarea rows="3" cols="20">
Enter your text here...
</textarea>
```

<i>The output is:</i>

<textarea rows="3" cols="20">
Enter your text here...
</textarea>


## What are the POST and GET methods?

- ### What is HTTP? 

The Hypertext Transfer Protocol (HTTP) is designed to enable communications between clients and servers.

### The GET Method

GET is used to request data from a specified resource.
```
/test/demo_form.php?name1=value1&name2=value2
```

### The POST Method

POST is used to send data to a server to create/update a resource.

```
POST /test/demo_form.php HTTP/1.1
Host: example.com
name1=value1&name2=value2
```

## What is HTML comment?

This element is used to add a comment to an HTML document. An HTML comment begins with <!–– and the comment closes with ––>. HTML comments are visible to anyone that views the page source code, but are not rendered when the HTML document is rendered by a browser.

```
You will be able to see this text.

 <!-- You will not be able to see this text. -->

 ```

