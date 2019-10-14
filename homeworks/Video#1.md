# Web Development Lessons-1
## How does the web work?
**We are going to discuss about the topics:**
 
 - [What is the computer?](#what-is-the-computer?)
 - [What is the Internet?](#What-is-the-Internet?)
 - [What is a client?](#What-is-a-Client?)
 - [What is a server?](#what-is-a-server?)
 - [How does a website work?](#howdoesawebsiteswork?)

## What is a computer?
It is a tool that automates jobs that people don't want to do manually.
We can say CPU, RAM, and Harddisk are main tools of computer.

So, what is CPU? 
 - CPU (Central Processing Unit) is a logic gateway consisting of many small transistors. Our goal is to use digital data (0 and 1) in a controlled way to make it what we want.

 - In this case, Alan Turing is one of the most important people becuse he created a machine called the Turing Machine. This machine is a theoretical machine and serves to process digital data(0 and 1) logically. Why do we work with 0 and 1? Because these are two values that can be created very easily in the world of electricity. We can think of it as 1 if the power is on and 0 if it is off.

 - In short, the main task of the CPU is to perform arithmetic and logical operations and to arrange instructions together.

 What is RAM?

 - Ram (Random Access Memory) is a temporary memory. For example, we have opened an application or browser. This processes take some part of temporary memory. He doesn't write them to the hard disk because doing this is expensive. Instead, he's running himself on Ram.

 What is Hard Disk?

 -  Hard Drive a long-term memory. It is used to keep something for a long time. for example; film, photo etc.

## What is the Internet?

 With this structure, we are able to do most things we want. After a while, the Americans began to investigate: "How do we get the two computers to talk?"

 In simple terms, if we connect a computer to another computer with a cable, and then transfer the data (actually electric wave) to the other computer with a chip, we begin to share a simple data between two computers with a cable.

 At the time, the Americans started to do it and after a while they wanted to make it more complicated. Instead of two computers and one cable, they decide to use n computers and n cables to create a network. That's what they call **ARPANET**.

 ARPANET is a platform used in the early 1980s by the American Navy and a group of scientists. Later, when the civilian people started to use ARPANET, the **Internet** emerged.

 Nowadays, the internet connection is reached with the ISP. ISP(Internet Service Provider) is the general name given to companies and companies that provide internet connection for personal users or businesses for any fee.
 
 Now, if we examine on an example;
 
 We open the browser and search Google.com and Google.com is a domain name, not a machine address. Now, we've sent a request from Google.com. We call it "request package." Our computer first sends this to the router, then the router sends this request to the ISP.
The ISP checks the domain name of Google.com from its own DNS servers. "Whose domain name does Google.com belong to?"

So how does this work?

There are thousands of DNS servers around the world and they mark each domain name to their IP address and have a database that holds them. If we ping this address, it will give us the IP address of our country. For example, DNS was resolved and gave us the IP address 172.217.169.142. DNS resolve notifies the ISP that it has such an IP, but who does it belong to? Google has a database / server, almost anywhere in the world.

The request package contains everything, for example, what is your IP? It needs to know that because when it sends the data, it has to find your way. That's why our IP should work in this package. Also the port number is included in this package. Let's call our IP address 149.28.1.1.

**So, What is the port number?**

- Let's consider our server as an apartment. There are floors of this apartment and each floor has a number. For example; 21,22,80,443.
We came to the apartment with the IP number 172.217.169.142, but what is there asks us; Where did you come?
Our request package contains all of these. Let's say the request package specifies port 80. How to show this? - 172.217.169.142:80. Port 80 belongs to Apache. This way, we understand that you will be redirected to Apache. Apache opens this request package. The package contains Google.com. Apache questions what's happening at this address because Apache has a configuration in itself.

_Example of Apache Configuration_

```
< VirtualHost google.com >

DocumentRoot "users/person/Document/web/google"

ServerName google.com

ServerAlias www.google.com
 
</ VirtualHost>
```

Which software is going to run under DocumentRoot, it runs because it is specified in the configuration. HTML, Python etc. Apache will run index.php because it's in configuration. 

If we type 'php index.php' in the terminal, it will generate an HTML code above because PHP compiles the contents of the file. Apache knows that also knows which compiler to use because it exists in the configuration. Apache receives this data (HTML output) and sends it to the package, to send it to its owner because we also have the owner's information.

The output is:

```html
<html>
<head>
   </head>
<body>
<div></div>
   </body>
</html>
```

He takes it and sends it back to 149.28.1.1(Our IP address). Then this package opens. By whom? By our computer. **Process goes back to where we described it from the beginning.**


Our browser converts this Markup language into a graphical interface.

As a result;

### WHAT IS A CLIENT?

This is the schematic representation:

![client](/images/client.png)

- The process of converting HTML, the Markup language into a graphical interface, takes place in the client side.

- Also, CSS or Javascript works on client side.

### WHAT IS A SERVER?

![server](/images/server.png)

- PHP works on the server side.
- Python, Java etc. works on the server side.

**These two schemes show us how a website works.**

