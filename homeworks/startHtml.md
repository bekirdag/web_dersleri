# GETTING STARTED to HTML

 With HTML you can create your own Website. HTML is not a programming language; it is a markup language that defines the structure of your content. HTML consists of a series of elements, which you use to enclose, or wrap, different parts of the content to make it appear a certain way, or act a certain way. The enclosing tags can make a word or image hyperlink to somewhere else, can italicize words, can make the font bigger or smaller, and so on.
With HTML you can create your own Website.

## What Tools Do You Need?

<b>A Text Editor</b>, to write code in. This could be a text editor (e.g. Visual Studio Code, Notepad++, Sublime Text, Atom, Brackets, GNU Emacs, or VIM), or a hybrid editor (e.g. Dreamweaver or WebStorm).

<b>Web Browsers</b>, to tets code in. Currently, the most-used browsers are Firefox, Chrome, Opera, Safari, Internet Explorer and Microsoft Edge. 

## Planing

Before doing anything, you need some ideas. What should your website actually do? A website can do basically anything, but, for your first try, you should keep things simple.

To begin, you'll need to answer some questions:

* What is yor website about?
* What information are you presenting on the subject?
* What does your website look like?

Next, grab pen and paper and sketch out roughly how you want your site to look.

## Where Should Your Website Live on Your Computer?

Choose a place to store your website projects. Inside your chosen place, create a new folder called web projects  (or similar). This is where all your website projects will live.
Inside this first folder, create another folder to store your first website in. Call it test-site (or something more imaginative).

## What Structure Should Your Website Have?

For now we will create a directory containing HTML file and images, style files.

<b>index.html:</b> This file will generally contain your homepage content, that is, the text and images that people see when they first go to your site. Using your text editor, create a new file called index.html and save it just inside your test-site folder. <br/>
<b>images folder</b>: This folder will contain all the images that you use on your site. Create a folder called images, inside your test-site folder. <br/>
<b>styles folder</b>: This folder will contain the CSS code used to style your content (for example, setting text and background colors). Create a folder called styles, inside your test-site folder. (if you want to learn more about CSS, wait my next blog)

## Layout of A Simple HTML Page

The following code shows the layout of a simple html page.
```html
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>My test page</title>
  </head>
  <body>
    <img src="images/abc.png" alt="My test image" style="width:150px">
  </body>
</html> 
```
Now let's examine them.

```<!DOCTYPE html> ``` :
This is a notification tag that is used to inform the internet browser of which type your page belongs to when creating web pages. With this tag, you can let web browsers know which version of HTML you're using when designing your page and make your website look ideal in all web browsers.<br/>
```<html></html> ```:
This element wraps all the content on the entire page and is sometimes known as the root element. <br/>
```<head></head>``` : This element acts as a container for all the stuff you want to include on the HTML page that isn't the content you are showing to your page's viewers. This includes things like keywords and a page description that you want to appear in search results, CSS to style our content, character set declarations and more. <br/>
```<meta charset="utf-8">``` : This element sets the character set your document should use to UTF-8 which includes most characters from the vast majority of written languages. Essentially, it can now handle any textual content you might put on it. There is no reason not to set this and it can help avoid some problems later on. <br/>
```<title></title>``` : This element sets page title. <br/>
<br/>
<br/>
Today we learned what to do when starting html.
Thank you for reading. See you next blog post :)

