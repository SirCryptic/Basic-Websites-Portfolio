# Web Application Vulnerability Scanner [[Demo]](https://nst-dev.000webhostapp.com/tools/scanner.php)
This is a simple web application vulnerability scanner that checks if a given URL or IP address is vulnerable to common web application security vulnerabilities. The tool is designed to help website owners and security researchers identify vulnerabilities in their web applications that can be exploited by attackers.

## How it works
The scanner uses regular expressions to search for common web application vulnerabilities in the HTML code of the target website. If a vulnerability is found, the tool displays a table of results indicating if it is vulnerable and to which vunlrabilties.

## The scanner checks for the following 36 vulnerabilities:

<details>
  <summary>Click to expand!</summary>
  
| # | Vulnerability |
| - | ------------- |
| 1 | SQL injection |
| 2 | Cross-Site Scripting (XSS) |
| 3 | File Inclusion |
| 4 | Directory Traversal |
| 5 | Remote File Inclusion |
| 6 | Command Injection |
| 7 | Cross-Site Request Forgery (CSRF) |
| 8 | Unrestricted File Upload |
| 9 | Password Cracking |
| 10 | Session Hijacking |
| 11 | Broken Authentication and Session Management |
| 12 | Remote Code Execution |
| 13 | Local File Inclusion |
| 14 | Server Side Request Forgery (SSRF) |
| 15 | XML External Entity (XXE) Injection |
| 16 | Cross-Site Script Inclusion (XSSI) |
| 17 | Server-Side Template Injection (SSTI) |
| 18 | HTML Injection |
| 19 | LDAP Injection |
| 20 | XPath Injection |
| 21 | Code Injection |
| 22 | Object Injection |
| 23 | Cross-Domain Scripting |
| 24 | HTTP Response Splitting |
| 25 | Buffer Overflow |
| 26 | Format String Attack |
| 27 | Command Injection (Windows) |
| 28 | Insecure Cryptographic Storage |
| 29 | Insecure Direct Object References |
| 30 | Insufficient Logging and Monitoring |
| 31 | Security Misconfiguration |
| 32 | Cross-Site Script Inclusion (CSSI) |
| 33 | Click Fraud |
| 34 | Broken Access Control |
| 35 | Clickjacking |
| 36 | Hidden Form Fields |

</details>

<details>
  <summary>Click to for more info!</summary>
  
