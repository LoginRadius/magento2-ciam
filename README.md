# Authentication and SSO For Magento2 by LoginRadius

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
