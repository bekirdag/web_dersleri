# Web Development Lessons - 8
---

**We are going to discuss about the topics:**

- Connecting to a MySQL database with PHP
- User login form design
- Creating a database
- Compare user data with MySQL data
- Creating a new user

## What is PHP?

PHP ( Hypertext Preprocessor ) is a scripting language that is used by a wide audience and can be embedded in HTML, specifically designed for development on virtual sites.

An example:

```html
<!DOCTYPE html>
<html>
    <head>
        <title>Example</title>
    </head>
    <body>

        <?php
            echo "Hi!";
        ?>

    </body>
</html>
```

PHP enables dynamic, self-manageable websites. With a web-based programming language such as PHP and a rapidly developed web browser (browser, google chrome, internet explorer, mozilla firefox, opera, etc.), we can do everything we want.

## What is SQL?

- SQL stands for Structured Query Language
- SQL lets you access and manipulate databases
- SQL became a standard of the American National Standards Institute (ANSI) in 1986, and of the International Organization for Standardization (ISO) in 1987.

### What can SQL do?

SQL can;

- execute queries against a database <br> 
- retrieve data from a database <br>
- insert records in a database <br>
- update records in a database <br>
- delete records from a database <br>
- create new databases <br>
- create new tables in a database <br>
- create stored procedures in a database <br>
- create views in a database <br>   
- set permissions on tables, procedures, and views

### Create a Database 

```
CREATE DATABASE exampledb;
```

### Create Table

```
CREATE TABLE table_name
(
column1 data_type(size),
column2 data_type(size),
column3 data_type(size),
....
);
```

An axample:
```
CREATE TABLE users
{
uid int,
username varchar(255),
password varchar(255)
};
```

### INSERT INTO Statement

The INSERT INTO statement of SQL is used to insert a new row in a table. There are two ways of using INSERT INTO statement for inserting rows:
```
INSERT INTO table_name (column1, column2, column3,..) VALUES ( value1, value2, value3,..);
table_name: name of the table.
column1: name of first column, second column …
value1, value2, value3 : value of first column, second column,… for the new record
```

## Connecting to SQL database with PHP

A simple PHP code that can be used to create a connection to a MySQL database using MySQLi:

```html
<?php
$servername = "example.com";
$database = "exampledb";
$username = "root";
$password = "1234";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);

```

## PDO

A PDO database requires you to create a new PDO object ile with a Data Source Name (DSN), user name, and password. The DSN defines the database type, the name of the database, and other information, if necessary.

When creating a PDO object that represents the database connection, you can enclose it in the 'try… catch… code. This means that the script attempts to make a connection using the given code, and if a problem occurs, the code in the 'catch' section is executed. You can display error messages using catch block, or run an alternate code if the experiment fails.

```html
<? Php
$ servername = "example.com" ;  
$ username = "root" ;  
$ database = "exampledb" ;  
$ password = "1234" ;  
// Create a new connection to the MySQL database using PDO
$ conn = new mysqli ( $ servername , $ username , $ password ) ;   
// Check connection
if ( $ conn - > connect_error ) {  
    die ( "Connection failed:" . $ conn - > connect_error ) ;
} 
echo "Connected successfully" ; 

```

## User Login Form Design

Let's create a simple index.html page.

```html
<!DOCTYPE html>
<html>

<head>
        <meta charset="utf-8" />
    <title>Javascript kullanıcı işlemleri</title>
    <style>
        @import url("css/styles.css");
    </style>
    <script src="js/common_functions.js"></script>
</head>
<body>
    <div id="main_wrapper">
    <form id="user_crud" method="POST" action="post.php>
    <p>Giriş yapmak için gerekli bilgileri giriniz.</p>
    <div id= "username_wrapper" class="form_item">
    <label for="username">Username</label>
    <input type="text" name="username" class="input_text">
        </div>
        <div id="pass_wrapper" class="form_item">
            <label for="password">Password</label>
            <input type="password" name="password" class="input_text">
        </div>>
    <input type="submit" id="form_submit">

    </form>
 </div>
</body>
</html>
```

* We need to enter "POST" as a method because we are sending password information.

* action="post.php" -> Specifies where to send the data.

Then, create a style.css page and adding css codes:

