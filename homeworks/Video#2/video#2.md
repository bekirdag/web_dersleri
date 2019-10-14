# Web Development Lessons-2

**We are going to discuss about the topics:**

- What is ISP?
- How to register domain?
- What is DNS? 
- How to redirect the same domain to different servers?
- How the Apache service works?
- How to configure Apache?
- What is a Hosts file, how is a domain name redirect to a different IP address on the local computer?


As we mentioned in the previous lesson, a domain name needs to be resolve. We need to DNS resolve because we know what the IP is, and according to this information the ISP is receiving data.

## How to register domain name?
**So, how do we know which IP is connected to the domain names?**

There are domain registrar firms that determine this. For example; name.com. They sell domain names. After you purchase this domain name, you can decide which IP to use for this domain from a web interface. 


## What is DNS?

- It is a distributed database of servers hosting information about domains. 

- DNS is a global system for translating IP addresses to human-readable domain names. When a user tries to access a web address like “example.com”, their web browser or application performs a DNS Query against a DNS server, supplying the hostname. The DNS server takes the hostname and resolves it into a numeric IP address, which the web browser can connect to.

**DNS Resolver**: A DNS resolver is a local server that stores a central database of DNS nameservers and manages DNS requests for all the clients on your network. With DNS resolvers, your computer does not need to store addresses for multiple online nameservers, a process which is difficult to manage effectively.

### DNS Record Types

Commonly used record types:

- **A Record**: Probably the most basic and the most common. Redirects the host name to an IP address.

- **IP Version 6 Address record (AAAA Record)** stores a hostname and its corresponding IPv6 address.

- **CNAME Record**: CNAME can be used to alias a hostname to another hostname. When a DNS client requests a record that contains a CNAME, which points to another hostname, the DNS resolution process is repeated with the new hostname.

- **MX(Mail Exchange)**: It is used to define the A record that will handle all incoming e-mails for the domain.

- **TXT Record**: TXT records are something of a "catch-all" record, and will often be used to share miscellaneous information about a domain.

- **Reverse-lookup Pointer records (PTR Record)**

- **Certificate record (CERT Record)**

- **Service Location (SRV Record)**

- **Start of Authority (SOA Record)**


## ICANN

- ICANN (Internet Corporation for Assigned Names and Numbers) is the private (non-government) non-profit corporation with responsibility for IP address space allocation, protocol parameter assignment, domain name system management, and root server system management functions, the services previously performed by the Internet Assigned Numbers Authority (IANA).

- ICANN created the registrar market, in which hundreds of registrars sell domain names for new websites. When you purchase a domain, you do so through a domain registrar, but the the ICANN is the body that supervises the registrars. The ICANN also approves new top-level domains on the Internet, such as ".asia" or ".travel."

-----

A domain name is closed by court order. For example, when you enter example.com, it does not go to the current 2.23.231.112 IP address in the world, it identifies the newly routed IP as the address. The rest of the world sees another site, but you see another post / site. As we know, ISP determines them. Sometimes, people do not want to use the domain names specified by the ISP in this case and therefore use VPN.

We are able to make this decision on our own local machine. If we are on a Unix machine, written in terminal;

``` 
sudo nano /etc/hosts
```

```
##
# Host Database
#
# localhost is used to configure the loopback interface
# when the system is booting.  Do not change this entry.
##
127.0.0.1	localhost
255.255.255.255	broadcasthost
::1             localhost
```

 To use the domain names on any host on the network, you must configure the above settings in its /etc/hosts file. 

```
127.0.0.1 example.local
```
After setting this, it is redirected to the web page marked as default on our own apache server.


Also, we can even do this:

```
127.0.0.1 google.com
```

127.0.0.1 is our local address. We say here, when I go to the top domain google.com, I want to see my own site. But it is not right to redirect the top domain to another IP than the IP that should be.

While doing this, we did not configure apache. 

### How to configure apache?

Written in terminal:

```
sudo nano /usr/local/etc/httpd/extra/httpd-vhost.conf
```
```
<VirtualHost exapmle.local:80>

DocumentRoot "/Users/pcname/Documents/example"
ServerName example.local
ServerAlias www.example.local

#Other directives here
</VirtualHost>
```

Then, we must restart apache:

```
sudo apachetl -k restart
```

The process is complete.