# Nullsec-Public-Beta-Website-Tools [[Demo]](https://nst-dev.000webhostapp.com/betawebtools/)

The Nullsec Public Beta Website Tools is a collection of web-based tools designed for security researchers, developers, and anyone who needs to gather information about network-connected devices and infrastructure. The tools included in this collection are:

| Tool | Description | API |
| --- | --- | --- |
| IoT Search | Using Shodan to search for internet-connected devices | [API HERE](https://www.shodan.io) :x: |
| Vulnerability Search | Using Shodan to search for information about CVEs | [API HERE](https://www.shodan.io) :x: |
| IP Lookup | Provides information about the ISP provider of an IP address | NO API KEY NEEDED :white_check_mark: |
| Whois Lookup | Provides information about a domain name | [API HERE](https://www.whoisxmlapi.com) :x: |
| Phone Number Lookup | Provides information about a phone number | [API HERE](https://apilayer.com/marketplace/number_verification-api) :x: |

### Installation

1. Clone the repository to your local machine.
2. Install Composer by following the instructions on [getcomposer.org](https://getcomposer.org/).
3. In the root directory of the cloned repository, run `composer install` to install the required dependencies.
4. Copy the `.env.example` file to `.env`.
5. Set up API keys and other environment variables in the `.env` file. Make sure to replace the example values with your own values.
6. Upload all files to your web host.
7. Example `.env` file:
```
SHODAN_API_KEY=Your_Shodan_API_Key
WHOISXML_API_KEY=Your_WhoisXML_API_Key
NUMBER_VERIFICATION_API_KEY=Your_Number_Verification_API_Key
```
### Usage

After completing the installation steps, the tools should be ready to use on your web host.

- The IoT search tool uses Shodan to search for internet-connected devices, such as Apache or MongoDB databases that are available to the internet.
- The IP Lookup tool provides information about the ISP provider of an IP address.
- The Phone Number Lookup tool provides information about a phone number, but requires you to enter the local format, e.g., "+44" for the UK.
- The Vulnerability Search tool uses Shodan to search for information about CVEs. For example, you can search for information about CVEs related to Apache.


This project uses environment variables stored in a `.env` file. It's important to note that while this is a common way to store sensitive information like API keys and passwords, it's not a foolproof method of securing them. For more information on how to secure sensitive data in your applications, see [GitHub's Guide to Securing Your Workflows](https://docs.github.com/en/actions/security-guides/encrypted-secrets) & [OWASP's article on .env security](https://owasp.org/www-project-cheat-sheets/cheatsheets/Dotenv_Cheat_Sheet.html).
