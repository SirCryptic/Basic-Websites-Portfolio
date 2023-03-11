# [Nullsec Public Beta Website Tools](https://nst-dev.000webhostapp.com/betawebtools/index.html)
This repository contains tools to be used for the Nullsec public beta website. The tools are written in PHP and require the use of Composer for dependency management.

## Installation
1 Clone the repository to your local machine.

2 Install Composer by following the instructions on getcomposer.org.

3 In the root directory of the cloned repository, run composer install to install the required dependencies.
```
composer require vlucas/phpdotenv:*
```
4 Copy the .env.example file to .env

5 Set up APIkeys and other environment variables in the .env file. Make sure to replace the example values with your own values.

6 Upload all files to your web host.

7 Example .env file:
```
SHODAN_API_KEY=Your_API_KEY
WHOISXML_API_KEY=Your_API_KEY
NUMBER_VERIFICATION_API_KEY=Your_API_KEY
```
Usage
After completing the installation steps, the tools should be ready to use on your web host.

License
This project is licensed under the MIT License - see the LICENSE file for details.
