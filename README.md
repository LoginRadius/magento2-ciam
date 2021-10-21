# Authentication and SSO by LoginRadius

![Home Image](http://docs.lrcontent.com/resources/github/banner-1544x500.png)

## Introduction ##

LoginRadius is an Identity Management Platform that simplifies user registration while securing data. LoginRadius Platform simplifies and secures your user registration process, increases conversion with Social Login that combines 30 major social platforms, and offers a full solution with Traditional User Registration. You can gather a wealth of user profile data from Social Login or Traditional User Registration. 

LoginRadius centralizes it all in one place, making it easy to manage and access. Easily integrate LoginRadius with all of your third-party applications, like MailChimp, Google Analytics, Livefyre and many more, making it easy to utilize the data you are capturing.

LoginRadius helps businesses boost user engagement on their web/mobile platform, manage online identities, utilize social media for marketing, capture accurate consumer data, and get unique social insight into their customer base.

Please visit [here](http://www.loginradius.com/) for more information.


## Documentation
* [User Registration](https://www.loginradius.com/docs/api/v2/getting-started/introduction/) - Everything you need to implement the full LoginRadius User Registration system including Social Login.
* [Extension Installation](http://support.loginradius.com/hc/en-us/articles/208501296-Magento-Customer-Identity-Extension-instructions-for-v2-x) - Everything you need to implement with magento 2.x.


General documentation regarding the LoginRadius REST API and related flows can be found on the [LoginRadius API Documentations](http://apidocs.loginradius.com/) site. 


## REQUIREMENTS
 LoginRadius PHP SDK library. Follow the installation instructions to add require php sdk library.
 
 
## CHANGE LOG

###  5.1.0
  *  Compatible with our latest PHP SDK 11.0.0
  *  Added Custom Domain option for the IEF page
  *  Added Registration Form Schema option.
  *  Added Delete the customer profile from the LoginRadius database on account delete in Magento option.
  *  Standardize the naming convention of labels and text of the plugin.
  *  Separate file for all notification messages for easy maintenance.
  *  Standardize the debug log logging method.
  *  Restructured Plugin Folder Structure.
  *  Replaced Hosted page module name with Identity Experience Framework Module.

###  3.0.1
  *  Capitalised HTTP Method Names.
  
###  3.0.0
  *  Removed some Advance options from backend and they are directly configured from User Dashboard.
  *  Implemented set password functionality for social users.
  *  Added Email templates options.
  *  Added Fallback V2JS.
    
###  2.0.0
  *  Migrated Extension on V2 APIs.
  *  Removed social login, social Profile Data, social sharing module from the package.
  *  Added add/remove email functionality from frontend.
  *  Added redirection functionality based on referer or redirect_to url.


## FAQ

 Q: What is LoginRadius?

 A: LoginRadius is a Software As A Service (SAAS) which allows users to log in 
 to a third party website via 
 popular open IDs/oAuths such as Google, Facebook, Yahoo, AOL and over 20 more.
 
Q: How long can I keep my account?

A: How long you use LoginRadius is completely up to you. You may remove 
LoginRadius 
from your website and delete your account at any time.

Q: What is the best way to reach the LoginRadius Team? 

A: If you have any questions or concerns regarding LoginRadius, 
please write us at hello@loginradius.com.

Q: How much you charge for this service?

A: It is FREE and will remain free, but for advanced features and customized 
solutions, 
there are various packages available. Please contact us for further 
details.

Q: Do you have a live demo site?

A: Yes, please visit our live demo site at 
http://demo.loginradius.com


## CONTACT

 Current maintainers:
 * LoginRadius - http://www.loginradius.com
 * Email: developers@loginradius.com