```css
body{
    font-family: arial;
}

#main_wrapper{
    width: 300px;
    margin: 200px auto 20px auto;
    padding: 30px;
    border: 1px solid #ccc;
    background-color: #efefef;
}

.input_text{
    width: 200px;
    border:1px solid #ccc;
    height:30px;
    font-size:24px;
    border-radius: 10px;
}

.form_item{
    padding-bottom: 8px;
    text-align: right;
}

#form_submit{
    width: 100px;
    height: 34px;
    font-size: 18px;
    background-color: #329efb;
    padding: 0px 7px;
    color: #fff;
    border-radius: 10px;
    float: right;
}

```

After, ceate post.php pages and adding this:

```php
<?php

require_once("inc/db_info.php");

$username = $_POST['username'];
$password = $_POST['password'];

```


We explained above what PDO is. We will use PDO to connect PHP and SQL. But we will not write the PDO code to the PHP page. 

We created inc folder -> db_info.php file and write:

```php
<?php
$servername = "localhost";
$username = "root";
$password = "12345";
$db_name = "web_dersleri";
try {
    $conn = new PDO("mysql:host=$servername;dbname=".$db_name, $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
```

Then, write in post.php:

```php
<?php

require_once("inc/db_info.php");

$username = $_POST['username'];
$password = $_POST['password'];

$stmt = $conn->prepare("SELECT uid, username FROM users where username=:username and password=:password");  


$stmt->bindParam(":username", $username, PDO::PARAM_STR);
$stmt->bindParam(":password", $password, PDO::PARAM_STR);

// Attempt to execute the prepared statement

if($stmt->execute()){
    if($stmt->rowCount() == 1){
        print "Login successful";
    } else{
        print "Login unsuccessful";
    }
} else{
    echo "Oops! Something went wrong. Please try again later.";
}
```

It's done.

Now, we created register.html pages.
```html
<html>

<head>
        <meta charset="utf-8" />
    <title>Javascript kullanıcı işlemleri</title>
    <style>
        @import url("css/styles.css");
    </style>
    <script src="js/common_functions.js"></script>
</head>

<body>
    <div id="main_wrapper">
    <form id="user_crud" method="POST" action="register.php">
        <p>Kayıt olmak için aşağıdaki formu doldurunuz.</p>
        <div id="username_wrapper" class="form_item">
            <label for="username">Username</label>
            <input type="text" name="username" class="input_text">
        </div>
        <div id="pass_wrapper" class="form_item">
            <label for="password">Password</label>
            <input type="password" name="password" class="input_text">
        </div>
        <input type="submit" id="form_submit">
        <p class="register_link"><a href="index.html">Login</a></p>
    </form>
    </div>
</body>

</html>
```

 * Since we specify action = "register.php", we will create a register.php file. 

 ``` php
<?php
require_once("inc/db_info.php");

$username = $_POST['username'];
$password = $_POST['password'];

$stmt = $conn->prepare("SELECT uid FROM users WHERE username=:username"); 

$stmt->bindParam(":username", $username, PDO::PARAM_STR);
$is_registered = TRUE;
// Kayıttan önce kullanı adı mevcut mu

if($stmt->execute()){
    if($stmt->rowCount() == 1){
        print "<br>Bu kullanıcı adı kayıtlı";
    } else{
        print "<br>Kullanıcı adı kayıtlı değil";
        $is_registered = FALSE;
    }
} else{
    echo "Oops! Something went wrong. Please try again later.";
}

if(!$is_registered) {
    
    $stmt = $conn->prepare("INSERT INTO users (username,password) values(:username,:password)"); 
    $password = sha1($password);
    
    $stmt->bindParam(":username", $username, PDO::PARAM_STR);
    $stmt->bindParam(":password", $password, PDO::PARAM_STR);
    
    // Attempt to execute the prepared statement
    if($stmt->execute()){
        if($stmt->rowCount() == 1){
            print "Registration successful";
        } else{
            print "Registration unsuccessful";
        }
    } else{
        echo "Oops! Something went wrong. Please try again later.";
    }
}
 ```

 **All of these operations require user password information. How do we secure these passwords if a possible database is compromised?**

 As we wrote on register.php page;
 ``` php
 $password = sha1($password);
```

That's done.