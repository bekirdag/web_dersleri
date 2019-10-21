# Web Development Lessons-9

**We are going to discuss about the topics:**
- What is the package?
- What is the package manager?
- What is the dependency manager?
- What is npm?
- What is the PHP Composer?

## What is the package?

The package can be a compiled version of the software or source code. Thus, the term module can also be used to characterize such applications.

macOS applications, Linux operating system applications / software can be expressed as a package.

## What is a package management system?

When developing an application or downloading a final application to our operating system, there may be processes such as installation, configuration and uninstallation.

It is also important to keep track of new versions of applications and possible release differences and update notes. There is a need for tools that work decisively in such processes. Package and dependency managers (package manager or package-management system) undertake this process exactly.

Some package manager:

- For example, APT (Advanced Package Tool) for Linux operating system. APT is a package management method used in Debian-based Linux distributions.

- macPorts for macOS, also known as Homebrew, are package managers.

- JavaScript packages for npm, yarn etc. are known packages.

With another example;
<pre>
<b>Lang         Package Manager</b>
PHP             Composer
node.js         npm
Ubuntu          apt
Centos          yum
macOs unix      brew
</pre>

### What is the Dependency Manager?

A dependency manager like composer for PHP, among others, is a tool that allows you to manage all of your libraries in a meaningful and logical manner. By dependencies, it means the libraries required to make this page work. It helps when your dealing with complex projects and in a team environment. It also allows you to keep track and update libraries faster and easier.

<pre>
Module A --> dependency --> none
Module B --> dependency --> none
Module C --> dependency --> Module A + Module B
Module D --> dependency --> Module C
</pre>

Making them manually is a very laborious and long process. Therefore, package managers are now used.

## What is npm?

npm is the world's largest Software Registry. <br>
npm is free to use. <br>
npm includes a CLI (Command Line Client) that can be used to download and install software: macOs example;

```
>npm install <package>
```

npm is installed with Node.js <br>

This means that you have to install Node.js to get npm installed on your computer. <br>

Download Node.js from the official Node.js web site: https://nodejs.org

**Software Package Manager**

The name npm stems from when npm first was created as a for Node.js. <br>
All npm packages are defined in files called package.json. <br>
The content of package.json must be written JSON. <br>
At least two fields must be present in the definiton file: **name** and **version**.

```
{
"name" : "foo",
"version" : "1.2.3",
"description" : "A package for fooing things",
"main" : "foo.js",
"keywords" : ["foo", "fool", "foolish"],
"author" : "John Doe",
"licence" : "ISC"
}
```

Also,

```
npm init 
```
With the help of the command can also create questions by answering the questions.

#### Install the module with npm

```
npm install -g grunt-cli
```

We can add grunt to our project. Here is a detail, if you want to add the loaded modules to package.json at the same time;

```
npm install -g grunt --save-dev
```

To get a list of modules installed in the project;
```
npm list
```

## What is the PHP Composer?

Composer is a dependency manager for PHP. Composer is used in all modern PHP frameworks (Symfony, Laravel) and is one of the most recommended tools that solves fundamental issues in the majority of web projects.

Composer solves the following problems:

- dependency resolution for PHP packages
- autoloading solution for PHP packages
- keeping all packages updated

**Installing Composer**

```
curl -sS [https://getcomposer.org/installer]
(https://getcomposer.org/installer) | php
```

Installing packages

Composer’s default and only repository for packages. Search for your desired package. Let’s say we want to install example’s PHP sdk, we just have to search for example php and open the first result. 
```
require: "example/php-sdk": "dev-master"
```