| Vulnerability             | Description |
|---------------------------|-------------|
| SQL Injection             | This occurs when an attacker inserts malicious SQL code into an application's input which is then executed by the database. |
| XSS                       | This occurs when an attacker injects malicious scripts into a web page, which are then executed by unsuspecting users. |
| File Inclusion            | This occurs when unsanitized user input is used to load a file or resource that should not be publicly accessible. |
| Directory Traversal       | This occurs when user input is used to navigate to directories outside of the intended directory hierarchy. |
| Remote File Inclusion     | This occurs when malicious code is included from a remote server, allowing an attacker to execute code on the server. |
| Command Injection         | This occurs when user input is passed directly to the command line, allowing an attacker to execute arbitrary commands. |
| Cross-Site Request Forgery | This occurs when an attacker submits unauthorized requests on behalf of an authenticated user. |
| Unrestricted File Upload  | This occurs when malicious files are uploaded to a server and executed, allowing an attacker to execute code on the server. |
| Password Cracking         | This occurs when weak password policies allow attackers to guess or crack passwords. |
| Session Hijacking         | This occurs when an attacker gains access to a user's session ID and uses it to impersonate the user. |
| Broken Authentication and Session Management | This occurs when poorly implemented authentication and session management allow attackers to bypass authentication and hijack sessions. |
| Remote Code Execution     | This occurs when user input is passed directly to the command line, allowing an attacker to execute arbitrary commands. |
| Local File Inclusion      | This occurs when unsanitized user input is used to load a file or resource that should not be publicly accessible. |
| Server Side Request Forgery | This occurs when an attacker sends requests to internal or external servers on behalf of the vulnerable application. |
| XML External Entity (XXE) Injection | This occurs when external entities are injected into an XML document, leading to the disclosure of sensitive information or execution of remote code. |
| Cross-Site Script Inclusion (XSSI) | This occurs when an attacker can load a web page's JavaScript data from an external source, allowing them to execute malicious code on the victim's browser. |
| Server-Side Template Injection (SSTI) | This occurs when an attacker injects malicious code into a template that is parsed and executed on the server-side. |
| HTML Injection            | This is a vulnerability where an attacker can inject malicious HTML code into a web page. This can allow the attacker to steal sensitive information or execute arbitrary code in the user's browser. |
| LDAP Injection            | This occurs when an attacker can inject malicious input into an LDAP search filter or command, allowing them to access or modify sensitive information in the LDAP directory. |
| XPath Injection           | This occurs when an attacker injects malicious input into an XPath query, allowing them to access or modify sensitive information. |
| Code Injection            | This occurs when an attacker can inject malicious code into a web application, allowing them to execute arbitrary code on the server. |
| Object Injection          | This occurs when an attacker can manipulate serialized objects in a web application to execute arbitrary code. |
| Cross-Domain Scripting    | This occurs when an attacker can inject a script into a web page from an external domain, allowing them to steal sensitive information from the victim's browser. |
| HTTP Response Splitting   | This occurs when an attacker can inject newlines into an HTTP response header, allowing them to insert additional HTTP headers and potentially perform other attacks. || Cross-Site Scripting (XSS)         | An attack where an attacker injects malicious code into a web page viewed by other users. This can allow them to steal sensitive information or perform actions on behalf of the user.                                 |
| SQL Injection                      | An attack where an attacker injects malicious SQL code into a web application to gain access to sensitive information or perform actions on the database.                                                           |
| Man-in-the-Middle (MitM)           | An attack where an attacker intercepts communication between two parties to steal or manipulate data. This can be done through various techniques, such as ARP poisoning or DNS spoofing.                  |
| Denial-of-Service (DoS)            | An attack where an attacker overwhelms a server or network with traffic or requests, rendering it unavailable to legitimate users.                                                                                  |
| Distributed Denial-of-Service (DDoS) | An attack where multiple systems are used to overwhelm a server or network with traffic or requests, rendering it unavailable to legitimate users.                                                           |
| Buffer Overflow                    | An attack where an attacker can exploit a buffer overflow vulnerability in a web application to execute arbitrary code on the server.                                                                          |
| Format String Attack               | An attack where an attacker can exploit a format string vulnerability in a web application to execute arbitrary code on the server.                                                                             |
| Command Injection (Windows)        | An attack where an attacker can inject malicious input into a command executed on a Windows system, allowing them to execute arbitrary code on the server.                                                        |
| Insecure Cryptographic Storage     | An attack where an attacker can exploit weak cryptographic hashing algorithms to gain access to sensitive information.                                                                                              |
| Insecure Direct Object References  | Unvalidated or insufficiently validated user input is used to access sensitive information or functionality directly through URL manipulation.                                                                   |
| Insufficient Logging and Monitoring | Insufficient or nonexistent logging and monitoring capabilities make it difficult to detect and respond to security incidents.                                                                                  |
| Security Misconfiguration          | Incorrectly configured server settings or application properties can result in vulnerabilities that can be exploited by attackers.                                                                               |
| Cross-Site Script Inclusion (CSSI) | Unsanitized user input is used to include external resources, such as stylesheets, that could potentially be controlled by an attacker.                                                                          |
| Click Fraud                        | An attack where an attacker generates fake clicks on online advertisements to increase their revenue or to exhaust a competitor's advertising budget.                                                            |
| Broken Access Control              | An attack where an attacker is able to gain unauthorized access to resources or actions that should be protected by access controls, allowing them to steal sensitive information or perform malicious actions. |
| Clickjacking                       | An attack where an attacker tricks a user into clicking on a button or link that is disguised as something else, such as a harmless button, but actually performs a malicious action.                           |
| Hidden Form Fields                 | This is a type of vulnerability where a form field is hidden from the user, but still included in the form submission. This can allow attackers to submit unexpected data, potentially bypassing form validation or performing other malicious actions. |
| Object Injection                   | This occurs when an attacker can manipulate serialized objects in a web application to execute arbitrary code.    
</details>

## How to use
To use the tool, simply enter the URL or IP address of the target webapplication in the input field and click the "Scan" button. The scanner will then check for vulnerabilities in the target webapplication and display a results table indicating what vulnrabilities are found with `vulnrable` or `not vulnrable` if any.

## Requirements
The tool requires PHP and cURL to be installed on the server in order to work properly.
