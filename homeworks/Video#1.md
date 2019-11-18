# Web Development Lessons-1
## How does the web work?
**We are going to discuss the following topics:**
 
 - [What is a computer?](#what-is-a-computer?)
 - [What is the Internet?](#What-is-the-Internet?)
 - [What is a client?](#What-is-a-Client?)
 - [What is a server?](#what-is-a-server?)
 - [How does a website work?](#howdoesawebsiteswork?)

## What is a computer?
A computer is a tool that automates jobs that people don't want to do manually.
CPU, RAM, and Hard disk drive are considered the main components of a computer.

What is CPU? 
 - CPU (Central Processing Unit) is a logic gateway that consists of a number of microscopic transistors. The purpose of a CPU is to use digital data (binary number system of zeros "0" and ones "1") in a controlled way to follow certain instructions.

 - Alan Turing, who is often referred to as the father of modern computing, invented the Turing Machine which is a theoretical machine that serves to process digital data (0 and 1)logically. The binary number system is used because "one" and "zero" are two values that exist in the world of electricity. Computers use voltages and there are only to states of voltage - "power is on" which is an equivalent to "1", and "power is off" which is an equivalent to "0".

 - The main task of the CPU is to perform arithmetic and logical operations and to carry out instructions.

 What is RAM?

 - Ram (Random Access Memory) is a temporary memory that store the information that the computer needs at this very moment or in the nearest future. For example, when an application or a browser is opened, this process takes some part of the temporary memory. Using the hard disk drive for such basic activities would be too space and energy consuming. Instead, they are run on RAM.

 What is Hard Disk Drive?

 -  Hard Disk Drive is a long-term memory. It is used to keep the data for a long time. The simplest examples can be a film, a photo etc.

## What is the Internet?

 Using these basic components, computers are abe to carry out certain instructions. To expand the range of instructions, it became essential to get two or more computers to communicate. 

 In simple terms, if we connect a computer to another computer with a cable, and then transfer the data, or electric waves, to the other computer with a chip, we manage to share simple data between two computers. The next step was to build similar connection without the use of a cable. Instead of two computers and one cable, it was decided to use N number of computers and N number of cables to create a network. This network was name the **ARPANET**.

 ARPANET is a platform used in the early 1980s by the American Navy and a group of scientists. Later, when the civilian people got the access to ARPANET, the **Internet** emerged.

 Nowadays, the Internet connection is established with the ISP. ISP (Internet Service Provider) is the general name given to companies that provide Internet connection to personal users or businesses for a fee.
 
 Now, to gain a better understanding of how ISPs work, let's take a look at the following example. A user opens a browser and searches "Google.com". "Google.com" is a domain name, not a machine address. The request is being sent for "Google.com". It is called "a request package." The computer sends this request package to the router, then the router sends it to the ISP. The ISP checks the domain name of "Google.com" and its owner using their own DNS servers. 

How does this work?

There are thousands of DNS servers around the world and they mark each domain name with an IP address that are held in their database. When a user pings this address, DNS resolves the address and send the IP of the domain in the user's country.  

The request package contains a myriad of data, one component of which is the user's IP. It is essential since it identifies the address to which the data will later be sent. Another important component of any request package is the port number.

**What is the port number?**

- Let's simplify this and think of our server as an apartment block (No 170.217). There are floors of this apartment block and each floor has a number (the user requested floor No 169). Each apartment on each floor also has a number (the user requested the apartment No 142). The request package contains all of these numbers that are necessary to find the right address. Let's say the request package specifies port 80. How to show this? - 172.217.169.142:80. Port 80 belongs to Apache (Apache HTTP server, which the the most widely used free web server at the moment). This way, the request package will be redirected to Apache. Apache opens the request package and sees the initial request for "Google.com". Apache has its own configuration:

_Example of Apache Configuration_

```
< VirtualHost google.com:80>

DocumentRoot "users/person/Document/web/google"

ServerName google.com

ServerAlias www.google.com
 
</ VirtualHost>
```
How to decode this configuration?

< VirtualHost google.com > (Create a virtual host for the domain "Google.com" using the port No 80)

DocumentRoot "users/person/Document/web/google" (The document root should be sent to "users/person/Document/web/google" and it should be processed using the relevant script - php/html/python, etc. The file that should be opened from all the files included in the package is specified and can be changed in the Apache software. In this specific example Apache will run index.php because it's in configuration.)

For instance, if 'php index.php' is typed in the terminal, an HTML code will be generate because PHP compiles the contents of the file. Apache also knows which compiler to use because it exists in the configuration. Apache receives this data (HTML output).

Example of HTML output:

```html
<html>
<head>
   </head>
<body>
<div></div>
   </body>
</html>
```

Apache sends the data back to 149.28.1.1 (a sample user's IP address). The  **Process goes back to where it was described at the beginning.**


The browser converts the certain markup language, that is a computer language that uses tags to define specific elements in a given document, into a graphical interface.


### WHAT IS A CLIENT?

This is the schematic representation:

![client](/images/client.png)

- The process of converting HTML, the Markup language into a graphical interface, takes place in the client side.
- Also, CSS or Javascript works on client side.

### WHAT IS A SERVER?

![server](/images/server.png)

- PHP works on the server side.
- Python, Java etc. works on the server side.

**These two schemes show how a website works.**

